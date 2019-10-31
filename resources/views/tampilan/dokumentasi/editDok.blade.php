@include('tampilan.head')


<style>
	* {
		box-sizing: border-box;
	}

	input[type=text], select, textarea {
		width: 100%;
		padding: 17px;
		border: 1px solid #ccc;
		border-radius: 4px;
		resize: vertical;
	}

	label {
		padding: 12px 12px 12px 0;
		display: inline-block;
	}

	input[type=submit] {
		background-color: #4CAF50;
		color: white;
		padding: 12px 20px;
		margin-left: 100px;
		border: none;
		border-radius: 4px;
		cursor: pointer;
		float: left;
	}

	input[type=submit]:hover {
		background-color: #45a049;
	}

	.container {
		border-radius: 5px;
		background-color: #ffffff;
		padding: 5px;
	}

	.col-25 {
		padding-left: 100px;
		width: 25%;
		margin-top: 6px;
	}

	.col-75 {
		padding-left: 100px;
		width: 50%;
		margin-top: 6px;
	}
	#form1{
		width: 750px;
		height: 500px;

		margin-left: 300px;
	}
	/* Clear floats after the columns */
	.row:after {
		content: "";
		display: table;
		clear: both;
	}

	/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
	@media screen and (max-width: 600px) {
		.col-25, .col-75, input[type=submit] {
			width: 100%;
			margin-top: 0;
		}
	}
</style>
<div class="row" style="padding: 20px;">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">Edit Dokumentasi</div>
			<div class="panel-body">
				@foreach($dok as $data)
				<form method="POST" action="{{url('updateDok/'.$data->id_dok)}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="row">
					<div class="col-75">
						<label for="tahun">Foto</label>
						<input type="file" class="faorm-control" name="foto">
					</div>

					<div class="col-75">
							<label for="jbPUB">Kategori</label>
							<select id="keterangan" name="kategori">
								<option @if($data->kategori=="Sosialisasi") selected="" @endif value="Sosialisasi">Sosialisasi</option>
								<option @if($data->kategori=="TPA") selected="" @endif value="TPA">TPA</option>
								<option @if($data->kategori=="Psikotest") selected="" @endif value="Psikotest">Psikotest</option>
								<option @if($data->kategori=="Home Visit") selected="" @endif value="Home Visit">Home Visit</option>
								<option @if($data->kategori=="Wawancara Akhir") selected="" @endif value="Wawancara Akhir">Wawancara Akhir</option>
								<option @if($data->kategori=="MOU") selected="" @endif value="MOU">MOU</option>
							</select>
						</div>
						<div class="col-75">
							<label for="tahun">Keterangan</label>
							<input type="text" value="{{$data->keterangan}}" class="form-control" name="keterangan">
						</div>
						<div class="col-75">
							<label for="jbPUB">Periode</label>
							<select id="keterangan" name="id_tahun">
								@foreach($tahun as $datas)
									<option @if($data->id_tahun==$datas->id) selected="" @endif value="{{$datas->id}}">{{$datas->tahun}}</option>
								@endforeach
								
							</select>
						</div>

				</div>
				<br>
				<div class="row" align="center">
					<input type="submit" value="Simpan">
						</div>
					</div>
				</form>
				@endforeach
			</div>
		</div>
	</div>
</div>

@include('tampilan.foot')

