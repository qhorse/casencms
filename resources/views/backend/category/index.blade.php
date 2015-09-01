@extends('backend.layouts.default')


@section('content')

  <div class="header">

    <h1 class="page-title">栏目管理</h1>
  </div>

  <ul class="breadcrumb">
    <li><a href="{{ route('admin.category') }}">栏目管理</a> <span class="divider">/</span></li>
    <li class="active">栏目列表</li>
  </ul>

<div class="container-fluid">
<div class="row-fluid">
<div class="btn-toolbar">
  <a href="{{ route('admin.category.add') }}" class="btn btn-primary"><i class="icon-plus"></i>添加栏目</a>
  <div class="btn-group">
  </div>
</div>
<div class="well">
<?php //var_dump($data);die; ?>
    <table class="table">
    <?php if(!empty($data)): ?>
      <thead>
        <tr>
          <th>ID</th>
          <th>栏目结构</th>
          <th style="width: 150px;">操作管理</th>
        </tr>
      </thead>
      <tbody>
         <?php foreach ($data as $vo): ?>
              <tr>
                <td><?php echo $vo['id']; ?></td>
                <td><?php echo $vo['name']; ?></td> 
                <td>
  
                    <a href="{{ route('admin.category.edit',['id'=>$vo['id']]) }}"><i class="icon-pencil"></i>编辑</a>

                    <a href="{{ route('admin.category.delete', $vo['id']) }}" role="button" data-toggle="modal"><i class="icon-remove"></i>删除</a>
                
                </td>
              </tr>
          <?php endforeach; ?>
      </tbody>
    <?php else: ?>
      <thead>
        <tr>
          <th>ID</th>
          <th>栏目结构</th>
          <th style="width: 150px;">操作管理</th>
        </tr>
      </thead>
      <tbody>
          <tr>
            <td><span>暂无栏目</span></td>
            <td></td>
            <td></td>
          </tr>
      </tbody>
      <?php endif; ?>
    </table>
</div>

@stop