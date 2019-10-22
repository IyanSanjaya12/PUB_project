<?php

use Illuminate\Support\Facades\Input;


Route::get('admin', function () {
	return view('tampilan.index');
});

//struktur organisasi ppmb
Route::get('/struktur_ppmb','orgPPMBcontroller@index'); 
Route::get('/struktur_ppmb/create','orgPPMBcontroller@create');
Route::post('/struktur_ppmb/store','orgPPMBcontroller@store');
Route::get('/struktur_ppmb/edit/{id}','orgPPMBcontroller@edit');
Route::post('/struktur_ppmb/update','orgPPMBcontroller@update');
Route::get('/struktur_ppmb/delete/{id}','orgPPMBcontroller@destroy');


//detorg 
Route::get('/det_struktur_ppmb/','detOrgPpmbController@index'); 
Route::get('/det_struktur_ppmb/create','detOrgPpmbController@create');
Route::post('/det_struktur_ppmb/store','detOrgPpmbController@store');
Route::get('/det_struktur_ppmb/edit/{id}','detOrgPpmbController@edit');
Route::post('/det_struktur_ppmb/update','detOrgPpmbController@update');
Route::get('/det_struktur_ppmb/delete/{id}','detOrgPpmbController@destroy');
//struktur for user


//syarat ketentuan 
Route::get('/syarat_ketentuan','SyaratController@index'); 
Route::get('/syarat_ketentuan/create','SyaratController@create'); 
Route::post('/syarat_ketentuan/store','SyaratController@store'); 
Route::get('/syarat_ketentuan/edit/{id}','SyaratController@edit');
Route::post('/syarat_ketentuan/update','SyaratController@update');
Route::get('/syarat_ketentuan/delete/{id}','SyaratController@destroy'); 



//jadwal
Route::get('/jadwal_ppmb','JadwalController@index'); 
Route::get('/jadwal_ppmb/create','JadwalController@create');
Route::post('/jadwal_ppmb/store','JadwalController@store');
Route::get('/jadwal_ppmb/edit/{id}','JadwalController@edit');
Route::post('/jadwal_ppmb/update','JadwalController@update');
Route::get('/jadwal_ppmb/delete/{id}','JadwalController@destroy');

// det jadwal
Route::get('/detjadwal_ppmb','detJadwalController@index'); 
Route::get('/detjadwal_ppmb/create','detJadwalController@create');
Route::post('/detjadwal_ppmb/store','detJadwalController@store');
Route::get('/detjadwal_ppmb/edit/{id}','detJadwalController@edit');
Route::post('/detjadwal_ppmb/update','detJadwalController@update');
Route::get('/detjadwal_ppmb/delete/{id}','detJadwalController@destroy');
//for user
Route::get('/detjadwal_ppmb_user','detJadwalController@user');

//periode
Route::get('/periode','PeriodeController@index'); 
Route::get('/periode/create','PeriodeController@create');
Route::post('/periode/store','PeriodeController@store');
Route::get('/periode/edit/{id}','PeriodeController@edit');
Route::post('/periode/update','PeriodeController@update');
Route::get('/periode/delete/{id}','PeriodeController@destroy');

Route::get('tampilan/sekolah/viewsek','sekolahController@index');
Route::get('tampilan/sekolah/createsek','sekolahController@create');
Route::post('sekolahModel','sekolahController@store');
Route::get('tampilan/sekolah/{a}','sekolahController@edit');
Route::post('tampilan/sekolah/{b}','sekolahController@update');
Route::get('tampilan/sekolah/hps/{id}','sekolahController@destroy');


Route::get('tampilan/jurusan/viewjur','jurusanController@index');
Route::get('tampilan/jurusan/createjur','jurusanController@create');
Route::post('jurusanModel','jurusanController@store');
Route::post('jurusanModel','jurusanController@store');
Route::get('tampilan/jurusan/{a}','jurusanController@edit');
Route::post('tampilan/jurusan/{b}','jurusanController@update');
Route::get('tampilan/jurusan/del/{id}','jurusanController@destroy');
Route::get('tampilan/daerah/viewdae','daerahController@index');

