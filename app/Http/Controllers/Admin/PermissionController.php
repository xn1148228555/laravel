<?php

namespace App\Http\Controllers\Admin;
 
use Illuminate\Http\Request;
use App\Permission;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    /*权限验证规则*/
    protected $validateRules = [
        'name' => 'required|max:128',
        'model' => 'sometimes|max:128',
        'description' => 'sometimes|max:255',
    ];

    /**
     * 权限列表显示
     */
    public function index()
    {
       // $word = $request->input("word",'');
         
       //$permissions = Permission::where('name','like',"%$word%")->paginate(Config::get('tipask.admin.page_size'));
		 return view('admin.permission.index')->withPermissions(Permission::all());
		 // return view('admin.permission.index')->with('permissions',$permissions)->with('word',$word);
    }

 /**
     * 显示权限创建页面
     */
    public function create()
    {
        return view('admin.permission.create');
    }
	
	
	/**
     * 保存权限创建表单数据
     */
    public function store(Request $request)
    { 
		// 数据验证
        $this->validate($request, [
            'name' => 'required|max:255', // 必填、在 comments 表中唯一、最大长度 255
            'slug' => 'required', // 必填
        ]);
        // 通过 comment Model 插入一条数据进 comments 表
        $permissions = new permission; // 初始化 comment 对象
        $permissions->name = $request->get('name'); // 将 POST 提交过了的 title 字段的值赋给 comment 的 title 属性
        $permissions->slug = $request->get('slug'); // 同上
		 $permissions->model = $request->get('model'); // 同上
		  $permissions->description = $request->get('description'); // 同上
        //$permission->user_id = $request->user()->id; // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 comment 的 user_id 属性
        
        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($permissions->save()) {
           return redirect('admin/permission');// 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
		
		
    }

/**
     * 显示权限编辑页面
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        if(!$permission){
            return $this->error(url('admin/permission'),'权限不存在，请核实');
        }
        return view('admin/permission/edit')->with('permission',$permission);
    }
	
	
	  /**
     * 保存编辑表单数据
     */
    public function update(Request $request, $id)
    {
        $request->flash();
        $permission = Permission::find($id);
        if(!$permission){
           return $this->error(url('admin/permission'),'权限不存在，请核实');
        }
        $this->validateRules['slug'] = 'required|max:150|unique:permissions,slug,'.$permission->id;
        $this->validate($request,$this->validateRules);
        $permission->name = $request->input('name');
        $permission->slug = $request->input('slug');
        $permission->model = $request->input('model');
        $permission->description = $request->input('description');
        $permission->save();
        return redirect('admin/permission');
    }
    
}
