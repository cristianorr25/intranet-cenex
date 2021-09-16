<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    
     $recupera_evento = mysql_query ("SELECT * FROM `cenex_eventos` WHERE status ='4' and terminoEvento >= CURDATE()") or die (mysql_error()); 

                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Aluno :: Inscrição em ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary"><?php echo "  <font color='#DC3545'> Evento </font> " ?></p></p></span></th>
							<th scope="col"><span class="font-weight-light text-primary">Coodenador</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar evento</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Inscrever evento</span></th>
						</tr>
					</thead>
					<tbody>
					  <?php while ($evento = mysql_fetch_array($recupera_evento)){ ?>
  
							<tr>
								<form action="" method="POST" name="projetos" id="projetos">
			                    	<input type="hidden" value="<?php echo $evento['id'];?>" name="id">  
									<th scope="row" class="font-weight-bold"><?php echo $evento['nomeEvento']?></th>
									<td><?php echo $evento['coordEvento']?></td>

			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/visualizar/evento/" class="  btn btn-success">Ver</button>
			                        </td>
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/inscrever/evento/" class="  btn btn-info">Inscrever</button>  
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
		  <a class="btn btn-secondary" href="/interno/cenex/sistema/usuario/aluno">Voltar</a> 
	</div> 
</section> 

       	

