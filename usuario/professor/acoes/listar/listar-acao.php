<?php 

    include('../../../../../assets/conn/db.php'); 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
    $recupera_projeto = mysql_query ("SELECT * FROM `cenex_projetos` WHERE cpf_professor='$cpf'") or die (mysql_error());    
    
    $recupera_evento = mysql_query ("SELECT * FROM `cenex_eventos` WHERE cpf_professor='$cpf'") or die (mysql_error());                                                         
?>

<section class="conteudo">
    <h3 class="text-center">Professor :: Listar ações de extensão</h3>
    <div class="container-fluid">
        <?php while ($projeto = mysql_fetch_array($recupera_projeto)){ ?>
            <div class="row list-box">
                <div class="col-md-6">                                     
                        <div class="row">                
                            <div class="col text-left">
                                <p class="font-weight-light text-primary"><?php if($projeto['tipoProjeto'] == "Projeto") echo "Projeto" ; if($projeto['tipoProjeto'] == "Evento") echo "  <font color='#DC3545'> Evento </font> " ?></p> 
                            </div>                   
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p class="font-weight-bold"><?php echo $projeto['nomeProjeto']?></p>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col text-left">
                                <p class="font-weight-light text-primary">Status</p> 
                            </div>                  
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p class=" text-primary"><?php 
                                if($projeto['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($projeto['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                                if($projeto['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                                if($projeto['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                                if($projeto['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
                                ?></p> 
                                    
                            </div>                  
                        </div>
                    </div>
                    
                 <?php if ($projeto['status'] == '1') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="projetos" id="projetos">
                                        <input type="hidden" value="<?php echo $projeto['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/publicar-acao.php" onclick="return confirm('Deseja publicar o projeto?')" class=" dropdown-item ">Publicar</button> 
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                  
                <?php if ($projeto['status'] == '2') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="projetos" id="projetos">
                                        <input type="hidden" value="<?php echo $projeto['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                  
                                                
                <?php if ($projeto['status'] == '3') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="projetos" id="projetos">
                                        <input type="hidden" value="<?php echo $projeto['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                  
           
                  <?php if ($projeto['status'] == '4') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="projetos" id="projetos">
                                        <input type="hidden" value="<?php echo $projeto['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/?id=<?php echo $projeto['id'];?>" class=" dropdown-item">Gerenciar</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?>                            
            </div>

            
        <?php }  ?>  
        
        <?php while ($evento = mysql_fetch_array($recupera_evento)){ ?>
            <div class="row list-box">
                <div class="col-md-6">                                     
                        <div class="row">                
                            <div class="col text-left">
                                <p class="font-weight-light text-primary"><?php if($evento['tipoProjeto'] == "Projeto") echo "Projeto" ; if($evento['tipoProjeto'] == "Evento") echo "  <font color='#DC3545'> Evento </font> " ?></p> 
                            </div>                   
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p class="font-weight-bold"><?php echo $evento['nomeEvento']?></p>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col text-left">
                                <p class="font-weight-light text-primary">Status</p> 
                            </div>                  
                        </div>
                        <div class="row">
                            <div class="col text-left">
                                <p class=" text-primary"><?php 
                                if($evento['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($evento['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                                if($evento['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                                if($evento['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                                if($evento['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
                                ?></p> 
                                    
                            </div>                  
                        </div>
                    </div>              
                 <?php if ($evento['status'] == '1') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="eventos" id="eventos">
                                        <input type="hidden" value="<?php echo $evento['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/publicar-evento.php" onclick="return confirm('Deseja publicar o evento?')" class=" dropdown-item ">Publicar</button> 
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/evento/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-evento.php" onclick="return confirm('Confirma exclusão do evento?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                  
                <?php if ($evento['status'] == '2') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="eventos" id="eventos">
                                        <input type="hidden" value="<?php echo $evento['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/evento/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-evento.php" onclick="return confirm('Confirma exclusão do evento?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                                                                  
                <?php if ($evento['status'] == '3') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="eventos" id="eventos">
                                        <input type="hidden" value="<?php echo $evento['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <div class="dropdown-divider"></div>
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/evento/" class=" dropdown-item">Editar</button>
                                                        <button type ="submit" formaction="/interno/cenex/assets/action/excluir-evento.php" onclick="return confirm('Confirma exclusão do evento?')" class=" dropdown-item ">Excluir</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?> 
                  
           
                  <?php if ($evento['status'] == '4') { ?>              
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <form action="" method="POST" name="eventos" id="eventos">
                                        <input type="hidden" value="<?php echo $evento['id'];?>" name="id"> 
                                        <div class="align-middle">
                                            <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                    <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver</button></li>
                                                <li class="nav-item dropdown">
                                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                                    <div class="dropdown-menu">
                                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/?id=<?php echo $evento['id'];?>" class=" dropdown-item">Gerenciar</button> 
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>

                                </div>                 
                            </div>
                        </div> 
                  <?php }  ?>                            
            </div>                         
        <?php }  ?>      
    
</div>
            
        <div class="col text-center mt-3">
                <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/">Voltar</a>    
        </div> 
      

</section>
 