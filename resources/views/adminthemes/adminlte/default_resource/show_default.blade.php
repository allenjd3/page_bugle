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
        <li><a href="/"><i class="fa fa-asterisk"></i> Home</a></li>
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

              <h3 class="box-title">Default Page</h3>

            <div class="box-body default" id="default-box">
              @if(null !== $default_page)
                {{$default_page->default_table}}
                <a href="edit" class="btn btn-warning">Edit</a>
                {!!Form::open(['url'=>'my/path', 'method'=>'delete'])!!}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}

              @else
                {{"There are no pages that match that ID!"}}

              @endif
            </div>
            <!-- /.chat -->
            
          </div>
          <!-- /.box (chat box) -->

          

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection