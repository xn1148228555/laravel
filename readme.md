 

## Laravel 5.4.9演示项目

  
##安装

git clone 到本地<br>
执行 composer install,创建好数据库<br>
配置 .env 中数据库连接信息,没有.env请复制.env.example命名为.env<br>
执行 php artisan key:generate<br>
执行 php artisan migrate<br>
执行 php artisan db:seed<br>
键入 '域名/admin'(后台登录)<br>
## 功能
<table>
<thead>
    <tr>
        <th>前台功能</th>
        <th>描述</th>
        <th>完成</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>文章展示</td>
        <td>查看，评论</td><td>YES</td>
    </tr>
     <tr>
        <td>会员系统</td>
        <td>前台用户登录，注册（auth）</td><td>YES</td>
    </tr>
 
    
</tbody>
</table>
<table>
<thead>
    <tr>
        <th>后台功能</th>
        <th>描述</th>
        <th>完成</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>文章管理</td>
        <td>发布，编辑，查看，删除</td>
        <td>YES</td>
    </tr>
    <tr>
        <td>编辑器</td>
        <td>集成百度ueeditor</td>
        <td>YES</td>
    </tr>
    <tr>
        <td>评论管理</td>
        <td>发布，删除</td>
        <td>YES</td>
    </tr>
    <tr>
        <td>分类管理</td>
        <td>添加，编辑，删除，统计访问，keyword，description</td>
        <td>YES</td>
    </tr>
 <tr>
        <td>后台管理</td>
        <td>添加，删除用户，后台用户分表登录（admins表）</td>
        <td>YES</td>
    </tr>     
  <tr>
        <td>passport api</td>
        <td>http://localhost/api/user/register post register<br>
http://localhost/oauth/token       post token<br>
http://localhost/api/user          get user</td>
        <td>YES</td>
    </tr>   
</tbody>
</table>
## todo list
<table>
<thead>
    <tr>
        <th>内容</th>
        <th>完成</th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>加入地址选项</td>
        <td>NO</td>
    </tr>
    <tr>
        <td>加入 Oauth2.0 接口, 完善 用户中心 概念</td>
        <td>NO</td>
    </tr>
    <tr>
        <td>加入号码短讯手机验证</td>
        <td>NO</td>
    </tr>
    <tr>
        <td>加入单元测试</td>
        <td>NO</td>
    </tr>
    <tr>
        <td>加入第三方登录</td>
        <td>NO</td>
    </tr>
</tbody>
</table>
 
 

<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/1.png ></p>
<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/2.png ></p>
<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/3.png ></p>
<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/4.png ></p>
<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/passport1.png ></p>
<p><img src=https://github.com/xiuhuai/laravel-ottcms/blob/master/help/passport1.png ></p>


## 有问题可以直接在教程下面留言

喜欢可以点击上面右侧的 Star 哦

Laravel 5 系列入门教程推荐如下文章：
 

<p>地址：https://github.com/xiuhuai/laravel-ottcms/blob/master/learn.md)</p>
</article>
  </div>
</blockquote>

 

## License

本示例项目继承自 Laravel5.4.9 采用的 MIT license，你可以利用采用该协议的代码做任何事情。
