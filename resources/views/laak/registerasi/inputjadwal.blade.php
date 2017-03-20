@extends('laak.base')
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
        <li class="active">Masukkan Jadwal</li>
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
		            <form class="form-horizontal" action="{{url('/laak/inputjadwal')}}" method="post">
		              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Matakuliah</label>
			                   <div class="col-sm-8">
				                  <select class="form-control" id="kode_prodi" name="matakuliah_id">
				                    @foreach($matakuliah as $mk)
				                  		<option value="{{$mk['id']}}">{{$mk['nama_matakuliah']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Ruangan</label>
			                   <div class="col-sm-8">
				                  <select class="form-control" id="kode_ruangan" name="ruangan_id">
				                    @foreach($ruangan as $ruangan)
				                  		<option value="{{$ruangan['id']}}">{{$ruangan['nama_ruangan']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Dosen</label>
			                   <div class="col-sm-8">
				                  <select class="form-control" id="kode_dosen" name="dosen_id">
				                    @foreach($dosen as $dosen)
				                  		<option value="{{$dosen['id']}}">{{$dosen['kode_dosen']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
				            </div>
				            <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Kelas</label>
			                   <div class="col-sm-8">
				                  <select class="form-control" id="kode_dosen" name="kelas_id">
				                    @foreach($kelas as $kelas)
				                  		<option value="{{$kelas['id']}}">{{$kelas['kode_kelas']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Hari</label>
			                   <div class="col-sm-8">
				                  <select class="form-control" id="kode_ruangan" name="hari">
				                  		<option value="SENIN">SENIN</option>
				                  		<option value="SELASA">SELASA</option>
				                  		<option value="RABU">RABU</option>
				                  		<option value="KAMIS">KAMIS</option>
				                  		<option value="JUMAT">JUMAT</option>
				                  		<option value="SABTU">SABTU</option>
				                  </select>
				            	</div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-3 control-label">Jam</label>
			                   <div class="col-sm-3">
				                  <select class="form-control" id="kode_ruangan" name="jam">
				                    @for($i=6; $i<=18; $i++)
				                  		<option value="{{$i}}">{{$i}}</option>
				                  	@endfor
				                  </select>
				            	</div>
			                  <label for="inputEmail3" class="col-sm-3 control-label">Menit</label>
			                   <div class="col-sm-3">
				                  <select class="form-control" id="kode_ruangan" name="menit">
				                    @for($i=0; $i<=30; $i=$i+10)
				                  		<option value="{{$i}}">{{$i}}</option>
				                  	@endfor
				                  </select>
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