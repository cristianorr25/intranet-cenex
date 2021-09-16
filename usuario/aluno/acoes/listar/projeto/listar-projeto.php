<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $recupera_projeto = mysql_query ("SELECT * FROM `cenex_projetos` WHERE status ='4' and terminoProjeto >= CURDATE()") or die (mysql_error());  
    
                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Aluno :: Inscrição em ações de extensão</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-light text-primary"><?php if($projeto['tipoProjeto'] == "Projeto") echo "Projeto" ; if($projeto['tipoProjeto'] == "Evento") echo "  <font color='#DC3545'> Evento </font> " ?></p></span></th>
							<th scope="col"><span class="font-weight-light text-primary">Coodenador</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Visualizar projeto</span></th>
							<th scope="col"><span class="font-weight-light text-primary">Inscrever projeto</span></th>
						</tr>
					</thead>
					<tbody>
					  <?php while ($projeto = mysql_fetch_array($recupera_projeto)){ ?>	
  
							<tr>
								<form action="" method="POST" name="projetos" id="projetos">
			                    	<input type="hidden" value="<?php echo $projeto['id'];?>" name="id">
									<th scope="row" class="font-weight-bold"><?php echo $projeto['nomeProjeto']?></th>
									<td><?php echo $projeto['coord']?></td>

			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/visualizar/projeto/" class="  btn btn-success">Ver</button>
			                        </td>
			                        <td>           
			                      		<button type="submit" formaction="/interno/cenex/sistema/usuario/aluno/acoes/inscrever/projeto/" class="  btn btn-info">Inscrever</button>  
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

  

