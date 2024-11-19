<?php
include('connect.php');

if(!isset($_SESSION)) {
    session_start();
}

if(empty($_SESSION['id'])) {

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reVeste - Mensagens</title>
    <link rel="stylesheet" href="style-dms.css">
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
        </div>
    </section>
    <section name="user-list">
        <div class="user-list">
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
            <div class="user-slot">
                <img class="user-pfp" src="blank-pfp.png">
                <div class="user-name">
                    [pessoa]
                </div>
                <div class="user-latest-msg">
                    [última mensagem]
                </div>
            </div>
        </div>
    </section>
    <section name="messages">
        <div class="messages">
            <div class="message-person">
                <img class="person-pfp" src="blank-pfp.png">
                <div>
                    Mensagem Teste
                </div>
            </div>
            <br>
            <div class="message-you">
                <div>
                    Mensagem Teste 2
                </div>
            </div>
            <br>
            <div class="message-person">
                <img class="person-pfp" src="blank-pfp.png">
                <div>
                    Mensagem Teste 3
                </div>
            </div>
        </div>
    </section>
    <div class="send-msg">
        <input type="text" placeholder="Mensagem...">
        <button type="submit"><i class="fa fa-paper-plane"></i></button>
    </div>
</body>
</html>