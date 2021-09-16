<?php
	
	include('../../../../../../assets/conn/db.php'); 
  
  include("../../../../../../assets/dompdf/dompdf_config.inc.php");
 
/* Cria a instância */
$dompdf = new DOMPDF(); 
	
	
    $cpf = getenv("Shib-brPerson-CPF");

    $id = $_POST['id'];
   
   
    $recupera_projeto_N = mysql_query ("SELECT a. * , I. *
      
    from cenex_projetos a 
    INNER JOIN cenex_inscricoes I ON a.id = I.id_projeto 
    WHERE I.id_projeto = '$id'") or die (mysql_error()); 
    
    $recupera_projeto_P = mysql_query ("SELECT a. * , P. *
      
    from cenex_projetos a 
    INNER JOIN cenex_user_professor P ON a.cpf_professor = P.cpf_professor
    WHERE a.id = '$id'") or die (mysql_error()); 
    
    
    $recupera_projeto_AE = mysql_query ("SELECT a. * , I. *
    FROM cenex_user_aluno_externo a 

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno_E = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id' ") or die (mysql_error()); 
    
    $recupera_projeto_AI = mysql_query ("SELECT a. * , I. *
    FROM   cenex_user_aluno_interno a

    INNER JOIN cenex_inscricoes I ON a.cpf_aluno = I.cpf_professor 
    WHERE I.cpf_professor = '$cpf' and I.id_projeto = '$id'") or die (mysql_error()); 
     
     
    $recupera_projeto = mysql_query ("SELECT a. * ,  I. *
    FROM cenex_user_professor a

    INNER JOIN cenex_inscricoes I ON a.cpf_professor = I.cpf_professor 
    WHERE I.id_projeto = '$id' and I.cpf_professor = '$cpf' ") or die (mysql_error());
    
    
    $recupera_projeto_S = mysql_query ("SELECT a. * ,  I.*
    FROM cenex_user_servidor a

    INNER JOIN cenex_inscricoes I ON a.cpf_servidor = I.cpf_professor 
    WHERE  I.id_projeto = '$id' and I.cpf_professor = '$cpf'  ") or die (mysql_error()); 
    
    
    $recuperaDir = mysql_query("SELECT idCoordenadorDiretor, nome, tipo, atual, assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo =1 ") or die (mysql_error());
    $rec = mysql_fetch_array($recuperaDir);

    $nomeDiretor = $rec['nome'];
    $idDiretor = $rec['idCoordenadorDiretor'];

    $recupera2 = mysql_query("SELECT assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo =1 ") or die (mysql_error());
    $rst2 = mysql_fetch_array($recupera2);

     
    
    $recuperaCoor = mysql_query("SELECT idCoordenadorDiretor, nome, tipo, atual, assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo =2") or die (mysql_error());
    $rec = mysql_fetch_array($recuperaCoor);

    $nomeCoordenador = $rec['nome'];
    $idCoordenador = $rec['idCoordenadorDiretor'];

    $recupera3 = mysql_query("SELECT assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo =2") or die (mysql_error());
    $rst3 = mysql_fetch_array($recupera3);
       

     $rowAE = mysql_fetch_array($recupera_projeto_AE);
     
     $rowAI = mysql_fetch_array($recupera_projeto_AI);
     
     $row = mysql_fetch_array($recupera_projeto);
     
     $rowS = mysql_fetch_array($recupera_projeto_S);
     
     $rowN = mysql_fetch_array($recupera_projeto_N);
     
     $rowP = mysql_fetch_array($recupera_projeto_P);
     
     
    if($rowN['tipoInscricao'] == 1){
       $voluntarioBolsista = "bolsista"; 
      }
    else if($rowN['tipoInscricao'] == 2){
       $voluntarioBolsista = "voluntário(a)"; 
      }else if($rowN['tipoInscricao'] == 3){
       $voluntarioBolsista = "bolsista/voluntário(a)"; 
      }
      
      
      setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   
	
	
	

	$html = 
		'<!DOCTYPE html>
        <html lang="pt-br">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CERTIFICADO</title>
        <link rel="stylesheet" href="../../../../../../assets/certificado/style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,300italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" type="text/css">
        </head>
        <body>
          <div id="conteudo">
              <div id="cabecalho">


                <p class="info">MINISTÉRIO DA EDUCAÇÃO<br>
                        UNIVERSIDADE FEDERAL DE MINAS GERAIS<br>
                        FACULDADE DE ODONTOLOGIA<br>
                        CENTRO DE EXTENSÃO<br>
                        <span class="extensao">EXTENSÃO</span>
                </p>
                
              


              </div><!-- cabecalho -->
         
              <div id="certificado">

                <h1 class="titulo">CERTIFICADO</h1>  

              </div><!-- certificado -->
         
              <div id="texto">

                <p class="corpo" align="justify"> O Centro de Extensão da Faculdade de Odontologia da UFMG certifica que <!--VARIÁVEL NOME ALUNO --><span class="nome"><strong>'.$rowS['nome_servidor'].' '.$rowP['nome_professor'].'</strong></span> 
                    participou como '.$voluntarioBolsista.' do(a) <!--VARIÁVEL PROJETO DE EXTENSÃO --><span class="projeto"><strong>'.$rowN['nomeProjeto'].'</strong></span>, 
                    coordenado pelo(a) Prof.(a) <!--VARIÁVEL NOME PROFESSOR --><span class="professor">'.$rowP['nome_professor'].'</span>, realizado no período de 
                    <!--VARIÁVEL PERÍODO DO CURSO --><span class="periodo">'.utf8_encode(strftime('%d de %B de %Y', strtotime($rowN['inicioProjeto']))).' a '.utf8_encode(strftime('%d de %B de %Y', strtotime($rowN['terminoProjeto']))).'</span>, com carga horária de 
                    <!--VARIÁVEL CARGA HORÁRIA --><span class="carga-horaria">'.$rowN['cargahoraria'].'</span> horas totais.
                </p>

                    <p>&nbsp;</p>

                <aside class="data">
                  <!--VARIÁVEL DATA EMISSÃO --><span class="emissao">Belo Horizonte, '.utf8_encode(strftime('%d de %B de %Y', strtotime($rowN['updatedAt']))). '</span>
                </aside>

              </div><!-- texto -->

                <p>&nbsp;</p><p>&nbsp;</p>
                
                
              <div id="rodape">
                    <div id="assinatura1">

                        <p class="ass">
                            <!-- ASSINATURA DIGITAL --><img src="data:image/jpeg;base64,'.base64_encode( $rst2['assinatura'] ).' width="80" height="60"  "/><br>                  
                            <!--VARIÁVEL NOME PROF --><span class="prof"><strong>'.$nomeDiretor.'</strong></span><br>
                            <!--VARIÁVEL FUNÇÃO PROF --><span class="funcao">Diretor(a) da FAO/UFMG</span>
                        </p>
                    </div>

                    <div id="assinatura2">  

                        <p class="ass">
                            <!-- ASSINATURA DIGITAL --><img src="data:image/jpeg;base64,'.base64_encode( $rst3['assinatura'] ).' width="80" height="60"  "/><br>
                            <!--VARIÁVEL NOME PROF --><span class="prof"><strong>'.$nomeCoordenador.'</strong></span><br>
                            <!--VARIÁVEL FUNÇÃO PROF --><span class="funcao">Coordenador(a) do CENEX da FAO/UFMG</span>
                        </p>          
                        
                    </div>
              </div><!-- rodape -->
                
                

            </div><!-- conteudo -->
        </div>
        </body>
        </html>
		';

$dompdf->load_html($html);
 
$dompdf->set_paper('a4', 'landscape');
/* Renderiza */
$dompdf->render();
 
/* Exibe */
$dompdf->stream(
   'Certificado.pdf', /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);

?>