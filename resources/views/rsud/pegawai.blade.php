@extends('layouts.template')
@section('content')


<!-- modal tambah data -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pegawai/tambah" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_bagian">Nama bagian</label>
                                    <select name="id_bagian" id="id_bagian" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih jabatan--</option>
                                        @foreach($bagian as $val)
                                        <option value="<?= $val->id_bagian ?>"><?= $val->bagian ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="nama produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="kontak_wa">kontak_wa</label>
                                    <input type="text" name="kontak_wa" class="form-control" placeholder="dekripsi">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- end-modal tambah data -->

<!-- modal edit data -->
@foreach($pegawai as $pg)
<div class="modal fade" id="modalEdit<?= $pg->id_pegawai ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/pegawai/update" method="post">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="id_pegawai" value="<?= $pg->id_pegawai ?>" class="form-control">
                                    <label for="id_bagian">Nama bagian</label>
                                    <select name="id_bagian" id="id_bagian" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->id_bagian ?>" selected><?= $pg->bagian ?></option>
                                        @foreach($pegawai as $row)
                                        <option value="<?= $row->id_bagian ?>"><?= $row->bagian ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" value="<?= $pg->nama ?>" class="form-control" placeholder="nama produk">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="kontak_wa">Kontak wa</label>
                                    <input type="text" name="kontak_wa" value="<?= $pg->kontak_wa ?>" class="form-control" placeholder="kontak_wa">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- end-modal edit data -->

<!-- modal hapus data -->
@foreach($pegawai as $row)
<div class="modal fade" id="modalHapus<?= $row->id_pegawai ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" value="<?= $row->id_pegawai ?>" name="id_pegawai">
                <p>Yakin ingin menghapus data ini...?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <a href="/pegawai/destroy/{{$row->id_pegawai}}" class="btn btn-warning">Hapus</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endforeach
<!-- end-modal hapus data -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="text-center">Data pegawai</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <!-- modal add-data -->
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalTambah">
                                <i class="fas fa-plus"></i>
                                <span class="ml-2">Tambah</span>
                            </button>
                            <!-- end-modal add-data -->
                        </div>
                        <!-- /.card-header -->
                        <div class="table-responsive">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Bagian</th>
                                            <th>Kontak WA</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php $i = 1 ?>
                                        @foreach($pegawai as $pgw)
                                        <tr>
                                            <td><b><?= $i++ ?></b></td>
                                            <td><?= $pgw->nama ?></td>
                                            <td><?= $pgw->bagian ?></td>
                                            <td><?= $pgw->kontak_wa ?></td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <!-- modal add-data -->
                                                    <button type="button" class="btn btn-info mr-1" data-toggle="modal" data-target="#modalEdit<?= $pgw->id_pegawai ?>">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <!-- end-modal add-data -->
                                                    <!-- modal hapus data -->
                                                    <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#modalHapus<?= $pgw->id_pegawai ?>">
                                                        <i class="far fa-trash-alt"></i>
                                                    </button>
                                                    <!-- end-modal hapus data -->
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- /.card -->
@endsection