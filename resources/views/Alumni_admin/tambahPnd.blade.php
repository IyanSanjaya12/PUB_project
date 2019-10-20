@include('Alumni_admin.head')
<h1 id="judul">Riwayat Pendidikan</h1>
<div class="container">
	<form method="POST" action="{{url('simpanPend')}}">
		{{ csrf_field() }}
		<table>
			<tr>
				<td>Nama Perguruan Tinggi</td>
				<td>:</td>
				<td><input type="text" id="kampus" name="kampus" placeholder="Perguruan Tinggi"></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td>
					<select name="pddk">
						<option>--Pendidikan--</option>
						<option value="D3">D3</option>
						<?php 
						for ($x=1; $x <=3; $x++) { 
							echo "<option value='S$x'>S$x</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td><input type="text" name="jur"></td>
			</tr>
			<tr>
				<td>Tahun Lulus</td>
				<td>:</td>
				<td>
					<input value="Masih Berjalan" type="checkbox" id="run" onclick="dis();">Masih Berjalan&nbsp;&nbsp;
					<input id="thn" type="number" max="2099" min="2003" name="lulus" value="2019">
				</td>
			</tr>
		</table>
		<input type="hidden" name="idmhs" value="{{$id}}">
		<input type="submit" value="Tambah" id="btn">

	</form>
</div>
@include('Alumni_admin.foot')
<script type="text/javascript">
	function dis() {
		var cb=document.getElementById('thn');
		var run=document.getElementById("run")
		if(run.checked == true){
			cb.disabled = true;
			run.name="lulus";
			cb.name="noname"
		}else{
			cb.disabled = false;
			cb.name="lulus";
			run.name="noname";
		}
	}
</script>