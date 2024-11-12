<?php
include('connect.php');

if(!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reVeste - Vendas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="topbar">
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

                window.onclick = function (event) {
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
            <div class="search">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
            <div>
                <ul class="navbar">
                    <li><a href="index.php">TrocVendas</a></li>
                    <li><a href="sales.php">Vendas</a></li>
                    <li><a class="active" href="faq.php">Como Funciona</a></li>
                    <li><a href="about.php">Sobre</a></li>
                    <li><a href="contact.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="faq-info">
        <h1>Como funciona?</h1>
        <div class="faq-text">
        A indústria da moda é uma das mais poluentes do mundo, mas a reutilização de roupas 
        pode reduzir o desperdício e promover a inclusão social, tornando roupas de 
        qualidade acessíveis a todos. Assim surge a Reveste, um projeto que deseja contribuir 
        com uma visão de sustentável no mercado da moda. Colocando roupas em circulação 
        que acabariam ficando guardados em seu guarda-roupa ou se tornando resido têxtil 
        na natureza ao ser descartado. Queremos boas consequências do nosso projeto, 
        trazendo sustentabilidade ambiental, economia solidária, consciência social e 
        promoção da moda sustentável.
        </div>
    </section>
    <br>
    <section class="footerbar">
        <div class="footerbar-header">Nos contate</div>
        <br>
        Para qualquer informação, fale conosco
        <br>
        <a href="contact.php">Clicando aqui</a>
    </section>
</body>

</html>