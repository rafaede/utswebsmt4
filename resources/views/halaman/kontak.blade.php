@extends('layout/aplikasi')

@section('konten')
<h1>{{$judul}}</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non vitae labore numquam, fugiat expedita itaque quo necessitatibus delectus aut quis!
<p>
    <ul>
        <li>Email: {{$kontak['email']}}</li>
        <li>Youtube: {{$kontak['youtube']}}</li>
    </ul>
</p>
@endsection
        
    