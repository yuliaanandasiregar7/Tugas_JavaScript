@php
$nama = "Nanda";
$nilai = 59.99;
@endphp

@if ($nilai >= 60) @php $ket = "lulus"; @endphp
@else @php $ket = "gagal"; @endphp
@endif

Siswa {{ $nama }} dengan nilai {{nilai}} dinyatakan {{ $ket }}