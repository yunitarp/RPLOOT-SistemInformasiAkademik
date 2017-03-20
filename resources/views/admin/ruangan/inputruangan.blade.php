@extends('admin.base')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Ruangan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Kelola Ruangan</li>
        <li class="active">Masukan Ruangan</li>
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
		            <form class="form-horizontal" action="{{url('/admin/inputruangan')}}" method="post">
		              <div class="box-body">
				          <div class="form-group">
        						<label class="col-sm-4 control-label">Gedung</label>
		                  	<div class="col-sm-8">
				                  <select class="form-control" id="kode_gedung" onchange="gantirole(this)" name="gedung_id">
				                  	@foreach($gedung as $isi)
				                  		<option value="{{$isi['id']}}">{{$isi['nama_gedung']}}</option>
				                  	@endforeach
				                  </select>
				            </div>
				          </div>
				        <div id="nonAdmin">
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label" id="lbl_nipnim">Kode Ruangan</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" id="nipnim" placeholder="Kode Ruangan" name="kode_ruangan">
			                  </div>
			                </div>
			                <div class="form-group">
			                  <label for="inputEmail3" class="col-sm-4 control-label">Nama Ruangan</label>
			                  <div class="col-sm-8">
			                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nama Ruangan" name="nama_ruangan">
			                  </div>
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