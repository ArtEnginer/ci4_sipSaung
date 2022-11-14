    <div class="row">
        <div class="col-md-12">
            <?= view($config->theme['landing'] . '_message_block') ?>
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required value="<?= old('nama') ?>">
                                <label for="nama">Nama Lengkap</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan nik" required value="<?= old('nik') ?>">
                                <label for="nik">NIK</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukan NISN" required value="<?= old('nisn') ?>">
                                <label for="nisn">NISN</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required value="<?= old('tempat_lahir') ?>">
                                <label for="tempat_lahir">Tempat Lahir Lengkap</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" required value="<?= old('tanggal_lahir') ?>">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Default select example" id="jenis_kelamin" name="jenis_kelamin" required value="<?= old('jenis_kelamin') ?>">
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
                                <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukan Agama" required value="<?= old('agama') ?>">
                                <label for="agama">Agama</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="alamat" name="alamat" style="height: 100px" required value="<?= old('alamat') ?>"></textarea>
                                <label for="alamat">Alamat Lengkap</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukan Asal Sekolah" required value="<?= old('asal_sekolah') ?>">
                                <label for="asal_sekolah">Asal Sekolah</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Masukan No Hp" required value="<?= old('no_hp') ?>">
                                <label for="no_hp">No Hp</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email" required value="<?= old('email') ?>">
                                <label for="email">Email</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="Masukan Nama Ayah" required value="<?= old('nama_ayah') ?>">
                                <label for="nama_ayah">Nama Ayah</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="Masukan Nama Ibu" required value="<?= old('nama_ibu') ?>">
                                <label for="nama_ibu">Nama Ibu</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="no_hp_ortu" name="no_hp_ortu" placeholder="Masukan No Hp Orang Tua" required value="<?= old('no_hp_ortu') ?>">
                                <label for="no_hp_ortu">No Hp Orang Tua</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" placeholder="Masukan Tanggal Masuk" required value="<?= old('tanggal_masuk') ?>" aria-describedby="tanggal_masuk">
                                <div id="tanggal_masuk" class="form-text">Isikan Tanggal Mulai Masuk</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_keluar" placeholder="Tanggal Keluar" required value="<?= old('tanggal_keluar') ?>" aria-describedby="tanggal_keluar">
                                <div id="tanggal_keluar" class="form-text">Isikan Tanggal Selesai</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Default select example" id="jenis_kelas" name="jenis_kelas" required value="<?= old('jenis_kelas') ?>">
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>