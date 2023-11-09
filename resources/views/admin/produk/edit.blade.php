@extends('admin.layout.appadmin')
@section('content')



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@foreach($produk as $s)
<form method="POST" action="{{url('admin/produk/update/'.$s->id)}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Kode</label> 
    <div class="col-8">
      <input id="text" name="kode" type="text" class="form-control" value="{{$s->kode}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="text1" name="nama" type="text" class="form-control" value="{{$s->nama}}">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Harga beli</label> 
    <div class="col-8">
      <input id="text2" name="harga_beli" type="text" class="form-control" value="{{$s->harga_beli}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Harga jual</label> 
    <div class="col-8">
      <input id="text3" name="harga_jual" type="text" class="form-control" value="{{$s->harga_jual}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">stok</label> 
    <div class="col-8">
      <input id="text4" name="stok" type="text" class="form-control" value="{{$s->stok}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="text4" class="col-4 col-form-label">Minimal stok</label> 
    <div class="col-8">
      <input id="text4" name="min_stok" type="text" class="form-control" value="{{$s->min_stok}}">
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="select" name="jenis_produk_id" class="custom-select">
        @foreach ($jenis_produk as $j)
        @php $sel = ($j->id == $s->jenis_produk_id) ? 'selected' : '';@endphp
        <option value="{{$j->id}}">{{$j->nama}}</option>
       @endforeach
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endforeach
@endsection