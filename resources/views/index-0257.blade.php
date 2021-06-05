<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('dist/style.css')}}">
</head>
<body>
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
    <div class="container mt-3">
    <h2 class="mt-5">Data Kelas</h2>
<p class="lead">Data Kelas</p>
<form action="{{ url('/') }}" method="GET">
    <div class="d-flex justify-content-between pt-2">
        <div class="d-flex">
            <div class="mr-2 mb-2">
                <select name="pelajaran" id="pelajaran" class="form-control">
                    <option value="" selected disabled>Pilih Mata Pelajaran</option>
                    @foreach ($pelajaran as $item)
                        <option value="{{ $item->mengajar}} ">{{ $item->mengajar}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mr-2 mb-2">
                <button type="submit" class="btn btn-primary">Apply</button>
                <a href="{{ url('/') }}" class="btn btn-warning">Reset</a>
            </div>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Siswa</th>
            <th scope="col">Guru</th>
            <th scope="col">Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->siswa }}</td>
                <td>{{ $item->guru }}</td>
                <td>{{ $item->pelajaran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
    <div class="footer">
		<center>Copyright &copy; 2021 - <a href="facebook.com/lavonte12">AchmadS</a></center>
	</div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>