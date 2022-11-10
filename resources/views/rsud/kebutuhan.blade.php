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
            <form action="/kebutuhan/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_pegawai">Nama pegawai</label>
                                    <select name="id_pegawai" id="id_pegawai" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih nama pegawai--</option>
                                        @foreach($pegawai as $val)
                                        <option value="<?= $val->id_pegawai ?>"><?= $val->nama ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jns_kbthn_teknis">Jenis kebutuhan teknis</label>
                                    <select name="jns_kbthn_teknis" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih jenis kebutuhan teknis--</option>
                                        <option value="SIMRS">SIMRS</option>
                                        <option value="NON-SIMRS">NON-SIMRS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="kebutuhan_tentang">Kebutuhan tentang</label>
                                    <input type="text" name="kbthn_tentang" class="form-control" placeholder="kebutuhan_tentang produk">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="deskripsi_kbthn">Deskripsi kebutuhan</label>
                                    <input type="text" name="deskripsi_kbthn" class="form-control" placeholder="dekripsi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="fotoVideo">Foto atau Video</label>
                                    <input type="file" name="fotoVideo" class="form-control">
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
@foreach($kebutuhan as $pg)
<div class="modal fade" id="modalEdit<?= $pg->id_kebutuhan ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/kebutuhan/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_pegawai">Nama pegawai</label>
                                    <input type="hidden" name="id_kebutuhan" value="<?= $pg->id_kebutuhan ?>" class="form-control">
                                    <select name="id_pegawai" id="id_pegawai" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->id_pegawai ?>" selected><?= $pg->nama ?></option>
                                        @foreach($pegawai as $val)
                                        <option value="<?= $val->id_pegawai ?>"><?= $val->nama ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="jns_kbthn_teknis">Jenis kebutuhan teknis</label>
                                    <select name="jns_kbthn_teknis" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->jns_kbthn_teknis ?>" selected><?= $pg->jns_kbthn_teknis ?></option>
                                        <option value="SIMRS">SIMRS</option>
                                        <option value="NON-SIMRS">NON-SIMRS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="kebutuhan_tentang">Kebutuhan tentang</label>
                                    <input type="text" value="<?= $pg->kbthn_tentang ?>" name="kbthn_tentang" class="form-control" placeholder="kebutuhan_tentang produk">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="deskripsi_kbthn">Deskripsi kebutuhan</label>
                                    <input type="text" value="<?= $pg->deskripsi_kbthn ?>" name="deskripsi_kbthn" class="form-control" placeholder="dekripsi">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="fotoVideo">Foto atau Video</label>
                                    <input type="file" name="fotoVideo" class="form-control">
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
@foreach($kebutuhan as $row)
<div class="modal fade" id="modalHapus<?= $row->id_kebutuhan ?>">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" class="form-control" value="<?= $row->id_kebutuhan ?>" name="id_kebutuhan">
                <p>Yakin ingin menghapus data ini...?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <a href="/kebutuhan/destroy/{{$row->id_kebutuhan}}" class="btn btn-warning">Hapus</a>
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
                    <h1 class="text-center">Data kebutuhan</h1>
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
                                            <th>Jenis kebutuhan teknis</th>
                                            <th>Kebutuhan tentang</th>
                                            <th>Deskripsi kebutuhan</th>
                                            <th>Foto / Video</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php $i = 1 ?>
                                        @foreach($kebutuhan as $kbthn)
                                        <tr>
                                            <td><b><?= $i++ ?></b></td>
                                            <td><?= $kbthn->nama ?></td>
                                            <td><?= $kbthn->jns_kbthn_teknis ?></td>
                                            <td><?= $kbthn->kbthn_tentang ?></td>
                                            <td><?= $kbthn->deskripsi_kbthn ?></td>
                                            <td>
                                                <img src="/fotoVideo/<?= $kbthn->fotoVideo ?>" alt="error" width="65" height="70">
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center">
                                                    <!-- modal add-data -->
                                                    <button type="button" class="btn btn-info mr-1" data-toggle="modal" data-target="#modalEdit<?= $kbthn->id_kebutuhan ?>">
                                                        <i class="far fa-edit"></i>
                                                    </button>
                                                    <!-- end-modal add-data -->
                                                    <!-- modal hapus data -->
                                                    <button type="button" class="btn btn-danger ml-1" data-toggle="modal" data-target="#modalHapus<?= $kbthn->id_kebutuhan ?>">
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