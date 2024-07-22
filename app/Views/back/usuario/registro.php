<header>
    <h1>Registrarse</h1>
</header>
  
  <?php $validation = \Config\Services::validation(); ?>
  <form method="post" action="<?= base_url('/enviar-form') ?>">
    <?= csrf_field(); ?>
    
    <?php if(session()->getFlashdata('fail')): ?>
      <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
    <?php endif ?>
    
    <?php if(session()->getFlashdata('success')): ?>
      <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
    <?php endif ?>
    
    <div class="card-body justify-content-center" media="(max-width:768px)">
      <div class="form">
        <label for="nombre" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" placeholder="nombre" value="<?= old('nombre') ?>">
        
        <?php if($validation->getError('nombre')): ?>
          <div class="alert alert-danger mt-2">
            <?= $validation->getError('nombre'); ?>
          </div>
        <?php endif ?>
      </div>
      
      <div class="form">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" name="apellido" class="form-control" placeholder="apellido" value="<?= old('apellido') ?>">
        
        <?php if($validation->getError('apellido')): ?>
          <div class="alert alert-danger mt-2">
            <?= $validation->getError('apellido'); ?>
          </div>
        <?php endif ?>
      </div>
      
      <div class="form">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" placeholder="correo@algo.com" value="<?= old('email') ?>">
        
        <?php if($validation->getError('email')): ?>
          <div class="alert alert-danger mt-2">
            <?= $validation->getError('email'); ?>
          </div>
        <?php endif ?>
      </div>
      
      <div class="form">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" name="usuario" class="form-control" placeholder="usuario" value="<?= old('usuario') ?>">
        
        <?php if($validation->getError('usuario')): ?>
          <div class="alert alert-danger mt-2">
            <?= $validation->getError('usuario'); ?>
          </div>
        <?php endif ?>
      </div>
      
      <div class="form">
        <label for="pass" class="form-label">Password</label>
        <input name="pass" type="password" class="form-control" placeholder="password">
        
        <?php if($validation->getError('pass')): ?>
          <div class="alert alert-danger mt-2">
            <?= $validation->getError('pass'); ?>
          </div>
        <?php endif ?>
      </div>
      <br> 
      <input type="submit" value="Guardar" class="btn btn-success">
      <input type="reset" value="Cancelar" class="btn btn-danger">
    </div>
  </form>
</div>

