
<form action="/interno/cenex/assets/action/criar-projeto.php" method="post">
<section class="conteudo">
    <h3 class="text-center">Professor :: Criar Projeto</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Nome do Projeto/Programa</label>
                        <input type="text" class="form-control" name= "nomeProjeto" placeholder="Nome do Projeto"  />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Coordenador(a)</label>
                        <input type="text" class="form-control" name="coord" placeholder="Nome do Coordenador(a)"  />
                    </div>      
                    <div class="form-group col-md-6">
                        <label>Subcoordenador(a)</label>
                        <input type="text" class="form-control" name="subCoord" placeholder="Nome do Subcoordenador(a)"  />
                    </div>          
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Resumo do Projeto/Programa</label>
                        <textarea class="form-control" name="description" rows="7" placeholder="Breve resumo do projeto" ></textarea>           
                    </div>  
                </div>
                
                <div class="form-row">                  
                    <div class="form-group col-md-4">
                        <label>Número de registro do SIEX</label>
                        <input type="text" class="form-control" name="siex" placeholder="Número de registro do SIEX"  />
                    </div>
                    <div class="form-group col-md-4">
                        <label>Início do projeto</label>
                        <input type="date" class="form-control" name="inicioProjeto" placeholder="Insira a data de Início do projeto"  />
                    </div>                
                    <div class="form-group col-md-4">
                        <label>Termino do projeto</label>
                        <input type="date" class="form-control" name="terminoProjeto" placeholder="Insira a data de Termino do projeto"  />
                    </div>
                </div>      
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Início Inscrição</label>
                        <input type="date" class="form-control" name="inicioInsc" placeholder="Insira a data de Início do projeto"  />
                    </div>
                    <div class="form-group col-md-6">
                      <label>Termino Inscrição</label>
                      <input type="date" class="form-control" name="terminoInsc" placeholder="Insira a data de Início do projeto"  />
                  </div>   
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label>Pré requisitos</label>
                        <input type="text" class="form-control" name="requisitos" placeholder="Pré requisitos necessários"  />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Período</label>
                        <input type="text" class="form-control" name="periodo" placeholder="Período necessário para participar"  />
                    </div>

                </div>
                
                <div class="form-row">                    
                    <div class="form-group col-md-6">
                        <label>Disponibilidade de horários</label>
                        <input type="text" class="form-control" name="disponibilidade" placeholder="Disponibilidade de horários"  />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Forma de seleção</label>
                        <input type="text" class="form-control" name="selecao" placeholder="Forma de seleção"  />
                    </div>
                </div>   

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <p>Documentação:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="histEscolar" />
                            <label class="form-check-label">Histórico escolar</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" name="rendEscolar" />
                          <label class="form-check-label">Rendimento Semestral Global</label>
                        </div>
                    </div>   
                    <div class="form-group col-md-8">
                        <label>Outros</label>
                        <input type="text" class="form-control" name="outro" placeholder="Documentos necessários separados por virgula" />
                    </div>        
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Local de Funcionamento</label>
                        <input type="text" class="form-control" name="local" placeholder="Onde será realizado o projeto/programa" />
                    </div>
                    <div class="form-group col-md-6">
                        <label>Dia e horário de funcionamento</label>
                        <input type="text" class="form-control" name="programacao" placeholder="Dias da semana do projeto/programa" />
                    </div>        
                </div>  
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Vagas voluntários</label>
                        <input type="text" class="form-control" name="vagasVoluntario" placeholder="Número de vagas dos voluntários " />
                    </div>              
                    <div class="form-group col-md-4">
                        <label>Vagas bolsistas</label>
                        <input type="text" class="form-control" name="VagasBolsista" placeholder="Número de vagas dos bolsistas "  />
                    </div> 
                    <div class="form-group col-md-4">
                        <p>Tipo de Bolsa:</p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="pbext"/>
                            <label class="form-check-label">PBEXT (R$ 400,00)</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="1" name="afirmativas" />
                          <label class="form-check-label">AÇÕES AFIRMATIVAS (R$ 500,00)</label>
                        </div>
                    </div>
         
                </div>
                <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Outras informações</label>
                        <textarea class="form-control" name="outrasinfo" rows="7" placeholder="Outras informações sobre o processo seletivo" ></textarea>           
                    </div>  
                </div> 
                <div class="col text-center mt-5 mb-4">
                    <button class="btn btn-primary mr-2" type="submit">Enviar</button>
                    <a class="btn btn-danger" href="/interno/cenex/sistema/usuario/professor/acoes/criar/">Cancelar</a> 
                </div>              
            </form> 
        </div>
    </div>
</section>