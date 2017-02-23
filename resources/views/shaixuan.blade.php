<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>分类筛选</title>
    <style type="text/css">
        body{font-size:12px;font-family:"宋体";}
        #form{line-height:24px;}
        #form a{text-decoration:none;color:#333;border:1px solid #fff;padding:4px 6px;outline:none;}
        #form a:hover{background:#FFFF68;border:1px solid #FF9D6F;}
        #form .current{background:#FFFF68;}
    </style>
    <script type="text/javascript">
        function Filter(field,value){
            var $ = function(ele){return document.getElementById(ele);}
            var ipts = $('filterForm').getElementsByTagName('input'),result=[];
            for(var i=0,l=ipts.length;i<l;i++){
                if(ipts[i].getAttribute('to')=='filter'){
                    result.push(ipts[i]);
                }
            }
            if($(field)){
                value = value || '';
                $(field).value = value;
                for(var j=0,len=result.length;j<len;j++){
                    if(result[j].value==''){
                        result[j].parentNode.removeChild(result[j]);
                    }
                }
                document.forms['filterForm'].submit();
            }
            return false;
        }
    </script>
</head>
<body>
<?php
// Debug: 输出提交的数据
//var_dump($_GET);

// 要进行筛选的字段
$fields = array('price','color','metal');
// 把上一次已筛选的值保存在Form的隐藏域中
foreach($fields as $f){
    if(isset($_GET[$f])){
        $fitervalue[$f] = $_GET[$f];
    }
}
?>
<div id='form'>
    <!-----这里是关键: 要把上一次筛选的值保存起来----->
    <form id="filterForm" action="/shaixuan" method="get">
        <input to="filter" type="hidden" id="price" name="price" value="<?php echo $fitervalue['price']; ?>" />
        <input to="filter" type="hidden" id="color" name="color" value="<?php echo $fitervalue['color']; ?>" />
        <input to="filter" type="hidden" id="metal" name="metal" value="<?php echo $fitervalue['metal']; ?>" />
    </form>

    价格：
    <a href="javascript:Filter('price','all');" class="<?php if(!$_GET['price']){echo 'current';} ?>">全部</a>
    <a href="javascript:Filter('price','100-999');" class="<?php if($_GET['price']=='100-999'){echo 'current';} ?>">100-999</a>
    <a href="javascript:Filter('price','1000-1999');" class="<?php if($_GET['price']=='1000-1999'){echo 'current';} ?>">1000-1999</a>
    <a href="javascript:Filter('price','2000-2999');" class="<?php if($_GET['price']=='2000-2999'){echo 'current';} ?>">2000-2999</a>
    <br/>
    颜色：
    <a href="javascript:Filter('color','all');" class="<?php if(!$_GET['color']){echo 'current';} ?>">全部</a>
    <a href="javascript:Filter('color','红色');" class="<?php if($_GET['color']=='红色'){echo 'current';} ?>">红色</a>
    <a href="javascript:Filter('color','蓝色');" class="<?php if($_GET['color']=='蓝色'){echo 'current';} ?>">蓝色</a>
    <br />
    材质：
    <a href="javascript:Filter('metal','all')" class="<?php if($_GET['metal']=='all'){echo 'current';} ?>">全部</a>
    <a href="javascript:Filter('metal','纯金');" class="<?php if($_GET['metal']=='纯金'){echo 'current';} ?>">纯金</a>
    <a href="javascript:Filter('metal','纯银');" class="<?php if($_GET['metal']=='纯银'){echo 'current';} ?>">纯银</a>
    <br />
</div>

</body>
</html>  