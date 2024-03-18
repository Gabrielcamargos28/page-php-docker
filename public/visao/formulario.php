<!-- Formulario-->
    
<section class="page-section" id="formulario">
        
        <div class="container">
            <h2 class="text-center">Cadastre uma pessoa</h2>
            <form role="form" class="mt-5" action="usuario_route.php?fun=cadastrar" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="salario" class="col-sm-2 col-form-label">Salario</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="salario" name="salario" placeholder="Salario R$" required step="any">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="data_nascimento" class="col-sm-2 col-form-label">Data de nascimento</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Data de nascimento" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto">Choose a profile picture:</label>
                    <div class="col-sm-10">
                        <input type="file" id="foto" name="foto" accept="image/png, image/jpeg" />
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="enviar" name="enviar" class="btn btn-primary" />
                    </div>
                </div>
            </form>
        </div>
        </section>