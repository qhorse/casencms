@extends('backend.layouts.default')


@section('content')

  <div class="header">

    <h1 class="page-title">其他管理</h1>
  </div>
  
  <ul class="breadcrumb">
    <li><a href="{{ Route('admin.message') }}">其他管理</a> <span class="divider">/</span></li>
    <li class="active">留言管理</li>
  </ul>

<div class="container-fluid">
<div class="row-fluid">
<div class="well">

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>留言人姓名</th>
          <th>留言人邮箱</th>
          <th>留言内容</th>
          <th>创建时间</th>
          <th>修改时间</th>
          <th style="width: 130px;">操作管理</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $vo)

        <tr>
          <td>{{ $vo->id }}</td>
          <td>{{ $vo->name }}</td>
          <td>{{ $vo->email }}</td>
          <td>{{ $vo->content }}</td>
          <td>{{ $vo->created_at }}</td>
          <td>{{ $vo->updated_at }}</td>
          <td>
              <a href=""><i class="icon-pencil"></i>编辑</a>
              <a href="" role="button" data-toggle="modal"><i class="icon-remove"></i>删除</a>
          </td>
        </tr>
        @endforeach
		
      </tbody>
    </table>

</div>

	<?php echo $data->render(); ?>

@stop