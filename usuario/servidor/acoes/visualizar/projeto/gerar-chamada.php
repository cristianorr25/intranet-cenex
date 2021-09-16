<?php
	
	include('../../../../../../assets/conn/db.php'); 

  include("../../../../../../assets/dompdf/dompdf_config.inc.php");

  /* Cria a instância */
$dompdf = new DOMPDF(); 
  
    $cpf = getenv("Shib-brPerson-CPF");

    $id = $_POST['id'];
     
   
    $recupera_projeto_N = mysql_query ("SELECT * FROM `cenex_projetos` WHERE id = '$id'") or die (mysql_error()); 
    
         
    
    $recuperaDir = mysql_query("SELECT idCoordenadorDiretor, nome, tipo, atual, assinatura FROM cenex_coordenadorDiretor ") or die (mysql_error());
    $rec = mysql_fetch_array($recuperaDir);

    $nomeDiretor = $rec['nome'];
    $idDiretor = $rec['idCoordenadorDiretor'];

    $recupera2 = mysql_query("SELECT assinatura FROM cenex_coordenadorDiretor ") or die (mysql_error());
    $rst2 = mysql_fetch_array($recupera2);
 
    $recuperaCoor = mysql_query("SELECT idCoordenadorDiretor, nome, tipo, atual, assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo = 2 ") or die (mysql_error());
    $rec = mysql_fetch_array($recuperaCoor);

    $nomeCoordenador = $rec['nome'];
    $idCoordenador = $rec['idCoordenadorDiretor'];

    $recupera3 = mysql_query("SELECT assinatura FROM cenex_coordenadorDiretor where atual > 0 and tipo = 2 ") or die (mysql_error());
    $rst3 = mysql_fetch_array($recupera3);
       


     
     $rowN = mysql_fetch_array($recupera_projeto_N);
     

     
     
             
       if($rowN['histEscolar'] == 1){
       $histEscolar = "Histórico escolar"; 
      }
     if($rowN['rendEscolar'] == 1){
       $rendEscolar  = "Rendimento Semestral Global"; 
      }
      
          if($rowN['pbext'] == 1){
       $pbext = "PBEXT (R$ 400,00)"; 
      }
     if ($rowN['afirmativas'] == 1){
       $afirmativas = "AÇÕES AFIRMATIVAS (R$ 500,00)"; 
      }
      
      
      
      setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');   



$html = '

 <!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Chamada Projeto/Evento de Extensão</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,300,300italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" type="text/css">

</head>


<body class="corpo">
    <div class="container">
      <div class="cabecalho">
        <div >
          <img class="logo-ufmg" src="brasao-ufmg.png" alt="Brasão UFMG" width="100" height="100">
        </div><!--col logo-->

        <div class="sub-cabecalho">
          <h5 class="ufmg">UNIVERSIDADE FEDERAL DE MINAS GERAIS</h4>
            <h6 class="fao">Faculdade de Odontologia</h6>
            <h7 class="departamento">Centro de Extensão</h7>
            <p class="endereco">Av. Antônio Carlos, 6627, Sala 2917 - Pampulha Belo Horizonte-MG 31270-901
            <span class="fone"><br>Fone: <strong>(31)3409-2451</strong></span>
            <span class="email">E-mail: <strong>odonto-cenex@ufmg.br</strong></span></p>
        </div><!--sub-cabecalho-->
      </div><!--row cabecalho-->
              
      <div class="laudo">
        <h6 class="titulo-laudo"><strong>Chamada 001/2020:</strong> '.$rowN['nomeProjeto'].' <strong>- FAO - UFMG</h6>
        <div class="paciente">
          <div>
              <p class="texto-dados">
              As bolsas da modalidade PBEXT (Ação Afirmativa) são destinadas exclusivamente aos discentes de
              graduação classificados socioeconomicamente no nível I, II ou III pela Fundação Universitária
              Mendes Pimentel (FUMP) ou discentes que ingressaram na UFMG pelo sistema de cotas.
              </p>
                
              <p class="texto-dados"><strong>Coordenador(a): </strong> '.$rowN['coord'].'  </p>
              <p class="texto-dados"><strong>Pré requisitos: </strong>  '.$rowN['requisitos'].'   </p>
              <p class="texto-dados"><strong>Período: </strong>  '.$rowN['periodo'].'  </p>
              <p class="texto-dados"><strong>Disponibilidade: </strong>  '.$rowN['disponibilidade'].'   </p>
              <p class="texto-dados"><strong>Período de inscrição: </strong> '.utf8_encode(strftime('%d/%m/%Y', strtotime($rowN['inicioInsc']))).' a '.utf8_encode(strftime('%d/%m/%Y', strtotime($rowN['terminoInsc']))).', por meio do sistema INTRANET CENEX.Acessar: www.odonto.ufmg.br/cenex > Intranet Cenex > Área do aluno > Preencher cadastro > Ações de extensão > Selecionar o projeto e a turma que deseja se inscrever. </p>
              <p class="texto-dados"><strong>Documentação necessária em pdf: </strong> '.$histEscolar.', '.$rendEscolar.', '.$rowN['outro'].' .</p>
              <p class="texto-dados"><strong>Número de vagas: </strong> '.$rowN['vagasBolsista'].' vagas para bolsistas e '.$rowN['vagasVoluntario'].' para voluntários</p>
              <p class="texto-dados"><strong>Dia e horário de funcionamento: </strong> '.$rowN['programacao'].'</p>
              <p class="texto-dados"><strong>Local de funcionamento: </strong> '.$rowN['local'].'</p>
              <p class="texto-dados"><strong>Valor da Bolsa: </strong>  '.$pbext.' , '.$afirmativas.'</p>
              <p class="texto-dados"><strong>Forma de seleção: </strong> '.$rowN['selecao'].'</p>
              <p class="texto-dados"><strong>Outras Informações: </strong>'.$rowN['outrasinfo'].'</p>          
          </div><!--col dados-paciente-->
        </div><!--row paciente-->
      </div>

        <footer class="rodape">     
        <div class="assinatura">
             <img src="data:image/jpeg;base64,'.base64_encode( $rst3['assinatura'] ).' width="80" height="60"/><br>
            <span class="prof"><strong> '.$nomeCoordenador.'</strong></span>
            <span class="funcao">Coordenador(a) do CENEX da FAO/UFMG</span>
        </div><!-- assinatura-->
      </footer><!-- rodape-->
    </div><!--container-->
  </body>                         
  </html>';



  $dompdf->load_html($html);
 
$dompdf->set_paper('A3', 'portrait');
/* Renderiza */
$dompdf->render();
 
/* Exibe */
$dompdf->stream(
   'Certificado.pdf', /* Nome do arquivo de saída */
    array(
        "Attachment" => false/* Para download, altere para true */
    )
);


?>
