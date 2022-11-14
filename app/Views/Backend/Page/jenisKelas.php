<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Data Kelas</h3>
                <ol class="breadcrumb mb-0 p-0 bg-transparent">

                    <li class="breadcrumb-item active">Jenis Kelas</li>
                </ol>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-end">
                    <a href="<?= route_to('jenis-kelas-add') ?>" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= view($config->theme['panel'] . '_message_block') ?>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="app-table-responsive">
                    <table class="table table-striped app-table-hover datatables-init" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($items as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->deskripsi ?></td>
                                    <td>
                                        <a href="<?= route_to('jenis-kelas-edit', $item->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="<?= route_to('jenis-kelas-delete', $item->id) ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>