<form enctype="multipart/form-data" action="/interno/cenex/assets/action/criar-evento.php" method="post">
<section class="conteudo">
    <h3 class="text-center">Professor :: Criar Evento</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Evento</label>
                        <input type="text" class="form-control" name="nomeEvento" placeholder="Nome do Evento" />
                    </div>
                </div>    
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Coordenador(a)</label>
                        <input type="text" class="form-control" name="coordEvento" placeholder="Nome do Coordenador(a)" />
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label>Local do Evento</label>
                        <input type="text" class="form-control" name="localEvento" placeholder="Local de realização do evento" />
                    </div>
                </div>               
                <div class="form-row">     
                    <div class="form-group col-md-4">
                        <label>Número de registro do SIEX</label>
                        <input type="text" class="form-control" name="siexEvento" placeholder="Número de registro do SIEX" />
                    </div>  
                    <div class="form-group col-md-4">
                        <label>Número de vagas</label>
                        <input type="text" class="form-control" name="vagasEvento" placeholder="Número de vagas" />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Insira a programação: (Arquivo em PDF - MÁX: 8MB)</label>
                        <input type="file" class="form-control-file" name="programacao">
                    </div>
                </div> 
                <div class ="form-row">
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Aluno Graduação</label>
                        <input type="text" class="form-control" name="valorEventoG" placeholder="Valor da adesão" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Aluno Pós-Graduação</label>
                        <input type="text" class="form-control" name="valorEventoPG" placeholder="Valor da adesão" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Professor</label>
                        <input type="text" class="form-control" name="valorEventoP" placeholder="Valor da adesão" />
                    </div>
                    <div class="form-group col-md-3">
                        <label>Valor da adesão: Outros</label>
                        <input type="text" class="form-control" name="valorEventoO" placeholder="Valor da adesão" />
                    </div>
                    
                </div>
                <div class="form-row">                          
                    <div class="form-group col-md-3">
                        <label>Início do Evento</label>
                        <input type="date" class="form-control" name="inicioEvento" placeholder="Data de início do evento" />
                    </div>                
                    <div class="form-group col-md-3">
                        <label>Termino do evento</label>
                        <input type="date" class="form-control" name="terminoEvento" placeholder="Data de termino do evento" />
                    </div>                        
                    <div class="form-group col-md-3">
                        <label>Início Inscrição</label>
                        <input type="date" class="form-control" name="inicioInscEvento" placeholder="Data de início do evento" />
                    </div>
                    <div class="form-group col-md-3">
                      <label>Termino Inscrição</label>
                      <input type="date" class="form-control" name="terminoInscEvento" placeholder="Data de início do evento" />
                  </div>   
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Objetivos do Evento</label>
                        <textarea class="form-control" name="objetivosEvento" rows="7" placeholder="Descreva os objetivos do evento"></textarea>   
                    </div>
                </div>                
                <div class="form-row">                                 
                    <div class="form-group col-md-3">
                        <p>Apresentação de trabalho:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Sim" name="apresentacao" />
                            <label class="form-check-label">Sim</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Não" name="apresentacao" />
                            <label class="form-check-label">Não</label>
                        </div>
                    </div>                 
                    <div class="form-group col-md-3">
                        <p>Forma de apresentação:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Oral" name="formaapresentacao[]" />
                            <label class="form-check-label">Oral </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pôster Impresso" name="formaapresentacao[]" />
                            <label class="form-check-label">Pôster Impresso</label>
                        </div>
                       <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Pôster Digital" name="formaapresentacao[]" />
                            <label class="form-check-label">Pôster Digital</label>
                        </div>
                    </div>
                                    
                    <div class="form-group col-md-6">
                        <p>Modalidade:</p>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="11" name="modalidade[]" />
                            <label class="form-check-label">Pesquisa </label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="12" name="modalidade[]" />
                            <label class="form-check-label">Caso Clínico</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" value="13" name="modalidade[]" />
                            <label class="form-check-label">Relato de Casos</label>
                        </div>
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
                    <label>Normas para submissão de trabalhos</label>
                    <textarea class="form-control" name="normasEvento" rows="7" placeholder="Descreva as normas para submeter um trabalho"></textarea>
                </div>    
                <div class="col text-center mt-5 mb-4">
                    <button class="btn btn-primary mr-2" type="submit">Enviar</button>
                    <a class="btn btn-danger" href="/interno/cenex/sistema/usuario/professor/acoes/criar/">Cancelar</a> 
                </div>              
            </form> 
        </div>
    </div>
</section>