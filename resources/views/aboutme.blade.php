<!DOCTYPE html>
<html>
	<head>
 		<title>Tugas Praktikum 2</title>
 		<link rel="stylesheet" type="text/css" href="{{asset('dist/style.css')}}">
	</head>
<body>
</div>
	<div class="menu">
		<div id="heading">
            <a href="#">Praktikum PTW</a>
        </div>
		<ul id="navigasi">
			<li><a href="/">Home</a></li>
 			<li><a href="aboutme">Tentang Saya</a></li>
 			<li><a href="artikel">Artikel</a></li>
			<li><a href="{{ route('siswa.index') }}">Siswa</a></li>
		</ul>
	</div>
	<div class="content">
	<h1 align="center">BIODATA DIRI</h1>
	<table width="745" border="1" cellspacing="0" cellpadding="5" align="center">
		<tr align="center" bgcolor="#66CC33">
		<td width="174">DATA DIRI</td>
		<td width="353">KETERANGAN</td>
		<td width="232">FOTO</td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>Achmad Suhaimi</td>
		<td rowspan="10" align="center"><img src="dist/Ami.jpg" width="210" height="313"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td>achmadsuhaimi1@gmail.com</td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>Teknik Informatika (TI)</td>
	</tr>
	<tr>
		<td>Jenjang</td>
		<td>Strata-1 (S1)</td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>Laki-laki</td>
	</tr>
	<tr>
		<td>Tempat/Tanggal Lahir</td>
		<td>Surabaya, 13 September 2000</td>
	</tr>
	<tr>
		<td>Perguruan Tinggi</td>
		<td>Universitas 17 Agustus Surabaya</td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td>Jl Karang Rejo Sawah Gg 8/8</td>
	</tr>
	<tr>
		<td>Hobi</td>
		<td>Bermain Game</td>
	</tr>
	</table>
	</div>
	<div class="footer">
		<center>Copyright &copy; 2021 - <a href="facebook.com/lavonte12">AchmadS</a></center>
	</div>
</body>
</html>