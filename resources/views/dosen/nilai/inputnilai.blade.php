@extends('dosen.base')
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('impal')}}/plugins/datatables/dataTables.bootstrap.css">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Nilai</a></li>
        <li class="active">Masukan Nilai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form class="form-horizontal" id="formnilai">
              <div class="box-body">
                <div class="form-group col-md-8">
                  <label for="matkul" class="col-sm-2 control-label" style="text-align:left">Matakuliah</label>
                  <div class="col-sm-6">
                  	<select id="matkul" class="form-control" name="matakuliah_id" onchange="gantikelas()">
                      <option value="0" selected>--Pilih Matakuliah--</option>
                      @foreach($matkul as $isi)
                      <option value="{{$isi['matakuliah']['id']}}">{{$isi['matakuliah']['nama_matakuliah']}}</option>
                      @endforeach
                  	</select>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="kodesoen" class="col-sm-2 control-label" style="text-align:left">Kode Dosen</label>
                  <div class="col-sm-6">
                  	<input class="form control col-sm-4" value="{{Session::get('person')->kode_dosen}}" disabled="" type="text">
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="kodekelas" class="col-sm-2 control-label" style="text-align:left">Kelas</label>
                  <div class="col-sm-6">
                  	<select id="kelas" class="form-control" onchange="gantimahasiswa()">
                  	</select>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="mahasiswa" class="col-sm-2 control-label" style="text-align:left">Mahasiswa</label>
                  <div class="col-sm-6">
                    <select id="mahasiswa" class="form-control" name="mahasiswa_id" onchange="gantinilai()">
                    </select>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="uas" class="col-sm-2 control-label" style="text-align:left">UAS</label>
                  <div class="col-sm-6">
                    <input type="number" id="uas" class="form-control" name="uas"/>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="uas" class="col-sm-2 control-label" style="text-align:left">UTS</label>
                  <div class="col-sm-6">
                    <input type="number" id="uts" class="form-control" name="uts"/>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="uas" class="col-sm-2 control-label" style="text-align:left">Tubes</label>
                  <div class="col-sm-6">
                    <input type="number" id="tubes" class="form-control" name="tubes"/>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="uas" class="col-sm-2 control-label" style="text-align:left">Kuis</label>
                  <div class="col-sm-6">
                    <input type="number" id="kuis" class="form-control" name="kuis"/>
                  </div>
                </div>
                <div class="form-group col-md-8">
                  <label for="uas" class="col-sm-2 control-label" style="text-align:left">Tugas</label>
                  <div class="col-sm-6">
                    <input type="number" id="tugas" class="form-control" name="tugas"/>
                  </div>
                </div>
                <div class="col-sm-6 text-center">
                  <input type="hidden" id="nilai_id" name="nilai_id"/>
                  <input type="button" id="save" class="btn btn-primary" value="Simpan" onclick="insertnilai()"/>
                </div>
                </div>
              </div>
              <!-- /.form group -->
            </div>
            </form>
            </div>
            <!-- /.box-body -->
          </div>
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
  $("#kelas").attr("disabled","true");
  $("#mahasiswa").attr("disabled","true");
  $("#save").attr("disabled","true");
  var gantikelas = function(){
    $.ajax({
      url: "{{url('dosen/pilihkelas')}}",
      data: {"id":$('#matkul').val()},
      method: "POST",
      success:function(data){
        isi = "<option selected>--Pilih Kelas--</option>";
        data.forEach(function(content,index){
          isi += "<option value='"+content['kelas_id']+"'>"+content['kelas'].kode_kelas+"</option>";
        });
        $("#kelas").html(isi);
        $("#mahasiswa").html("<option value='0' selected>--Pilih Mahasiswa--</option>");
        $("#kelas").removeAttr("disabled");
        $("#mahasiswa").attr("disabled","true");
        $("#save").attr("disabled","true");
      }
    });
  }
  var gantimahasiswa = function(){
    $.ajax({
      url: "{{url('dosen/pilihmahasiswa')}}",
      data: {"id":$('#kelas').val()},
      method: "POST",
      success:function(data){
        isi = "<option value='0' selected>--Pilih Mahasiswa--</option>";
        data.forEach(function(content,index){
          isi += "<option value='"+content['id']+"'>"+content['nama']+"</option>";
        });
        $("#mahasiswa").removeAttr("disabled");
        $("#save").attr("disabled","true");
        $("#mahasiswa").html(isi);
      }
    });
  };
  var gantinilai = function(){
    $.ajax({
      url: "{{url('dosen/pilihnilai')}}",
      data: $("#formnilai").serialize(),
      method: "POST",
      success:function(data){
        $("#save").removeAttr("disabled");
        $("#uas").val(data['uas']);
        $("#uts").val(data['uts']);
        $("#kuis").val(data['kuis']);
        $("#tubes").val(data['tubes']);
        $("#tugas").val(data['tugas']);
        $("#nilai_id").val(data['id']);
      }
    });
  };
  var insertnilai = function(){
    if($("#mahasiswa").val()==0){
      alert("Harap pilih mahasiswa")
      return
    }
    $.ajax({
      url: "{{url('dosen/insertnilai')}}",
      data: $("#formnilai").serialize(),
      method: "POST",
      success:function(data){
        alert("Berhasil input nilai")
      }
    });
  }
</script>
@endsection