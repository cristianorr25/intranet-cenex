<?php 


    include('../../../../../../../assets/conn/db.php');  

    $id = $_GET['id'];

    $recupera_projeto_AE = mysql_query ("SELECT a. * , I.statusInscricao, I.id_projeto, I.tipoInscricao, I.id
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.id_projeto = '$id'") or die (mysql_error()); 
    
    $recupera_projeto_AI = mysql_query ("SELECT a. * , I.statusInscricao, I.id_projeto, I.tipoInscricao, I.id
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.id_projeto = '$id'") or die (mysql_error()); 
     
     
    $recupera_projeto = mysql_query ("SELECT a. * ,  I.statusInscricao, I.id_projeto, I.tipoInscricao, I.id
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes I ON a.cpf_professor = I.cpf_professor 
    WHERE I.id_projeto = '$id'") or die (mysql_error());
    
    
     $recupera_projeto_S = mysql_query ("SELECT a. * , I.statusInscricao, I.id_projeto, I.tipoInscricao, I.id
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes I ON a.cpf_servidor = I.cpf_professor 
    WHERE I.id_projeto = '$id'") or die (mysql_error());  
     
     

   $aluno = mysql_fetch_array($recupera_projeto_AI) ;
   $alunoE = mysql_fetch_array($recupera_projeto_AE);

 
?>
<section class="conteudo">
    <h3 class="text-center">Professor :: Administrar Inscrições</h3>
    <div class="container-fluid">
        <div class="row list-box">
            <div class="table-responsive">
                <form action="" method="POST" name="projetos" id="projetos">
                <table class="table display" id="example1">
                    
                    <thead>
                        <tr>
                            <th scope="col"><span class="font-weight-light text-primary">Nome</span></th>
                            <th scope="col"><span class="font-weight-light text-primary">Inscrição</span></th>
                            <th scope="col"><span class="font-weight-light text-primary">Status</span></th>
                            <th scope="col"><span class="font-weight-light text-primary">Selecionar </span></th>
                           
                        </tr>
                    </thead>
                    
                    <tbody>
                        
                        <?php   
                        
                        
                        while ($professor = mysql_fetch_array($recupera_projeto)){   
                        
                        if($professor > 1){ ?>
                                           
                        <tr>
        
                            <th scope="row"><?php echo $professor['nome_professor'];?></th>
                            <td><?php 
                                if($professor['tipoInscricao'] == "1") echo "  Voluntário "; 
                                if($professor['tipoInscricao'] == "2") echo "  Bolsista "; 
                                if($professor['tipoInscricao'] == "3") echo "  Voluntário/Bolsista  ";
                                ?>
                            </td>
                            <td><?php 
                                if($professor['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($professor['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Reprovado </font></strong> "; 
                                ?>
                            </td>
                            <td><input class="form-check-input" type="checkbox" value="<?php echo $professor['id'];?>" name="idaluno" />

                        </tr>
                        
                        <?php           } 
                        
                        }
                        
                        ?>
                        
                        <?php  
                        
                        while ($servidor = mysql_fetch_array($recupera_projeto_S)){  
                        
                        if($servidor > 1){ ?>  
                        
                        
                        <tr>
                         
                            <th scope="row"><?php echo $servidor['nome_servidor'];?></th>
                            <td><?php 
                                if($servidor['tipoInscricao'] == "1") echo "  Voluntário "; 
                                if($servidor['tipoInscricao'] == "2") echo "  Bolsista "; 
                                if($servidor['tipoInscricao'] == "3") echo "  Voluntário/Bolsista  ";
                                ?>
                            </td>
                            <td><?php 
                                if($servidor['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($servidor['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Reprovado</font></strong> "; 
                                ?>
                            </td>
                            <td><input class="form-check-input" type="checkbox" value="<?php echo $servidor['id'];?>" name="idaluno" />

                        </tr>
                        
                        <?php           } 
                        
                        }
                        
                        ?>
                  
                       <?php   if($aluno > 1){ ?>
                        
                     
                        <tr>
                          
                            <th scope="row"><?php echo $aluno['cpf_aluno'];?></th>
                            <td><?php 
                                if($row['tipoInscricao'] == "1") echo "  Voluntário "; 
                                if($row['tipoInscricao'] == "2") echo "  Bolsista "; 
                                if($row['tipoInscricao'] == "3") echo "  Voluntário/Bolsista  ";
                                ?>
                            </td>
                            <td><?php 
                                if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                                if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                                if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                                if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                                ?>
                            </td>
                            <td><input class="form-check-input" type="checkbox" value="<?php echo $professor['id'];?>" name="idaluno" />
                  
                        </tr>
                        
                    <?php           } ?>  
                        
                        
                        <?php   if($alunoE > 1){ ?>
                       
                        
                        <tr>
                            
                            <th scope="row"><?php echo $alunoE['cpf_aluno_E'];?></th>
                            <td><?php 
                                if($row['tipoInscricao'] == "1") echo "  Voluntário "; 
                                if($row['tipoInscricao'] == "2") echo "  Bolsista "; 
                                if($row['tipoInscricao'] == "3") echo "  Voluntário/Bolsista  ";
                                ?>
                            </td>
                            <td><?php 
                                if($row['statusInscricao'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
                                if($row['statusInscricao'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
                                if($row['statusInscricao'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
                                if($row['statusInscricao'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
                                if($row['statusInscricao'] == "5") echo "  <strong><font color='#6c757d'>  Não Inscrito </font></strong> ";
                                ?>
                            </td>
                            <td><input class="form-check-input" type="checkbox" value="<?php echo $professor['id'];?>" name="idaluno" />
                      
                        </tr>
                        
                      <?php           } ?>      
                        
                    </tbody>                                                 
                </table>
            </div>                          
        </div>    
                                                     
            
                
        <div class="col text-center mt-3 mb-4">
            

            
            <td><button type="submit" formaction="/interno/cenex/assets/action/aprovar-aluno.php" onclick="return confirm('Deseja Aprovar esse projeto?')" class="  btn btn-success">Aprovar</button></td>   

            <td><button type="submit" formaction="/interno/cenex/assets/action/reprovar-aluno.php" onclick="return confirm('Deseja Reprovar esse projeto?')" class=" btn btn-danger">Reprovar</button></td>
            
            
             </form>  

      
    </div>
</section>