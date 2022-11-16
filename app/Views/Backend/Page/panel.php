<?= $this->extend($config->theme['panel'] . 'index') ?>
<?= $this->section('main') ?>

<h1 class="app-page-title">Dashboard</h1>

<div class="row g-4 mb-4">
    

    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Total Pendaftar</h4>
                <div class="stats-figure"><?= $pendaftar ?></div>


            </div>
            <a class="app-card-link-mask" href="#"></a>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Pending</h4>
                <div class="stats-figure"><?= $pending ?></div>

            </div>
            <a class="app-card-link-mask" href="#"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Diterima</h4>
                <div class="stats-figure"><?= $diterima ?></div>
                <div class="stats-meta">
                </div>
            </div>
            <a class="app-card-link-mask" href="#"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Ditolak</h4>
                <div class="stats-figure"><?= $ditolak ?></div>
                <div class="stats-meta">
                </div>
            </div>
            <a class="app-card-link-mask" href="#"></a>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="app-card app-card-stat shadow-sm h-100">
            <div class="app-card-body p-3 p-lg-4">
                <h4 class="stats-type mb-1">Users</h4>
                <div class="stats-figure"><?= $user ?></div>
                <div class="stats-meta">
                </div>
            </div>
            <a class="app-card-link-mask" href="#"></a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>