
    <section class="conteudo">
            <h3 class="text-center">Servidor :: Cadastrar Coordenador/Diretor</h3>
            <div class="row">
                <div class="col">
                    <form action="/interno/cenex/assets/action/cadastra-cor-dir.php" method="POST" enctype="multipart/form-data" class="container-fluid list-box text-left p-4">    
                        <div class="form-row">
                            
                            <div class="form-group col-md-6 col-lg-4">
                                    <label for="titulo">Nome</label>
                                    <input type="text" class="form-control" id="nome" name="nome" required placeholder="Escreva o nome do Coordenador ou Diretor" />
                                </div>
                            
                            <div class="form-group col-md-6 col-lg-4">
                                <label for="funcao">Função: <span class="text-muted">Coordenador ou Diretor</span></label>
                                <select class="form-control" id="funcao" required name="funcao[]">
                                  <option value ="1">Coordenador</option>
                                  <option value ="2">Diretor</option>
                                </select>
                            </div>    
                            
                            <div class="form-group col-md-12 col-lg-4">
                                <label>Assinatura Digital: <span class="text-muted">Tamanho Máx. 8MB</span>:</label>
                                <input type="file" name="imagem" class="form-control-file" id="">
                            </div>                   
                       </div>              
   
                </div>
            </div>
            <div class="col text-center mt-3">
                <button class="btn btn-primary mr-2" type="submit">Cadastrar</button>
                <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/servidor/">Voltar</a> 
            </div>
                    </form> 
</section>