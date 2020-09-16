<?php
include_once("../db/conexao.php");

$_login = $_POST['email'];
$_password = $_POST['password'];

$_sql = "SELECT * FROM usuario WHERE Email='$_login' and Senha='$_password'";

$_query = mysqli_query($_conexao, $_sql) or die (mysqli_error());

$_rows = mysqli_num_rows($_query);

mysqli_close($_conexao);

if ($_rows > 0) {
    session_start();
    
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    
    
    
?>

<!doctype html> 
	<html lang="pt-br">
    <head>
    	<title>Clash Royale</title>
      <meta charset="utf-8">
      <link type="text/css" href="../css/cadastroo.css" rel="stylesheet"> <link type="text/css" href="css/normalize.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gugi|Lobster|Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Fredoka+One|Fugaz+One|Suez+One" rel="stylesheet">  
        
        <style>
            .loginI
            {
                margin-top: 15%;
                width: 50%;
            }
        
        </style>
     
    </head>
  <body> 
      
       <header>
    
            <div class="imagem">
                <h1>Cadastro</h1>
            </div>
            
              
            <nav class="menu">
                
                
                <ul class="M">
                    <a href="../index.php"><li>Home</li></a>
                     <a href="#"><li>Carta
                    </li></a>
                     <a href="#"><li>Arenas</li></a>
                     <a href="#"><li>Meta</li></a>
                     <a href="#"><li>Sobre Nos</li></a>
                    
                
                </ul>
            </nav>
        </header>
      
        <section class="sessao1">
            
       
            <div class="borda">
                
                
            
            
          
            <nav class="cadas">
                
                <style>
                    
                    @-webkit-keyframes rodaroda
                    {
                        0%
                        {
                            -webkit-transform:rotate(0deg);
                              color: blueviolet;
                        }

                        25%
                        {
                            -webkit-transform:rotate(0deg);
                            color: burlywood

                        }

                        50%
                        {
                            -webkit-transform:rotate(0deg);
                            color: aquamarine;    
                        }

                        75%
                        {
                            -webkit-transform:rotate(0deg);
                            color: aqua;    
                        }

                        100%
                        {
                            -webkit-transform:rotate(0deg);
                            color: darkcyan;    
                        }
                    }      

                    h1
                    {
                        margin-top: 10%;
                        font-family: Chelsea Market;
                        -webkit-animation: rodaroda 2.5s linear infinite alternate;
                       
                    }
                    
                    .img1 
                    {
                        margin-top: 10%;
                        width: 150px;
                        height: 320px;
                    }
                    
                    .b1
                    {
                        width: 300px;
                        height: 100px;
                        border: 6px double #fff;
                        margin-top: 10%;
                        background-color: darkslateblue;
                        cursor: pointer;
                       
                        
                    }
                    
                    .b1 a
                    {
                         color: #fff;
                        font-family: Roboto;
                        text-decoration: none;
                    }
                    

                   
                
                
                </style>
                
                
                <h1>Muito Bem... usuario logado com sucesso</h1>
                
                <img class="img1" src="../img/menu1.gif">
                
                <div class="b1"><a href="../index.php"><p>Voltar ao menu</p></a></div>
                
                 <div class="principal">
              
              <div class="cadas">
                  
                
                                           

                      
              </div>

          </div>

            
            
            </nav>
            <nav class="imagemD">
            
            
            </nav>
                
            </div>
        
        </section>
      
       <footer>
        
           <p>Agradecemos a visita, aproveite quanto e quando quiser !!!<p>
            
          
            
            <img src="../img/menu2.gif">
                
        </footer>
                
        
        </body>
</html>
<?php
}
else
{
?>

<!doctype html> 
	<html lang="pt-br">
    <head>
    	<title>Clash Royale</title>
      <meta charset="utf-8">
      <link type="text/css" href="../css/cadastroo.css" rel="stylesheet"> <link type="text/css" href="css/normalize.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Gugi|Lobster|Roboto" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Fredoka+One|Fugaz+One|Suez+One" rel="stylesheet">  
        
        <style>
            .loginI
            {
                margin-top: 15%;
                width: 50%;
            }
        
        </style>
     
    </head>
  <body> 
      
       <header>
    
            <div class="imagem">
                <h1>Cadastro</h1>
            </div>
            
              
            <nav class="menu">
                
                
                <ul class="M">
                    <a href="../index.php"><li>Home</li></a>
                     <a href="#"><li>Carta
                    </li></a>
                     <a href="#"><li>Arenas</li></a>
                     <a href="#"><li>Meta</li></a>
                     <a href="#"><li>Sobre Nos</li></a>
                    
                
                </ul>
            </nav>
        </header>
      
        <section class="sessao1">
            
       
            <div class="borda">
                
                
            
            
          
            <nav class="cadas">
                
                <style>
                    
                    @-webkit-keyframes rodaroda
                    {
                        0%
                        {
                            -webkit-transform:rotate(0deg);
                              color: blueviolet;
                        }

                        25%
                        {
                            -webkit-transform:rotate(0deg);
                            color: burlywood

                        }

                        50%
                        {
                            -webkit-transform:rotate(0deg);
                            color: aquamarine;    
                        }

                        75%
                        {
                            -webkit-transform:rotate(0deg);
                            color: aqua;    
                        }

                        100%
                        {
                            -webkit-transform:rotate(0deg);
                            color: darkcyan;    
                        }
                    }      

                    h1
                    {
                        margin-top: 10%;
                        font-family: Chelsea Market;
                        -webkit-animation: rodaroda 2.5s linear infinite alternate;
                       
                    }
                    
                    .img1 
                    {
                        margin-top: 10%;
                        width: 150px;
                        height: 320px;
                    }
                    
                    .b1
                    {
                        width: 300px;
                        height: 100px;
                        border: 6px double #fff;
                        margin-top: 10%;
                        background-color: darkslateblue;
                        cursor: pointer;
                       
                        
                    }
                    
                    .b1 a
                    {
                         color: #fff;
                        font-family: Roboto;
                        text-decoration: none;
                    }
                    

                   
                
                
                </style>
                
                
                <h1>Erro... Usuario não encontrado</h1>
                
                <img class="img1" src="../img/menu3.gif">
                
                <div class="b1"><a href="login.php"><p>Tentar novamente</p></a></div>
                
                 <div class="principal">
              
              <div class="cadas">
                  
                
                                           

                      
              </div>

          </div>

            
            
            </nav>
            <nav class="imagemD">
            
            
            </nav>
                
            </div>
        
        </section>
      
       <footer>
        
           <p>Agradecemos a visita, aproveite quanto e quando quiser !!!<p>
            
          
            
            <img src="../img/menu2.gif">
                
        </footer>
                
        
        </body>
</html>
<?php
}
?>

        
        
       



