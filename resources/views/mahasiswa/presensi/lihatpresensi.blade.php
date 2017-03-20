@extends('mahasiswa.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Presensi Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Presensi</li>
        <li class="active">Lihat Presensi</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><!--Responsive Hover Table--></h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="table_nilai">
              <thead>
                <tr>
                  <th>Matakuliah</th>
                  <th>Tanggal</th>
                  <th>Status</th>
                </tr>
               </thead>
               <tbody>
               @foreach($presensi as $isi)
                <tr>
                  <td>{{$isi['jadwal']['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['tanggal']}}</td>
                  <td>{{$isi['status']}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection
@section('js')

<!-- DataTables -->
<script src="{{url('impal')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $('#table_nilai').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
</script>
@endsection