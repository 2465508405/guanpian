<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>layui后台管理模板</title>
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Access-Control-Allow-Origin" content="*">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="format-detection" content="telephone=no">
	<link rel="icon" href="favicon.ico">
	<link rel="stylesheet" href="layui/css/layui.css" media="all" />
	<link rel="stylesheet" href="/css/font_eolqem241z66flxr.css" media="all" />
	<link rel="stylesheet" href="css/main.css" media="all" />
</head>
<body class="main_body">
	<div class="layui-layout layui-layout-admin">
		<!-- 顶部 -->
		<div class="layui-header header">
			<div class="layui-main">
				<a href="#" class="logo">layui后台管理</a>
				<!-- 搜索 -->
				<div class="layui-form component">
			        <select name="modules" lay-verify="required" lay-search="">
						<option value="">直接选择或搜索选择</option>
						<option value="1">layer</option>
						<option value="2">form</option>
						<option value="3">layim</option>
						<option value="4">element</option>
						<option value="5">laytpl</option>
						<option value="6">upload</option>
						<option value="7">laydate</option>
						<option value="8">laypage</option>
						<option value="9">flow</option>
						<option value="10">util</option>
						<option value="11">code</option>
						<option value="12">tree</option>
						<option value="13">layedit</option>
						<option value="14">nav</option>
						<option value="15">tab</option>
						<option value="16">table</option>
						<option value="17">select</option>
						<option value="18">checkbox</option>
						<option value="19">switch</option>
						<option value="20">radio</option>
			        </select>
			        <i class="layui-icon">&#xe615;</i>
			    </div>
			    <!-- 天气信息 -->
			    <div class="weather" pc>
			    	<div id="tp-weather-widget"></div>
					<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
					<script>tpwidget("init", {
					    "flavor": "slim",
					    "location": "WX4FBXXFKE4F",
					    "geolocation": "disabled",
					    "language": "zh-chs",
					    "unit": "c",
					    "theme": "chameleon",
					    "container": "tp-weather-widget",
					    "bubble": "disabled",
					    "alarmType": "badge",
					    "color": "#FFFFFF",
					    "uid": "U9EC08A15F",
					    "hash": "14dff75e7253d3a8b9727522759f3455"
					});
					tpwidget("show");</script>
			    </div>
			    <!-- 顶部右侧菜单 -->
			    <ul class="layui-nav top_menu">
			    	<li class="layui-nav-item showNotice" id="showNotice" pc>
						<a href="javascript:;"><i class="iconfont icon-gonggao"></i><cite>系统公告</cite></a>
					</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>设置</cite></a>
			    	</li>
			    	<li class="layui-nav-item" mobile>
			    		<a href="javascript:;"><i class="iconfont icon-loginout"></i> 退出</a>
			    	</li>
					<li class="layui-nav-item lockcms" pc>
						<a href="javascript:;"><i class="iconfont icon-lock1"></i><cite>锁屏</cite></a>
					</li>
					<li class="layui-nav-item" pc>
						<a href="javascript:;">
							<img src="images/face.jpg" class="layui-circle" width="35" height="35">
							<cite>请叫我马哥</cite>
						</a>
						<dl class="layui-nav-child">
							<dd><a href="javascript:;" data-url="page/user/userInfo.html"><i class="iconfont icon-zhanghu" data-icon="icon-zhanghu"></i><cite>个人资料</cite></a></dd>
							<dd><a href="javascript:;" data-url="page/user/changePwd.html"><i class="iconfont icon-shezhi1" data-icon="icon-shezhi1"></i><cite>修改密码</cite></a></dd>
							<dd><a href="javascript:;"><i class="iconfont icon-loginout"></i><cite>退出</cite></a></dd>
						</dl>
					</li>
				</ul>
			</div>
		</div>
		<!-- 左侧导航 -->
		<div class="layui-side layui-bg-black">
			<div class="user-photo">
				<a class="img" title="我的头像" ><img src="images/face.jpg"></a>
				<p>你好！<span class="userName">请叫我马哥</span>, 欢迎登录</p>
			</div>
			<div class="navBar layui-side-scroll"></div>
		</div>
		<!-- 右侧内容 -->
		<div class="layui-body layui-form">
			<div class="layui-tab marg0" lay-filter="bodyTab">
				<ul class="layui-tab-title top_tab">
					<li class="layui-this" lay-id=""><i class="iconfont icon-computer"></i> <cite>后台首页</cite></li>
				</ul>
				<div class="layui-tab-content clildFrame">
					<div class="layui-tab-item layui-show">
						<iframe src="page/main.html"></iframe>
					</div>
				</div>
			</div>
		</div>
		<!-- 底部 -->
		<div class="layui-footer footer">
			<p>copyright @2017 请叫我马哥 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a>　　<a onclick="donation()" class="layui-btn layui-btn-danger l·ayui-btn-small">捐赠作者</a></p>
		</div>
	</div>

	<!-- 锁屏 -->
	<div class="admin-header-lock" id="lock-box" style="display: none;">
		<div class="admin-header-lock-img"><img src="images/face.jpg"/></div>
		<div class="admin-header-lock-name" id="lockUserName">请叫我马哥</div>
		<div class="input_btn">
			<input type="password" class="admin-header-lock-input layui-input" placeholder="请输入密码解锁.." name="lockPwd" id="lockPwd" />
			<button class="layui-btn" id="unlock">解锁</button>
		</div>
		<p>请输入“123456”，否则不会解锁成功哦！！！</p>
	</div>
	<!-- 移动导航 -->
	<div class="site-tree-mobile layui-hide"><i class="layui-icon">&#xe602;</i></div>
	<div class="site-mobile-shade"></div>

	<script type="text/javascript" src="layui/layui.js"></script>
	<script type="text/javascript" src="js/nav.js"></script>
	<script type="text/javascript" src="js/leftNav.js"></script>
	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>