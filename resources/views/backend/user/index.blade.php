@extends('backend.layouts.default')

@section('content')

  <div class="header">

    <h1 class="page-title">用户设置</h1>
  </div>

  <ul class="breadcrumb">
    <li><a href="{{ Route('admin.user') }}">用户设置</a> <span class="divider">/</span></li>
    <li class="active">用户管理</li>
  </ul>

<div class="container-fluid">
<div class="row-fluid">
                
<div class="btn-toolbar">
  <a href="{{ route('admin.user.add') }}" class="btn btn-primary"><i class="icon-plus"></i>添加用户</a>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>用户名</th>
          <th>邮箱</th>
          <th>用户权限</th>
          <th style="width: 150px;"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $vo)
        <tr>
          <td>{{ $vo->id }}</td>
          <td>{{ $vo->username }}</td>
          <td>{{ $vo->email }}</td>
          <td>
              @if ($vo->authority == 1)
                  超级管理员
              @elseif ($vo->authority == 0)
                  不同管理员
              @else
                  编辑人员
              @endif
          </td>
          <td>
              <a href="{{ route('admin.user.edit') }}"><i class="icon-pencil"></i>编辑</a>
              <a href="{{ route('admin.user.delete') }}" role="button" data-toggle="modal"><i class="icon-remove"></i>删除</a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
</div>

@stop