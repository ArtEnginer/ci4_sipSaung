<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Data Pendaftar</h3>
                <ol class="breadcrumb mb-0 p-0 bg-transparent">

                    <li class="breadcrumb-item active">Pendaftar</li>
                </ol>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="text-end">
                    <a href="<?= route_to('pendaftar-add') ?>" class="btn btn-primary">Tambah Data</a>
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
                <div class="table-responsive">
                    <table class="table table-striped app-table-hover datatables-laporan" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>NISN</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Agama</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Nomor HP Ortu</th>
                                <th>Asal Instansi</th>
                                <th>Jenis Kelas</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($items as $item) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $item->nama ?></td>
                                    <td><?= $item->nik ?></td>
                                    <td><?= $item->nisn ?></td>
                                    <td><?= $item->tempat_lahir ?></td>
                                    <td><?= $item->tanggal_lahir ?></td>
                                    <td><?= $item->jenis_kelamin ?></td>
                                    <td><?= $item->alamat ?></td>
                                    <td><?= $item->email ?></td>
                                    <td><?= $item->no_hp ?></td>
                                    <td><?= $item->agama ?></td>
                                    <td><?= $item->nama_ayah ?></td>
                                    <td><?= $item->nama_ibu ?></td>
                                    <td><?= $item->no_hp_ortu ?></td>
                                    <td><?= $item->asal_sekolah ?></td>
                                    <td><?= $item->jenis_kelas ?></td>
                                    <td><?= $item->tanggal_mulai ?></td>
                                    <td><?= $item->tanggal_selesai ?></td>
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