	@include('tampilan.head')
		<style type="text/css">
			#form1{
				width: 750px;
				height: 500px;
				margin-left: 300px;
			}
		</style>
			<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
			<link rel="stylesheet" type="text/css" href="style.css">
		

		<div id="form1">
		<div class="row">
			<div class="panel-heading">FROM PERSYARATAN DAN KETENTUAN</div>
					<br>
					<?php 
						foreach($syarat as $data){

					 ?>
					<div>
						<!-- <a href="syarat_ketentuan/create"><button>Tambah</button></a>	 -->
						<a href="syarat_ketentuan/edit/{{$data->id_syarat}}"><button>Ubah</button></a>	

					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									Syarat Dan Ketentuan
								</div>
								<div class="panel-body">
									<div class="col-md-12">
										<?php  
												echo "<p>".$data->syarat."</p>";
											}
										?>
								    </div>
								</div>
							</div>
						</div>
					</div>
			
	@include('tampilan.foot')
