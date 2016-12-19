<h2><?php if(isset($title)) { echo $title; } else {echo "The Title";}?></h2>

{!! Form::open(['url' => 'login']) !!}
{{Form::bsEmail('email', 'Email Address')}}
{{Form::bsPassword('password')}}
<div class="form-group">
{{Form::checkbox('remember')}}

{{Form::label('remember', "Remember Me")}}
</div>
{{Form::submit('Log In', ['class'=>'btn btn-warning'])}}
{!! Form::close() !!}