Route::get('tampilan/daerah/createdae','daerahController@create');
Route::post('daerahModel','daerahController@store');
Route::post('daerahModel','daerahController@store');
Route::get('tampilan/daerah/{a}','daerahController@edit');
Route::post('tampilan/daerah/{b}','daerahController@update');
Route::get('tampilan/daerah/delet/{id}','daerahController@destroy');

Route::get('tampilan/angkatan/viewang','angkatanController@index');
Route::get('tampilan/angkatan/createang','angkatanController@create');

Route::get('tampilan/daerah/viewdae','daerahController@index');
Route::get('tampilan/daerah/createdae','daerahController@create');


Route::get('struktur_organisasi','orgPUBController@index');
Route::get('struktur_organisasi/tambah/','orgPUBController@create');
Route::post('struktur_organisasi/store/','orgPUBController@store');
Route::get('struktur_organisasi/edit/{x}','orgPUBController@edit');
Route::post('struktur_organisasi/update/{y}','orgPUBController@update');
Route::get('struktur_organisasi/hapus/{z}','orgPUBController@destroy');

Route::get('status_pub','statusPubController@index');
Route::get('status_pub/tambah/','statusPubController@create');
Route::post('status_pub/store/','statusPubController@store');
Route::get('status_pub/edit/{x}','statusPubController@edit');
Route::post('status_pub/update/{y}','statusPubController@update');
Route::get('status_pub/hapus/{z}','statusPubController@destroy'); 	

Route::get('alumni','alumniController@index');
Route::get('alumni/aktivitas','alumniController@aktivitas');
Route::post('alumni/aktivitas/tampil','alumniController@aktivitasTampil');

Route::get('detorg_pub','detOrgPubController@index');
Route::get('detorg_pub/tambah/','detOrgPubController@create');
Route::post('detorg_pub/store','detOrgPubController@store');
Route::get('detorg_pub/edit/{x}','detOrgPubController@edit');
Route::post('detorg_pub/update/{x}','detOrgPubController@update');
Route::get('detorg_pub/hapus/{x}','detOrgPubController@destroy'); 	

Route::get('Alumni_admin/det_pelatihan','detPelatihanController@index');
Route::get('Alumni_admin/det_pelatihan/tambah/','detPelatihanController@create');
Route::post('Alumni_admin/det_pelatihan/store/','detPelatihanController@store');
Route::get('Alumni_admin/det_pelatihan/edit/{x}','detPelatihanController@edit');
Route::post('Alumni_admin/det_pelatihan/update/{x}','detPelatihanController@update');
Route::get('Alumni_admin/det_pelatihan/hapus/{x}','detPelatihanController@destroy'); 	


Route::get('alumni/aktivitas','alumniController@aktivitas');
Route::post('alumni/aktivitas/tampil','alumniController@aktivitasTampil');

Route::get('alumni','alumniController@index');
Route::get('tambah/mahasiswa','alumniController@create');
Route::get('mahasiswa','mahasiswaController@index');
Route::get('tambah/mahasiswa','mahasiswaController@create');
Route::post('simpan/mahasiswa','mahasiswaController@store');
Route::get('mahasiswaEdit/{id}','mahasiswaController@edit');
Route::post('mahasiswaEdit/{id}','mahasiswaController@update');
Route::get('mahasiswaHapus/{id}','mahasiswaController@destroy');

Route::post('angkatanModel','angkatanController@store');

Route::post('lanjut','alumniController@store');
Route::get('lanjut/pengalaman','alumniController@index2');
Route::get('tambahAlumni','alumniController@index3');

