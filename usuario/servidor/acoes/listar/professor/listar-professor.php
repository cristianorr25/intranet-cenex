<?php 

    include('../../../../../../assets/conn/db.php'); 
    
    $recupera_projeto = mysql_query ("SELECT * FROM `cenex_user_professor`") or die (mysql_error()); 
                                                    
?>
<section class="conteudo">
	<h3 class="text-center">Servidor :: Listar Professores</h3>
	<div class="container-fluid">		
		<div class="row list-box">
			<div class="table-responsive">
				<table class="table display" id="example1">
					<thead>
						<tr>
							<th scope="col"><span class="font-weight-bolder">CPF</span></th>
							<th scope="col"><span class="font-weight-bolder">Nome</span></th>
							<th scope="col"><span class="font-weight-bolder">Departamento</span></th>
							<th scope="col"><span class="font-weight-bolder">E-mail</span></th>
							<th scope="col"><span class="font-weight-bolder">Telefone</span></th>
						</tr>
					</thead>
					<tbody>
					<?php while ($professor = mysql_fetch_array($recupera_projeto)){ ?>		
							<tr>
								<th scope="row"><?php echo $professor['cpf_professor'];?></th>
								<td><?php echo $professor['nome_professor']?></td>
								<td><?php 
			                            if($professor['departamento_professor'] == "1") echo "  <strong><font color='#17A2B8'>  ODR- Odontologia Restauradora </font></strong>  "; 
			                            if($professor['departamento_professor'] == "2") echo "  <strong><font color='#DC3545'> CPC- Clínica, Patologia e Cirurgia Odontológica </font></strong> "; 
			                            if($professor['departamento_professor'] == "3") echo "  <strong><font color='#563D7C'>  OSP - Odontologia Social e Preventiva </font></strong>  ";
			                            if($professor['departamento_professor'] == "4") echo "  <strong><font color='#28a745 '> SCA - Saúde Bucal da Criança e do Adolescente</font></strong>  ";?>			                        
			                    </td>
								<td><?php echo $professor['email_professor'];?></td>
								<td><?php echo $professor['tel_professor'];?></td>
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


