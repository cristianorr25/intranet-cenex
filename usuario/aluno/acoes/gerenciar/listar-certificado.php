
<?php 

 $cpf = getenv("Shib-brPerson-CPF"); 

include('../../../../../assets/conn/db.php');  

    $id = $_GET['id'];
     
    $recupera_projeto = mysql_query ("SELECT I.*, P.*
    FROM  cenex_projetos P 
    INNER JOIN cenex_inscricoes I ON P.id = I.id_projeto 
      WHERE I.cpf_professor = '$cpf'") or die (mysql_error());

        
 
?>
<section class="conteudo">
    <h3 class="text-center">Aluno :: Gerenciar Certificados</h3>
    <div class="container-fluid"> 
        
        <?php while ($row = mysql_fetch_array($recupera_projeto)){ ?>
            <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/administrar" method="POST" name="projetos" id="projetos"> 
                <input type="hidden" value="<?php echo $row['id_projeto'];?>" name="id">      
                <div class="row list-box">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-light text-danger">Nome</p> 
                                </div>                   
                            </div>
                            <div class="row">
                                <div class="col text-left">
                                    <p class="font-weight-bold"><?php echo $row['nomeProjeto'];?></p>
                                </div>                    
                            </div>
                        </div>
                    
                                      
                        <div class="col-md-3">
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
                    <?php if ($row['statusCertificado'] == '3') { ?> 
                                                                         
                        <div class="col-md-2">
                            <div class="row">
                                <div class="col">
                                  <input type="hidden" value="<?php echo $row['cpf_professor'];?>" name="cpf_aluno">
                                    <div class="align-middle">
                                        <ul class="nav nav-pills">
                                                <li class="nav-item">
                                                <button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/gerenciar/certificado/liberar-certificado.php" class=" nav-link mt-1 btn btn-success">Liberar Certificado</button>
                                                </li>                                                                        
                                        </ul>
                                   </div>             
                                </div>                 
                            </div>
                       </div>
                    <?php }  ?>   
                </div>
            </form>  
        <?php }  ?>
                                                             
            <div class="col text-center mt-3 mb-4">
     
                <form action="" method="POST" name="projetos" id="projetos">
                    <input type="hidden" value="<?php echo $row['id_projeto'];?>" name="id">
                    <button type ="submit" formaction="/interno/cenex/sistema/usuario/aluno/" class=" btn btn-secondary ">Voltar</button>
                </form>  
            </div>
    </div>
</section>
