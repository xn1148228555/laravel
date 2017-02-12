<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
 

class RegisterController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
	 
     */
	  public function index()
    { 
        return view('admin.register',compact('data'));
       // return view('admin/article/create');
    }
	  public function store(Request $request) // Laravel 的依赖注入系统会自动初始化我们需要的 Request 类
    {
        // 数据验证
        $this->validate($request, [
             'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:admins',
            'password' => 'required|min:6|confirmed',
        ]);
        // 通过 Article Model 插入一条数据进 articles 表
        $admin = new Admin; // 初始化 Article 对象
        $admin->name = $request->get('name'); // 将 POST 提交过了的 title 字段的值赋给 article 的 title 属性
        $admin->email = $request->get('email'); // 同上
		$admin->password = bcrypt($request->get('password')); // 同上
    
        
        // 将数据保存到数据库，通过判断保存结果，控制页面进行不同跳转
        if ($admin->save()) {
            return redirect('admin/article'); // 保存成功，跳转到 文章管理 页
        } else {
            // 保存失败，跳回来路页面，保留用户的输入，并给出提示
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
	
	
    
}
