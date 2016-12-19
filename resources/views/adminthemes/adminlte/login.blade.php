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
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-sign-in"></i>

              <h3 class="box-title">Login</h3>

            <div class="box-body chat" id="chat-box">
              <!-- chat item -->
              {!! Form::open(['url' => 'foo/bar']) !!}
                  {{Form::bsText('email','Email')}}
                  {{Form::bsPassword('password', 'Password')}}
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