<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\Article;

class AdminController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
   public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $totalUserNum = User::count();
        $systemInfo = $this->getSystemInfo();
        $totalArticleNum = Article::count();
        // dd('后台首页，当前用户名：'.auth('admin')->user()->name);
		 return view('admin/index')->with(compact('totalUserNum','totalArticleNum','systemInfo'));
    }


  


    private function getSystemInfo()
    {
        $systemInfo['phpVersion'] = PHP_VERSION;
        $systemInfo['runOS'] = PHP_OS;
        $systemInfo['maxUploadSize'] = ini_get('upload_max_filesize');
        $systemInfo['maxExecutionTime'] = ini_get('max_execution_time');
        $systemInfo['hostName'] = '';
        if(isset($_SERVER['SERVER_NAME'])){
            $systemInfo['hostName'] .= $_SERVER['SERVER_NAME'].' / ';
        }
        if(isset($_SERVER['SERVER_ADDR'])){
            $systemInfo['hostName'] .= $_SERVER['SERVER_ADDR'].' / ';
        }
        if(isset($_SERVER['SERVER_PORT'])){
            $systemInfo['hostName'] .= $_SERVER['SERVER_PORT'];
        }
        $systemInfo['serverInfo'] = '';
        if(isset($_SERVER['SERVER_SOFTWARE'])){
            $systemInfo['serverInfo'] = $_SERVER['SERVER_SOFTWARE'];
        }
        return $systemInfo;
    }
	 
}