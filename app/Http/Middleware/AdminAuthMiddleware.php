<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->guest('admin/login');
            }
        }
        return $next($request);
    }
	
	/*未分表的多用户登录public function handle($request, Closure $next)
{
    if (!Auth::check()) {
        return Redirect::route('login');
    } else {
        if (!Auth::user()->is_admin) {
            session()->flash('message_warning', '您不是管理员！无法进入相关区域');
            return Redirect::route('stu_home');
        }
    }
    return $next($request);
	}*/

}