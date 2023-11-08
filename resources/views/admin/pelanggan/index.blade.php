@extends('admin.layout.appadmin')
@section('content')


<h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <a href="{{route('pelanggan.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Email</th>
                                            <th>Kartu</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $no=1 @endphp
                                    @foreach ($pelanggan as $sr)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$sr->kode}}</td>
                                            <td>{{$sr->nama}}</td>
                                            <td>{{$sr->jk}}</td>
                                            <td>{{$sr->tmp_lahir}}</td>
                                            <td>{{$sr->tgl_lahir}}</td>
                                            <td>{{$sr->email}}</td>
                                            <td>{{$sr->kartu->nama}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>

@endsection