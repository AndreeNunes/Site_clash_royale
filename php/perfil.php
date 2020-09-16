<!doctype html> 
    <html lang="pt-br">
    <head>
        <title>Clash Royale</title>
        <meta charset="utf-8">
        <link type="text/css" href="css/normalize.css" rel="stylesheet">
        <link type="text/css" href="../css/arenass.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gugi|Lobster|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chelsea+Market|Fredoka+One|Fugaz+One|Suez+One" rel="stylesheet">  
    </head>
        
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
            
            .cartas
            {
                width: 60%;
                height: auto;
                background-color: #fff;
                box-shadow: 0 0 5p #555;
                border-radius: 10px;
                margin-top: 5%;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            
            .um
            {
                width: 60%;
                margin-bottom: 30px;
                height: auto;
                display: flex;
                justify-content: space-around;
                align-items: center;
            }
            
           
            
        </style>
        
          <body>
        
         <header>
    
            <div class="imagem">
                <h1>PERFIL</h1>
            </div>
            
              
            <nav class="menu">
                
                
                <ul class="M">
                     <a href="../index.php"><li>Home</li></a>
                     <a href="../html/menu_carta.html"><li>Cartas</li></a>
                     <a href="../html/meta.html"><li>Meta</li></a>
                     <a href="../html/sobre.html"><li>Sobre Nos</li></a>   
                </ul>
            </nav>
        </header>
              <center>
                  
                  <?php
                  
                    include_once("../db/conexao.php");
                    
                    session_start();
                  
                    $_login = $_SESSION['email'];
                  
                    $_sql = "SELECT * FROM usuario WHERE email='$_login'";

                    $_query = mysqli_query($_conexao, $_sql) or die (mysqli_error());

                    $_line = mysqli_fetch_array($_query);
                  
                  
                  ?>
                  
                  <style>
                    
                      .ti
                      {
                          color: #f1f1f1;
                          background-color:#1874cd;
                          opacity: 1.0;
                          border-radius: 10px;
                          width: 100%;
                          height: 150px;
                          display: flex;
                          justify-content: flex-start;
                          align-items: center;
                          margin-bottom: 10%;
                      }
                      
                      .ti img
                      {
                          margin-left: 10%;
                          width: 100px;
                          height: 100px;
                      }
                      
                      .th
                      {
                          margin-left: 3%;
                          font-size: 25px;
                          font-family: Chelsea Market;
                      }
                      
                      .tabela
                        {
                            margin-top: 10%;
                            display: flex;
                            flex-direction: column;
                            height: auto;
                            margin-bottom: 10%;
                            width: 90%;
                            border-bottom: 1px solid #333;
                            padding-bottom: 10%;
                        }
                      
                      .d:hover{
                          
                          background-color: darkslateblue;
                      }
                      
                      .d
                        {
                            width: 90%;
                            height: auto;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                            background-color: #1874cd;
                            padding-left: 10px;
                            opacity: 1;
                            border-bottom: 1px solid #f1f1f1;
                            color: #f1f1f1;
                            font-family: Roboto, sans-serif;
                        }
                      
                      .cartas
                      {
                          box-shadow: 0 0 8px #777;
                      }
                      
                      .cor
                      {
                          width: 100px;
                          margin-right: 10%;
                          display: flex;
                          justify-content: flex-start;
                          align-items: center;
                      }
                      
                      .sm
                      {
                          display: flex;
                          width: 91%;
                          justify-content: space-between;
                          margin-top: 5%;
                      }
                      
                      .um
                      {
                          width: 28%;
                          height: 30px;
                          background-color: #1874cd;
                          opacity: 1.0;
                          border: 6px double #f1f1f1;
                      }
                      
                      .um a
                      {
                          text-decoration: none;
                          font-family: Chelsea Market;
                          color: #f1f1f1;
                      }
                      
                      .um:hover
                      {
                          background-color: darkslateblue;
                          cursor: pointer;
                      }
                  
                  </style>
        
              
                   <nav class="cartas">
                       
                       
                       <div class="ti">
                       
                        <img src="../img/user.jpg"><h1 class="th">PERFIL DO USUÁRIO</h1>
                       </div>
                       
                       <div class="d"><p>ID DO USUÁRIO:</p><p class="cor"> <?php echo $_line['id']?> </p></div>
                           <div class="d"><p>NOME DO USUÁRIO</p><p class="cor"> <?php echo $_line['Nome']?></p></div>
                           <div class="d"><p>SOBRENOME:</p><p class="cor"><?php echo $_line['SobreNome']?> </p></div>
                           <div class="d"><p>DATA DE NASCIMENTO:</p><p class="cor"><?php echo $_line['Date']?></p></div> 
                            <div class="d"><p>EMAIL DO USUÁRIO:</p><p class="cor"> Ótimo! </p></div> 
                            <div class="d"><p>SENHA DO USUÁRIO:</p><p class="cor"> Ótimo! </p></div>
                       
                       
                       <div class="sm">
                       
                            <div class="um"><a href="logout.php">SAIR</a></div>
                            <div class="um"><a href="../index.php">HOME</a></div>
                            <div class="um"><a href="alterar.php">ALTERAR</a></div>
                       
                       </div>
                       
                       
                  </nav>
                  
                  
                  
                  

              </center>
             

        
          <footer>
        
           <p>Agradecemos a visita, aproveite quanto e quando quiser !!!<p>
            
          
            
            <img src="../img/menu2.gif">
                
        </footer>
        