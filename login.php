<?php
include('connect.php');

if(isset($_POST['email']) || isset($_POST['password'])) {

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail.";
    } else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha.";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $password = $conn->real_escape_string($_POST['password']);

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $sql_query = $conn->query($sql) or die("Falha na execução do código SQL: " . $conn->error);

        $qtde = $sql_query->num_rows;

        if($qtde == 1) {
            
            $user = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['user'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['cpf'] = $user['cpf'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['address'] = $user['address'];

            header("Location: index.php");

        } else {
            echo "Falha ao logar! E-mail ou Senha incorretos.";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>reVeste - Login</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style-contact.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="body-alt">
        <section class="topbar-alt">
            <div>
                <br>
                <div class="sitename"><a href="index.php">reVeste</a></div>
                <div class="dropdown">
                    <button onclick="dropdownFunction()" class="dropbtn">
                        <div></div>
                        <div></div>
                        <div></div>
                    </button>
                    <div id="dd" class="dropdown-content">
                        <?php
                            if(empty($_SESSION)) {
                                echo "<a href='register.php'>Registrar</a>";
                                echo "<a href='login.php'>Login</a>";
                            }
                            else{
                                echo "<a href='logout.php'>Logout</a>";
                                echo "<a href='dms.php'>Mensagens</a>";
                            }
                        ?>
                    </div>
                </div>
                <script>
                    function dropdownFunction() {
                        document.getElementById("dd").classList.toggle("show");
                    }

                    window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                            }
                            }
                        }
                    }
                </script>
                <?php
                    if(!empty($_SESSION)) {
                        echo "<a href='profile.php'><img class='user' src='blank-pfp.png'></a>";
                    }
                    else{
                        echo "<img class='user' src='blank-pfp.png'>";
                    }
                ?>
                <br>
                <div>
                    <ul class="navbar-alt">
                        <li><a href="index.php">TrocVendas</a></li>
                        <li><a href="sales.php">Vendas</a></li>
                        <li><a href="faq.php">Como Funciona</a></li>
                        <li><a href="about.hmtl">Sobre</a></li>
                        <li><a class="active" href="contact.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact-header">
                Faça Login
            </div>
            <form action="" method="POST">
                <div class="contact-info">
                    E-mail<input type="text" id="email" name="email">
                    <br>
                    Senha<input type="text" id="password" name="password">
                    <br>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </section>
        <section class="footerbar">
            <div class="footerbar-header">Nos contate</div>
            <br>
            Para qualquer informação, fale conosco
            <br>
            <a href="contact.php">Clicando aqui</a>
        </section>
    </body>
</html>