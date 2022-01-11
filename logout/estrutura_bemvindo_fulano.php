<?php
            if(isset($_SESSION['user_portal'])){
            $user = $_SESSION['user_portal'];

            $saudacao = "SELECT nomecompleto ";
            $saudacao .= "FROM clientes ";
            $saudacao .= "WHERE clienteID = $user ";

            $saudacao_login = mysqli_query($conecta,$saudacao);
            if(!$saudacao_login){
                die("falha no banco");
            } 
            $saudacao_login = mysqli_fetch_assoc($saudacao_login);
            $nome = $saudacao_login['nomecompleto'];
        ?>
            <div id='header_saudacao'><h5>Bem-vindo(a), <?php echo $nome ?> - <a href='sair.php'>Sair</a></h5> </div> 
        <?php
            }
        ?>