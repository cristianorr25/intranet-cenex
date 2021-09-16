<?php 
                    include('../../../../../../assets/conn/db.php');
                    
                    $cpf = getenv("Shib-brPerson-CPF");  
                    
                    $id = $_POST['id'];
                   
                   $sql = mysql_query ("SELECT * FROM `cenex_eventos` WHERE id ='$id'");
                   
                   $row = mysql_fetch_array($sql); 
                   
                          
                 $forma1 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE formaapresentacao LIKE '%Oral%' and id ='$id'");
                 $forma1 = mysql_num_rows($forma1);
                   
                          
                  if ($forma1 > 0){
                    
                     $oral= "checked";
                      
                  } 

                 $forma2 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE formaapresentacao LIKE '%Pôster Impresso%' and id ='$id'");
                 $forma2 = mysql_num_rows($forma2);

                if ($forma2 > 0) {

                      $posteri= "checked";
                  }

                 $forma3 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE formaapresentacao LIKE '%Pôster Digital%' and id ='$id'");
                 $forma3 = mysql_num_rows($forma3);
                  
                if ($forma3 > 0) {

                      $posterd= "checked";
                  }
                  
                  if ($row['apresentacao']=="Sim"){
                    
                    $apresentacao= "checked";
                      
                  } 

                  if ($row['apresentacao']=="Não") {

                      $apresentacao2= "checked";
                  }
                  
                  $mod11 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%11%' and id ='$id'");
                  $num11 = mysql_num_rows($mod11);
                  
                  
                  
                  if ($num11 > 0) {

                      $modalidade11= "checked";
                  }
                  
                  $mod12 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%12%' and id ='$id'");
                  $num12 = mysql_num_rows($mod12);
                  
                  
                 if ($num12 > 0) {

                      $modalidade12= "checked";
                  }
                  
                  $mod13 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%13%' and id ='$id'");
                  $num13 = mysql_num_rows($mod13);
                  
                  
                 if ($num13 > 0) {

                      $modalidade13= "checked";
                  }
                  
                  $mod14 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%14%' and id ='$id'");
                  $num14 = mysql_num_rows($mod14);
                  
                  
                 if ($num14 > 0) {

                      $modalidade14= "checked";
                  }
                  
                  $mod15 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%15%' and id ='$id'");
                  $num15 = mysql_num_rows($mod15);
                  
                  
                if ($num15 > 0) {

                      $modalidade15= "checked";
                  }
                  
                  $mod16 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%16%' and id ='$id'");
                  $num16 = mysql_num_rows($mod16);
                    
                  
                 if ($num16 > 0) {

                      $modalidade16= "checked";
                  }
                  
                  $mod17 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%17%' and id ='$id'");
                  $num17 = mysql_num_rows($mod17);
                  
                  
                 if ($num17 > 0) {

                      $modalidade17= "checked";
                  }
                  
                  $mod18 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%18%' and id ='$id'");
                  $num18 = mysql_num_rows($mod18);
                  
                  
                 if ($num18 > 0) {

                      $modalidade18= "checked";
                  }
                  

                
                
?> 


<form action="/interno/cenex/assets/action/criar-evento.php" method="post">
<section class="conteudo">
    <h3 class="text-center">Professor :: Visualizar ação de extensão</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Evento</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['nomeEvento'];?>" />
                    </div>
                </div>   
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Coordenador(a)</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['coordEvento'];?>" />
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>Local do Evento</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['localEvento'];?>" />
                    </div>
                </div>               
                <div class="form-row">     
                    <div class="form-group col-md-4">
                        <label>Número de registro do SIEX</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['siexEvento'];?>" />
                    </div>  
                    <div class="form-group col-md-4">
                        <label>Número de vagas</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['vagasEvento'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Programação:</label>
                        <div><a class="btn btn-primary" href="/interno/cenex/assets/action/baixarProgramacao.php?id=<?php echo $id;?>" target="_blank" >Programação</a></div> 
                    </div>
                </div>
                <div class ="form-row">
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Aluno Graduação</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['valorEventoG'];?>" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Aluno Pós-Graduação</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['valorEventoPG'];?>" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Professor</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['valorEventoP'];?>" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Outros</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['valorEventoO'];?>" />
                    </div>
              </div>
                
                
                
                 
                <div class="form-row">                          
                    <div class="form-group col-md-3">
                        <label>Início do Evento</label>
                        <input type="text" class="form-control" id="" readonly placeholder=" <?php echo  date("d/m/Y", strtotime($row['inicioEvento']));?>" /> 
                    </div>                
                    <div class="form-group col-md-3">
                        <label>Termino do evento</label>
                        <input type="text" class="form-control" id="" readonly placeholder=" <?php echo  date("d/m/Y", strtotime($row['terminoEvento']));?>" /> 
                    </div>                        
                    <div class="form-group col-md-3">
                        <label>Início Inscrição</label>
                        <input type="text" class="form-control" id="" readonly placeholder=" <?php echo  date("d/m/Y", strtotime($row['inicioInscEvento']));?>" />
                    </div>
                    <div class="form-group col-md-3">
                      <label>Termino Inscrição</label>
                      <input type="text" class="form-control" id="" readonly placeholder=" <?php echo  date("d/m/Y", strtotime($row['terminoInscEvento']));?>" /> 
                  </div>   
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Objetivos do Evento</label>
                        <textarea class="form-control" id="" rows="7" readonly placeholder="<?php echo$row['objetivosEvento'];?>"></textarea>    
                    </div>
                </div>                
                <div class="form-row">                                 
                        <div class="form-group col-md-4">
                            <p>Apresentação de trabalho:</p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$apresentacao;?> value="" name="apresentacao" />
                                <label class="form-check-label">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$apresentacao2;?> value="" name="apresentacao" />
                                <label class="form-check-label">Não</label>
                            </div>
                        </div>                 
                    <div class="form-group col-md-4">
                        <p>Forma de apresentação:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"   disabled="disabled" <?php echo$oral;?> value="" name="formaapresentacao" />
                            <label class="form-check-label">Oral </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$posteri;?> value="" name="formaapresentacao" />
                            <label class="form-check-label">Pôster Impresso</label>
                        </div>
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$posterd;?> value="" name="formaapresentacao" />
                            <label class="form-check-label">Pôster Digital</label>
                        </div>
                        
                    </div>
                    
                    <div class="form-group col-md-4">
                        <p>Modalidade:</p>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade11;?> value="" name="modalidade" />
                            <label class="form-check-label">Pesquisa </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade12;?>  value="" name="modalidade" />
                            <label class="form-check-label">Caso Clínico</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" disabled="disabled" <?php echo$modalidade13;?>  value="" name="modalidade" />
                            <label class="form-check-label">Relato de Casos</label>
                        </div>
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
                    <label>Normas para submissão de trabalhos</label>
                    <textarea class="form-control" id="" rows="7" readonly placeholder="<?php echo$row['normasEvento'];?>"></textarea> 
                </div>    
                <div class="col text-center mt-5 mb-4">
                     <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/acoes/listar/evento/">Voltar</a>  
                </div>              
            </form> 
        </div>
    </div>
</section>