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
    </div>
</div>

<?= view($config->theme['panel'] . '_message_block') ?>
<div class="card">
    <div class="card-body">
        <form method="post">
            <div class="row">
                <div class="col-md-8">
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
                            <select name="status" id="status" class="form-select" required>
                                <?php foreach (getstatus() as $s) : ?>
                                    <option value="<?= $s['num'] ?>" <?= $item->status == $s['num'] ? 'selected' : '' ?>><?= $s['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="status">Status</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="number" class="form-control" id="nik" name="nik" placeholder="Masukan nik" required value="<?= $item->nik ?>">
                            <label for="nik">NIK</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
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
                            <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" required>
                                <option value="Laki-laki" <?= $item->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                <option value="Perempuan" <?= $item->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
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
                            <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px" required><?= $item->alamat ?></textarea>
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
                            <label for="tanggal_mulai">Tanggal Mulai</label>
                            <div id="tanggal_mulai" class="form-text">Isikan Tanggal Mulai Masuk</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" placeholder="Tanggal selesai" required value="<?= $item->tanggal_selesai ?>" aria-describedby="tanggal_selesai">
                            <label for="tanggal_selesai">Tanggal Selesai</label>
                            <div id="tanggal_selesai" class="form-text">Isikan Tanggal Selesai</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">

                        <div class="form-floating">
                            <select class="form-select" aria-label="Default select example" id="jenis_kelas" name="jenis_kelas" required value="<?= old('jenis_kelas') ?>">
                                <option value="">Pilih Jenis Kelas</option>
                                <?php foreach ($jenisKelas as $jk) : ?>
                                    
                                    <option value="<?= $jk->nama ?>" <?= ($item->jenis_kelas == $jk->nama) ? 'selected' : '' ?>><?= $jk->nama ?></option>
                                <?php endforeach; ?>

                            </select>
                            <label for="jenis_kelas">Jenis Kelas</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="text-start">
                        <a href="<?= route_to('pendaftar') ?>" class="btn btn-sm btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>