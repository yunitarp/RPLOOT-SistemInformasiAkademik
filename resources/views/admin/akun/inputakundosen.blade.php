@extends('admin.base')
@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Akun
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Kelola Akun</li>
        <li class="active">Masukan Akun</li>
      </ol>
    </section>

     <!-- Main content -->
     <section class="content">
      <div class="row">
      <div class="col-xs-12">
      	<div class="box">
      		<div class="box-header">
        <!-- right column -->
        		<div class="col-md-2">
        		</div>
		        <div class="col-md-5">
		            <form class="form-horizontal" action="{{url('/admin/inputakun')}}" method="post">
		              <div class="box-body">
				          <div class="form-group">
        						<label class="col-sm-2 control-label">Pilih Akun</label>
		                  	<div class="col-sm-10">
				                  <select class="form-control" id="role" onchange="gantirole(this)" name="role">
				                    <option  selected="selected" value="Dosen">Dosen</option>
				                    <option value="Mahasiswa">Mahasiswa</option>
				                    <option value="LAAK">LAAK Fakultas</option>
				                    <option value="Admin">Admin</option>
				                  </select>
				            </div>
				          </div>
				        <div id="nonAdmin">
				        	<div class="form-group" id="kode_prodi">
			                  <label for="inputEmail3" class="col-sm-2 control-label">Prodi</label>
			                  <div class="col-sm-10">
				                  <select class="form-control" name="prodi_id">
				                    @foreach($prodi as $isi)
				                  		<option value="{{$isi['id']}}">{{$isi['nama_prodi']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group "  id="kode_kelas">
			                  <label for="inputEmail3" class="col-sm-2 control-label" id="lbl_kelas">Kelas</label>
			                  <div class="col-sm-10">
				                  <select class="form-control" name="kelas_id">
				                    @foreach($kelas as $isi)
				                  		<option value="{{$isi['id']}}">{{$isi['kode_kelas']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-2 control-label" id="lbl_nipnim">NIP</label>
			                  <div class="col-sm-10">
			                    <input type="text" class="form-control" id="nipnim" placeholder="NIP" name="nip">
			                  </div>
			                </div>
			                <div class="form-group" id="kode_dosen">
			                  <label for="inputPassword3" class="col-sm-2 control-label" id="lbl_kode">Kode Dosen</label>

			                  <div class="col-sm-10">
			                    <input type="text" class="form-control" placeholder="Kode Dosen" name="kode_dosen">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
			                  <div class="col-sm-10">
			                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama" name="nama">
			                  </div>
			                </div>
			             </div>
		                <div class="form-group">
		                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
		                  <div class="col-sm-10">
		                    <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

		                  <div class="col-sm-10">
		                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
		                  </div>
		                </div>
		                <div class="form-group">
		                  <div class="col-sm-offset-2 col-sm-10">
		                  </div>
		                </div>
		              </div>
		              <!-- /.box-body -->
		              <div class="box-footer">
		                <button type="submit" class="btn btn-default">Batal</button>
		                <button type="submit" class="btn btn-info pull-right">Tambah</button>
		              </div>
		              <!-- /.box-footer -->
		            </form>
		          </div>
		        </div>
        <!--/.col (right) -->
        	</div>
        </div>
      </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('js')
<script>
	$("#kode_kelas").hide();
	var gantirole = function(o){
		val = $(o).val();
		if (val != 'Admin'){
			$("#nonAdmin").show();
			if (val == 'Dosen' || val == 'LAAK'){
				if(val == 'Dosen'){
					$("#kode_dosen").show();
				}
				else{
					$("#kode_dosen").hide();
				}
				$("#kode_kelas").hide();
				$("#lbl_nipnim").html("NIP");
				$("#nipnim").attr("name","nip");
				$("#nipnim").attr("placeholder","NIP");
			}else{
				$("#kode_kelas").show();
				$("#lbl_nipnim").html("NIM");
				$("#nipnim").attr("name","nim");
				$("#nipnim").attr("placeholder","NIM");
				$("#kode_dosen").hide();
			}
		}else{
			$("#nonAdmin").hide();
		}
	}
</script>
@endsection