		@include('tampilan.head')
		<style type="text/css">
			#form1{
				width: 750px;
				height: 500px;
				margin-left: 300px;
			}
		</style>
		<div id="form1">
		<div class="row">
			<div class="panel-heading">FROM TAMBAH PANITIA</div>
					<div class="panel-body">
						<div class="col-md-6">

							<form role="form" action="{{URL('kategori_jadwal_ppmb/store')}}" method="POST">
								 {{ @csrf_field() }}
								<div class="form-group">
									<label>ID Jadwal</label>
									<input class="form-control" name="id_kategori_tes" placeholder="Id Kategori Tes" readonly="">
								</div>
								<div class="form-group">
									<label>Kategori Tes</label>
									<input class="form-control" name="kategori_tes" placeholder="Kategori Tes">
								</div>
								<button type="submit" class="btn btn-primary">TAMBAH DATA </button>			
							</form>
						</div>
					</div>
				</div>
			</div>	
	@include('tampilan.foot')
