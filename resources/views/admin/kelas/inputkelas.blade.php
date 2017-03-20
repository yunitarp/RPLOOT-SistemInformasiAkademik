@extends('admin.base')
@section('content')

	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Kelas
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Kelola Kelas</li>
        <li class="active">Masukan Kelas</li>
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
		            <form class="form-horizontal" action="{{url('/admin/inputkelas')}}" method="post">
		              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Prodi</label>
			                  <div class="col-sm-8">
				                  <select class="form-control" id="kode_prodi" onchange="gantirole(this)" name="prodi_id">
				                    @foreach($prodi as $isi)
				                  		<option value="{{$isi['id']}}">{{$isi['nama_prodi']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Kode Kelas</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" placeholder="Kode Kelas" name="kode_kelas">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Kelas</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" placeholder="Kode Kelas" name="nama_kelas">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Kapasitas</label>
			                  <div class="col-sm-4">
				                  <select class="form-control" name="kapasitas">
				                    <option selected="selected" value=40>40</option>
				                    <option value=10>10</option>
				                    <option value=15>15</option>
				                    <option value=20>20</option>
				                    <option value=25>25</option>
				                    <option value=30>35</option>
				                    <option value=40>40</option>
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