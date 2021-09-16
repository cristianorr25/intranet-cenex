<?php 
                    include('../../../../../assets/conn/db.php'); 
                   $id = $_POST['id'];
                   
                   $sql = mysql_query ("SELECT * FROM `cenex_projetos` WHERE id ='$id'");
                   
                   $row = mysql_fetch_array($sql); 
                   
                          
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
<form action="/interno/cenex/assets/action/editar-projeto.php" method="post">
<input type="hidden" value="<?php echo $row['id'];?>" name="id">      
<section class="conteudo">
    <h3 class="text-center">Editar ação de extensão</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Projeto/Programa</label>
                        <input type="text" class="form-control" name="nomeProjeto"  value="<?php echo$row['nomeProjeto'];?>" placeholder="Nome do Projeto" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Coordenador(a)</label>
                        <input type="text" class="form-control" name="coord"  value="<?php echo$row['coord'];?>" placeholder="Nome do Coordenador(a)" />
                    </div>      
                    <div class="form-group col-md-6">
                        <label>Subcoordenador(a)</label>
                        <input type="text" class="form-control" name="subCoord"  value="<?php echo$row['subCoord'];?>" placeholder="Nome do Subcoordenador(a)" />
                    </div>          
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Resumo do Projeto/Programa</label>
                        <textarea class="form-control" name="description" rows="7" ><?php echo$row['description'];?></textarea>           
                    </div>  
                </div>
                <div class="form-row">                  
                    <div class="form-group col-md-4">
                        <label>Número de registro do SIEX</label>
                        <input type="text" class="form-control" name="siex"  value="<?php echo$row['siex'];?>" placeholder="Número de registro do SIEX"/>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Início do projeto</label>
                        <input type="date" class="form-control" name="inicioProjeto"     value="<?php echo  $row['inicioProjeto'];?>" placeholder="Insira a data de Início do projeto" data-mask="00/00/0000" maxlength="10" autocomplete="off" /> 
                    </div>                
                    <div class="form-group col-md-4">
                        <label>Termino do projeto</label>
                        <input type="date" class="form-control" name="terminoProjeto"  value="<?php echo  $row['terminoProjeto'];?>" placeholder="Insira a data de Termino do projeto"/> 
                    </div>
                </div>      
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Início Inscrição</label>
                        <input type="date" class="form-control"  name="inicioInsc"  value="<?php echo  $row['inicioInsc'];?>" placeholder="Insira a data de Início do projeto"/> 
                    </div>
                    <div class="form-group col-md-6">
                      <label>Termino Inscrição</label>
                      <input type="date" class="form-control" name="terminoInsc"  value="<?php echo $row['terminoInsc'];?>" placeholder="Insira a data de Início do projeto"/> 
                  </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Pré requisitos</label>
                        <input type="text" class="form-control" name="requisitos" value="<?php echo$row['requisitos'];?>" placeholder="Insira os pré requisitos do projeto"  />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Período</label>
                        <input type="text" class="form-control" name="periodo"  value="<?php echo$row['periodo'];?>" placeholder="Insira os período necessário para o projeto" />
                    </div> 
                </div>
                <div class="form-row">                   
                    <div class="form-group col-md-6">
                        <label>Disponibilidade de horários</label>
                        <input type="text" class="form-control" name="disponibilidade"  value="<?php echo$row['disponibilidade'];?>" placeholder="Insira a disponibilidade necessária para o projeto" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Forma de seleção</label>
                        <input type="text" class="form-control" name="selecao" value="<?php echo$row['selecao'];?>" placeholder="Insira a forma de seleção do projeto"  />
                    </div>
                </div>   
                <div class="form-row">
                    <div class="form-group col-md-4"> 
                        <p>Documentação:</p>
                        
                        <div class="form-check">
                            <input class="form-check-input"  <?php echo$checkbox;?> type="checkbox" value="<?php if($checkbox == "checked") echo "1" ;if($row['histEscolar'] == "0") echo "1"?>" name="histEscolar" />
                            <label class="form-check-label">Histórico escolar</label>
                        </div>

                        <div class="form-check">
                          <input class="form-check-input"  <?php echo$rendEscolar;?> type="checkbox" value="<?php if($rendEscolar == "checked") echo "1" ;if($row['rendEscolar'] == "0") echo "1"?>" name="rendEscolar" />
                          <label class="form-check-label">Rendimento Semestral Global</label>
                        </div>
                    </div>   
                    <div class="form-group col-md-8">
                        <label>Outros</label>
                        <input type="text" class="form-control" name="outro"  value="<?php echo$row['outro'];?>" />
                    </div>        
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Local de Funcionamento</label>
                        <input type="text" class="form-control" name="local"  value="<?php echo$row['local'];?>" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Dia e horário de funcionamento</label>
                        <input type="text" class="form-control" name="programacao"  value="<?php echo$row['programacao'];?>" />
                    </div>        
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Vagas voluntários</label>
                        <input type="text" class="form-control" name="vagasVoluntario"  value="<?php echo$row['vagasVoluntario'];?> " />
                    </div>              
                    <div class="form-group col-md-4">
                        <label>Vagas bolsistas</label>
                        <input type="text" class="form-control" name="vagasBolsista"  value="<?php echo$row['vagasBolsista'];?> " />
                    </div> 
                    <div class="form-group col-md-4">
                        <p>Tipo de Bolsa:</p>
                        <div class="form-check">
                            <input class="form-check-input" <?php echo$pbext;?> type="checkbox" value="<?php if($pbext == "checked") echo "1" ;if($row['pbext'] == "0") echo "1"?>" name="pbext" />
                            <label class="form-check-label">PBEXT (R$ 400,00)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" <?php echo$afirmativas;?> type="checkbox" value="<?php if($afirmativas == "checked") echo "1" ;if($row['afirmativas'] == "0") echo "1"?>" name="afirmativas" />
                          <label class="form-check-label">AÇÕES AFIRMATIVAS (R$ 500,00)</label>
                        </div>
                    </div>         
                </div>              
            </form>
        </div>
    </div>
    <div class="col text-center mt-3">
        <button class="btn btn-primary mr-2" type="submit">Salvar</button>
        <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/servidor/acoes/listar/projeto">Cancelar</a> 
    </div>
</section>
