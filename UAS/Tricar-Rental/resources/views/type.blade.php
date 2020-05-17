@extends('Dashboard')
@section('title','Type')
@section('judul','Data Type')
@section('konten')
<div class="card mb-4">
    <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Mobil</div>
    <div class="card-body">
        <div class="col-6 mt-2">
            <a href="/type/tambah" class="btn btn-primary text-white">                
                Add Type
            </a>
        </div><br>
        <div class="table table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">            
                <thead>
                    <th>No</th>
                    <th>Kode Type</th>
                    <th>Nama Type</th> 
                    <th>Button</th>                   
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($type['data'] as $ty)
                        <tr>
                            <td>{{ $no }} <?php $no++; ?></td>
                            <td>{{ $ty['kode_type'] }}</td>
                            <td>{{ $ty['nama_type'] }}</td>
                            <td>
                                <a href="/type/delete/{{ $ty['id_type'] }}" class="btn btn-danger">Delete</a>
                                <a href="/type/update/{{ $ty['id_type'] }}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection