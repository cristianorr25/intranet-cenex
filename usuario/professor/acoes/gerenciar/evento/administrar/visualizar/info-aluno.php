
<?php 

include('../../../../../../../../assets/conn/db.php');  

   $cpf = $_POST['cpf_aluno'];
   
   $id = $_POST['id'];


   $id_evento = $_GET['id_evento'];


$recupera_evento_AE = mysql_query ("SELECT a. * , I. *
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_evento = '$id_evento' and I.id='$id'") or die (mysql_error()); 
    
    $recupera_evento_AI = mysql_query ("SELECT a. * , I. *
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_evento = '$id_evento'  and I.id ='$id'") or die (mysql_error()); 
     
     
    $recupera_evento = mysql_query ("SELECT a. * ,  I. *
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_professor = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_evento = '$id_evento'  and I.id ='$id'") or die (mysql_error());
    
    
    $recupera_evento_S = mysql_query ("SELECT a. * ,  I.*
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes_eventos I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_evento = '$id_evento'  and I.id='$id'") or die (mysql_error());  
       

     $rowAE = mysql_fetch_array($recupera_evento_AE);
     
     $rowAI = mysql_fetch_array($recupera_evento_AI);
     
     $row = mysql_fetch_array($recupera_evento);
     
     $rowS = mysql_fetch_array($recupera_evento_S);
     
       
                  $mod11 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%11%' and id_evento ='$id_evento' and id='$id'");
                  $num11 = mysql_num_rows($mod11);
                  
                  
                  
                  if ($num11 > 0) {

                      $modalidade11= "checked";
                  }
                  
                  $mod12 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%12%' and id_evento ='$id_evento' and id='$id'");
                  $num12 = mysql_num_rows($mod12);
                  
                  
                 if ($num12 > 0) {

                      $modalidade12= "checked";
                  }
                  
                  $mod13 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%13%' and id_evento ='$id_evento' and id='$id'");
                  $num13 = mysql_num_rows($mod13);
                  
                  
                 if ($num13 > 0) {

                      $modalidade13= "checked";
                  }
                  
                  $mod14 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%14%' and id_evento ='$id_evento' and id='$id'");
                  $num14 = mysql_num_rows($mod14);
                  
                  
                 if ($num14 > 0) {

                      $modalidade14= "checked";
                  }
                  
                  $mod15 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%15%' and id_evento ='$id_evento' and id='$id'");
                  $num15 = mysql_num_rows($mod15);
                  
                  
                if ($num15 > 0) {

                      $modalidade15= "checked";
                  }
                  
                  $mod16 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%16%' and id_evento ='$id_evento' and id='$id'");
                  $num16 = mysql_num_rows($mod16);
                    
                  
                 if ($num16 > 0) {

                      $modalidade16= "checked";
                  }
                  
                  $mod17 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%17%' and id_evento ='$id_evento' and id='$id'");
                  $num17 = mysql_num_rows($mod17);
                  
                  
                 if ($num17 > 0) {

                      $modalidade17= "checked";
                  }
                  
                  $mod18 = mysql_query ("SELECT * FROM `cenex_inscricoes_eventos` WHERE modalidade LIKE '%18%' and id_evento ='$id_evento' and id='$id'");
                  $num18 = mysql_num_rows($mod18);
                  
                  
                 if ($num18 > 0) {

                      $modalidade18= "checked";
                  }
     
 ?>


<section class="conteudo">
    <h3 class="text-center">Informações do Aluno</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">   
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label>Nome </label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo $rowS['nome_servidor'];?> <?php echo $rowAI['nome_aluno_I'];?> <?php echo $rowAE['nome_aluno_E'];?> <?php echo $row['nome_professor'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                         <label>Matrícula</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo $rowS['matricula_servidor'];?> <?php echo $rowAI['matricula_aluno'];?> <?php echo $rowAE['matricula_aluno_E'];?> <?php echo $row['matricula_professor'];?>" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label>E-mail</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo $rowS['email_servidor'];?> <?php echo $rowAI['email_aluno'];?> <?php echo $rowAE['email_aluno_E'];?> <?php echo $row['email_professor'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                         <label>Telefone</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo $rowS['tel_servidor'];?> <?php echo $rowAI['tel_aluno'];?> <?php echo $rowAE['tel_aluno_E'];?> <?php echo $row['tel_professor'];?>" />
                    </div>
                </div>
            </form>
        </div>
    </div>

     <h3 class="text-center">Informações da Inscrição</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">
                <div class="form-row">  
                    <div class="form-group col-md-6">
                            <label class="form-check-label">Apresentador do Trabalho<span class="text-muted"> (Favor colocar o último nome em maiúsculo.)</span></label>
                            <input type="text" class="form-control" readonly placeholder="<?php echo $rowS['apresentador'];?> <?php echo $rowAI['apresentador'];?> <?php echo $rowAE['apresentador'];?> <?php echo $row['apresentador'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                            <label class="form-check-label">Título do Trabalho</label>
                            <input type="text" class="form-control" readonly placeholder="<?php echo $rowS['titulo'];?> <?php echo $rowAI['titulo'];?> <?php echo $rowAE['titulo'];?> <?php echo $row['titulo'];?>" />
                    </div> 
                </div>        
                <div class="form-row">                                   
                    <div class="form-group col-md-6">
                       <label class="form-check-label">Forma de apresentação </label>
                        <input type="text" class="form-control" readonly placeholder="<?php echo $rowS['formaapresentacao'];?> <?php echo $rowAI['formaapresentacao'];?> <?php echo $rowAE['formaapresentacao'];?> <?php echo $row['formaapresentacao'];?>" />
                    </div>
                       
                        <div class="form-group col-md-6">
                          <p>Modalidade:</p>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade14;?>  value="" name="modalidade" />
                            <label class="form-check-label">Graduação</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade15;?>  value="" name="modalidade" />
                            <label class="form-check-label">Pós-Graduação</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade16;?>  value="" name="modalidade" />
                            <label class="form-check-label">Extensão</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade17;?>  value="" name="modalidade" />
                            <label class="form-check-label">Trabalho Conclusão de Curso</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade18;?>  value="" name="modalidade" />
                            <label class="form-check-label">Internato em Saúde Coletiva</label>
                        </div>
                       </div>                     
                </div>                                                  
               <div class="shadow-textarea">
                    <label class="form-check-label">Autores do Trabalho (Favor colocar os nomes dos autores separados por vírgula, colocar todos na mesma linha e com o último nome em maiúsculo. Não repetir o nome do apresentador.)</label>
                    <textarea class="form-control" readonly rows="7" placeholder="<?php echo $rowS['autorestrabalho'];?> <?php echo $row['autorestrabalho'];?> <?php echo $rowAI['autorestrabalho'];?> <?php echo $rowAE['autorestrabalho'];?>"></textarea>   
                </div>
                <div class="shadow-textarea">
                    <label class="form-check-label">Proposta do trabalho a ser apresentado (se existir)</label>
                    <textarea class="form-control" readonly rows="30" placeholder="<?php echo $rowS['propostatrabalho'];?> <?php echo $row['propostatrabalho'];?> <?php echo $rowAI['propostatrabalho'];?> <?php echo $rowAE['propostatrabalho'];?>"></textarea>   
                </div>
            </form>
        </div>
    </div>

    <div class="col text-center mt-3 mb-4">
       <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/administrar/?id=<?php echo $id_evento;?>">Voltar</a> 
    </div>
</section>
