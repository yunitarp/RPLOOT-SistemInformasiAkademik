@extends('admin.base')
@section('content')
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Program Studi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Kelola Prodi</li>
        <li class="active">Masukan Prodi</li>
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
		            <form class="form-horizontal" action="{{url('/admin/inputprodi')}}" method="post">
		              <div class="box-body">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Kode Prodi</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" placeholder="Kode Prodi" name="kode_prodi">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Prodi</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" placeholder="Nama Prodi" name="nama_prodi">
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