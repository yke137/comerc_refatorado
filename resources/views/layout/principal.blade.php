<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Comerc: Projeto Experimental</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer.css" rel="stylesheet">
  </head>

  <body>

  @yield('conteudo')

  <footer class="footer">
        <div class="container">
          <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4" style="background-color:#d8daee; height:16px;"></div>
                <div class="col-xs-12 col-sm-8 col-md-8" style="background-color:#e1e4f5; height:16px;"></div>
            </div>
           </div>
            <div class="container-fluid">
                    <div class="row" style="background-color:#dee1f7;">
                        <div class="col-xs-12 col-sm-4 col-md-4" style="background-color:#dee1f7; height:74px;">   <h4><img src="http://www.comerc.com.br/comerc/images/logoComerc.gif" alt="COMERC"></h4>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8" style="background-color:#e9ecff; height:74px;">   
                            <div class="row">
                                <div class="col-xs-12 col-sm-3 col-md-3">
                                    <div id="clockDiv" style="color:#7b7e95;"></div>
                            </div>
                        </div>
                    </div>
              </div>
        </div>
    </footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/js/ie10-viewport-bug-workaround.js"></script>
    <script type="text/javascript">
        function clock() {
           var now = new Date();
           now.getHours() < 10 ? (hours = '0'+ now.getHours()) : hours = now.getHours();
           now.getMinutes() < 10 ? (minutes = '0'+ now.getMinutes()) : minutes = now.getMinutes();
           now.getSeconds() < 10 ? (seconds = '0'+ now.getSeconds()) : seconds = now.getSeconds();
           var outStr = hours+':'+minutes+':'+seconds;
           document.getElementById('clockDiv').innerHTML= '<h3>' + outStr + '</h3>';
           setTimeout('clock()',1000);
        }
    clock();
</script>
  </body>
</html>
