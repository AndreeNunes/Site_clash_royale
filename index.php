<?php
error_reporting(0);
session_start();

$_login = $_SESSION['email'];
$_password = $_SESSION['password']; 

  

?>

<!doctype html> 
    <html lang="pt-br">
    <head>
        <title>Clash Royale</title>
        <meta charset="utf-8">
        <link type="text/css" href="css/normalize.css" rel="stylesheet">
        <link type="text/css" href="css/estilo.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gugi|Lobster|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Fredoka+One|Fugaz+One|Suez+One" rel="stylesheet">  
    </head>
        
    <body>
        
        <header>
    
            <div class="imagem">
                <h1>Home Page</h1>
            </div>
            
              
            <nav class="menu">
                
                
                <ul class="M">
                     <a href="html/menu_carta.html"><li>Carta</li></a>
                     <a href="html/arenas.html"><li>Arenas</li></a>
                     <a href="html/meta.html"><li>Meta</li></a>
                     <a href="html/sobre.html"><li>Sobre Nos</li></a>
                     <a href="php/cadastro.php"><li>Cadastro</li></a>
                    
                    <?php 
                    if(strcasecmp($_login, $_password) == 0)
                    {
                    ?>  
                        <a href="php/login.php"><li>Login</li></a>
                    
                    <?php
                    }
                    else
                    {
                    ?>
                    <a href="php/perfil.php"><li>Perfil</li></a>
                    <?php
                    }
                    ?>
                    
                </ul>
            </nav>
            
           
        </header>
        
         <section>
        
            <nav class="NotP">
            
                <nav class="Nimg"><h2>Notas de lançamento</h2></nav>
            
                <nav class="Ntex">
                   
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>23/04/2018</p>
                    <h1>Mudanças para equilibrar o jogo</h1>   
                    <p class="NP">Nesta atualização para equilibrar o jogo, ajustamos o Príncipe das Trevas, Goblins Lanceiros, Barril de Bárbaro e mais! <a href="html/noticia_balan.html">Leia mais</a></p>

                </nav>
            </nav>  
        </section>
        
        <section>
            
        <nav class="noticias">
            
           <div class="n1">
            <img src="img/nt2.png">
               
               <a href="html/noticia_id.html"><h2>ID Liberado!</h2>
             <p>Recurso que facilita e da mais segurança para contas de jogadores, finalmente é liberado!</p></a>
            
            </div>         
           <div class="n1">
             <img src="img/duvidaB.jpg">
              <a href="html/noticia_duvidas.html"><h2>Balanceamento</h2>
                  <p>Bastidores do balanceamento: supercell tira dúvidas dse jogadores</p></a></div>
            
           <div class="n1">
             <img src="img/img_proximaAt.jpg">
             <a href="html/noticia_atua.html"><h2>Atualização</h2>
                 <p>Supercell revela Informações sobre a próxima atualização!</p></a></div>
                
        </nav>
            
        </section>
        
        <footer>
        
           <p>Agradecemos a visita, aproveite quanto e quando quiser !!!<p>
            
          
            
            <img src="img/menu2.gif">
                
        </footer> 
     
        
    </body>
</html>
