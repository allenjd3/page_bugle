@extends('adminthemes.adminlte.layouts.mainAdmin')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Login
        <small>Log in Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-sign-in"></i>

              <h3 class="box-title">Login</h3>

            <div class="box-body login" id="login-box">
              <!-- chat item -->
              {!! Form::open(['url' => '/admin/login']) !!}
                {{Form::bsEmail('email', 'Email Address')}}
                {{Form::bsPassword('password', 'Password')}}
                <div class="form-group">
                {{Form::checkbox('remember')}}

                {{Form::label('remember', "Remember Me")}}
                </div>
                {{Form::submit('Login', ['class'=>'btn btn-success'])}}
              {!! Form::close() !!}
              <!-- /.item -->
            </div>
            <!-- /.chat -->
            
          </div>
          <!-- /.box (chat box) -->

          

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection