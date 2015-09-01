@extends('backend.layouts.default')


@section('content')		


    <div class="header">
        <h1 class="page-title">用户管理</h1>
    </div>  
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.user') }}">用户管理</a> <span class="divider">/</span></li>
        <li class="active">添加用户</li>
    </ul>
    <div class="container-fluid">
        <div class="row-fluid">
			<div class="well">
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane active in" id="home">
			      	
			    	<form id="tab" action="{{ route('admin.user.store') }}" method="post">
			    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        
				        <label>用户名称</label>
				        <input type="text" value="" name="username" class="span10">
				        <label>用户密码</label>
				        <input type="password" value="" name="password" class="span10">
				        <label>用户邮箱</label>
						<input type="email" value="" name="email" class="span10">
				        <label>用户权限</label>
				        <select name="authority" id="DropDownTimezone" class="span10">
					        <option value="0">普通管理员</option>
					        <option value="1">超级管理员</option>   
					    </select>
						<div class="btn-toolbar">
						    <button type="submit" class="btn btn-primary"><i class="icon-save"></i> 提交</button>
						    <button type="reset" class="btn btn-default"> 取消</button>
						</div>
		
			    	</form>
			      </div>
			    </div>
			</div>

		</div>

@stop