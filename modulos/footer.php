    <footer class="footer">
        <div class="container-fluid">
            <h3 class="titulo-noticias">Últimas notícias do CENEX</h3>
            <div class="footer-pad">
                <div class="row posts"></div>
            </div>           
            <div class="row footer-direita footer-pad">
                <div class="col-md-6">
                    <p class="copy">2020 © Copyright -
                        <a href="https://www.odonto.ufmg.br/cenex/" target="blank">CENEX Faculdade de Odontologia UFMG</a>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="copy justify-content-end">Desenvolvido por:
                        <a href="https://www.natiwo.com.br/" target="blank">NATIWO Agência Digital</a>
                    </p>
                </div>          
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="/interno/cenex/sistema/public/js/Http.js"></script>
    <script src="/interno/cenex/sistema/public/js/jquery.min.js"></script>
    <script src="/interno/cenex/sistema/public/js/chamaPosts.js"></script>
    
    <!-- DataTables -->
    <script src="/interno/cenex/sistema/public/js/jquery.dataTables.min.js"></script>

    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true,
          "autoWidth": true,
        });
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>   
    
    </body>
</html>