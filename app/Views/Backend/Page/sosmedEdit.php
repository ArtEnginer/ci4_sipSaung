<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-md-5 col-12 align-self-center">
                <h3 class="text-themecolor mb-0">Data Sosmed</h3>
                <ol class="breadcrumb mb-0 p-0 bg-transparent">

                    <li class="breadcrumb-item active">Tambah SOsmed</li>
                </ol>

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
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Masukan Jenis Lengkap" required value="<?= $item->jenis ?>">
                            <label for="jenis">Jenis</label>
                        </div>

                    </div>
                    <div class="mb-3">
                        <div class="form-floating">
                            <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"><?= $item->isi ?></textarea>
                            <label for="isi">Isi</label>
                        </div>

                    </div>
                    <div class="text-end">
                        <a href="<?= route_to('pengaturan') ?>" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>