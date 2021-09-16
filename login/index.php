<?php
	require_once('../../assets/conn/db.php');
	
	$cpf = getenv("Shib-brPerson-CPF");
	$permissao = getenv("Shib-EP-PrimaryAffiliation");

	switch ($permissao)
	{
		case 'student':
			$funcao = getenv("Shib-EP-OrgUnitDN");
			$find = 'ODONTO';
			$possui = strripos($funcao, $find);	
				

			$sql = mysql_query ("SELECT cpf_aluno FROM  cenex_user_aluno_interno WHERE cpf_aluno = '$cpf'");
			$num = mysql_num_rows($sql);

			if($possui === false)
			{
				header("Location:/interno/cenex/cadastro/funcao/aluno/interno/ufmg/");
			}
			else
			{
				$sql = mysql_query ("SELECT cpf_aluno FROM cenex_user_aluno_interno WHERE cpf_aluno = '$cpf'");
				$num = mysql_num_rows($sql);

				if($num > 0)
				{
					header("Location:/interno/cenex/sistema/usuario/aluno/");
				}	
				else			
				{
					header("Location:/interno/cenex/cadastro/funcao/aluno/interno/fao/");
				}
			}
			break;

		case 'faculty':
			$funcao = getenv("Shib-EP-OrgUnitDN");
			$find = 'ODONTO';
			$possui = strripos($funcao, $find);

			if($possui === false)
			{
				echo "Você não está listado como professor da Faculdade de Odontologia da UFMG.";
			}
			else
			{
				$sql = mysql_query ("SELECT cpf_professor FROM cenex_user_professor WHERE cpf_professor = '$cpf'");
				$num = mysql_num_rows($sql);

				if($num > 0)
				{
					header("Location:/interno/cenex/sistema/usuario/professor/");
				}	
				else			
				{
					header("Location:/interno/cenex/cadastro/funcao/professor/");
				}
			}
			break;
		
		case 'employee':
			$funcao = getenv("Shib-EP-OrgUnitDN");
			$find = 'ODONTO';
			$possui = strripos($funcao, $find);

			if($possui === false)
			{
				echo "Você não está listado como professor da Faculdade de Odontologia da UFMG.";
			}
			else
			{
				$sql = mysql_query ("SELECT cpf_servidor FROM cenex_user_servidor WHERE cpf_servidor = '$cpf'");
				$num = mysql_num_rows($sql);

				if($num > 0)
				{
					//header("Location:http://euclides.odonto.ufmg.br/?nome=professor&senha=senha123&role=2&email=professor@email.com");
					header("Location:/interno/cenex/sistema/usuario/servidor/");
				}	
				else			
				{
					header("Location:/interno/cenex/cadastro/funcao/servidor/");
				}
			}
			break;

		default:
			break;
	}
?>