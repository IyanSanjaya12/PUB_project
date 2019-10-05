@include('tampilan.head')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">DaftraAngkatan PUB</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<form method="POST" action="{{URL('angkatanModel')}}" Class="form-horizontal" id="block-validate" style="margin-left: 30px;">
					{{csrf_field()}}
					<div class="row">
						<div class="panel-body">
							<div class="col-md-6">
								

								<div class="form-group">
									<label>NAMA ANGKATAN</label>
									<input class="form-control" placeholder="Nama Angkatan" name="nama_angkatan">
								</div>
								<div class="form-group">
									<label>ANGKATAN</label>
									<input class="form-control" placeholder="Angkatan" name="angkatan">
								</div>				
								<button type="submit" class="btn btn-primary">TAMBAH DATA </button>
								
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--/.row-->	

</div><!--/.main-->
@include('tampilan.foot')