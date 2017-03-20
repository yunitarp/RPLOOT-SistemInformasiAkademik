@extends('dosen.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Registerasi</li>
        <li class="active">Jadwal Mengajar</li>
      </ol>
    </section>
     <!-- Main Content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jadwal Dosen</h3>
            </div>
            <div class="box-header"><a href="{{url('dosen/registerasi/printjadwaldosen')}}"><button class="pull-left">Print</button></a></div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>Kelas</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Ruangan</th>
                </tr>
                </thead>
                <tbody>
                @foreach($jadwal as $isi)
                <tr>
                  <td>{{$isi['matakuliah']->kode_matakuliah}}</td>
                  <td>{{$isi['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['kelas']->kode_kelas}}
                  <td>{{$isi['hari']}}</td>
                  <td>{{$isi['jam']}}</td>
                  <td>{{$isi['ruangan']->nama_ruangan}}</td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Kode Matakuliah</th>
                  <th>Nama Matakuliah</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Ruangan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
     <!-- end section -->
@endsection

@section('js')
<!-- DataTables -->
<script src="{{url('impal')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection