@extends('admin.base')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Matakuliah
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Kelola Ruangan</li>
        <li class="active">Masukan Matakuliah</li>
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
		            <form class="form-horizontal" action="{{url('/admin/inputmatakuliah')}}" method="post">
		              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Kode Matakuliah</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" id="k_matakuliah" placeholder="Kode Maatakuliah" name="kode_matakuliah">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Matakuliah</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" id="n_matakuliah" placeholder="Nama Matakuliah" name="nama_matakuliah">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">SKS</label>
			                  <div class="col-sm-4">
				                  <select class="form-control" name="sks">
				                    <option selected="selected" value=1>1</option>
				                    <option value=1>1</option>
				                    <option value=2>2</option>
				                    <option value=3>3</option>
				                    <option value=4>4</option>
				                  </select>
				            </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Tingkat</label>
			                  <div class="col-sm-4">
				                  <select class="form-control" name="tingkat">
				                    <option selected="selected" value=1>1</option>
				                    <option value=1>1</option>
				                    <option value=2>2</option>
				                    <option value=3>3</option>
				                    <option value=4>4</option>
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
    <!-- /.content -
" 

@endsection