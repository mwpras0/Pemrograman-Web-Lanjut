@extends('Dashboard')
@section('title','Mobil')
@section('judul','Data Mobil')
@section('konten')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Mobil</div>
    <div class="card-body">
        <div class="col-6 mt-2">
            <a href="/Mobil/tambah" class="btn btn-primary text-white">                
                Add Mobil
            </a>
        </div><br>
        <div class="table table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">            
                <thead>
                    <th>No</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>No Plat</th>
                    <th>Warna</th>
                    <th>Tahun</th>
                    <th>Harga</th>
                    <th>Status</th>                    
                    <th>Button</th>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($mobil['data'] as $car)
                        <tr>
                            <td>{{ $no }} <?php $no++; ?></td>
                            <td>{{ $car['type'] }}</td>
                            <td>{{ $car['merk'] }}</td>
                            <td>{{ $car['no_plat'] }}</td>
                            <td>{{ $car['warna'] }}</td>
                            <td>{{ $car['tahun'] }}</td>
                            <td>{{ $car['harga'] }}</td>
                            <td>{{ $car['status'] }}</td>                            
                            <td>
                                <a href="/Mobil/delete/{{ $car['id_mobil'] }}" class="btn btn-danger">Delete</a>
                                <a href="/Mobil/update/{{ $car['id_mobil'] }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection