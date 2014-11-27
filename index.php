<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name=description content="ServerStatus">
    <title>PX ServerStatus</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PX ServerStatus</a>
        </div>
      
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/" data-container="body" data-toggle="tooltip" data-placement="bottom" title="Back to Home"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Links <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://android.phiexz.com" target="_blank"><span class="glyphicon glyphicon-fire"></span> Android Development</a></li>
                <li><a href="http://mirror.phiexz.com" target="_blank"><span class="glyphicon glyphicon-hdd"></span> Mirror Android</a></li>
                <li><a href="http://cplusplus.phiexz.com" target="_blank"><span class="glyphicon glyphicon-book"></span> C++ Tutorial</a></li>
                <li class="divider"></li>
                <li><a href="http://dl.phiexz.com" target="_blank"><span class="glyphicon glyphicon-file"></span> PX Files</a></li>
                <li><a href="http://fm.phiexz.com" target="_blank"><span class="glyphicon glyphicon-folder-open"></span> PX File Manager</a></li>
                <li><a href="http://rl.phiexz.com" target="_blank"><span class="glyphicon glyphicon-save"></span> PX Rapidleech</a></li>
                <li><a href="http://downloader.phiexz.com:99" target="_blank"><span class="glyphicon glyphicon-globe"></span> PX Downloader</a></li>
              </ul>
            </li>
            <li><a href="#" data-toggle="modal" data-target="#donate">Donate</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    
    <!-- Donate Modal -->
    <div class="modal fade" id="donate" tabindex="-1" role="dialog" aria-labelledby="reportLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="donateLabel"><strong>Donate to Me</strong></h4>
          </div>
          <div class="modal-body">
            <p>If you found this site useful</p>
            <p>Please consider a donation to help the server cost for this free service</p>
            <div class="donation">
              <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
                ">
                <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Javasript -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>