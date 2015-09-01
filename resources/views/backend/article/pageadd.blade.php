@extends('backend.layouts.default')


@section('content')	


<script type="text/javascript" src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
    window.onload = function()
    {
        CKEDITOR.replace( 'content' );     //content是textarea的名称
    };
</script>	



    <div class="header">
        <h1 class="page-title">内容管理</h1>
    </div>  
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.article') }}">内容管理</a> <span class="divider">/</span></li>
        <li class="active">添加单页内容</li>
    </ul>
    <div class="container-fluid">
        <div class="row-fluid">
			<div class="well">
			    <div id="myTabContent" class="tab-content">
			      <div class="tab-pane active in" id="home">

			    	<form id="tab" action="{{ route('admin.article.pagestore') }}" method="post" enctype="multipart/form-data">
				       	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <label>单页内容标题:</label>
				        <input type="text" value="" name="title" class="span8" required="true" >
				        <label>单页内容分类:</label>
				        <select name="category_id" id="">
							@foreach($data as $vo)
				        	<option value="<?php echo $vo['id'] ?>">{{ $vo['name'] }}</option>
				        	@endforeach
				        </select>
				        <label>缩略图:</label>
				        <input type="file" name="thumb" class="btn btn-default">
				        <label>单页内容描述:</label>
						<textarea value="" name="description" rows="5" class="span8" required="true">	
				        </textarea>
				        <label>单页内容详情:</label>
						<textarea value="" name="content" class="span8" required="true">	
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