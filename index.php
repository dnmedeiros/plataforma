<?php
if(isset($_GET['pg'])){
    $pg = $_GET['pg'];
}else{
    $pg = "apresentacao";

}
$root = "http://localhost/midiadigital/esamaz/"; 
$root = "http://midiadigital.jor.br/esamaz/";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cultura Digital e Novas Mídias</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="<?=$root?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$root?>css/lighter.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <style type="text/css">
        
        .dn-biglist{
            margin-bottom:30px;
        }
        
        .dn-biglist li{
            font-size:1.5em;
            margin-top:20px;
        }
        .dn-biglist ul li{
            font-size:0.9em;
            margin-top:0px;
        }
        .dn-margin-top{
            margin-top:30px;
        }
        .dn-margin-bottom{
            margin-bottom:30px;
        }
        .dn-panel .panel-title{
            font-size:20px;
            font-weight:bold;
        }
        
        .dn-ol li{
            margin-bottom:20px;
        }
        #tour .carousel-inner img{
            width:auto;
            margin:auto;
        }
        .subhead{
            margin-bottom:60px;
        }
        
        .dn-texto p{
            font-size:1.5em;
            line-height:1.5em;
            margin:4% 0;
        }
        
        .dn-texto ul li{
            font-size:1.6em;
            line-height:1.6em;
            margin-bottom:2%;
        }
        
        .dn-grupos{
            padding-top:30px;
        }
        
        
        .dn-grupos ul{
            margin-top:30px;
            margin-bottom:50px;
        }
        
        .dn-grupos ul li{
            list-style:none; 
            margin-bottom:10px;
        }
        .dn-grupos ul li img{
            margin-right:10px;
        }
        
        .dn-logo{
            width:200px;
        }
        
        
    </style>
  </head>
  <body>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=108264635913619&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <div style="margin:0.6% 0 0.6% 0">
        <div class="container">
            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle btn-lg" data-toggle="dropdown">
                Conteúdo <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu">
                
                <li><a href="?pg=apresentacao">Apresentação</a></li>
                <li role="presentation" class="dropdown-header">Aulas</li>
                <li><a href="?pg=evolucao-da-internet-e-conceitos-fundamentais">Evolução da internet e conceitos fundamentais</a></li>
                <li><a href="?pg=midias-sociais">Mídias Sociais</a></li>
				
				<li><a href="?pg=instagram">Reflexões sobre o fenômeno Instagram</a></li>
				
				<li><a href="?pg=estrategias">Estratégias para explorar as mídias sociais</a></li>
                
                <li role="presentation" class="dropdown-header">Trabalhos</li>
                <li><a href="?pg=trabalho-individual">Individual</a></li>
                <li><a href="?pg=trabalho-em-grupo">Em grupo</a></li>
                <li><a href="?pg=avaliacao">Avaliação final do módulo</a></li>
                
              </ul>
            </div>
            <a role="button" class="btn btn-success btn-lg" href="?pg=conceito">Conceitos</a>
            <div class="btn-group">
                <button type="button" class="btn btn-warning dropdown-toggle btn-lg" data-toggle="dropdown">
                    Referências <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="?pg=bibliografia">Bibliografia</a></li>
                    <!--
                    <li><a href="?pg=personagens">Personagens</a></li>
                    -->
                    <li><a href="?pg=links">Links</a></li>                                    
                </ul>
            </div>
        </div>
    </div>    
    
    <?php
    if($pg=="conceito" || $pg=="conceitos" || $pg=="midias-sociais"){
       $ext = ".php";
    }else{
       $ext = ".html";
    }
    
    include("includes/p_".$pg.$ext);
    ?>

    <footer>
      <div class="container clearfix">
        <p class="pull-left">
          Instituto de Educação Superior de Brasília - IESB | Prof. Daniel Medeiros
        </p>
        <p class="pull-right">
          Desenvolvido com <a href="?pg=sobre">software livre</a>
        </p>
      </div> <!-- /.container -->
    </footer>

    <script src="<?=$root?>js/jquery.js"></script>
    <script src="<?=$root?>js/bootstrap.min.js"></script>
    <script>
      var h;
      $(document).ready(function(){
           h = location.hash;
           if (h.length > 1){
              $("html,body").animate({scrollTop: $(h).offset().top - 80}, 500);
           }
      })
      
      $(".nav-link").click(function(e) {
        e.preventDefault();
        var link = $(this);
        var href = link.attr("href");
        $("html,body").animate({scrollTop: $(href).offset().top - 80}, 500);
        link.closest(".navbar").find(".navbar-toggle:not(.collapsed)").click();
      });
    </script>
  </body>
</html>
