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
    <title>reVeste - Perfil</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #A479E2;
            overflow-x: hidden;
        }

        /* Topbar */

        .topbar {
            background-color: #252D5E;
            position: relative;
            align-items: center;
        }

        .user {
            position: absolute;
            margin-top: -55px;
            margin-left: 94%;
            background-color: lightgray;
            width: 50px;
            border-radius: 50%;
        }



        /* Botão de Dropdown */
        .dropbtn {
            margin-top: 24px;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0);
        }

        .dropbtn div {
            width: 35px;
            height: 5px;
            background-color: black;
            margin: 6px 0;
        }

        .dropdown {
            position: absolute;
            margin-left: 87%;
            margin-top: -90px;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        .sitename a{
            font-size: 50px;
            text-align: left;
            margin-left: 30px;
            font-family: "Georgia", Times, serif;
            font-style: italic;
        }

        .sitename a:visited{
            color: black;
        }

        /* Cartão do Perfil */

        .card {
            background-color: white;
            width: 25%;
            height: 450px;
            margin: 50px 30px;
        }

        .pfp {
            margin-top: 25px;
            margin-left: 90px;
            background-color: lightgray;
            width: 150px;
            border-radius: 50%;
        }

        .username {
            margin-top: 30px;
            margin-left: 55px;
            font-size: 30px;
        }

        .userinfo {
            margin-left: 50px;
            margin-right: 50px;
            margin-top: 10px;
            border-style: solid;
            border-color: gray;
        }

        /* Footer Bar */

        .footerbar {
            width: 100%;
            color: white;
            text-align: center;
            background-color: #777777;
            padding-top: 30px;
            padding-bottom: 60px;
        }

        .footerbar-header {
            font-size: 30px;
        }

        .prod-list {
            position: absolute;
            margin-top: 50px;
            margin-left: 28%;
            margin-right: 30px;
            height: 450px;
            overflow: auto;

            &::-webkit-scrollbar-thumb:hover {
                background: #11152e !important;
            }

            &::-webkit-scrollbar-track {
                background-color: white;
                border-radius: 5px;
            }

            &::-webkit-scrollbar {
                width: 15px;
                background-color: white;
                border-radius: 5px;
            }

            &::-webkit-scrollbar-thumb {
                width: 5px;
                background-color: #252D5E;
                border-radius: 5px;
            }
        }

        .prod {
            background-color: #C9C9C9;
            width: 250px;
            float: left;
            margin: 5px 5px;
            padding: 0 20px;
        }

        .prod-div {
            height: 125px;
            background-color: white;
            margin: 10px -10px;
            padding-top: 25px;
            border-radius: 15px;
            border-style: solid;
            border-color: #777777;
            text-align: center;
            transition: 0.2s ease;
        }

        .prod-div:hover {
            background-color: #E9E9E9;
        }

        .prod button {
            padding: 5px;
            margin-top: 5px;
            font-size: 20px;
        }

        .prod button i {
            margin-right: 15px;
            color: #9D9D9D;
        }

        .switch {
            position: absolute;
            width: 60px;
            height: 34px;
            margin-left: 50px;
            margin-top: 5px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #808080;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #252D5E;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #252D5E;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .msg-text {
            margin-left: 80px;
            margin-top: -10px;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
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
    <section>
        <div class="prod-list">
            <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='prod'>";
                        echo "<div class='prod-div'>";
                        echo htmlspecialchars($row["type"]);
                        echo "</div><br>";
                        echo $row["name"];
                        echo "<br>";
                        echo htmlspecialchars($row["description"]);
                        if($row["type"] == 'Troca') {
                            echo "<br>";
                            echo "<button onclick=dmFunction()><i class='fa fa-envelope'></i>DM</button>";
                            echo "<label class='switch'>";
                            echo "<input type='checkbox'>";
                            echo "<span class='slider round'></span>";
                            echo "<div class='msg-text'>";
                            echo "Msg";
                            echo "</div>";
                            echo "</label>";
                        }
                        echo "<br><br>";
                        echo "</div>";
                    }
                } else {
                    echo "Nenhum produto encontrado.";
                }

                $conn->close();
            ?>
            <script>
                function dmFunction() {
                    location.href = 'dms.php';
                }
            </script>
        </div>
    </section>
    <section class="profile-card">
        <div class="card">
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
    <section class="footerbar">
        <div class="footerbar-header">Nos contate</div>
        <br>
        Para qualquer informação, fale conosco
        <br>
        <a href="contact.php">Clicando aqui</a>
    </section>
</body>
</html>