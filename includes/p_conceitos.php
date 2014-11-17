<?php
$conceitos = array(
"accountability"=>"<i>Accountability</i> (prestação de contas)",
'API'=>"API",
"conteudo-gerado-por-usuario"=>"Conteúdo gerado por usuário",
"dados-abertos"=>"Dados abertos (<i>open data</i>)",
"e-commerce"=>"E-Commerce",
"mashup"=>"Mashup",
"midia-social"=>"Mídia Social",
"web20"=>"Web 2.0",
"widget"=>"Widget",
"facebook"=>"Facebook",
"pagerank"=>"PageRank",
"seo"=>"SEO",
"servico-de-mensagem-instantanea"=>"Serviço de mensagem instantânea",
"inteligencia-coletiva"=>"Inteligência coletiva",
"convergencia"=>"Convergência",
"computacao-em-nuvem"=>"Computação em nuvem (<i>Cloud</i>)",
"big-data"=>"Big data",
"web-semantica"=>"Web semântica"
);
asort($conceitos);
?>

    <div  class="jumbotron">
      <div class="container">
        <h1>Conceitos</h1>
        <h2>Se tiver interesse especial em algum conceito, clique em curtir. Se tiver dúvida ou algo pra contribuir, comente. Quer sugerir um conceito a mais? Escreva no final! </h2>
       
      </div> <!-- /.container -->
    </div> <!-- /.jumbotron -->

    <div class="container dn-margin-top dn-margin-bottom dn-panel">
        <div class="panel-group" id="accordion">
              
            <?php
            foreach($conceitos as $c => $titulo){
            ?>
                <!-- inicio do item -->
                <div class="panel panel-default">
                        <div class="panel-heading">
                          <h4 class="panel-title" id="<?=$c?>">
                            
                            <a style="margin-right:30px;" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$c?>">
                              <?=$titulo?>                               
                            </a>
                            <div class="fb-like" data-href="http://midiadigital.jor.br/iesb/?pg=conceito#<?=$c?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                          </h4>
                        </div>
                        
                        <div id="collapse<?=$c?>" class="panel-collapse collapse">
                          <div class="panel-body">
                            
                            <?php 
                            include('includes/conceitos/c_'.$c.'.html');
                            ?>
                            <p class="dn-margin-top">
                                <div class="fb-comments" data-href="http://midiadigital.jor.br/iesb/?pg=conceito#<?=$c?>-comments" data-numposts="5" data-colorscheme="light"></div>
                            </p>
                            
                            
                          </div>
                        </div>
                </div>
                <!-- fim do item -->
                
            <?php
            }                
            ?>
                  
        </div><!-- panel group -->
    </div>  
    
    
    <div class="container-alternate">
      <div class="container">
        <h3 id="about" class="subhead">Sugira um novo conceito</h3>
        <div class="row about">
          <div class="col-md-10 col-md-offset-1 text-center">
            
            <p>
                <div class="fb-comments" data-href="http://midiadigital.jor.br/iesb/?pg=conceito#novo" data-numposts="35" data-colorscheme="light"></div>
            </p>
          </div> <!-- /.col-md-10 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </div> <!-- /.container-alternate -->        


