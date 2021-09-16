<?php 

    include('../../../../../../../assets/conn/db.php');  
    
    $id = $_GET['id'];

    $recupera_projeto_AE = mysql_query ("SELECT a. * , I.*
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.id_projeto = '$id' and I.statusInscricao ='1'") or die (mysql_error()); 
    
    $recupera_projeto_AI = mysql_query ("SELECT a. * , I.*
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.id_projeto = '$id' and I.statusInscricao ='1'") or die (mysql_error()); 
     
     
    $recupera_projeto = mysql_query ("SELECT a. * ,  I.*
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes I ON a.cpf_professor = I.cpf_professor 
    WHERE I.id_projeto = '$id' and I.statusInscricao ='1'") or die (mysql_error());
    
    
     $recupera_projeto_S = mysql_query ("SELECT a. * , I.*
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.id_projeto = '$id' and I.statusInscricao ='1'") or die (mysql_error());  
       
 
?>
<section class="conteudo">
    <h3 class="text-center">Professor :: Liberar Certificados</h3>
    <div class="container-fluid"> 
        
        <?php while ($row = mysql_fetch_array($recupera_projeto)){ ?>
            <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="projetos" id="projetos"> 
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
                <div class="row list-box">
                        <div class="col-md-3">
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
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Matrícula</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                   <p class="font-weight-bold"><?php echo $row['matricula_professor'];?></p> 
                                </div>                  
                            </div>
                        </div> 
                                      
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Tipo Inscrição</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['tipoInscricao'] == "2") echo "  <strong><font color='#00000'>  Bolsista </font></strong>  "; 
                                    if($row['tipoInscricao'] == "1") echo "  <strong><font color='#00000'>  Voluntário </font></strong> "; 
                                    if($row['tipoInscricao'] == "3") echo "  <strong><font color='#00000'>  Bolsista/Voluntário </font></strong>  ";
                                    ?></p> 
                                </div>                  
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Status Certificado</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['statusCertificado'] == "3") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong> "; 
                                    if($row['statusCertificado'] == "2") echo "  <strong><font color='#DC3545'>  Reprovado Cenex </font></strong>  ";
                                    if($row['statusCertificado'] == "1") echo "  <strong><font color='#ffc107'> Pendente</font></strong>  ";
                                    if($row['statusCertificado'] == "0") echo "  <strong><font color='#6c757d'>  Não Liberado </font></strong> ";
                                    ?></p>  
                                </div>                  
                            </div>
                         </div>
                                                                              
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col">
                                  <input type="hidden" value="<?php echo $row['cpf_professor'];?>" name="cpf_aluno">
                                    <div class="align-middle">
                                        <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/certificados/liberar/?id=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Liberar Certificado</button>
                                                </li>                                                                        
                                        </ul>
                                   </div>             
                                </div>                 
                            </div>
                       </div>
                </div>
            </form>  
        <?php }  ?>
        
        <?php while ($row = mysql_fetch_array($recupera_projeto_AI)){ ?>
            <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="projetos" id="projetos"> 
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
                <div class="row list-box">
                        <div class="col-md-3">
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
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Matrícula</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                   <p class="font-weight-bold"><?php echo $row['matricula_aluno'];?></p> 
                                </div>                  
                            </div>
                        </div> 
                                      
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Tipo Inscrição</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['tipoInscricao'] == "2") echo "  <strong><font color='#00000'>  Bolsista </font></strong>  "; 
                                    if($row['tipoInscricao'] == "1") echo "  <strong><font color='#00000'>  Voluntário </font></strong> "; 
                                    if($row['tipoInscricao'] == "3") echo "  <strong><font color='#00000'>  Bolsista/Voluntário </font></strong>  ";
                                    ?></p> 
                                </div>                  
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Status Certificado</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['statusCertificado'] == "3") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong> "; 
                                    if($row['statusCertificado'] == "2") echo "  <strong><font color='#DC3545'>  Reprovado Cenex </font></strong>  ";
                                    if($row['statusCertificado'] == "1") echo "  <strong><font color='#ffc107'> Pendente</font></strong>  ";
                                    if($row['statusCertificado'] == "0") echo "  <strong><font color='#6c757d'>  Não Liberado </font></strong> ";
                                    ?></p>  
                                </div>                  
                            </div>
                         </div>
                                                                                                            
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col">
                                  <input type="hidden" value="<?php echo $row['cpf_aluno'];?>" name="cpf_aluno">
                                    <div class="align-middle">
                                        <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/certificados/liberar/?id=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Liberar Certificado</button>
                                                </li>                                                                        
                                        </ul>
                                   </div>             
                                </div>                 
                            </div>
                       </div>
                </div>
            </form>  
        <?php }  ?>
        
        
        <?php while ($row = mysql_fetch_array($recupera_projeto_AE)){ ?>
            <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="projetos" id="projetos"> 
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
                <div class="row list-box">
                        <div class="col-md-3">
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
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Matrícula</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                   <p class="font-weight-bold"><?php echo $row['matricula_aluno_E'];?></p> 
                                </div>                  
                            </div>
                        </div> 
                                      
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Tipo Inscrição</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['tipoInscricao'] == "2") echo "  <strong><font color='#00000'>  Bolsista </font></strong>  "; 
                                    if($row['tipoInscricao'] == "1") echo "  <strong><font color='#00000'>  Voluntário </font></strong> "; 
                                    if($row['tipoInscricao'] == "3") echo "  <strong><font color='#00000'>  Bolsista/Voluntário </font></strong>  ";
                                    ?></p> 
                                </div>                  
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col">
                                  <input type="hidden" value="<?php echo $row['cpf_aluno_E'];?>" name="cpf_aluno">
                                    <div class="align-middle">
                                        <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/certificados/liberar/?id=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Liberar Certificado</button>
                                                </li>                                                                        
                                        </ul>
                                   </div>             
                                </div>                 
                            </div>
                       </div>
                </div>
            </form>  
        <?php }  ?>
        
        
        <?php while ($row = mysql_fetch_array($recupera_projeto_S)){ ?>
            <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="projetos" id="projetos"> 
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">      
                <div class="row list-box">
                        <div class="col-md-3">
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
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Matrícula</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                   <p class="font-weight-bold"><?php echo $row['matricula_servidor'];?></p> 
                                </div>                  
                            </div>
                        </div> 
                                      
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Tipo Inscrição</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['tipoInscricao'] == "2") echo "  <strong><font color='#00000'>  Bolsista </font></strong>  "; 
                                    if($row['tipoInscricao'] == "1") echo "  <strong><font color='#00000'>  Voluntário </font></strong> "; 
                                    if($row['tipoInscricao'] == "3") echo "  <strong><font color='#00000'>  Bolsista/Voluntário </font></strong>  ";
                                    ?></p> 
                                </div>                  
                            </div>
                        </div>
                        
                         <div class="col-md-2">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-primary">Status Certificado</p> 
                                </div>                  
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class=" text-primary"><?php 
                                    if($row['statusCertificado'] == "3") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong> "; 
                                    if($row['statusCertificado'] == "2") echo "  <strong><font color='#DC3545'>  Reprovado Cenex </font></strong>  ";
                                    if($row['statusCertificado'] == "1") echo "  <strong><font color='#ffc107'> Pendente</font></strong>  ";
                                    if($row['statusCertificado'] == "0") echo "  <strong><font color='#6c757d'>  Não Liberado </font></strong> ";
                                    ?></p>  
                                </div>                  
                            </div>
                         </div>          
                        
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col">
                                  <input type="hidden" value="<?php echo $row['cpf_servidor'];?>" name="cpf_aluno">
                                    <div class="align-middle">
                                        <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                <button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/certificados/liberar/?id=<?php echo $id;?>" class=" nav-link mt-1 btn btn-success">Liberar Certificado</button>
                                                </li>                                                                        
                                        </ul>
                                   </div>             
                                </div>                 
                            </div>
                       </div>
                </div>
            </form>  
        <?php }  ?>
        
                                                       
            <div class="col text-center mt-3 mb-4">
     
                <form action="" method="POST" name="projetos" id="projetos">
                    <input type="hidden" value="<?php echo $row['id_projeto'];?>" name="id">
                    <button type ="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/?id=<?php echo $id;?>" class=" btn btn-secondary ">Voltar</button>
                </form>  
            </div>
    </div>
</section>
 