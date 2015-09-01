<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0" />
<title>锁屏</title>
<style>.seat{margin: 200px 0 0;}</style>

<link rel="stylesheet" href="{{ asset('backend/lib/bootstrap/css/bootstrap.min.css') }}" />

</head>
<body>

<div class="container">
	<?php //var_dump($_SESSION['username']);die; ?>
	<div class="seat">
		<form class="form-horizontal" action="{{ route('admin.unlock') }}" method="post">
			<h2 class="form-signin-heading" style="padding: 0 130px 0;">输入口令解锁</h2>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="username" value="{{ $_SESSION['username'] }}">
		  	<div class="control-group">
	    		<label class="control-label" for="inputPassword">口令</label>
		    	<div class="controls">
		      		<input type="password" name="password" placeholder="请输入口令">
		    	</div>
		  	</div>
		  	<div class="control-group">
		    	<div class="controls">
		      		<button type="submit" class="btn btn-primary">解锁</button>
		    	</div>
		  	</div>
		</form>	
	</div>
</div>


</body>

</html>