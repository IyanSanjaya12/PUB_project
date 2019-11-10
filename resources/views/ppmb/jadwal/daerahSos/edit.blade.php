		@include('tampilan.head')

		<div class="row" style="padding: 20px;">
			<div class="co  l-lg-12">
				<div class="panel panel-default">

					<div class="panel-body">
						<div class="panel-heading"><h2 align="center">FORM UBAH DAERAH YANG DISOSIALISASI</h2></div>

						<div class="col-md-6">

							<form role="form" action="{{url('daerah_sos_ppmb/update/'.$daerah_sos->id_daerah_sos)}}" method="POST">
								{{ @csrf_field() }}
								<div class="form-group">
									<label>ID Jadwal</label>
									<input class="form-control" name="id_daerah_sos" placeholder="Id Daerah_sos" readonly="" value="{{$daerah_sos->id_daerah_sos}}">
								</div>
								<div class="form-group">
									<select class="form-control" id="kegiatan" name="id_daerah">
										<label></label>
										<option > --Daerah--</option>
										@foreach($daerah as $data)
										<option @if($daerah_sos->kab_kot==$data->kab_kot) selected="true" @endif value="{{$data->id_daerah}}">{{$data->kab_kot}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<select class="form-control" id="periode" name="id_periode">
										<label>Periode</label>
										<option value="0"> --Periode--</option>
										@foreach($periode as $data)
										<option @if($daerah_sos->periode==$data->periode) selected="true" @endif value="{{$data->id_periode}}">{{$data->periode}}</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<select class="form-control" id="tempat" name="tempat">
										<label>Tempat</label>
										<option value="0"> --Tempat--</option>
										@foreach($sekolah as $data)
										<option @if($daerah_sos->sekolah==$data->sekolah) selected="true" @endif value="{{$data->id_sekolah}}">{{$data->sekolah}}</option>                          
										@endforeach
									</select>
								</div>

								<button type="submit" class="btn btn-primary">TAMBAH DATA </button>			
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include('tampilan.foot')
