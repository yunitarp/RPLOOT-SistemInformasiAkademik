@extends('mahasiswa.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nilai Mahasiswa
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Nilai</li>
        <li class="active">Lihat Nilai</li>
      </ol>
    </section>

    <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><!--Responsive Hover Table--></h3>
              <a href="{{url('mahasiswa/printnilai')}}"><button class="pull-left">Print</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="table_nilai">
              <thead>
                <tr>
                  <th>Matakuliah</th>
                  <th>UTS</th>
                  <th>UAS</th>
                  <th>Tubes</th>
                  <th>Kuis</th>
                  <th>Tugas</th>
                  <th>Index</th>
                </tr>
               </thead>
               <tbody>
               @foreach($nilai as $isi)
                <tr>
                  <td>{{$isi['matakuliah']->nama_matakuliah}}</td>
                  <td>{{$isi['uts']}}</td>
                  <td>{{$isi['uas']}}</td>
                  <td>{{$isi['tubes']}}</td>
                  <td>{{$isi['kuis']}}</td>
                  <td>{{$isi['tugas']}}</td>
                  <?php
                    $total = ($isi['uas']*30/100 + $isi['uts']*35/100 + $isi['tubes']*20/100 + $isi['kuis']*10/100 + $isi['tugas']*5/100);
                    if($total > 80) $index = "A";
                    else if($total > 70) $index = "B";
                    else if($total > 60) $index = "C";
                    else if($total > 40) $index = "D";
                    else $index = "E";
                  ?>
                  <td>{{$index}}</td>
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