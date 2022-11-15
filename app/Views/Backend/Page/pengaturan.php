<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Pengaturan</h3>
                <ol class="breadcrumb mb-0 p-0 bg-transparent">

                    <li class="breadcrumb-item active">web</li>
                </ol>

            </div>
        </div>
    </div>
</div>

<?= view($config->theme['panel'] . '_message_block') ?>
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header text-center">
                <span class="">
                    Judul Website
                </span>
            </div>
            <div class="card-body">
                <form action="<?= route_to('pengaturan-judul-edit') ?>" method="post">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan judul Web" required value="<?= $items->judul ?>">
                        <label for="judul">Judul Website</label>
                    </div>

                    <div class="form-group text-center mt-3">
                        <button class="app-btn app-btn-sm app-btn-primary">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                <span class="">
                    Deskripsi
                </span>
            </div>
            <div class="card-body">
                <form action="<?= route_to('pengaturan-deskripsi-edit') ?>" method="post">
                    <div class="form-floating">
                        <textarea class="form-control" name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $items->deskripsi ?></textarea>
                        <label for="deskripsi">Deskripsi</label>
                    </div>

                    <div class="form-group text-center mt-3">
                        <button class="app-btn app-btn-sm app-btn-primary">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-3">
        <div class="card">
            <div class="card-header text-center">
                <span class="">
                    Alamat
                </span>
            </div>
            <div class="card-body">
                <div class="text-end">
                    <a href="<?= route_to('alamat-add') ?>" class="btn btn-sma btn-primary">Tambah</a>
                </div>
                <table class="table datatable-init">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $numLoop = 0;
                        foreach ($alamat as $a) :
                            $nl = $numLoop++;

                        ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a->jenis ?></td>
                                <td><?= $a->isi ?></td>
                                <td>

                                    <a href="<?= route_to('alamat-edit', $nl) ?>" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit
                                    "></i>
                                    </a>
                                    <a href="<?= route_to('alamat-delete', $nl) ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash
                                    "></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <span class="">
                    Sosial Media
                </span>
            </div>
            <div class="card-body">
                <div class="text-end">
                    <a href="<?= route_to('sosmed-add') ?>" class="btn btn-sma btn-primary">Tambah</a>
                </div>
                <table class="table datatable-init">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $numLoop = 0;
                        foreach ($sosmed as $a) :
                            $nl = $numLoop++;

                        ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a->jenis ?></td>
                                <td><?= $a->isi ?></td>
                                <td>

                                    <a href="<?= route_to('sosmed-edit', $nl) ?>" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit
                                    "></i>
                                    </a>
                                    <a href="<?= route_to('sosmed-delete', $nl) ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash
                                    "></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <span class="">
                    Contact
                </span>
            </div>
            <div class="card-body">
                <div class="text-end">
                    <a href="<?= route_to('contact-add') ?>" class="btn btn-sma btn-primary">Tambah</a>
                </div>
                <table class="table datatable-init">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis</th>
                            <th>Isi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        $numLoop = 0;
                        foreach ($contact as $a) :
                            $nl = $numLoop++;

                        ?>

                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $a->jenis ?></td>
                                <td><?= $a->isi ?></td>
                                <td>

                                    <a href="<?= route_to('contact-edit', $nl) ?>" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit
                                    "></i>
                                    </a>
                                    <a href="<?= route_to('contact-delete', $nl) ?>" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash
                                    "></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection() ?>