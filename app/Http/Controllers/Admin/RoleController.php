<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Role;
use App\Http\Requests;

use Illuminate\Support\Facades\Config;

class RoleController extends AdminController
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /*验证规则*/
    protected $validateRules = [
        'name' => 'required|max:128',
        'description' => 'sometimes|max:255',
    ];

    /**
     * 管理列表
     */
    public function index()
    {
        return view('admin.role.index')->withRoles(Role::all());
    }

    /**
     * 显示添加页面
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * 添加表单处理
     */
    public function store(Request $request)
    {
        // 数据验证
        $this->validate($request, [
            'name' => 'required|max:255', // 必填、在 comments 表中唯一、最大长度 255
            'slug' => 'required', // 必填
        ]);
        // 通过 comment Model 插入一条数据进 comments 表
        $role = new Role(); // 初始化 comment 对象
        $role->name = $request->get('name'); // 将 POST 提交过了的 title 字段的值赋给 comment 的 title 属性
        $role->slug = $request->get('slug'); // 同上

        $role->description = $request->get('description'); // 同上
        //$permission->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 comment 的 user_id 属性

        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($role->save()) {
            return redirect('admin/role');// 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }


    }

    /**
     * 显示编辑页面
     */
    public function edit($id)
    {
        $role = Role::find($id);
        if(!$role){
            return $this->error(route('admin.role.index'),'权限不存在，请核实');
        }
        /*获取角色已有权限*/
        $role_permission_ids = $role->permissions()->get()->map(function($role_permission){
            return $role_permission->id;
        });

        $permission['admin'] = Permission::where('slug','like','admin.%')->orderBy('name', 'asc')->get();
        return view('admin.role.edit')->with('role',$role)->with('permission',$permission)->with('role_permission_ids',$role_permission_ids);
    }

    /**
     * 修改角色信息
     */
    public function update(Request $request, $id)
    {
        $request->flash();
        $role = Role::find($id);
        if(!$role){
            return $this->error(route('admin.role.index'),'角色不存在，请核实');
        }
        $this->validateRules['slug'] = 'required|max:150|unique:roles,slug,'.$role->id;
        $this->validate($request,$this->validateRules);
        $role->name = $request->input('name');
        $role->slug = $request->input('slug');
        $role->description = $request->input('description');
        $role->save();
        return $this->success(route('admin.role.index'),'角色修改成功');
    }


    /**
     * 权限设置
     */
    public function permission(Request $request){
        $role = Role::find($request->input('id'));
        $role->detachAllPermissions();
        $permissions = $request->input('permissions',array());
        foreach($permissions as $permission){
            $role->attachPermission($permission);
        }
        return $this->success(route('admin.role.index'),'角色权限设置成功');

    }


    /**
     * 删除某个角色
     */
    public function destroy(Request $request)
    {

    }
}
