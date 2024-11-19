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
    <link rel="stylesheet" href="style-sales.css">
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
                    <li><a class="active" href="sales.php">Vendas</a></li>
                    <li><a href="faq.php">Como Funciona</a></li>
                    <li><a href="about.php">Sobre</a></li>
                    <li><a href="contact.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </section>
    <div class="prodlist">
        <form action="" method="GET">
            <div class="filter-title">FILTROS</div>
            <div class="filters">
                <?php
                    $category_query = "SELECT * FROM categories";
                    $category_query_run = mysqli_query($conn, $category_query);

                    if(mysqli_num_rows($category_query_run) > 0) {
                        foreach($category_query_run as $categorylist) {

                            $checked = [];

                            if(isset($_GET['categories'])){
                                $checked = $_GET['categories'];
                            }

                            if ($categorylist['isSub'] == true) {
                                echo "<label class='round-check subfilters'>" . $categorylist['name'];
                                echo "<input type='checkbox' name='categories[]' value='" . $categorylist['id'] . "' ";
                                if(in_array($categorylist['id'], $checked)){
                                    echo "checked";
                                }
                                echo ">";
                                echo "<span class='round-checkmark'></span>";
                                echo "</label>";
                            } else {
                                echo "<label class='container'>" . $categorylist['name'];
                                echo "<input type='checkbox' name='categories[]' value='" . $categorylist['id'] . "' ";
                                if(in_array($categorylist['id'], $checked)){
                                    echo "checked";
                                }
                                echo ">";
                                echo "<span class='checkmark'></span>";
                                echo "</label>";
                            }
                        }
                    } else {
                        echo "Categorias não foram encontradas.";
                    }
                ?>
                <button type="submit">Pesquisar</button>
            </div>
            <div class="prod-list">
                <?php
                if(isset($_GET['categories'])) {
                    $catchecked = [];
                    $catchecked = $_GET['categories'];
                    foreach($catchecked as $rowcat)
                    {
                        $sql = "SELECT * FROM products WHERE category IN ($rowcat)";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class='prod'>";
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
                    }
                }
                else {
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='prod'>";
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
                }

                $conn->close();
                ?>
            </div>
        </form>
    </div>
    <section class="footerbar">
        <div class="footerbar-header">Nos contate</div>
        <br>
        Para qualquer informação, fale conosco
        <br>
        <a href="contact.php">Clicando aqui</a>
    </section>
</body>

</html>