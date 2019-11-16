@extends('base')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active">Kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#modal-default">
                            Tambah
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:50px">ID</th>
                                <th>Nama</th>
                                <th style="width:150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($kategori as $data)

                            <tr>
                                <td style="width:50px">{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td style="width:150px">
                                    <button class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-default">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-pen"></i>
                                        </span>
                                        <span class="text">Edit</span>
                                    </button>
                                    <a href="/kategori/delete/{{ $data->id }}" class="btn btn-danger btn-flat">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Hapus</span>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width:50px">ID</th>
                                <th>Nama</th>
                                <th style="width:150px">Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{ route('kategoriAdd') }}">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambah Kategori</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <input class="form-control" name="name" placeholder="Makanan, Minuman, ..">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</section>
<!-- /.content -->
@endsection
