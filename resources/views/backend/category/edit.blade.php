@extends('backend.layouts.default')


@section('content')		


    <div class="header">
        <h1 class="page-title">栏目管理</h1>
    </div>  
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.category') }}">栏目管理</a> <span class="divider">/</span></li>
        <li class="active">编辑栏目</li>
    </ul>
    <div class="container-fluid">
        <div class="row-fluid">
			<div class="well">
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane active in" id="home">
			      	<?php //var_dump($data);die; ?>
			    	<form id="tab" action="{{ route('admin.category.store') }}" method="post">
			    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <label>栏目分类</label>
				        <select name="pid" id="DropDownTimezone" class="span10">
					        <option value="0">一级栏目</option>

					        @foreach($data as $vo)
					        <option value="<?php echo $vo['id'] ?>"><?php echo $vo['name']; ?></option>
					        @endforeach
					    </select>
				        <label>栏目名称</label>
				        <input type="text" value="" name="name" class="span10">
				        <label>栏目标识</label>
				        <input type="text" value="" name="mark" class="span10">
				        <label>栏目描述</label>
						<textarea value="" name="description" rows="8" class="span10">	
				        </textarea>
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