<?php 

    $id = $_GET['id'];
    
    include('../../../../../../../assets/conn/db.php');  
    
    $recupera_evento_AE = mysql_query ("SELECT a. * , I.statusInscricao, I.id_evento
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.statusInscricao ='1' AND id_evento ='$id' ") or die (mysql_error()); 
    
    $recupera_evento_AI = mysql_query ("SELECT a. * , I.statusInscricao, I.id_evento
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.statusInscricao ='1' AND id_evento ='$id' ") or die (mysql_error()); 
     
     
    $recupera_evento = mysql_query ("SELECT a. * ,  I.statusInscricao, I.id_evento
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_professor = I.cpf_professor 
    WHERE I.statusInscricao ='1' AND id_evento ='$id' ") or die (mysql_error());
    
    
     $recupera_evento_S = mysql_query ("SELECT a. * , I.statusInscricao, I.id_evento
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.statusInscricao ='1' AND id_evento ='$id' ") or die (mysql_error());  
    
    
                                       
?>
<section class="conteudo">
    <h3 class="text-center">Professor :: Listar Inscritos</h3>
    <div class="container-fluid">
        <div class="row list-box">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"><span class="font-weight-bolder">CPF</span></th>
                            <th scope="col"><span class="font-weight-bolder">Nome</span></th>
                            <th scope="col"><span class="font-weight-bolder">Matrícula</span></th>
                            <th scope="col"><span class="font-weight-bolder">E-mail</span></th>
                            <th scope="col"><span class="font-weight-bolder">Telefone</span></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($professor = mysql_fetch_array($recupera_evento)){ ?>    
                        <tr>
                            <th scope="row"><?php echo $professor['cpf_professor'];?></th>
                            <td><?php echo $professor['nome_professor']?></td>
                            <td><?php echo $professor['matricula_professor'];?></td>
                            <td><?php echo $professor['email_professor'];?></td>
                            <td><?php echo $professor['tel_professor'];?></td>
                        </tr>
                     <?php }  ?>                                                
            </div>                          
        </div>
                    <?php while ($aluno = mysql_fetch_array($recupera_evento_AI)){ ?>    
                        <tr>
                            <th scope="row"><?php echo $aluno['cpf_aluno'];?></th>
                            <td><?php echo $aluno['nome_aluno_I']?></td>
                            <td><?php echo $aluno['matricula_aluno'];?></td>
                            <td><?php echo $aluno['email_aluno'];?></td>
                            <td><?php echo $aluno['tel_aluno'];?></td>
                        </tr>
                     <?php }  ?>
                     
                  <?php while ($alunoE = mysql_fetch_array($recupera_evento_AE)){ ?>    
                        <tr>
                            <th scope="row"><?php echo $alunoE['cpf_aluno_E'];?></th>
                            <td><?php echo $alunoE['nome_aluno_E']?></td>
                            <td><?php echo $alunoE['matricula_aluno_E'];?></td>
                            <td><?php echo $alunoE['email_aluno_E'];?></td>
                            <td><?php echo $alunoE['tel_aluno_E'];?></td>
                        </tr>
                   <?php }  ?>
                   
                    <?php while ($servidor = mysql_fetch_array($recupera_evento_S)){ ?>    
                        <tr>
                            <th scope="row"><?php echo $servidor['cpf_servidor'];?></th>
                            <td><?php echo $servidor['nome_servidor']?></td>
                            <td><?php echo $servidor['matricula_servidor'];?></td>
                            <td><?php echo $servidor['email_servidor'];?></td>
                            <td><?php echo $servidor['tel_servidor'];?></td>
                        </tr>
                   <?php }  ?>
                                                        
                    </tbody>                                                 
                </table>
            </div>                          
        </div>        
                    
    </div>

    <div class="col text-center mt-3">
          <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/?id=<?php echo $id;?>">Voltar</a> 
    </div> 
</section>        