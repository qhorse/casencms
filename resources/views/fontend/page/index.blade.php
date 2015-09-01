	
@extends('fontend.layouts.default')


@section('content')

        <!-- insert the page content here -->
        <?php $vo = $data[0]; //var_dump($vo);die; ?>
        <h1>{{ $vo->title }}</h1>
        <p>{{ strip_tags($vo->content) }}</p>
@stop