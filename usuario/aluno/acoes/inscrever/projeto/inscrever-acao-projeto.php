<?php 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
    $id = $_POST['id'];


 ?>
 
<form enctype="multipart/form-data" action="/interno/cenex/assets/action/inscrever-projeto.php" method="POST">
    <input type="hidden" class="form-control" id="Nome" value="<?php echo $id; ?>" name="id">
    <input type="hidden" class="form-control" id="Nome" value="<?php echo $cpf; ?>" name="cpf">
<section class="conteudo">
    <h3 class="text-center">Aluno :: Inscrever-se em Projeto</h3>
    <div class="row">
        <div class="col">
            <form class="container-fluid list-box text-left p-4">    
                <div class="form-row">

                    <div class="form-group col-md-6 col-lg-4">
                        <label>Extrato de Integralização Curricular <span class="text-muted">(Disponível em: SIGA -> Minhas Matrículas)</span>:</label>
                        <input type="file" class="form-control-file" name="extratoCurricular">
                    </div>
                    <div class="form-group col-md-6 col-lg-4">
                        <label>Atividades em curso e cursadas <span class="text-muted">(Disponível em: SIGA -> Minhas Matrículas</span>:</label>
                        <input type="file" class="form-control-file" name="atividadesCurso">
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label for="participacao">Tipo de participação: <span class="text-muted">Voluntário ou Bolsista</span></label>
                        <select class="form-control" name="tipoInscricao[]">
                        <option value="1">Voluntário</option>
                        <option value="2">Bolsista</option>
                        <option value="3">Bolsista/Voluntário</option>
                        </select>
                    </div>
               </div>              
               <div class="shadow-textarea">
                    <label>Disponibilidade de Horários / Período Atual / Quais Projetos de Extensão já participou?</label>
                    <textarea class="form-control" name="disponibilidade" rows="7" placeholder="Escreva a sua disponibilidade de horário para participar do projeto (Ex: Segunda e Quarta de Manhã/Terça e Quinta a Tarde)"></textarea>   
                </div>
            </form> 
        </div>
    </div>
    <div class="col text-center mt-5 mb-4">
            <button class="btn btn-primary mr-2" type="submit">Enviar</button>
        <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/aluno/acoes/listar/projeto">Voltar</a> 
    </div>
</section>
