<!DOCTYPE HTML>
<html>

<head>
  <title>博客-laravel</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" href="{{ asset('fontend/css/style.css') }}" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">laravel<span class="logo_colour">博客</span></a></h1>
          <h2>laravel 简单搭建的博客</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="{{ route('fontend_index') }}">首页</a></li>
          <li><a href="{{ route('fontend_examples') }}">博文列表</a></li>
          <li><a href="{{ route('fontend_page') }}">单页面</a></li>
          <li><a href="{{ route('fontend_otherpage') }}">单一页面</a></li>
          <li><a href="{{ route('fontend_contact') }}">留言反馈</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!--搜索-->
        <h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" placeholder="请输入关键字....." value="" />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="{{ asset('fontend/css/search.png') }}" alt="Search" title="Search" />
          </p>
        </form>
        <!-- insert your sidebar items here -->
        <h3>最新新闻</h3>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
      </div>
      <div id="content">
      		@yield('content')
  
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; colour_blue | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>  download from  <a href="http://www.mianfeimoban.com.com/">mianfeimoban.com</a>
    </div>
  </div>
</body>
</html>
