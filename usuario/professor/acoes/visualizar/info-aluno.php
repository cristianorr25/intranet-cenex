<?php include_once("../../../../modulos/header-professor.php") ?>
<section class="conteudo">
    <h3 class="text-center">Informações do Aluno</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">   
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label>Nome </label>
                        <input type="text" class="form-control" id="" readonly placeholder="Nome" />
                    </div>
                    <div class="form-group col-md-6">
                         <label>Matrícula</label>
                        <input type="text" class="form-control" id="" readonly placeholder="Matrícula" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                         <label>E-mail</label>
                        <input type="text" class="form-control" id="" readonly placeholder="E-mail" />
                    </div>
                    <div class="form-group col-md-6">
                         <label>Telefone</label>
                        <input type="text" class="form-control" id="" readonly placeholder="Telefone" />
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
                             <label>Tipo de Inscrição </label>
                            <input type="text" class="form-control" id="" readonly placeholder="Tipo de Inscrição" />
                        </div>
                        <div class="form-group col-md-6">
                             <label>Extrato Curricular  </label> 
                             <div><a class="btn btn-primary" href="#">Visualizar Extrato Curricular</a></div>  
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Disponibilidade</label>
                        <textarea class="form-control" id="" rows="7" readonly placeholder="Disponibilidade"></textarea>           
                    </div>  
                </div>               
            </form>
        </div>
    </div>

    <div class="col text-center mt-3 mb-4">
        <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/acoes/listar/">Voltar</a> 
    </div>
</section>
<?php include_once("../../../../modulos/footer.php") ?>