Route::post('tambah/pendidikan','alumniController@store3');
Route::get('infaq','alumniController@infaq_view');
Route::get('tambahInfaq','alumniController@tambahInfaq');
Route::post('tambahInfaq','alumniController@simpanInfaq');
Route::get('editInfaq/{id}','alumniController@editInfaq');
Route::post('editInfaq/{id}','alumniController@updateInfaq');
Route::get('hapusInfaq/{id}','alumniController@hapusInfaq');


Route::get('strukturOrgAlumni','alumniController@strukturOrgAlumni');
Route::get('tambahStrukAlumni', 'alumniController@tambahStrukAlumni');
Route::post('storeStrukAlumni', 'alumniController@storeStrukAlumni');
Route::get('hapusStrukAlumni/{x}', 'alumniController@hapusStrukAlumni');
Route::get('editStrukAlumni/{x}', 'alumniController@editStrukAlumni');
Route::post('updateStrukAlumni/{x}', 'alumniController@updateStrukAlumni');



Route::get('kegiatanAlumni','alumniController@kegiatanAlumni');
Route::get('tambahDokAlumni', 'alumniController@tambahDokAlumni');
Route::post('storeDokAlumni', 'alumniController@storeDokAlumni');
Route::get('hapusDokAlumni/{x}', 'alumniController@hapusDokAlumni');
Route::get('editDokAlumni/{x}', 'alumniController@editDokAlumni');
Route::post('updateDokAlumni/{x}', 'alumniController@updateDokAlumni');

Route::get('pelatihan/index/','pelatihanController@index');

Route::get('pelatihan/tambah/','pelatihanController@create');
Route::post('pelatihan/store/','pelatihanController@store');
Route::get('pelatihan/edit/{x}','pelatihanController@edit');
Route::post('pelatihan/update/{x}','pelatihanController@update');
Route::get('pelatihan/hapus/{x}','pelatihanController@destroy');


Route::get('/pub_dok/upload', 'pubDokController@upload');
Route::post('/pub_dok/proses', 'pubDokController@proses_upload');
Route::get('tambahTahun', 'hasilController@tambahTahun');

Route::get('dokumentasiPub','dokumentasiPubController@index');
Route::get('tambah_pubdok','dokumentasiPubController@create');
Route::post('simpan/kegiatan','dokumentasiPubController@store');
Route::get('edit/kegiatan/{x}','dokumentasiPubController@edit');
Route::post('edit/kegiatan/{x}','dokumentasiPubController@update');
Route::get('hapus/kegiatan/{x}','dokumentasiPubController@destroy');

// Route::get('/pub_dok/upload', 'dokumentasiPubController@upload');
// Route::post('/pub_dok/proses', 'dokumentasiPubController@proses_upload');
// Route::get('tambahTahun', 'ppmbDokController@tambahTahun');

Route::get('tambahTPA/{x}', 'hasilController@tambahTPA');
Route::post('storeTPA/{x}', 'hasilController@storeTPA');
Route::post('storeTahun', 'hasilController@storeTahun');
Route::get('hasilSeleksi', 'hasilController@hasil');
Route::post('hasil2', 'hasilController@hasil2');
Route::get('dataTPA/{x}', 'hasilController@dataTPA');
Route::get('editTPA/{x}', 'hasilController@editTPA');
Route::post('updateTPA/{x}', 'hasilController@updateTPA');
Route::get('hapusTPA/{x}', 'hasilController@hapusTPA');

Route::get('dataPsikotes/{x}', 'hasilController@dataPsikotes');
Route::get('tambahPsi/{x}', 'hasilController@tambahPsi');
Route::post('storePsikotes/{x}', 'hasilController@storePsikotes');
Route::get('hapusPsi/{x}', 'hasilController@hapusPsi');
Route::get('editPsi/{x}', 'hasilController@editPsi');
Route::post('updatePsi/{x}', 'hasilController@updatePsi');

Route::get('det_pelatihan/','detPelatihanController@index');

