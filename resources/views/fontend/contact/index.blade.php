@extends('fontend.layouts.default')


@section('content')

        <!-- insert the page content here -->
        <h1>联系我们</h1>
        <p></p>
        <form action="{{ route('fontend_contact.form') }}" method="post">

          <div class="form_settings">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p><span>姓名</span><input class="contact" type="text" name="name" value=""  required="" /></p>
            <p><span>邮箱</span><input class="contact" type="email" name="email" value=""  required=""/></p>
            <p><span>留言内容</span><textarea class="contact textarea"  required="required" rows="8" cols="50" name="content"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="submit" /></p>
          </div>
          
        </form>
        
@stop        