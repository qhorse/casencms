@extends('backend.layouts.default')


@section('content')
	<div class="header">
            <h1 class="page-title">环境信息</h1>
    </div> 
	<div class="well">
	    <table class="table">
	      <thead>
	        <tr>
	          <th></th>
	          <th></th>
	          <th></th>
	          <th></th>

	        </tr>
	      </thead>
	      <tbody>
	        <tr>
	          <td>操作系统</td>
	          <td></td>
	          <td><?php echo PHP_OS; ?></td>
	          <td></td>
	     
	        </tr>
	        <tr>
	          <td>运行环境</td>
	          <td></td>
	          <td><?php echo $_SERVER['SERVER_SOFTWARE'] ?></td>
	          <td></td>
	      
	        </tr>
	        <tr>
	          <td>PHP版本</td>
	          <td></td>
	          <td><?php echo PHP_VERSION; ?> </td>
	          <td></td>
	
	        </tr>
	        <tr>
	          <td>PHP运行方式</td>
	          <td></td>
	          <td>APACHE2HANDLER</td>
	          <td></td>
	 
	        </tr>
	        <tr>
	          <td>MYSQL版本</td>
	          <td></td>
	          <td>5.6.17</td>
	          <td></td>

	        </tr>

	      </tbody>
	    </table>
	</div>
@stop