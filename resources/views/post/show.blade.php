@extends('layouts.main')

@section('content')
    <img src="" alt="gambar" class="w-100 rounded">
    <p><strong>{{ $post->nama }}</strong></p>
    <p>{{ $post->nis }}</p>
    <p>{{ $post->kelas }}</p>
    <p>{!! $post->alamat !!}</p>
@endsection
