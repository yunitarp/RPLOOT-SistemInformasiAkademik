@extends('admin.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')
	 <section class="content-header">
      <h1>
        Data Matakuliah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Kelola Prodi</li>
        <li class="active">Ubah Prodi</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><!--Responsive Hover Table--></h3>

              
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="table_matakuliah">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Matakuliah</th>
                  <th>Nama Nama Matakuliah</th>
                  <th>SKS</th>
                  <th>Tingkat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($matakuliah as $isi)
                <tr>
                  <td>{{$isi['id']}}</td>
                  <td>{{$isi['kode_matakuliah']}}</td>
                  <td>{{$isi['nama_matakuliah']}}</td>
                  <td>{{$isi['sks']}}</td>
                  <td>{{$isi['tingkat']}}</td>
                  <td>
                      <div class="btn-group" class="col-sm-2">
                        <button type="button" class="btn btn-info">Ubah</button>
                      </div>
                      <div class="btn-group" class="col-sm-2">
                        <button type="button" class="btn btn-danger">Hapus</button>
                      </div>
                   </td>
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
  $('#table_matakuliah').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
</script>
@endsection