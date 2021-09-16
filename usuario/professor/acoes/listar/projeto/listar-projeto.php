<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
     $recupera_projeto = mysql_query ("SELECT * FROM `cenex_projetos` WHERE cpf_professor='$cpf'") or die (mysql_error());   
    
                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Professor :: Listar ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary"><?php echo "Projeto" ;?></p></span></th>
							<th scope="col"><span class="font-weight-light text-primary">Status</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Gerenciar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Publicar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Editar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Excluir projeto</span></th>
						</tr>
					</thead>
					<tbody>
					  <?php while ($projeto = mysql_fetch_array($recupera_projeto)){ ?>	
  
							<tr>
								<form action="" method="POST" name="projetos" id="projetos">
			                    	<input type="hidden" value="<?php echo $projeto['id'];?>" name="id">
									<th scope="row" class="font-weight-bold"><?php echo $projeto['nomeProjeto']?></th>
									<td><?php 
			                            if($projeto['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
			                            if($projeto['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
			                            if($projeto['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
			                            if($projeto['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
			                            if($projeto['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
			                            ?></td>
			                        			            
			                        <td> 
			                        				                                  
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/" class="  btn btn-info">Ver</button>
			                      		
			                        </td>
			                        <td> 
			                        	<?php if ($projeto['status'] == '4') { ?>            
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/?id=<?php echo $projeto['id'];?>" class="  btn btn-success">Gerenciar</button>
			                      		<?php }  ?> 
			                        </td>		                        		                        
			                        <td> 
			                        	 <?php if ($projeto['status'] == '1') { ?>            
			                      		<button type="submit" formaction="/interno/cenex/assets/action/publicar-acao.php" onclick="return confirm('Deseja publicar o projeto?')" onclick="return confirm('Deseja Reprovar esse projeto?')" class=" btn btn-primary">Publicar</button>
			                      		<?php }  ?> 
			                        </td>		                        		                        
			                        <td>   
			                        
			                        <?php if (($projeto['status'] == '1') or ($projeto['status'] == '2') or ($projeto['status'] == '3'))   { ?>            
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/" class=" btn btn-warning">Editar</button>
			                      	<?php }  ?> 
			                        </td>
			                        			                        
			                        <td>   
			                        	<?php if (($projeto['status'] == '1') or ($projeto['status'] == '2') or ($projeto['status'] == '3'))   { ?>          
			                      		<button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class="  btn btn-dark">Excluir</button>
			                      		<?php }  ?> 
			                        </td>
			                        
                       			</form> 
							</tr>
					<?php }  ?>			
				  	</tbody>	  					  			   			 
				</table>
			</div>        	             	
		</div> 
	</div>

	<div class="col text-center mt-3">
		  <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/professor/">Voltar</a> 
	</div> 
</section> 

       	

