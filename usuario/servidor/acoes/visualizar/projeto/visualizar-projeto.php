<?php 
                    include('../../../../../../assets/conn/db.php'); 
                    
                    $id = $_POST['id'];
                   
                   $sql = mysql_query ("SELECT * FROM `cenex_projetos` WHERE id ='$id'");
                   
                   $row = mysql_fetch_array($sql); 
                   
                   $row['nomeProjeto'];
                   
                          
                  if ($row['histEscolar']=="1"){
                    
                     $checkbox= "checked";
                      
                  }  
                  
                  if ($row['rendEscolar']=="1"){
                    
                    $rendEscolar= "checked";
                      
                  }
                  
                  if ($row['pbext']=="1"){
                    
                     $pbext= "checked";
                      
                  }  
                  
                  if ($row['afirmativas']=="1"){
                    
                    $afirmativas= "checked";
                      
                  }
                
                
?>    

<form action="/interno/cenex/sistema/usuario/servidor/acoes/visualizar/projeto/gerar-chamada.php" method="post">
<input type="hidden" value="<?php echo $id;?>" name="id"> 
<section class="conteudo">
    <h3 class="text-center">Visualizar ação de extensão</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Projeto/Programa</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['nomeProjeto'];?>" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Coordenador(a)</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['coord'];?>" />
                    </div>      
                    <div class="form-group col-md-6">
                        <label>Subcoordenador(a)</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['subCoord'];?>" />
                    </div>          
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Resumo do Projeto/Programa</label>
                        <textarea class="form-control" id="" rows="7" readonly placeholder="<?php echo$row['description'];?>"></textarea>           
                    </div>  
                </div>
                <div class="form-row">                  
                    <div class="form-group col-md-4">
                        <label>Número de registro do SIEX</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['siex'];?>" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Início do projeto</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo  date("d/m/Y", strtotime($row['inicioProjeto']));?>" /> 
                    </div>                
                    <div class="form-group col-md-4">
                        <label>Termino do projeto</label>
                        <input type="text" class="form-control" id="" readonly placeholder=" <?php echo  date("d/m/Y", strtotime($row['terminoProjeto']));?>"  /> 
                    </div>
                </div>      
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Início Inscrição</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo  date("d/m/Y", strtotime($row['inicioInsc']));?>" /> 
                    </div>
                    <div class="form-group col-md-6">
                      <label>Termino Inscrição</label>
                      <input type="text" class="form-control" id="" readonly placeholder="<?php echo  date("d/m/Y", strtotime($row['terminoInsc']));?>" /> 
                  </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Pré requisitos</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['requisitos'];?>"  />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Período</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['periodo'];?>"  />
                    </div> 
                </div>
                <div class="form-row">                   
                    <div class="form-group col-md-6">
                        <label>Disponibilidade de horários</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['disponibilidade'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Forma de seleção</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['selecao'];?>"  />
                    </div>
                </div>   

                <div class="form-row">
                    <div class="form-group col-md-4"> 
                        <p>Documentação:</p>
                        
                        <div class="form-check">
                            <input class="form-check-input" disabled="disabled" <?php echo$checkbox;?> type="checkbox" value="" id="" />
                            <label class="form-check-label">Histórico escolar</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input" disabled="disabled" <?php echo$rendEscolar;?> type="checkbox" value="" id="" />
                          <label class="form-check-label">Rendimento Semestral Global</label>
                        </div>
                    </div>   
                    <div class="form-group col-md-8">
                        <label>Outros</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['outro'];?>" />
                    </div>        
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Local de Funcionamento</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['local'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Dia e horário de funcionamento</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['programacao'];?>" />
                    </div>        
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Vagas voluntários</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['vagasVoluntario'];?> " />
                    </div>              
                    <div class="form-group col-md-4">
                        <label>Vagas bolsistas</label>
                        <input type="text" class="form-control" id="" readonly placeholder="<?php echo$row['vagasBolsista'];?> " />
                    </div> 
                    <div class="form-group col-md-4">
                        <p>Tipo de Bolsa:</p>
                        <div class="form-check">
                            <input class="form-check-input" disabled="disabled" <?php echo$pbext;?> type="checkbox" value="" id="" />
                            <label class="form-check-label">PBEXT (R$ 400,00)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" disabled="disabled" <?php echo$afirmativas;?> type="checkbox" value="" id="" />
                          <label class="form-check-label">AÇÕES AFIRMATIVAS (R$ 500,00)</label>
                        </div>
                    </div>         
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Outras informações</label>
                        <textarea class="form-control" id="" rows="7" readonly placeholder="<?php echo$row['outrasinfo'];?>"></textarea>           
                    </div>  
                </div> 





            </form>
        </div>
    </div>
    <div class="col text-center mt-3">
        <button class="btn btn-primary mr-2" type="submit">Gerar Chamada</button>
        <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/servidor/acoes/listar/projeto">Voltar</a> 
    </div>
</section>
