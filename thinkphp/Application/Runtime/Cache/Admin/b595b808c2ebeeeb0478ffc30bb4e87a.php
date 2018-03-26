<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!-- <link rel="Bookmark" href="/Public/Admin/page/favicon.ico" > -->
<!-- <link rel="Shortcut Icon" href="/Public/Admin/page/favicon.ico" /> -->
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/page/static/admin.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>H-ui.admin v3.1</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>

<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl"> <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/Public/Admin/page/aboutHui.shtml">H-ui.admin</a> <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/Public/Admin/page/aboutHui.shtml">H-ui</a> 
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v3.1</span> 
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl _header">
					<li class="" id="band1"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont"></i> 切换账户 <i class="Hui-iconfont"></i></a>
					</li>

					<li class="" id="band2"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont"></i> 切换账户 <i class="Hui-iconfont"></i></a>
					</li>

					<li class="" id="band3"><a href="javascript:;" class="dropDown_A"><i class="Hui-iconfont"></i> 切换账户 <i class="Hui-iconfont"></i></a>
					</li>

				</ul>
			</nav>
		<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
			<ul class="cl">
				<li style="margin-right: 20px;">
					<!-- 日历 -->
					<SCRIPT type=text/javascript src="/Public/Admin/page/static/clock.js"></SCRIPT>
					<SCRIPT type=text/javascript>showcal();</SCRIPT>
        		</li>
				<li>超级管理员</li>
				<li class="dropDown dropDown_hover">
					<a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
					<ul class="dropDown-menu menu radius box-shadow">
						<li><a href="javascript:;" onClick="myselfinfo()">个人信息</a></li>
						<li><a href="#">切换账户</a></li>
						<li><a href="#">退出</a></li>
				</ul>
			</li>
			</ul>
		</nav>
	</div>
</div>
</header>


<aside class="Hui-aside">
	<div class="menu_dropdown bk_2  asideBox" id="aside1"">
		<dl id="menu-article" >
			<dt><i class="Hui-iconfont ">&#xe613;</i> 图片管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd class="selected">
				<ul>
					<li><a data-href="/Public/Admin/page/article-list.html" data-title="图片管理" href="javascript:void(0)">图片管理</a></li>
			</ul>
		</dd>
	</dl>
		
	</div>


	<div class="menu_dropdown bk_2 admin_h-ui_menu_left  asideBox" id="aside2"">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理2<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/Public/Admin/page/admin-permission.html" data-title="资讯管理" href="javascript:void(0)">资讯管理2</a></li>
				</ul>
			</dd>
		</dl>	
	</div>

	<div class="menu_dropdown bk_2  admin_h-ui_menu_left asideBox" id="aside3"">
		<dl id="menu-article">
			<dt><i class="Hui-iconfont">&#xe616;</i> 资讯管理3<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
			<dd>
				<ul>
					<li><a data-href="/Public/Admin/page/admin-list.html" data-title="资讯管理" href="javascript:void(0)">资讯管理3</a></li>
					<li><a data-href="/Public/Admin/page/member-record-download.html" data-title="资讯管理" href="javascript:void(0)">资讯管理3</a></li>
				</ul>
			</dd>
		</dl>
	</div>


</aside>


</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<script type="text/javascript" src="/Public/Admin/page/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/page/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/page/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/Public/Admin/page/static/h-ui.admin/js/H-ui.admin.js"></script> 

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/page/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>

<script>
	$(document).ready(function () {
        $('._header').on('click','li',function () {
            var id=$(this).attr("id");
            $(".admin_h-ui_header_top_color").find('a').css('color','#fff')
            $('.cl .admin_h-ui_header_top_color').removeClass('admin_h-ui_header_top_color');
            $("#"+id).addClass('admin_h-ui_header_top_color');
            $(".admin_h-ui_header_top_color").find('a').css('color','#333');
            id=id.split('band')[1];
            $('.asideBox').hide();
            var aside='#'+'aside'+id;
            $(aside).show();
            $($(aside).find('dl')[0]).find('dt').addClass('selected');
            $($(aside).find('dl')[0]).find('dd').show();
            var href=$($($(aside).find('dl')[0]).find('li')[0]).find('a').click();
        });
    })

</script>

<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="我的桌面" data-href="<?php echo U('welcome');?>">我的桌面</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" id="iframeMain" frameborder="0" src="<?php echo U('welcome');?>"></iframe>
	</div>
</div>
</section>

<div class="contextMenu" id="Huiadminmenu">
	<ul>
		<li id="closethis">关闭当前 </li>
		<li id="closeall">关闭全部 </li>
</ul>
</div>


</body>
</html>