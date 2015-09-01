@extends('backend.layouts.default')

@section('content')

  <div class="header">
    <h1 class="page-title">内容管理</h1>
  </div>

  <ul class="breadcrumb">
    <li><a href="{{ Route('admin.article') }}">内容管理</a> <span class="divider">/</span></li>
    <li class="active">单页内容列表</li>
  </ul>

<div class="container-fluid">
<div class="row-fluid">
<div class="well">

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>内容名称</th>
          <th>内容描述</th>
          <th>创建时间</th>
          <th>修改时间</th>
          <th style="width: 130px;">操作管理</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $vo)
        <?php //var_dump($vo);die; ?>
        <tr>
          <td>{{ $vo->id }}</td>
          <td>{{ $vo->title }}</td>
          <td>{{ $vo->description }}</td>
          <td>{{ $vo->created_at }}</td>
          <td>{{ $vo->updated_at }}</td>
          <td>
              <a href="{{ route('admin.article.edit') }}"><i class="icon-pencil"></i>编辑</a>
              <a href="{{ route('admin.article.delete',['id'=>$vo->id]) }}" role="button" data-toggle="modal"><i class="icon-remove"></i>删除</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>
<?php echo $data->render(); ?>
@stop