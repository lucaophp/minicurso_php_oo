<!DOCTYPE html>
<html>
    <head>
        <title>Sistema de Eventos</title>
        <meta charset="utf-8">
        
        <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            
            function valida(){
                
                 var cont = 0;
                 $("#form input,#form textarea").each(function(){
                     if($(this).val() == "")
                         {
                             $(this).css({"border" : "1px solid #F00", "padding": "2px"});
                             cont++;
                         }
                    });
                 if(cont == 0)
                     {
                         //$("#form").submit();
                         return true;
                     }
                    return false;
                }
        </script>


        
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
              <div class="container">
                  <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active" id="area"><a href="index.php">Home</a></li>
                  <li  id="inscreva"><a href="index.php?action=inicio/fazerpedido">Fazer Pedido</a></li>
                  <li  id="contato"><a href="index.php?action=inicio/contato" id="contato">Contato</a></li>
                  
              </div><!--/.nav-collapse -->
            
          </div>
        </nav>
        <div class="jumbotron">
          <div class="container">
            <h1>Sistema de Lanchonete</h1>
            
          </div>
            
        </div>
        <div class="container">
            <?php echo isset($_SESSION['msg'])?$_SESSION['msg']:'';unset($_SESSION['msg'])?>
        </div>
        <div class="container">
            <?php require_once($_SESSION['conteudo']);?>
            
        </div>
        <div id="footer">
        <div class="jumbotron">
          <div class="container">
            <p class="muted credit">Sistema criado por </p>
          </div>
        </div>
    </div>

    </body>
</html>