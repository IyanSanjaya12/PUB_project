		@include('tampilan.head')
		<style type="text/css">
			#form1{
				width: 750px;
				height: 500px;
				margin-left: 300px;
			}
		</style>
		<div class="row">
			<div class="panel-heading">FROM TAMBAH PANITIA</div>
			<div class="panel-body">
				<div class="col-md-6">
					<form role="form" action="/det_struktur_ppmb/store" method="POST">
						{{ @csrf_field() }}
						<div class="form-group">
							<label>ID Panitia</label>
							<input class="form-control" name="id_pengurus" placeholder="Id Panitia" readonly="">
						</div>
						<div class="form-group">
							<select class="form-control" id="mahasiswa" name="mahasiswa">
								<label>Mahasiswa</label>
								<option value="0"> --Mahasiswa--</option>
								@foreach($mahasiswa as $data)
								<option value="{{$data->id_mahasiswa}}">{{$data->nama}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" id="angkatan" name="angkatan">
								<label>Angkatan</label>
								<option value="0"> --Angkatan--</option>
								@foreach($angkatan as $data)
								<option value="{{$data->id_angkatan}}">{{$data->angkatan}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" id="jabatan" name="jabatan">
								<label>Mahasiswa</label>
								<option value="0"> --Jabatan--</option>
								@foreach($jabatan as $data)
								<option value="{{$data->id_orgppmb}}">{{$data->jabatan}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<select class="form-control" id="periode" name="periode">
								<label>Periode</label>
								<option value="0"> --Periode--</option>
								@foreach($periode as $data)
								<option value="{{$data->id_periode}}">{{$data->periode}}</option>
								@endforeach
							</select>
						</div>
						<button type="submit" class="btn btn-primary">TAMBAH DATA </button>
						
					</form>

				</div>
			</div>
		</div>	
		@include('tampilan.foot')
