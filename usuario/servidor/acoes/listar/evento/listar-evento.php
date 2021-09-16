<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    
    $recupera_evento = mysql_query ("SELECT * FROM `cenex_eventos`") or die (mysql_error()); 

                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Servidor :: Listar ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary"><?php echo "  <font color='#DC3545'> Evento </font> " ?></p></p></span></th>
							<th scope="col"><span class="font-weight-light text-primary">Coodenador</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Status</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Aprovar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Reprovar evento</span></th>
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
									<td><?php echo $evento['coordEvento']?></td>
									<td><?php 
			                            if($evento['status'] == "1") echo "  <strong><font color='#17A2B8'>  Aprovado </font></strong>  "; 
			                            if($evento['status'] == "2") echo "  <strong><font color='#DC3545'> Indeferido </font></strong> "; 
			                            if($evento['status'] == "3") echo "  <strong><font color='#ffc107'>  Pendente </font></strong>  ";
			                            if($evento['status'] == "4") echo "  <strong><font color='#28a745 '> Em Oferta</font></strong>  ";
			                            if($evento['status'] == "5") echo "  <strong><font color='#6c757d'>  Expirado </font></strong>  " 
			                            ?></td>

			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/visualizar/evento/" class="  btn btn-info">Ver</button>
			                        </td>
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/assets/action/aprovar-evento.php" onclick="return confirm('Deseja Aprovar esse evento?')" class="  btn btn-success">Aprovar</button>
			                        </td>		                        		                        
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/assets/action/reprovar-evento.php" onclick="return confirm('Deseja Reprovar esse evento?')" class=" btn btn-danger">Reprovar</button>
			                        </td>		                        		                        
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/servidor/acoes/editar/evento/" class=" btn btn-warning">Editar</button>
			                        </td>
			                        <td>           
			                      		<button type ="submit" formaction="/interno/cenex/assets/action/excluir-evento.php" onclick="return confirm('Confirma exclusão do evento?')" class="  btn btn-dark">Excluir</button>
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

       	

