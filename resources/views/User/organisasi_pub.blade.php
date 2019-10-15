
@include('User.header')
<style type="text/css">
	*{
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		position: relative;
	}

	.cf:before,
	.cf:after {
		content: " "; /* 1 */
		display: table; /* 2 */
	}

	.cf:after {
		clear: both;
	}

/**
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */
 .cf {
 	*zoom: 2;
 }

 /* Generic styling */

 body{
 	background: #F5EEC9;    
 }

 .content{
 	width: 100%;
 	height: 150%;
 	max-width: 1142px;
 	margin: 0 auto;
 	padding: 0 20px;
 }

 a:focus{
 	outline: 2px dashed #f7f7f7;
 }

 @media all and (max-width: 767px){
 	.content{
 		padding: 0 20px;
 	}   
 }

 ul{
 	padding: 0;
 	margin: 0;
 	list-style: none;       
 }

 .content ul a{
 	display: block;
 	background: #ccc;
 	border: 4px solid #fff;
 	text-align: center;
 	overflow: hidden;
 	font-size: .7em;
 	text-decoration: none;
 	font-weight: bold;
 	color: #333;
 	height: 100px;
 	margin-bottom: -26px;
 	box-shadow: 4px 4px 9px -4px rgba(0,0,0,0.4);
 	-webkit-transition: all linear .1s;
 	-moz-transition: all linear .1s;
 	transition: all linear .1s;
 }


 @media all and (max-width: 767px){
 	ul a{
 		font-size: 1em;
 	}
 }


 ul a span{
 	top: 30%;
 	margin-top: -0.7em;
 	display: block;
 }

/*
 
*/

.administration > li > a{
	margin-bottom: 25px;
}

.director > li > a{
	width: 50%;
	margin: 0 auto 0px auto;
}

.subdirector:after{
	content: "";
	display: block;
	width: 0;
	height: 130px;
	background: red;
	border-left: 4px solid #fff;
	left: 45.45%;
	position: relative;
}

.subdirector,
.departments{
	position: absolute;
	width: 100%;
}

.subdirector > li:first-child,
.departments > li:first-child{  
	width: 18.59894921190893%;
	height: 64px;
	margin: 0 auto 92px auto;       
	padding-top: 25px;
	border-bottom: 4px solid white;
	z-index: 1; 
}

.subdirector > li:first-child{
	float: right;
	right: 27.2%;
	border-left: 4px solid white;
}

.departments > li:first-child{  
	float: left;
	left: 27.2%;
	border-right: 4px solid white;  
}

.subdirector > li:first-child a,
.departments > li:first-child a{
	width: 100%;
}

.subdirector > li:first-child a{    
	left: 25px;
}

@media all and (max-width: 767px){
	.subdirector > li:first-child,
	.departments > li:first-child{
		width: 40%; 
	}

	.subdirector > li:first-child{
		right: 10%;
		margin-right: 2px;
	}

	.subdirector:after{
		left: 49.8%;
	}

	.departments > li:first-child{
		left: 10%;
		margin-left: 2px;
	}
}


.departments > li:first-child a{
	right: 25px;
}

.department:first-child,
.departments li:nth-child(2){
	margin-left: 0;
	clear: left;    
}

.departments:after{
	content: "";
	display: block;
	position: absolute;
	width: 81.1%;
	height: 22px;   
	border-top: 4px solid #fff;
	border-right: 4px solid #fff;
	border-left: 4px solid #fff;
	margin: 0 auto;
	top: 130px;
	left: 9.1%
}

@media all and (max-width: 767px){
	.departments:after{
		border-right: none;
		left: 0;
		width: 49.8%;
	}  
}

@media all and (min-width: 768px){
	.department:first-child:before,
	.department:last-child:before{
		border:none;
	}
}

.department:before{
	content: "";
	display: block;
	position: absolute;
	width: 0;
	height: 22px;
	border-left: 4px solid white;
	z-index: 1;
	top: -22px;
	left: 50%;
	margin-left: -4px;
}

.department{
	border-left: 4px solid #fff;
	width: 18.59894921190893%;
	float: left;
	margin-left: 1.751313485113835%;
	margin-bottom: 60px;
}

.lt-ie8 .department{
	width: 18.25%;
}

@media all and (max-width: 767px){
	.department{
		float: none;
		width: 100%;
		margin-left: 0;
	}

	.department:before{
		content: "";
		display: block;
		position: absolute;
		width: 0;
		height: 60px;
		border-left: 4px solid white;
		z-index: 1;
		top: -60px;
		left: 0%;
		margin-left: -4px;
	}

	.department:nth-child(2):before{
		display: none;
	}
}

