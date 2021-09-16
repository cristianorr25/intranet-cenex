<?php 

    include('../../../../../assets/conn/db.php'); 
    
    $cpf = getenv("Shib-brPerson-CPF");


    $recupera_projeto = mysql_query ("SELECT P.*, I.* FROM cenex_projetos P
    INNER JOIN cenex_inscricoes I ON P.id = I.id_projeto WHERE I.cpf_professor = '$cpf' ") or die (mysql_error()); 
    
   $recupera_evento = mysql_query ("SELECT E.*, I.* FROM cenex_eventos E
    INNER JOIN cenex_inscricoes_eventos I ON E.id = I.id_evento WHERE I.cpf_professor = '$cpf' ") or die (mysql_error()); 
 
 
                                                            
?>

<section class="conteudo">
    <h3 class="text-center">Aluno :: Editar ações de extensão</h3>
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
                            if($projeto['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                            if($projeto['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                            if($projeto['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                            if($projeto['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                            if($projeto['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                            ?></p>                            
                        </div>                  
                    </div>
                </div>                                         
              <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST" name="projetos" id="projetos">
                                <input type="hidden" value="<?php echo $projeto['id_projeto'];?>" name="id">
                                <input type="hidden" value="<?php echo $cpf;?>" name="cpf">                           
                                <div class="align-middle">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/editar/visualizar/projeto/" class=" nav-link mt-1 btn btn-success">Ver Inscrição</button>
                                        <li class="nav-item">
            
                                            <button type ="submit" formaction="/interno/cenex/assets/action/excluir-aluno.php" onclick="return confirm('Confirma exclusão da Inscrição?')" class=" nav-link mt-1 btn btn-danger ">Excluir</button>                                       
                                    </li>
                                    </ul>
                                </div>
                            </form>   
                        </div>                 
                    </div>
                </div>
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
                            if($evento['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                            if($evento['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                            if($evento['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                            if($evento['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                            if($evento['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                            ?></p>                            
                        </div>                  
                    </div>
                </div>                                         
               <div class="col-md-3">
                    <div class="row">
                        <div class="col">
                            <form action="" method="POST" name="projetos" id="projetos">
                                <input type="hidden" value="<?php echo $evento['id_evento'];?>" name="id_evento">
                                <input type="hidden" value="<?php echo $evento['id'];?>" name="id">
                                <input type="hidden" value="<?php echo $cpf;?>" name="cpf">                           
                                <div class="align-middle">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/editar/visualizar/evento/" class=" nav-link mt-1 btn btn-success">Ver Inscrição</button>
                                        <li class="nav-item dropdown">
                                        <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                        <div class="dropdown-menu">              
                                            <button type="submit" formaction="#" class=" dropdown-item">Editar</button>
                                            <button type ="submit" formaction="/interno/cenex/assets/action/excluir-aluno-evento.php" onclick="return confirm('Confirma exclusão da Inscrição?')" class=" dropdown-item ">Excluir</button>                                       
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
            <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/aluno/">Voltar</a> 
        </div> 

</section>

