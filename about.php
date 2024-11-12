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
    <link rel="stylesheet" href="style-about.css">
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
                    <li><a href="faq.php">Como Funciona</a></li>
                    <li><a class="active" href="about.php">Sobre</a></li>
                    <li><a href="contact.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="about-info">
        <h1>Quem somos?</h1>
        <div class="about-text">
        Somos um grupo de apaixonadas por moda e sua sustentabilidade, 
        dedicadas a transformar a forma como as pessoas se relacionam com suas roupas. 
        Compreendemos que a indústria da moda, muitas vezes, contribui para o consumo 
        excessivo e o desperdício de recursos. Com isso em mente, decidimos criar uma plataforma 
        que possibilita o aluguel, a venda, a doação e a troca de roupas, promovendo uma moda 
        mais consciente e ética.
        </div>
        <br>
        <h1>De onde falamos?</h1>
        <div class="about-text">
        Estamos localizados na Marista Escola Social Irmão Acácio, que tem como foco 
        a valorização das pessoas, a criação de vínculos, o protagonismo social, 
        a participação da família e da comunidade e a promoção da cidadania. 
        Nossa presença nesta escola nos permite conectar pessoas, fortalecer laços sociais e 
        potencializar esforços para a realização de projetos. Acreditamos que podemos fazer 
        uma diferença significativa, apoiando a economia solidária e incentivando práticas 
        responsáveis de consumo.
        </div>
        <h1>Nosssas culturas e valores</h1>
        <div class="about-text">
        Nossa cultura é fundamentada na colaboração, inclusão e responsabilidade ambiental. 
        Valorizamos a sustentabilidade, promovendo a reutilização e o compartilhamento de roupas 
        para reduzir a demanda por novos itens e seu impacto ambiental. Também apoiamos 
        a economia solidária, incentivando um sistema justo que permite a participação equitativa 
        de todos ao alugar, vender, doar ou trocar roupas, beneficiando a comunidade. Além disso, 
        estamos comprometidos em aumentar a conscientização sobre os efeitos da moda rápida e 
        a importância de opções mais sustentáveis.
        </div>
        <br>
        <h1>Logomarca</h1>
        <div class="about-img">
            <img src="logo.png">
        </div>
        <div class="about-text">
        Tentando juntar características que mostra-se nosso objetivo em um todo. 
        Sendo um site com influência na moda sustentável. Tivemos etapas, e etapas, 
        com nossa logo sendo refeita para melhor entendimento do nosso público Alvo, 
        que é Brasileiro.<br>
        <br>
        A utilização de um cabide, para relembrar o nosso público, que em um piscar de olhos, 
        conseguirá deduzir sobre o que ao menos se trata nosso projeto em um todo. Nossa logo, 
        quis simplificar de um jeito simples e entendível o que quis passar, com detalhes 
        associados a costura e renovação.<br>
        <br>
        Feita e desenvolvida com o Ibis Paint, igualmente ao nosso layout do site. 
        Pois é um aplicativo simples e fácil de se alterar informações, 
        podendo ser usado por todas as integrantes do projeto.<br>
        <br>
        Com o circulo pontilhado em volta do desenho de um cabide, que quis reforçar 
        a ideia de logo e ainda mostrar que com pequenos aspectos, da para se montar um design. 
        Sendo sugerido pelo professor.<br>
        <br>
        Que nos passou a ideia de ser um cabide e mudar nossa logo para parecer mais clara nossa ideia geral.
        </div>
        <br>
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