.department > a{
	margin: 0 0 -26px -4px;
	z-index: 1;
}

.department > a:hover{  
	height: 80px;
}

.department > ul{
	margin-top: 0px;
	margin-bottom: 0px;
}

.department li{ 
	padding-left: 25px;
	border-bottom: 4px solid #fff;
	height: 80px;   
}

.department li a{
	background: #fff;
	top: 48px;  
	position: absolute;
	z-index: 1;
	width: 90%;
	height: 60px;
	vertical-align: middle;
	right: -1px;
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIxMDAlIiB5Mj0iMTAwJSI+CiAgICA8c3RvcCBvZmZzZXQ9IjAlIiBzdG9wLWNvbG9yPSIjMDAwMDAwIiBzdG9wLW9wYWNpdHk9IjAuMjUiLz4KICAgIDxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAwMDAwMCIgc3RvcC1vcGFjaXR5PSIwIi8+CiAgPC9saW5lYXJHcmFkaWVudD4KICA8cmVjdCB4PSIwIiB5PSIwIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSJ1cmwoI2dyYWQtdWNnZy1nZW5lcmF0ZWQpIiAvPgo8L3N2Zz4=);
	background-image: -moz-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%, rgba(0,0,0,0) 100%) !important;
	background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0%,rgba(0,0,0,0.25)), color-stop(100%,rgba(0,0,0,0)))!important;
	background-image: -webkit-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: -o-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: -ms-linear-gradient(-45deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	background-image: linear-gradient(135deg,  rgba(0,0,0,0.25) 0%,rgba(0,0,0,0) 100%)!important;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#40000000', endColorstr='#00000000',GradientType=1 );
}

.department li a:hover{
	box-shadow: 8px 8px 9px -4px rgba(0,0,0,0.1);
	height: 80px;
	width: 95%;
	top: 39px;
	background-image: none!important;
}

