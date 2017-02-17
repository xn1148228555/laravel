<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    public function index()
    {
        $users = \DB::table('users')
            ->orderBy('id', 'desc')

            ->groupBy('id')
            ->paginate(25);
        return view('admin/user/index',['users'=>$users]);

        //return view('admin/user/index')->withUsers(User::all());
    }

    public function create()
    {$data = (new Category)->tree();
        return view('admin.user.create',compact('data'));
        // return view('admin/article/create');
    }

    public function edit($id)
    {
        return view('admin/user/edit')->withUser(User::find($id));
    }
    public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        // 数据验证
        $this->validate($request, [
            'username' => 'required|unique:users|max:255', // 必填、在 articles 表中唯一、最大长度 255
            'email' => 'required', // 必填
        ]);
        // 通过 Article Model 插入一条数据进 articles 表
        $user = new User(); // 初始化 Article 对象
        $user->username = $request->get('username'); // 将 POST 提交过了的 title 字段的值赋给 article 的 title 属性
        $user->email = $request->get('email'); // 同上

       // 获取当前 Auth 系统中注册的用户，并将其 id 赋给 article 的 user_id 属性

        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($user->save()) {
            return redirect('admin/user'); // 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'username' => 'required|unique:users,name,'.$id.'|max:255',
            'email' => 'required',
        ]);
        $user  = User::find($id);
        $user ->name = $request->get('username');
        $user ->email = $request->get('email');

        if ($user->save()) {
            return redirect('admin/user');
        } else {
            return redirect()->back()->withInput()->withErrors('更新失败！');
        }
    }
    public function destroy($id)
    {
      User::find($id)->delete();
        return redirect()->back()->withInput()->withErrors('删除成功！');
    }
}