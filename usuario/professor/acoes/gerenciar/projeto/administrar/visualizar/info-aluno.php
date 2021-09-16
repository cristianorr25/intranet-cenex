
<?php 

include('../../../../../../../../assets/conn/db.php');  

   $cpf = $_POST['cpf_aluno'];


   $id = $_GET['id'];


    $recupera_projeto_AE = mysql_query ("SELECT a. * , I. *
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id'") or die (mysql_error()); 
    
    $recupera_projeto_AI = mysql_query ("SELECT a. * , I. *
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id'") or die (mysql_error()); 
     
     
    $recupera_projeto = mysql_query ("SELECT a. * ,  I. *
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes I ON a.cpf_professor = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id'") or die (mysql_error());
    
    
    $recupera_projeto_S = mysql_query ("SELECT a. * ,  I.*
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id'") or die (mysql_error());  
       

     $rowAE = mysql_fetch_array($recupera_projeto_AE);
     
     $rowAI = mysql_fetch_array($recupera_projeto_AI);
     
     $row = mysql_fetch_array($recupera_projeto);
     
     $rowS = mysql_fetch_array($recupera_projeto_S);
     
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
                        <div class="form-group col-md-8">
                             <label>Tipo de Inscrição </label>
                            <?php 
                                if($rowS['tipoInscricao']==1 or $row['tipoInscricao']==1 or $rowAE['tipoInscricao']==1 or $rowAI['tipoInscricao']==1) {
                                  echo '<input type="text" class="form-control" id="Nome" value="Voluntário" readonly="readonly">';
                                } else if($rowS['tipoInscricao']==2 or $row['tipoInscricao']==2 or $rowAE['tipoInscricao']==2 or $rowAI['tipoInscricao']==2){
                                  echo '<input type="text" class="form-control" id="Nome" value="Bolsista" readonly="readonly">'; 
                                } else {
                                  echo '<input type="text" class="form-control" id="Nome" value="Voluntário ou Bolsista" readonly="readonly">'; 
                                }
                             ?>
                        </div>
                        <div class="form-group col-md-2">
                             <label>Atividades em curso </label> 
                             <div><a class="btn btn-primary" href="/interno/cenex/assets/action/baixarAtividadesCurso.php?cpf=<?php echo $cpf;?>" target="_blank" >Atividades em curso</a></div>  
                        </div>
                        <div class="form-group col-md-2">
                             <label>Extrato Curricular  </label> 
                             <div><a class="btn btn-primary" href="/interno/cenex/assets/action/baixarExtratoCurricular.php?cpf=<?php echo $cpf;?> " target="_blank" >Extrato Curricular</a></div>  
                        </div>
                    </div>
                    <div class="form-group">
                    <div class="shadow-textarea">
                        <label>Disponibilidade</label>
                        <textarea class="form-control" id="" rows="7" readonly placeholder="<?php echo $rowS['disponibilidade'];?> <?php echo $row['disponibilidade'];?> <?php echo $rowAI['disponibilidade'];?> <?php echo $rowAE['disponibilidade'];?>"></textarea>           
                    </div>  
                </div>               
            </form>
        </div>
    </div>

    <div class="col text-center mt-3 mb-4">
       <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/administrar/?id=<?php echo $id;?>">Voltar</a> 
    </div>
</section>
