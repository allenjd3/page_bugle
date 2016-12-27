@extends('adminthemes.adminlte.layouts.mainAdmin')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <style>
      
      .the_container {
        display: flex;
        height: 100px;
        justify-content: space-around;
      }
      .the_items {
        flex-grow: 5;
      }
      .the_end_items {
        flex-grow: 1;
      }
    </style>
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
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-sign-in"></i>

              <h3 class="box-title">Default Page</h3>

            <div class="box-body default" id="default-box">
              @if(null !== $default_pages)
              @foreach($default_pages as $default_page)
              <div class="the_container">
                <div class="title the_items">{{$default_page->default_table}}</div>
                <div class="edit the_end_items"><a href="/admin/default_pages/{{$default_page->id}}/edit" class="btn btn-warning">Edit</a></div>
                <div class="delete the_end_items">
                {!!Form::open(['url'=>'/admin/default_pages/'.$default_page->id,'method'=>'delete'])!!}
                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
                </div>
              </div>
              @endforeach
              <a href="/admin/default_pages/create" class="btn btn-info">Add New</a>
              @else
                {{"You haven't created any pages yet!"}}

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