<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class ModifController extends Controller
{
   

    /**
     * 修改密码
     * @param Request $request
     * @return $this
     */
    public function modify(Request $request)
    {
        if ($request->isMethod('get')) {
           // dd(session()->all());

            return view('admin/modify');
        }

        // 验证输入字段
        $validator = Validator::make($request->all(), [
            'credential' => 'required|between:6,20|confirmed',
        ], [
            'credential.required' => '新密码不能为空!',
            'credential.between' => '新密码必须在6-20位之间',
            'credential.confirmed' => '新密码和确认密码不一致',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // 判断当前Session里的用户是否还有效
        // $user = Session::get('user');
        // if (! isset($user)) {
        return redirect()->url('admin/login')->with('errors', '登录超时');
        // }

        // 查询用户权限表,修改密码
        $admins = Admin::where('user_id', $user->id)
            ->whereIn('identity_type', ['username', 'email', 'mobile'])
            ->get();

        if (count($userAuths) && Hash::check($request->credential_o, $userAuths[0]->credential)) {
            UserAuth::where('user_id', $user->id)
                ->whereIn('identity_type', ['username', 'email', 'mobile'])
                ->update(['credential' => bcrypt($request->credential)]);

            return back()->with('errors', '修改密码成功!');
        }

        return back()->with('errors', '原密码错误!');
    }
}