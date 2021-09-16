<?php 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
    $id = $_GET['id'];
    

 ?>
 
<form enctype="multipart/form-data" action="/interno/cenex/assets/action/inscrever-evento.php" method="POST">
    <input type="hidden" class="form-control" id="Nome" value="<?php echo $id; ?>" name="id">
    <input type="hidden" class="form-control" id="Nome" value="<?php echo $cpf; ?>" name="cpf">


<section class="conteudo">
    <h3 class="text-center">Aluno :: Inscrever-se em Evento</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4"> 
                <div class="form-row">
                     <div class="form-group col-md-6">
                            <label class="form-check-label">Apresentador do Trabalho<span class="text-muted">(Favor colocar o último nome em maiúsculo.)</span></label>
                            <input type="text" class="form-control" name="apresentador" placeholder="Escreva o nome do Apresentador do Trabalho" />
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-check-label">Título do Trabalho</label>
                            <input type="text" class="form-control" name="titulo" placeholder="Escreva o nome do Título do Trabalho" />
                        </div> 
                </div>        
                <div class="form-row">                                   
                    <div class="form-group col-md-6">
                        <p>Forma de apresentação:</p>
                        
                        <?php   $forma1 = mysql_query ("SELECT id, formaapresentacao FROM `cenex_eventos` WHERE formaapresentacao LIKE '%Oral%' and id ='$id'");
                                $oral = mysql_num_fields($forma1); 
                                               
                           if ($oral > 0){                   
                                               
                        ?>
                                                                                              
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Oral" name="formaapresentacao[]" />
                            <label class="form-check-label">Oral </label>
                        </div>
                        
                        <?php } ?>
                        
                        <?php   $forma2 = mysql_query ("SELECT id, formaapresentacao FROM `cenex_eventos` WHERE formaapresentacao LIKE '%Pôster Impresso%' and id ='$id'");
                                $impresso = mysql_num_rows($forma2); 
                                
                        if ($impresso > 0) {
                                
                        ?>
                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pôster Impresso" name="formaapresentacao[]" />
                            <label class="form-check-label">Pôster Impresso</label>
                        </div>
                        
                        <?php } ?>
                        

                        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pôster Digital" name="formaapresentacao[]" />
                            <label class="form-check-label">Pôster Digital</label>
                        </div>
                        
                    </div>
                                 
                    <div class="form-group col-md-6">
                        <p>Modalidade:</p>
                        
                         <?php $mod11 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%11%' and id ='$id'");
                               $num11 = mysql_num_rows($mod11); 
                          
                          if ($num11 > 0) {
                          
                          ?>    
                        
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="11" name="modalidade[]" />
                            <label class="form-check-label">Pesquisa </label>
                        </div>
                                     
                        <?php } ?> 
                        
                        <?php  $mod12 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%12%' and id ='$id'");
                               $num12 = mysql_num_rows($mod12);
                               
                          if ($num12 > 0) {
                               
                               
                         ?>   
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="12" name="modalidade[]" />
                            <label class="form-check-label">Caso Clínico</label>
                        </div>
                        
                        <?php } ?>
                        
                        <?php  $mod13 = mysql_query ("SELECT * FROM `cenex_eventos` WHERE modalidade LIKE '%13%' and id ='$id'");
                               $num13 = mysql_num_rows($mod13);
                               
                         if ($num13 > 0) {      
                               
                        ?>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="13" name="modalidade[]" />
                            <label class="form-check-label">Relato de Casos</label>
                        </div>
                        
                        <?php } ?>
                        

                        
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="14" name="modalidade[]" />
                            <label class="form-check-label">Graduação</label>
                        </div>
                        

                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="15" name="modalidade[]" />
                            <label class="form-check-label">Pós-Graduação</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="16" name="modalidade[]" />
                            <label class="form-check-label">Extensão</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="17" name="modalidade[]" />
                            <label class="form-check-label">Trabalho Conclusão de Curso</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="18" name="modalidade[]" />
                            <label class="form-check-label">Internato em Saúde Coletiva</label>
                        </div>
                 </div>
                 </div>
                <div class="shadow-textarea">
                    <label>Autores do Trabalho (Inserir de acordo com as normas do evento e não repetir o nome do apresentador)</label>
                    <textarea class="form-control" name="autorestrabalho" rows="7" placeholder="Escreva o nome dos Autores do Trabalho"></textarea>   
                </div>
                <div class="shadow-textarea">
                    <label>Resumo do trabalho (se existir)</label>
                    <textarea class="form-control" name="propostatrabalho" rows="18" placeholder="Coloque aqui o resumo do seu trabalho de acordo com as normas do evento"></textarea>   
                </div>                                                                                                            
            </form> 
        </div>
    </div>
    <div class="col text-center mt-3">
        <button class="btn btn-primary mr-2" type="submit">Enviar</button>
        <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/aluno/acoes/listar/evento">Voltar</a> 
    </div>
</section>