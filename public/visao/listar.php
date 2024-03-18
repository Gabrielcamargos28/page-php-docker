<section class="d-flex listar-section" id="listar">
    <?php define('BASE_DIR','/assets/img/usuario/');?>
    <?php foreach($lista as $c): ?>
    <div class="card m-3 p-3 " style="width: 18rem;">
        <div class="card-body">
            <p><?php echo $c->getId(); ?></p>
            <h1><?php echo $c->getNome(); ?></h1>
            <p><?php echo $c->getEmail(); ?></p>
            <p>R$ <?php echo $c->getSalario(); ?></p>
            <p><?php echo $c->getDataNascimento(); ?></p>
            <img src="<?php echo BASE_DIR . $c->getFoto(); ?>" alt="<?php echo $c->getNome(); ?>" width="100" height="100">
        </div>
    </div>
    <?php endforeach;?>
</section>


    <!--
    <div class="card m-3 p-3" style="width: 18rem;">
        <img src="./assets/img/usuario/lucas_foto.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">id:</h5>
        <p>Nome:</p>
        <p>Email:</p>
        <p>Salario:</p>
    </div>
</div>
</section>
-->