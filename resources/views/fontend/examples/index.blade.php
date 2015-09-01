@extends('fontend.layouts.default')
<style>
		#content li{display:block;float:left;}
</style>

@section('content')
      <?php //var_dump($data);// die;?>
        <!-- insert the page content here -->
        @foreach($data as $vo)
	        <div ><img src="{{ $vo->thumb }}" style="width:50px;height:50px;"></div>
	        <h1>{{ $vo->title }}</h1>
	        <p>{{ $vo->description }}</p>
	        <p>{{ $vo->content }}</p>
        @endforeach
	

		<?php echo $data->render(); ?>

	

@stop
