<!-- Heading -->
<h1>Hi, You</h1>

<!-- Body -->

<p>Someone (hopefully you) requested a magic link to log in .</p>

<p>
    <a href="<?= url_to('verify-magic-link') ?>?token=<?= $token ?>">
        <?= lang('Auth.login') ?>
    </a>
</p>