
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>CasenCMS后台管理</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/lib/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/stylesheets/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lib/font-awesome/css/font-awesome.css') }}">
 
    <script src="{{ asset('backend/lib/jquery-1.7.2.min.js') }}" type="text/javascript"></script>



    <!-- Demo page code -->

    <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="lib/html5.js"></script>
    <![endif]-->

  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->

    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">

                    <li id="fat-menu">
                        <a href="{{ route('admin.lock') }}" role="button">
                            <i class="icon-lock"></i> 锁屏
                        </a>
                    </li>
                                    
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> admin
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">个人信息</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" href="{{ route('admin.logout') }}">退出</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="{{ route('admin.index') }}"><span class="first">Casen</span> <span class="second">CMS</span></a>
        </div>
    </div>
    
    
    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header" data-toggle="collapse"><i class="icon-cog"></i>网站设置</a>
        <ul id="dashboard-menu" class="nav nav-list collapse in">
            <li><a href="{{ route('admin.site') }}">基本设置</a></li>  
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-user"></i>用户设置</a>
        <ul id="accounts-menu" class="nav nav-list collapse in">
            <li ><a href="{{ route('admin.user') }}">用户管理</a></li>
            <li ><a href="{{ route('admin.user.power') }}">权限管理</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-th"></i>栏目管理</a>
        <ul id="error-menu" class="nav nav-list collapse in">
            <li ><a href="{{ route('admin.category') }}">栏目列表</a></li>
            <li ><a href="{{ route('admin.category.add') }}">添加栏目</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-list"></i>内容管理</a>
        <ul id="legal-menu" class="nav nav-list collapse in">
            <li ><a href="{{ route('admin.article') }}">内容列表</a></li>
            <li ><a href="{{ route('admin.article.add') }}">添加内容</a></li>
            <li ><a href="{{ route('admin.article.page') }}">单页内容列表</a></li>
            <li ><a href="{{ route('admin.article.addpage') }}">添加单页内容</a></li>
        </ul>
        <a href="#other-menu" class="nav-header" data-toggle="collapse"><i class="icon-comment"></i>其他管理</a>
        <ul id="other-menu" class="nav nav-list collapse in">
            <li ><a href="{{ route('admin.message') }}">留言管理</a></li>
        </ul>
    </div>
    
    
    <div class="content">     
   		@yield('content')
    </div>
    <footer>
	    <hr>

	    <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
	    <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.mianfeimoban.com/" title="网站模板" target="_blank">网站模板</a></p>

	    <p>&copy; 2012 <a href="http://www.mianfeimoban.com/" title="网站模板" target="_blank">网站模板</a></p>
	</footer>


    <script src="{{ asset('backend/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>
    
  </body>
</html>



            