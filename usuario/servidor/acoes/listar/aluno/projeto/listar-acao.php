<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $recupera_projeto = mysql_query ("SELECT * FROM `cenex_projetos`") or die (mysql_error()); 
    
    $recupera_evento = mysql_query ("SELECT * FROM `cenex_eventos`") or die (mysql_error());                                                             
?>

<section class="conteudo">

    <div class="row">

        <div class= "col-md-6">

            <h3 class="text-center">Servidor :: Listar ações de extensão</h3>

        </div>

        <div class="col-md-6">


        </div>




    </div>
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
            
                 <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST" name="projetos" id="projetos">
                              <input type="hidden" value="<?php echo $projeto['id'];?>" name="id">  
                                <div class="align-middle">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/visualizar/projeto/" class=" nav-link mt-1 btn btn-success">Ver</button>
                                        <li class="nav-item dropdown">
                                        <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                        <div class="dropdown-menu"> 
                                            <button type="submit" formaction="/interno/cenex/assets/action/aprovar-acao.php" onclick="return confirm('Deseja Aprovar esse projeto?')" class=" dropdown-item">Aprovar</button>
                                            <button type="submit" formaction="/interno/cenex/assets/action/reprovar-acao.php" onclick="return confirm('Deseja Reprovar esse projeto?')" class=" dropdown-item">Reprovar</button>                         
                                            <div class="dropdown-divider"></div>
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/editar/" class=" dropdown-item">Editar</button>
                                            <button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class=" dropdown-item ">Excluir</button>                                       
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                           </form> 
                        </div>                 
                    </div>
                </div>                                    
            </div>                          

        <?php }  ?>
        
        <?php while ($Evento = mysql_fetch_array($recupera_evento)){ ?>
        <div class="row list-box">
            <div class="col-md-6">                                     
                    <div class="row">                
                        <div class="col text-left">
                            <p class="font-weight-light text-primary"><?php if($Evento['tipoProjeto'] == "Projeto") echo "Projeto" ; if($Evento['tipoProjeto'] == "Evento") echo "  <font color='#DC3545'> Evento </font> " ?></p> 
                        </div>                   
                    </div>
                    <div class="row">
                        <div class="col text-left">
                            <p class="font-weight-bold"><?php echo $Evento['nomeEvento']?></p>
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
                            if($Evento['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                            if($Evento['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                            if($Evento['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                            if($Evento['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                            if($Evento['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
                            ?></p> 
                                
                        </div>                  
                    </div>
                </div>              
                 <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST" name="projetos" id="projetos">
                              <input type="hidden" value="<?php echo $Evento['id'];?>" name="id">  
                                <div class="align-middle">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver</button>
                                        <li class="nav-item dropdown">
                                        <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                        <div class="dropdown-menu"> 
                                            <button type="submit" formaction="/interno/cenex/assets/action/aprovar-evento.php" onclick="return confirm('Deseja Aprovar esse Evento?')" class=" dropdown-item">Aprovar</button>
                                            <button type="submit" formaction="/interno/cenex/assets/action/reprovar-evento.php" onclick="return confirm('Deseja Reprovar esse Evento?')" class=" dropdown-item">Reprovar</button>                         
                                            <div class="dropdown-divider"></div>
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/editar/evento/" class=" dropdown-item">Editar</button>
                                            <button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class=" dropdown-item ">Excluir</button>                                       
                                        </div>
                                    </li>
                                    </ul>
                                </div>
                           </form> 
                        </div>                 
                    </div>
                </div>                           
        </div>
    <?php }  ?>      
    
</div>
        
        
        
        
        
        
        <div class="col text-center mt-3">
                <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/servidor/">Voltar</a> 
        </div> 
    </div>
</section>
 