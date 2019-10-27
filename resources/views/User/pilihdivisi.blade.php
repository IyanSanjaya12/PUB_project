@include('user.header')
<style type="text/css">
	.table1 {
		font-family: sans-serif;
		color: #444;
		border-collapse: collapse;
		width: 50%;
		border: 1px solid #f2f5f7;
	}

	.table1 tr th{
		background: #35A9DB;
		color: #fff;
		font-weight: normal;
	}

	.table1, th, td {
		padding: 8px 20px;
		text-align: center;
	}

	.table1 tr:hover {
		background-color: #f5f5f5;
	}

	.table1 tr:nth-child(even) {
		background-color: #f2f2f2;
	}
	.tengah{
		text-align: center;
		margin: 10%;
	}
	button{
		background-color: #16A085;
		color: white;
		width: 180px;
		height: 100px;
		border-radius: 10px;
		border-style: groove;
	}
	button:hover{
		background-color: #1ABC9C;
	}
</style>
<div >
	<div class="tengah">
			<center><h1>Kegiatan PUB</h1></center>
			<a href="{{url('kegiatanPub/filter/'.$pendidikan->id_angkatan,$pendidikan->tema)}}"><button>Divisi Pendidikan</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Keasramaan</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Kesejahteraan</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Kerohanian</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Kesehatan</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Magang</button></a>
			<a href="{{url('kegiatanPub/filter')}}"><button>Divisi Kebersihan</button></a>
	</div>
					
	
</div>



@include('user.footer')