@include('User.header')
<br><br>
<style type="text/css">
	img.tengah{		
		display: inline-block;
		border: 1px solid darkcyan;
		margin: 10px;
		width: 300px;
		height: 300px;
	}
	.x{
		display: inline-block;
	}
</style>
	<div style="text-align: center;">
		@foreach($dok as $data)	
			<figure class="x">
				<img src="{{url('imgs')}}/{{($data->foto) }}" class="tengah">	
			
			<figcaption>
				<label style="text-align: center;width: 100%;">{{$data->keterangan}}</label>
			</figcaption>

			</figure>
			
		@endforeach
	</div>	
<br><br>	
@include('user.footer')