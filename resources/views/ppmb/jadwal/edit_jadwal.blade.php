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
			<div class="panel-heading">FROM UBAH PANITIA</div>
					<div class="panel-body">
						<div class="col-md-6">

							<form role="form" action="/struktur_ppmb/update" method="POST">
								
								 @foreach($jadwalppmb as $jadwal)
								  {{ @csrf_field() }}
								<div class="form-group">
									<label>ID Jadwal</label>
									<input class="form-control" name="id_jadwal" placeholder="Id Jadwal" value="{{$jadwal->id_jadwal}}" readonly="">
								</div>
								<div class="form-group">
									<label>Kegiatan</label>
									<input class="form-control" name="kegiatan" placeholder="Kegiatan" value="{{$jadwal->kegiatan}}">
								</div>
								<button type="submit" class="btn btn-primary">TAMBAH DATA </button>	@endforeach
							</form>
						</div>
					</div>
				</div>
			</div>	
	@include('tampilan.foot')