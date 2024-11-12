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
        <title>reVeste</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="topbar">
            <div>
                <br>
                <div class="sitename"><a href="index.php">reVeste</a></div>
                <div class="dropdown">
                    <button onclick=dropdownFunction() class="dropbtn">
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
                <div class="search">
                    <input type="text" placeholder="Pesquisar...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
                <div>
                    <ul class="navbar">
                        <li><a class="active"
                                href="index.php">TrocVendas</a></li>
                        <li><a href="sales.php">Vendas</a></li>
                        <li><a href="faq.php">Como Funciona</a></li>
                        <li><a href="about.php">Sobre</a></li>
                        <li><a href="contact.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="first-row">
            <section class="slideshow">
                <div class="slideshow-container">

                    <div class="slides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="testimage.png">
                    </div>

                    <div class="slides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="testimage.png">
                    </div>

                    <div class="slides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="testimage.png">
                    </div>

                </div>
                <br>

                <div class="slideshow-selector">
                    <div style="text-align:center">
                        <span class="dot"></span>
                        <span class="dot"></span>
                        <span class="dot"></span>
                    </div>
                </div>

                <script>
                    let slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      let i;
                      let slides = document.getElementsByClassName("slides");
                      let dots = document.getElementsByClassName("dot");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                      dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 5000); // Muda a imagem a cada 5 segundos
                    }
                    </script>

            </section>
            <section class="profile-card">
                <div class='card'>
                <?php if(!empty($_SESSION)) {
                    echo "<img class='pfp' src='blank-pfp.png'>";
                    echo "<div class='username'>";
                    echo $_SESSION['name'];
                    echo "</div>";
                    echo "<div class='userinfo'>";
                    echo $_SESSION['email'] . "<br><br>";
                    echo $_SESSION['cpf'] . "<br><br>";
                    echo $_SESSION['phone'] . "<br><br>";
                    echo $_SESSION['address'] . "<br><br>";
                    echo "</div>";

                } else {
                    echo "<img class='pfp' src='blank-pfp.png'>";
                    echo "<div class='username'>Faça login!</div>";
                }
                ?>
                </div>
            </section>
        </section>

        <section class="pro-row">
            <div class="pro-container">
                <?php
                include 'connect.php';

                $sql = "SELECT name, imageUrl, description FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='pro'>";
                        echo "<div>";
                        echo "<img src='" . htmlspecialchars($row["imageUrl"]) . "'>";
                        echo "</div><br>";
                        echo $row["name"];
                        echo "<br>";
                        echo htmlspecialchars($row["description"]);
                        echo "<br><br>";
                        echo "</div>";
                    }
                } else {
                    echo "Nenhum produto encontrado.";
                }

                $conn->close();
                ?>
            </div>
        </section>

        <section class="offer">
            <br>
            <div class="offer-picture">
                <img class="offer-picture-img" src="testimage.png">
            </div>
            <div class="offer-header">
                VENDAS NO MOMENTO
            </div>
            <div class="offer-price">
                <div class="offer-coin">R$</div>
                <div class="offer-value">69,90</div>
            </div>
            <div class="offer-text">
                PEÇAS NOVAS! NÃO PERCA!
            </div>
            <div class="offer-subtext">
                Roupas novas toda hora, renovando sempre de acordo com as tags
                que foram tituladas no projeto
            </div>
            <br>
            <br>
            <br>
            <div class="offer-button">
                <button>Mais promoções</button>
            </div>
        </section>
        <br>
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