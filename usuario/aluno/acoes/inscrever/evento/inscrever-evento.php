<?php 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
    $id = $_POST['id'];


 ?>


<!-- CONTEÚDO PRINCIPAL -->
<section class="principal bg-color-cinza">
     <form action="" method="POST" name="projetos" id="projetos">
        <input type="hidden" value="<?php echo $id;?>" name="id"> 
        <h3 class="text-center">Aluno :: Inscrição em ações de extensão</h3>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/interno/cenex/sistema/usuario/aluno/acoes/inscrever/evento/participante/?id=<?php echo $id;?>">
                                <div class="box align-middle">
                                    <img src="/interno/cenex/sistema/public/img/icons/participante.svg" width="65" height="65" alt="Listar ações">
                                    <p class="acoes text-center align-middle"> Apresentador</p>
                                </div> 
                            </a>                            
                        </div>

                        <div class="col-md-6">
                            <a href="#">
                                <div class="box">
                                    <img src="/interno/cenex/sistema/public/img/icons/ouvinte.svg" width="65" height="65" alt="Gerenciar Certificados">
                                    <p class="acoes text-center align-middle">Ouvinte</p>
                                </div>
                            </a> 
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </form>                      
</section>
<!-- CONTEÚDO PRINCIPAL -->