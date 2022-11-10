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
            <form action="/administrasi/tambah" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="id_kebutuhan">Jenis kebutuhan teknis</label>
                                    <select name="id_kebutuhan" id="id_kebutuhan" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih jenis kebuthan teknis--</option>
                                        @foreach($kbthn as $val)
                                        <option value="<?= $val->id_kebutuhan ?>"><?= $val->jns_kbthn_teknis ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="urgenci">Jenis kebutuhan teknis</label>
                                    <select name="urgenci" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih urgenci--</option>
                                        <option value="urgent">Urgent</option>
                                        <option value="medium">Medium</option>
                                        <option value="low">Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih kategori--</option>
                                        <option value="laporan">Laporan</option>
                                        <option value="permintaan">Permintaan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="progres">Progres</label>
                                    <select name="progres" class="form-control select2" style="width: 100%;">
                                        <option selected>--pilih progres--</option>
                                        <option value="dipelajari">Dipelajari</option>
                                        <option value="dikerjakan">Dikerjakan</option>
                                        <option value="selesai">Selesai</option>
                                        <option value="dicanangkan">Dicanangkan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="pic">PIC</label>
                                    <input type="text" name="pic" class="form-control">
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
@foreach($adm as $pg)
<div class="modal fade" id="modalEdit<?= $pg->id_kebutuhan ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/administrasi/update" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="hidden" name="id_adm" value="<?= $pg->id_adm ?>" class="form-control">
                                    <label for="id_kebutuhan">Jenis kebutuhan teknis</label>
                                    <select name="id_kebutuhan" id="id_kebutuhan" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->id_adm ?>" selected><?= $val->jns_kbthn_teknis ?></option>
                                        @foreach($kbthn as $val)
                                        <option value="<?= $val->id_kebutuhan ?>"><?= $val->jns_kbthn_teknis ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="urgenci">Urgenci</label>
                                    <select name="urgenci" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->urgenci ?>" selected><?= $pg->urgenci ?></option>
                                        @foreach($adm as $vals)
                                        <option value="<?= $vals->urgenci ?>"><?= $vals->urgenci ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <select name="kategori" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->kategori ?>" selected><?= $pg->kategori ?></option>
                                        @foreach($adm as $vals)
                                        <option value="<?= $vals->kategori ?>"><?= $vals->kategori ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="progres">Progres</label>
                                    <select name="progres" class="form-control select2" style="width: 100%;">
                                        <option value="<?= $pg->progres ?>" selected><?= $pg->progres ?></option>
                                        @foreach($adm as $vals)
                                        <option value="<?= $vals->progres ?>"><?= $vals->progres ?></option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="pic">PIC</label>
                                    <input type="text" name="pic" value="<?= $pg->pic ?>" class="form-control">
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
@foreach($adm as $row)
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
                    <h1 class="text-center">Data Administrasi</h1>
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
                                            <th>Jenis kebutuhan teknis</th>
                                            <th>Urgenci</th>
                                            <th>Kategori</th>
                                            <th>Progres</th>
                                            <th>Foto / video</th>
                                            <th>Pic</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <?php $i = 1 ?>
                                        @foreach($adm as $kbthn)
                                        <tr>
                                            <td><b><?= $i++ ?></b></td>
                                            <td><?= $kbthn->jns_kbthn_teknis ?></td>
                                            <td><?= $kbthn->urgenci ?></td>
                                            <td><?= $kbthn->kategori ?></td>
                                            <td><?= $kbthn->progres ?></td>
                                            <td>
                                                <img src="/fotoVideo/<?= $kbthn->fotoVideo ?>" alt="error" width="65" height="70">
                                            </td>
                                            <td><?= $kbthn->pic ?></td>
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