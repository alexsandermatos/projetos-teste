<!DOCTYPE HTML>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device=width, initial-scale=1">
        <meta name="googlebot" content="noarchive">
        <meta http-equiv="imagetoolbar" content="no">
        <title>Meus dados</title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/estilos.css">
        <script type="text/javascript"></script>
        <?php
        $servername = "127.0.0.1";
        $database = "area_aluno";
        $username = "root";
        $password = "";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);
        // Check connection
        //if (!$conn) {
           // die("Connection failed: " . mysqli_connect_error());
        //}
        //echo "Connected successfully";
        //mysqli_close($conn);

        ?>
</head>
<body>
        <div id="posicao">
                <div id="tabela1">
                    <div id="cabtab1">
                        <h1 style="position:absolute; top:0px; left:28px;">Area do Aluno</h1> 
                        <style type="text/css">
                        #corpotab1{
                            color: rgb(255, 255, 255);
                        }
                        img{
                            z-index: 2px;
                        }
                        </style> 
                    </div>
                    <div id="corpotab1">
                        <img src="imagens/Profile Curso 2.png" alt="Area do Aluno Instituto Rafael Caique" title="Area do Aluno Instituto Rafael Caique" width="100px" height="100px">
                        
                        <div id="textcorpotab1">
                        <b>Seja Bem-Vindo</b> <br>
                        (Aluno)<br>
                        <!--<b>CPF:</b> 000.000.000-00<br>-->
                        <!--<b>Curso: </b>Geografia e História de Goiás<br>-->
                        </div>
                    </div>
                </div>
            
                <div id="quadtab1">
                <ul id="nav">
                        <li><a href="dashboard_curso.html">Home</a></li>
                        <li><a href="Cursos.html">Meus Cursos</a> 
                          <ul>
                            <li><a href="AulasPDF.html">Aulas em PDF</a></li>
                            <li><a href="Videoaulas.html">Vídeoaulas</a></li>
                            <li><a href="Audio Dicas.html">Audio-Dicas</a></li>
                         </ul>
                       </li>
                       
                       <li><a href="Simulados_e_provas.html">Simulados e Provas</a>
                        <ul>
                                <li><a href="simulado.html">Simulados</a></li>
                                <li><a href="prova.html">Provas</a></li>
                                <li><a href="historico_simulados.html">Histórico de Simulados</a></li>
                        </ul>
                    </li>
                    <li><a href="Meus_dados.html">Meus Dados</a></li>
                    <!--<li><a href="Contato.html">Contato</a></li>-->
                    <li><a href="Sair.html">Sair</a></li>
                </ul>
                </div>
            </div>
            <div id="inicio_curso_dados">
                    <div id="meucurso_dados"> 
                <h3>Meus dados</h3>  
    
                    </div>

                <div id="mapacurso2">
                    <tr>
                        <td><a name="Home" href="dashboard_curso.html"style="color:black; text-decoration:none;">Home > </a></td>
                        <td><a name="Meus_dados" href="Meus_dados.html" style="color:black; text-decoration:none;">Meus Dados </a></td>
                     </tr>
                        </div>

                   <!-- <div id="vetorlivro">
                    <img src="imagens/Vetor Livro2.png" width="100px" heigth="100px">
                    </div>-->
    

<div id="MeusDados_Gerais">
    <?php
    echo $nome;
    ?>
</div>
</body>   
</head>
</html>