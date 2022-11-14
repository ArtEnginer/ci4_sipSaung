<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main'); ?>
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

        <div class="row justify-space-arround">
            <div class="col">
                <div class="text-start">
                    <a href="<?= route_to('pendaftar') ?>" class="badge bg-primary">Kembali</a>
                </div>
            </div>
            <div class="col">
                <div class="text-end">
                    <?php
                    $status = getStatusObj($item->status);

                    ?>
                    <div class="dropdown">
                        <button class="btn btn-<?= $status['style'] ?>" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                </div>
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
                <form method="post">
                    <input type="hidden" name="status" value="100">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required value="<?= $item->nama ?>">
                                    <label for="nama">Nama Lengkap</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan nik" required value="<?= $item->nik ?>">
                                    <label for="nik">NIK</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN" required value="<?= $item->nisn ?>">
                                    <label for="nisn">NISN</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required value="<?= $item->tempat_lahir ?>">
                                    <label for="tempat_lahir">Tempat Lahir Lengkap</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required value="<?= $item->tanggal_lahir ?>">
                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" required value="<?= $item->jenis_kelamin ?>">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukan Agama" required value="<?= $item->agama ?>">
                                    <label for="agama">Agama</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px" required value="<?= $item->alamat ?>"></textarea>
                                    <label for="alamat">Alamat Lengkap</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukan Asal Sekolah" required value="<?= $item->asal_sekolah ?>">
                                    <label for="asal_sekolah">Asal Sekolah</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Hp" required value="<?= $item->no_hp ?>">
                                    <label for="no_hp">No Hp</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required value="<?= $item->email ?>">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukan Nama Ayah" required value="<?= $item->nama_ayah ?>">
                                    <label for="nama_ayah">Nama Ayah</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukan Nama Ibu" required value="<?= $item->nama_ibu ?>">
                                    <label for="nama_ibu">Nama Ibu</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="no_hp_ortu" name="no_hp_ortu" placeholder="Masukan No Hp Orang Tua" required value="<?= $item->no_hp_ortu ?>">
                                    <label for="no_hp_ortu">No Hp Orang Tua</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" placeholder="Isikan Tanggal mulai" required value="<?= $item->tanggal_mulai ?>" aria-describedby="tanggal_mulai">
                                    <div id="tanggal_mulai" class="form-text">Isikan Tanggal Mulai Masuk</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="Tanggal selesai" required value="<?= $item->tanggal_selesai ?>" aria-describedby="tanggal_selesai">
                                    <div id="tanggal_selesai" class="form-text">Isikan Tanggal Selesai</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <div class="form-floating">
                                    <select class="form-select" aria-label="Default select example" id="jenis_kelas" name="jenis_kelas" required value="<?= $item->jenis_kelas ?>">
                                        <option selected>Pilih Jenis Kelas</option>
                                        <option value="Reguler">Reguler</option>
                                        <option value="Khusus">Khusus</option>
                                    </select>
                                    <label for="jenis_kelas">Jenis Kelas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>