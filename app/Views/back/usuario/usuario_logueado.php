<div class="row justify-content-md-center">
    <div class="container mt-5">

        <?php if (session()->getFlashdata('msg')): ?>
            <div class="col-5">
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            </div>
        <?php endif; ?>

        <br><br>

        <?php if (session()->get('perfil_id') == 1): ?>
            <div>
                <img class="center" height="100px" width="100px" src="<?= base_url('./public/assets/img/admin.png') ?>" alt="Admin Image">
            </div>
            <br>

        <?php elseif (session()->get('perfil_id') == 2): ?>
            <div>
                <img class="center" height="100px" width="100px" src="<?= base_url('./public/assets/img/cliente.png') ?>" alt="Client Image">
            </div>
            <br>
        <?php endif; ?>

    </div>
</div>

