@extends('backend.layouts.default')


@section('content')		


    <div class="header">
        
        <h1 class="page-title">网站设置</h1>
    </div>
    
    <ul class="breadcrumb">
        <li><a href="{{ route('admin.site') }}">网站设置</a> <span class="divider">/</span></li>
        <li class="active">基本设置</li>
    </ul>

    <div class="container-fluid">
        <div class="row-fluid">
        	<div class="well">
			    <ul class="nav nav-tabs">
			      <li class="active"><a href="#home" data-toggle="tab">基本设置</a></li>
			      <li><a href="#profile" data-toggle="tab">SEO设置</a></li>
			    </ul>
			    <?php $vo = $data[0]; //var_dump($vo);die; ?>
				<form action="{{ route('admin.site.save') }}" method="post">
					<div id="myTabContent" class="tab-content">
					    <div class="tab-pane active in" id="home">
							<div id="tab">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
						        <label>网站域名</label>
						        <input type="text" value="{{ $vo->domain }}" name="domain" class="span10" required="required">
						        <label>热线电话</label>
						        <input type="text" value="{{ $vo->hottel }}" name="hottel" class="span10">
						        <label>联系地址</label>
						        <input type="text" value="{{ $vo->address }}" name="address" class="span10">
							</div>
					    </div>
				      	<div class="tab-pane fade" id="profile">
						    <div id="tab2">
						        <input type="hidden" name="_token" value="{{ csrf_token() }}">
						        <label>站点标题</label>
						        <input type="text" value="{{ $vo->seo_title }}" name="title" class="span10" required="required">
						        <label>站点关键字</label>
						        <input type="text" value="{{ $vo->seo_keyword }}" name="keyword" class="span10" required="required">
						        <label>站点描述</label>
						        <textarea value="" name="description" rows="8" class="span10" required="required">
						        {{ $vo->seo_description }}</textarea>
						        <div class="btn-toolbar">
								    <button type="submit" class="btn btn-primary"><i class="icon-save"></i> 提交</button>
								    <button type="reset" class="btn btn-default"> 取消</button>
								</div>
						    </div>
				      	</div> 
				  	</div>
			  	</form>
			</div>
		</div>
	</div>
@stop