@extends('admin.layout.appadmin')
@section('content')

@foreach ($produk as $p)
<h1>{{$s->kode}}</h1>
@endforeach

@endsection