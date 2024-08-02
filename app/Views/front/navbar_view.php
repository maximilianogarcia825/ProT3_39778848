<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mx-auto" href="<?= base_url('principal_ultimo'); ?>">
        <img src="<?= base_url('./public/assets/img/logobarra.png'); ?>" class="logobarra" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if ($session->get('logged_in')): ?>
               
                <?php if ($perfil == 1): ?>
                  
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('principal_ultimo'); ?>">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('quienes_somos'); ?>">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('acerca_de'); ?>">Acerca de nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('panel'); ?>">Panel de Administración</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar sesión</a>
                    </li>
                <?php else: ?>
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('principal_ultimo'); ?>">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('quienes_somos'); ?>">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('logout'); ?>">Cerrar sesión</a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
               
                <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('principal_ultimo'); ?>">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('quienes_somos'); ?>">¿Quiénes somos?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('acerca_de'); ?>">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('login'); ?>">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('registro'); ?>">Registrarse</a>
                </li>
            <?php endif; ?>
        </ul>
        <div class="d-flex align-items-center">
            <?php if ($session->get('logged_in')): ?>
               
                <span class="navbar-text mr-3">
                    <?= esc($nombre); ?>
                </span>
            <?php endif; ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>



