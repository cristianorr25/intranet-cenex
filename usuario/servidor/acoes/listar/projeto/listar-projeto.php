<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $recupera_projeto = mysql_query ("SELECT * FROM `cenex_projetos`") or die (mysql_error()); 
    
                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Servidor :: Listar ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary">Projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Coodenador</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Status</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Aprovar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Reprovar projeto</span></th>
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
									<td><?php echo $projeto['coord']?></td>
									<td><?php 
			                            if($projeto['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
			                            if($projeto['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
			                            if($projeto['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
			                            if($projeto['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
			                            if($projeto['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  "; 
			                            ?></td>

			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/visualizar/projeto/" class="  btn btn-info">Ver</button>
			                        </td>
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/assets/action/aprovar-acao.php" onclick="return confirm('Deseja Aprovar esse projeto?')" class="  btn btn-success">Aprovar</button>
			                        </td>		                        		                        
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/assets/action/reprovar-acao.php" onclick="return confirm('Deseja Reprovar esse projeto?')" class=" btn btn-danger">Reprovar</button>
			                        </td>		                        		                        
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/editar/" class=" btn btn-warning">Editar</button>
			                        </td>
			                        <td>           
			                      		<button type ="submit" formaction="/interno/cenex/assets/action/excluir-acao.php" onclick="return confirm('Confirma exclusão do projeto?')" class="  btn btn-dark">Excluir</button>
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
		  <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/servidor/">Voltar</a> 
	</div> 
</section> 

       	

