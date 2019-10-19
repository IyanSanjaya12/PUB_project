@include('tampilan.head')

<div class="col-sm-5 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Tabel final</div>

				<div class="panel-body">
					<a href="{{url('tambahFinal/'.$id)}}" class="btn btn-info">Add</a>
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Peserta</th>
								<th>Jenis Kelamin</th>
								<th>Jurusan Pilihan</th>
								<th>Asal Sekolah</th>
								<th>Asal Daerah</th>
								<th>No Hp</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@php $no = 1; @endphp
							@foreach($final as $data)
							<tr>
								<td>{{ $no++}}</td>
								<td>{{ $data->nama_peserta}}</td>
								<td>{{ $data->jk}}</td>
								<td>{{ $data->jurusan}}</td>
								<td>{{ $data->asal_sekolah}}</td>
								<td>{{ $data->asal_daerah}}</td>
								<td>{{ $data->no_hp}}</td>
								<td @if($data->status == "LULUS") class="btn btn-info" @endif @if($data->status == "TIDAK LULUS") class="btn btn-danger" @endif>{{ $data->status}}</td>
								<td>
									<a href="{{url('editFinal/'.$data->id_final)}}" class="btn btn-info">Edit</a>
									<a href="{{url('hapusFinal/'.$data->id_final)}}" class="btn btn-info">Hapus</a>
								</td>
							</tr>
							@endforeach

						</tbody>	
						<tfoot>
							<tr>
								<th colspan="5">Peserta Final : {{$dir}}</th>
								<th colspan="4">Peserta Lulus : {{$lus}}</th>						        
							</tr>
						</tfoot>					    
					</table>
				</div>
			</div>
		</div>
	</div>
	@include('tampilan.foot')