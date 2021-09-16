<?php 


    include('../../../../../../../assets/conn/db.php');  

     $id = $_GET['id'];

    $recupera_evento_AE = mysql_query ("SELECT a.cpf_aluno_E, a.nome_aluno_E, I.statusInscricao, I.id_evento, I.id
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.id_evento = '$id'") or die (mysql_error()); 
    
    $recupera_evento_AI = mysql_query ("SELECT a.nome_aluno_I, a.cpf_aluno, I.statusInscricao, I.id_evento, I.id
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.id_evento = '$id'") or die (mysql_error()); 
     
     
    $recupera_evento = mysql_query ("SELECT a.nome_professor, a.cpf_professor,  I.statusInscricao, I.id_evento, I.id
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_professor = I.cpf_professor 
    WHERE I.id_evento = '$id'") or die (mysql_error());
    
    
     $recupera_evento_S = mysql_query ("SELECT a.nome_servidor, a.cpf_servidor , I.statusInscricao, I.id_evento, I.id
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.id_evento = '$id'") or die (mysql_error());  
       
 
?>
<section class="conteudo">
    <h3 class="text-center">Professor :: Administrar Inscrições</h3>
<div class="container-fluid"> 
        <?php while ($row = mysql_fetch_array($recupera_evento)){ ?>
        <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="eventos" id="eventos"> 
        <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
        <div class="row list-box">
            <div class="col-md-7">
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-light text-danger">Nome</p> 
                    </div>                   
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-bold"><?php echo $row['nome_professor'];?></p>
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
                        if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                        if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                        if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                        if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                        if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                        ?></p>  
                    </div>                  
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col">
                      <form action="" method="POST" name="eventos" id="eventos">
                      <input type="hidden" value="<?php echo $row['cpf_professor'];?>" name="cpf_aluno">
                        <div class="align-middle">
                            <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/administrar/visualizar/?id_evento=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Ver</button>
                                        
                                    <li class="nav-item dropdown">
                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                    <div class="dropdown-menu"> 
                                        <button type="submit" formaction="/interno/cenex/assets/action/aprovar-aluno-evento.php" onclick="return confirm('Deseja Aprovar esse aluno?')" class=" dropdown-item">Aprovar</button>
                                        <button type="submit" formaction="/interno/cenex/assets/action/reprovar-aluno-evento.php" onclick="return confirm('Deseja Reprovar esse evento?')" class=" dropdown-item">Reprovar</button>                                                               
                                    </div>
                       </form>              
                                </li>
                            </ul>
                        </div>
                    </div>                 
                </div>
            </div>
        </div> 
            <?php }  ?>
            
        
        <?php while ($row = mysql_fetch_array($recupera_evento_AI)){ ?>
        <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="eventos" id="eventos"> 
        <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
        <div class="row list-box">
            <div class="col-md-7">
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-light text-danger">Nome</p> 
                    </div>                   
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-bold"><?php echo $row['nome_aluno_I'];?></p>
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
                        if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                        if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                        if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                        if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                        if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                        ?></p>  
                    </div>                  
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col">
                      <form action="" method="POST" name="eventos" id="eventos">
                      <input type="hidden" value="<?php echo $row['cpf_aluno'];?>" name="cpf_aluno">
                        <div class="align-middle">
                            <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/administrar/visualizar/?id_evento=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Ver</button>
                                    <li class="nav-item dropdown">
                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                    <div class="dropdown-menu"> 
                                        <button type="submit" formaction="/interno/cenex/assets/action/aprovar-aluno-evento.php" onclick="return confirm('Deseja Aprovar esse aluno?')" class=" dropdown-item">Aprovar</button>
                                        <button type="submit" formaction="/interno/cenex/assets/action/reprovar-aluno-evento.php" onclick="return confirm('Deseja Reprovar esse evento?')" class=" dropdown-item">Reprovar</button>                                                               
                                    </div>
                       </form>              
                                </li>
                            </ul>
                        </div>
                    </div>                 
                </div>
            </div>
        </div> 
            <?php }  ?>  
    
    
     <?php while ($row = mysql_fetch_array($recupera_evento_AE)){ ?>
        <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="eventos" id="eventos"> 
        <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
        <div class="row list-box">
            <div class="col-md-7">
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-light text-danger">Nome</p> 
                    </div>                   
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-bold"><?php echo $row['nome_aluno_E'];?></p>
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
                        if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                        if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                        if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                        if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                        if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                        ?></p>  
                    </div>                  
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col">
                      <form action="" method="POST" name="eventos" id="eventos">
                      <input type="hidden" value="<?php echo $row['cpf_aluno_E'];?>" name="cpf_aluno">
                        <div class="align-middle">
                            <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/administrar/visualizar/?id_evento=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Ver</button>
                                    <li class="nav-item dropdown">
                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                    <div class="dropdown-menu"> 
                                        <button type="submit" formaction="/interno/cenex/assets/action/aprovar-aluno-evento.php" onclick="return confirm('Deseja Aprovar esse aluno?')" class=" dropdown-item">Aprovar</button>
                                        <button type="submit" formaction="/interno/cenex/assets/action/reprovar-aluno-evento.php" onclick="return confirm('Deseja Reprovar esse evento?')" class=" dropdown-item">Reprovar</button>                                                               
                                    </div>
                       </form>              
                                </li>
                            </ul>
                        </div>
                    </div>                 
                </div>
            </div>
        </div> 
            <?php }  ?>
            
           <?php while ($row = mysql_fetch_array($recupera_evento_S)){ ?>
        <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="eventos" id="eventos"> 
        <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
        <div class="row list-box">
            <div class="col-md-7">
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-light text-danger">Nome</p> 
                    </div>                   
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p class="font-weight-bold"><?php echo $row['nome_servidor'];?></p>
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
                        if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                        if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                        if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                        if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                        if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                        ?></p>  
                    </div>                  
                </div>
            </div>
            <div class="col-md-2">
                <div class="row">
                    <div class="col">
                      <form action="" method="POST" name="eventos" id="eventos">
                      <input type="hidden" value="<?php echo $row['cpf_servidor'];?>" name="cpf_aluno">
                        <div class="align-middle">
                            <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/administrar/visualizar/?id_evento=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Ver</button>
                                    <li class="nav-item dropdown">
                                    <a class="mt-1 nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Opções</a>
                                    <div class="dropdown-menu"> 
                                        <button type="submit" formaction="/interno/cenex/assets/action/aprovar-aluno-evento.php" onclick="return confirm('Deseja Aprovar esse aluno?')" class=" dropdown-item">Aprovar</button>
                                        <button type="submit" formaction="/interno/cenex/assets/action/reprovar-aluno-evento.php" onclick="return confirm('Deseja Reprovar esse evento?')" class=" dropdown-item">Reprovar</button>                                                               
                                    </div>
                       </form>              
                                </li>
                            </ul>
                        </div>
                    </div>                 
                </div>
            </div>
        </div> 
            <?php }  ?>        
            
                
        <div class="col text-center mt-3 mb-4">
 
            <form action="" method="POST" name="eventos" id="eventos">
            <input type="hidden" value="<?php echo $row['id_evento'];?>" name="id">
            <button type ="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/?id=<?php echo $id;?>" class=" btn btn-secondary ">Voltar</button>

        </div>
        </form>   
    </div>
</section>