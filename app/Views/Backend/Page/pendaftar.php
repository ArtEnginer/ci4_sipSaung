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
                    <table class="table table-striped app-table-hover datatables-init" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>status</th>
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
                                    <td>
                                        <?php
                                        $status = getStatusObj($item->status);
                                        ?>
                                        <!-- dropdown -->
                                        <div class="dropdown">
                                            <button class="badge bg-<?= $status['style'] ?>" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= $status['name'] ?>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="<?= route_to('pendaftar-detail', $item->id) ?>">Detail</a></li>
                                                <!-- pending -->
                                                <?php if ($item->status != 100) : ?>
                                                    <li><a class="dropdown-item" href="<?= route_to('pendaftar-pending', $item->id) ?>">Pending</a></li>
                                                <?php endif ?>
                                                <!-- diterima -->
                                                <?php if ($item->status != 200) : ?>
                                                    <li><a class="dropdown-item" href="<?= route_to('pendaftar-konfirm', $item->id) ?>">Diterima</a></li>
                                                <?php endif ?>
                                                <!-- ditolak -->
                                                <?php if ($item->status != 300) : ?>
                                                    <li><a class="dropdown-item" href="<?= route_to('pendaftar-tolak', $item->id) ?>">Ditolak</a></li>
                                                <?php endif ?>
                                                <li><a class="dropdown-item" href="<?= route_to('pendaftar-delete', $item->id) ?>">Hapus</a></li>
                                            </ul>
                                        </div>

                                    
                                    </td>
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