/* Department/ section colors */
.department.dep-a a{ background: #FFD600; }
.department.dep-b a{ background: #AAD4E7; }
.department.dep-c a{ background: #FDB0FD; }
.department.dep-d a{ background: #A3A2A2; }
.department.dep-e a{ background: #f0f0f0; }
</style>
<div id="design" >
	<div class="content">
		<center><h2>STRUKTUR ORGANISASI PUB</h2></center>
		<figure class="org-chart cf">
			<ul class="administration">
				<li>                  
					<ul class="director">
						<li>
							<a href="#">
								<span></span>
								<span>Pembina PUB</span>
								
								<span>Abdul Hafiz Tanjung</span>
							</a>
							<ul class="subdirector">
							</ul>
							<ul class="departments cf">                             
								<li>
									@if($ketua2!=0)
									<a href="{{url('detail/org/'.$ketua->id_mahasiswa)}}">
										@else
										<a href="#">
											@endif
											<span>
												<div style="background-color: #33cc99;">
													Ketua PUB
												</div>

												@if($ketua2==0)
												<p>data Kosong</p>
												@else
												<p>{{$ketua->nama}}</p>
												@endif
											</span>
										</a>
									</li>
									<li class="department dep-d">
										@if($sekretaris2!=0)
										<a href="{{url('detail/org/'.$sekretaris->id_mahasiswa)}}">
											@else
											<a href="#">
												@endif
												<span>
													<div style="background-color: #33cc99;">
														Sekretaris PUB
													</div>
													@if($sekretaris2==0)
													<p>data Kosong</p>
													@else
													<p>{{$sekretaris->nama}}</p>
													@endif
												</span>
											</a>
										</li>

										<li class="department dep-d">
											@if($bendahara_in2!=0)
											<a href="{{url('detail/org/'.$bendahara_in->id_mahasiswa)}}">
												@else
												<a href="#">
													@endif
													<span>
														<div style="background-color: #33cc99;">
															Bendahara Internal
														</div>
														@if($bendahara_in2==0)
														<p>data Kosong</p>
														@else
														<p>{{$bendahara_in->nama}}</p>
														@endif
													</span>
												</a>
											</li>
											<li class="department dep-d">
												@if($keamanan2!=0)
												<a href="{{url('detail/org/'.$keamanan->id_mahasiswa)}}">
													@else
													<a href="#">
														@endif
														<span>
													<div style="background-color: #33cc99;">
																Keamanan PUB
															</div>
															@if($keamanan2==0)
															<p>data Kosong</p>
															@else
															<p>{{$keamanan->nama}}</p>
															@endif
														</span>
													</a>
													<ul class="sections">
														<li class="section">
															@if($div_pnd2!=0)
									<a href="{{url('detail/org/'.$div_pnd->id_mahasiswa)}}">
																@else
																<a href="#">
																	@endif
																	<span>
													<div style="background-color: #33cc99;">
																	Divisi Pendidikan
																		</div>


																		@if($div_pnd2==0)
																		<p>data Kosong</p>
																		@else
																<p>{{$div_pnd->nama}}</p>
																		@endif
																	</span>
																</a>
															</li>
															<li class="section">
																@if($div_ker2!=0)
									<a href="{{url('detail/org/'.$div_ker->id_mahasiswa)}}">
																	@else
																	<a href="#">
																		@endif
																		<span>
													<div style="background-color: #33cc99;">
																		Divisi Kerohanian
																			</div>
																	@if($div_ker2==0)
																	<p>data Kosong</p>
																			@else
																<p>{{$div_ker->nama}}</p>
																			@endif
																		</span>
																	</a>
																</li>
																<li class="section">
																	@if($div_kea2!=0)
									<a href="{{url('detail/org/'.$div_kea->id_mahasiswa)}}">
																		@else
																		<a href="#">
																			@endif
																			<span>
													<div style="background-color: #33cc99;">
																		Divisi Keasramaan
																				</div>
																		@if($div_kea2==0)
																		<p>data Kosong</p>
																				@else
																<p>{{$div_kea->nama}}</p>
																				@endif
																			</span>
																		</a></li>
																		<li class="section">
																		@if($div_keb2!=0)
									<a href="{{url('detail/org/'.$div_keb->id_mahasiswa)}}">
																				@else
																				<a href="#">
																					@endif
																					<span>
												<div style="background-color: #33cc99;">
													Divisi Kebersihan
																			</div>
																		@if($div_keb2==0)
																		<p>data Kosong</p>
																				@else
																<p>{{$div_keb->nama}}</p>
																			@endif
																			</span>
																				</a>
																			</li>
																	<li class="section">
																	@if($div_mag2!=0)
									<a href="{{url('detail/org/'.$div_mag->id_mahasiswa)}}">
																				@else
																				<a href="#">
																					@endif
																				<span>
													<div style="background-color: #33cc99;">
																	Divisi Magang
																				</div>
																		@if($div_mag2==0)
																	<p>data Kosong</p>
																			@else
																<p>{{$div_mag->nama}}</p>
																		@endif
																					</span>
																</a>
																			</li>
																		<li class="section">
																		@if($div_sej2!=0)
									<a href="{{url('detail/org/'.$div_mag->id_mahasiswa)}}">
																				@else
																				<a href="#">
																					@endif
																					<span>
													<div style="background-color: #33cc99;">
																	Divisi Kesejahteraan
																					</div>
																		@if($div_sej2==0)
																		<p>data Kosong</p>
																					@else
																<p>{{$div_sej->nama}}</p>
																					@endif
																					</span>
																				</a>
																			</li>
																		<li class="section">
																		@if($div_kes2!=0)
									<a href="{{url('detail/org/'.$div_kes->id_mahasiswa)}}">
																				@else
																				<a href="#">
																					@endif
																					<span>
													<div style="background-color: #33cc99;">
																Divisi Kesehatan
																					</div>
																		@if($div_kes2==0)
																		<p>data Kosong</p>
																				@else
																<p>{{$div_kes->nama}}</p>
																					@endif
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
														<li class="department dep-d">
																	@if($bendahara_ex2!=0)
							<a href="{{url('detail/org/'.$bendahara_ex->id_mahasiswa)}}">
																				@else
																				<a href="#">
																					@endif
																					<span>
													<div style="background-color: #33cc99;">
																		Bendahara Eksternal
																			</div>
																	@if($bendahara_ex2==0)
																		<p>data Kosong</p>
																			@else
															<p>{{$bendahara_ex->nama}}</p>
																			@endif
																		</span></a>
																	</li>
														<li class="department dep-d">
																		<a href="#"><span>
													<div style="background-color: #33cc99;">
																				Ketua PPMB
																			</div>
																	@if($bendahara_ex2==0)
																		<p>data Kosong</p>
																			@else
															<p>{{$bendahara_ex->nama}}</p>
																			@endif
																		</span></a>
																	</li>
																</ul>
															</li>
														</ul>   
													</li>
												</ul>           
											</figure>
										</div>
									</div>
									@php
										for($x=0;$x<50;$x++){
											echo "<br>";
									}
									@endphp
									

									@include('User.footer')