Route::get('dataSurvei/{x}', 'hasilController@dataSurvei');
Route::get('tambahSurvei/{x}', 'hasilController@tambahSurvei');
Route::post('storeSurvei/{x}', 'hasilController@storeSurvei');
Route::get('hapusSurvei/{x}', 'hasilController@hapusSurvei');
Route::get('editSurvei/{x}', 'hasilController@editSurvei');
Route::post('updateSurvei/{x}', 'hasilController@updateSurvei');

Route::get('dataFinal/{x}', 'hasilController@dataFinal');
Route::get('tambahFinal/{x}', 'hasilController@tambahFinal');
Route::post('storeFinal/{x}', 'hasilController@storeFinal');
Route::get('hapusFinal/{x}', 'hasilController@hapusFinal');
Route::get('editFinal/{x}', 'hasilController@editFinal');
Route::post('updateFinal/{x}', 'hasilController@updateFinal');

Route::get('dokumentasi', 'ppmbDokController@dokumentasi');
Route::get('tambahDok', 'ppmbDokController@tambahDok');
Route::post('storeDok', 'ppmbDokController@storeDok');
Route::get('hapusDok/{x}', 'ppmbDokController@hapusDok');
Route::get('editDok/{x}', 'ppmbDokController@editDok');
Route::post('updateDok/{x}', 'ppmbDokController@updateDok');

//===================================USER=================================//
Route::get('/','userController@index');
Route::get('login','userController@login');
Route::post('login/masuk','userController@doLogin');
Route::get('user/mahasiswa','userController@view_mhs');
Route::post('tampil/angkatan','userController@view_dataMhs');
Route::get('tampilUser','userController@tampilUser');
Route::get('tambahUser','userController@tambahUser');
Route::post('tambahUser/store','userController@tambahUser_store');
Route::post('tambah/user','userController@simpanUser');
Route::get('pub_profile','userController@profile');
Route::get('ppmb_profile','userController@ppmb_profile');
Route::get('/jadwal_ppmb_user','UserController@jadwal_ppmb'); 
Route::get('/syarat_user','UserController@syarat_ketentuan');
Route::get('organisasi_ppmb','userController@organisasi_ppmb');
Route::get('organisasi_pub','userController@organisasi_pub');
Route::get('detail/org/{x}','userController@detail');
Route::get('pelatihan','userController@pelatihan');
Route::get('pelatihan_data','userController@pelatihan_data');
Route::get('kegiatanPub','userController@kegiatanPub');
Route::get('hasilSeleksi','userController@hasilSeleksi');
Route::post('hasilSeleksi','userController@tampilSeleksi');
Route::get('user_tpa/{x}','userController@user_tpa');
Route::get('user_survei/{x}','userController@user_survei');
Route::get('user_psikotes/{x}','userController@user_psikotes');
Route::get('user_final/{x}','userController@user_final');
Route::get('org_ikatan_alumni', 'userController@OrgIkatanAlumni');
Route::get('keg_ikatan_alumni', 'userController@KegIkatanAlumni');
Route::get('user_infaq', 'userController@user_infaq');
Route::get('user_alumni', 'userController@user_alumni');
Route::post('user_alumni/', 'userController@user_alumniView');

//================================ADMIN ALUMNI=============================//

Route::get('admin/alumni/{x}','alumni_adminController@index');
Route::get('admin/alumni/profile/{x}','alumni_adminController@profile');
Route::get('editProfil/{x}','alumni_adminController@editProfil');
Route::post('simpanProfil/edit/{x}','alumni_adminController@updateProfil');

Route::post('tambahFoto','alumni_adminController@store');
Route::get('tambahPend/{x}','alumni_adminController@tambahPnd');
Route::post('simpanPend','alumni_adminController@simpanPnd');

Route::get('tambahPeng/{x}','alumni_adminController@tambahPeng');
Route::post('tambah/pengalaman','alumni_adminController@simpanPeng');
Route::get('editPengalaman/{x}/{y}','alumni_adminController@editPengalaman');
Route::post('updatePengalaman','alumni_adminController@updatePengalaman');
