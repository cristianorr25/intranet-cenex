<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $cpf = getenv("Shib-brPerson-CPF");
    
     $recupera_evento = mysql_query ("SELECT * FROM `cenex_eventos` WHERE cpf_professor='$cpf'") or die (mysql_error());   
    
                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Professor :: Listar ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary"><?php echo "  <font color='#DC3545'> Evento </font> " ?></p></p></span></th>
							<th scope="col"><span class="font-weight-light text-primary">Status</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Gerenciar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Publicar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Editar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Excluir evento</span></th>
						</tr>
					</thead>
					<tbody>
					  <?php while ($evento = mysql_fetch_array($recupera_evento)){ ?>	
  
							<tr>
								<form action="" method="POST" name="eventos" id="eventos">
									
			                    	<input type="hidden" value="<?php echo $evento['id'];?>" name="id">
									<th scope="row" class="font-weight-bold"><?php echo $evento['nomeEvento']?></th>
									<td><?php 
			                            if($evento['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
			                            if($evento['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
			                            if($evento['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
			                            if($evento['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
			                            if($evento['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
			                            ?></td>
			                        			            
			                        <td> 
			                        				                                  
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/visualizar/evento/" class="  btn btn-info">Ver</button>
			                      		
			                        </td>
			                        <td> 
			                        	<?php if ($evento['status'] == '4') { ?>            
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/evento/" class="  btn btn-success">Gerenciar</button>
			                      		<?php }  ?> 
			                        </td>		                        		                        
			                        <td> 
			                        	 <?php if ($evento['status'] == '1') { ?>            
			                      		<button type="submit" formaction="/interno/cenex/assets/action/publicar-acao.php" onclick="return confirm('Deseja publicar o evento?')" onclick="return confirm('Deseja Reprovar esse evento?')" class=" btn btn-primary">Publicar</button>
			                      		<?php }  ?> 
			                        </td>		                        		                        
			                        <td>   
			                        
			                        <?php if (($evento['status'] == '1') or ($evento['status'] == '2') or ($evento['status'] == '3'))   { ?>            
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/editar/" class=" btn btn-warning">Editar</button>
			                      	<?php }  ?> 
			                        </td>
			                        			                        
			                        <td>   
			                        	<?php if (($evento['status'] == '1') or ($evento['status'] == '2') or ($evento['status'] == '3'))   { ?>          
			                      		<button type ="submit" formaction="/interno/cenex/assets/action/excluir-evento.php" onclick="return confirm('Confirma exclusão do evento?')" class="  btn btn-dark">Excluir</button>
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

       	

