@extends('dosen.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datepicker/datepicker3.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Presensi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Presensi</a></li>
        <li class="active">Masukan Presensi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <form class="form-horizontal " action="{{url('dosen/presensi/inputpresensi')}}" method="POST">
            <div class="box-body">
              <div class="box-body">
                <div class="form-group col-md-8">
                  	<label for="matkul" class="col-sm-2 control-label" style="text-align:left">Jadwal</label>
                    <div class="col-sm-10">
                        <select class="form-control col-sm-10" name="jadwal_id">
                          <option onclick="gantimahasiswa(0)" selected>--Pilih Kelas--</option>
                          @foreach($jadwal as $isi)
                            <option value="{{$isi['id']}}" onclick="gantimahasiswa({{$isi['kelas']->id}})">{{$isi['matakuliah']->nama_matakuliah.' | '.$isi['kelas']->kode_kelas}}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
              <div class="form-group col-md-8">
              		<label for="kodedosen" class="col-sm-2 control-label" style="text-align:left">Kode Dosen</label>
                  <div class="col-sm-2">
              		    <input class="form-control" value="{{Session::get('person')->kode_dosen}}" disabled="" type="text" name="kodedosen">
                  </div>
              </div>
              <div class="form-group col-md-8">
                <label for="tanggal" class="col-sm-2 control-label" style="text-align:left">Tanggal</label>
                <div class="col-sm-6">
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control" id="datepicker" name="tanggal">
                  </div>
                </div>
                <!-- /.input group -->
              </div>

               <div class="form-group col-md-8">
                  <label for="materi" class="col-sm-2 control-label" style="text-align:left">Materi</label>
                  <div class="col-sm-6">
                  	<textarea class="form-control col-sm-8" rows="3" placeholder="Enter ..." name="materi"></textarea>
                  </div>
                </div>
              </div>
              <!-- /.form group -->
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nomor</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Status</th>
              </tr>
              </thead>
              <tbody id="isi_table">
              </tbody>
            </table>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box-footer">
            <button type="reset" class="btn btn-default">Batal</button>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
          </div>
            </form>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
  $(function () {
  //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
  var gantimahasiswa = function(id){
    $.ajax({
      url: "{{url('dosen/pilihmahasiswa')}}",
      data: {"id":id},
      method: "POST",
      success:function(data){
        isi = "";
        data.forEach(function(content,index){
          isi += "<tr>";
          isi += "<td>"+index+"</td>"
          isi += "<td>"+content['nim']+"</td>"
          isi += "<td>"+content['nama']+"</td>"
          isi += "<td><input type='radio' name='status["+index+"]' value='hadir'>Hadir</input> "
          isi += "<input type='radio' name='status["+index+"]' value='sakit'>Sakit</input> "
          isi += "<input type='radio' name='status["+index+"]' value='alpha'>Alpha</input>"
          isi += "<input type='hidden' name='mahasiswa_id["+index+"]' value='"+content['id']+"'></input></td>";
          isi += "</tr>";
        });
        $("#isi_table").html(isi);
      }
    });
  };
</script>
@endsection