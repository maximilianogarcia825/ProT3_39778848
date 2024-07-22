<header>
    <h1>Iniciar Sesión</h1>
</header>
<div class="row justify-content-md-center">
    <div class="container mt-5">
        <?php if (session()->getFlashdata('msg')): ?>
            <div class="col-5">
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('msg') ?>
                </div>
            </div>
        <?php endif; ?>

        <form method="post" action="<?= base_url('/enviarlogin') ?>">
            <?= csrf_field(); ?>
            
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="correo@algo.com" required>
                <?php if (isset($validation) && $validation->getError('email')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('email'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="pass" class="form-label">Password</label>
                <input type="password" name="pass" id="pass" class="form-control" placeholder="******" required>
                <?php if (isset($validation) && $validation->getError('pass')): ?>
                    <div class="alert alert-danger mt-2">
                        <?= $validation->getError('pass'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                <br> 
            </div>
        </form>
    </div>
</div>







