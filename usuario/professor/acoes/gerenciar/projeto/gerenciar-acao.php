<?php 
                   include('../../../../../../assets/conn/db.php');  
                   
                    $id = $_GET['id'];
                    
                   
                   $sql = mysql_query ("SELECT * from cenex_projetos WHERE id = '$id'");
                   
                   $row = mysql_fetch_array($sql);                       
                   
?>   

<section class="conteudo">
    <h3 class="text-center"><?php if($row['tipoProjeto'] == "Projeto") echo "Projeto" ; if($row['tipoProjeto'] == "Evento") echo "Evento" ?> :: <?php echo $row['nomeProjeto']?></h3>

	<div class="container-fluid">        
		<div class="row">
            <div class="col">
                <form action="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/administrar" method="POST" name="projetos" id="projetos">
                <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                                               

                        <a href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/administrar/?id=<?php echo $row['id'];?>">
                            <div class="box align-middle">
                                <img src="/interno/cenex/sistema/public/img/icons/listar.svg" width="65" height="65" alt="Administrar inscrições">
                                <p class="acoes text-center align-middle"><span class="font-weight-bold">Administrar</span> inscrições</p>
                            </div> 
                        </a>                            
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/listar/?id=<?php echo $row['id'];?>">
                            <div class="box">
                                <img src="/interno/cenex/sistema/public/img/icons/aluno.svg" width="65" height="65" alt="Listar inscritos">
                                <p class="acoes text-center align-middle"><span class="font-weight-bold">Listar</span> inscritos</p>
                            </div> 
                        </a>                                               
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="/interno/cenex/sistema/usuario/professor/acoes/gerenciar/projeto/certificados/?id=<?php echo $row['id'];?>">
                            <div class="box">
                                <img src="/interno/cenex/sistema/public/img/icons/certificado.svg" width="65" height="65" alt="Gerenciar certificados alunos">
                                <p class="acoes text-center align-middle"><span class="font-weight-bold">Certificados</span></p>            
                            </div>
                        </a>
                    </div>
                </div>
		<div class="col text-center mt-3 mb-4">
             <button type ="submit" formaction="/interno/cenex/sistema/usuario/professor/acoes/listar/" class=" btn btn-secondary ">Voltar</button> 
        </div> 

            </div>
        </div>
    </div>
        </form>
</section>
