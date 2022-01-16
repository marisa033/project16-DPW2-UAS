@extends('admin.template')
@section('content')

<div class="card">
	<div class="card-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1>Tambah Data User</h1>
				</div>
				<div class="col-md-12">
					<form action="{{url ('admin/user')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama</label>
						  @include('admin.utils.errors', ['item' => 'nama'])
						<input type="text" class="form-control" name="nama">	
					</div>	
					<div class="form-group">
						<label for="" class="control-label">Username</label>
						@include('admin.utils.errors', ['item' => 'username'])
						<input type="text" class="form-control" name="username">	
					</div>
					<div class="form-group">
						<label for="" class="control-label">Email</label>
						@include('admin.utils.errors', ['item' => 'email'])
						<input type="email" class="form-control" name="email">	
					</div>	
					<div class="form-group">
						<label for="" class="control-label">Jenis Kelamin</label>
						@include('admin.utils.errors', ['item' => 'jenis_kelamin'])
						<input type="text" class="form-control" name="jenis_kelamin">	
					</div>
					<div class="form-group">
						<label for="" class="control-label">Password</label>
						@include('admin.utils.errors', ['item' => 'password'])
						<input type="password" class="form-control" name="password">	
					</div>
					<div class="form-group">
						<label for="" class="control-label">No Hp</label>
						@include('admin.utils.errors', ['item' => 'no_handphone'])
						<input type="text" class="form-control" name="no_handphone">	
					</div>		
					<button class="btn btn-info float-right"><i class="fa fa-save"> Simpan</i></button>	
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection