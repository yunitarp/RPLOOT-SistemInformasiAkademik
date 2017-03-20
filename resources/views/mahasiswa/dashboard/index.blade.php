@extends('mahasiswa.base')
@section('content')
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header"> <h1>SELAMAT DATANG</h1></div>
        </div>
      </div>
      </div>
    <!-- /.content -->
    @endsection

@section('js')

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('impal')}}/dist/js/pages/dashboard.js"></script>

@endsection