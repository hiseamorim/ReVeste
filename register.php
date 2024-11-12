<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $cpf = $conn->real_escape_string($_POST['cpf']);
    $email = $conn->real_escape_string($_POST['email']);

    $birthdate = $conn->real_escape_string($_POST['birthdate']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['password']);

    $cep = $conn->real_escape_string($_POST['cep']);
    $address = $conn->real_escape_string($_POST['address']);
    $number = $conn->real_escape_string($_POST['number']);

    $complement = $conn->real_escape_string($_POST['complement']);
    $city =$conn->real_escape_string($_POST['city']);

    $district = $conn->real_escape_string($_POST['district']);
    $state = $conn->real_escape_string($_POST['state']);

    //Validação Básica

    if 
    (empty($name) || empty($cpf) || empty($email) ||
    empty($birthdate) || empty($phone) || empty($password) ||
    empty($cep) || empty($address) || empty($number) ||
    empty($complement) || empty($city) || 
    empty($district) || empty($state)) {
        echo "Por favor, preencha todos os campos!";
        exit;
    }

    // Inserindo os dados no banco
    $sql = "INSERT INTO users 
    (name, cpf, email, birthdate, phone, password, 
    cep, address, number, complement, city, district, state) VALUES
    ('$name', '$cpf', '$email', '$birthdate', '$phone', '$password',
    '$cep', '$address', '$number', '$complement', '$city', '$district', '$state')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro realizado com sucesso!";
    }
    else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    header("Location: index.php");

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reVeste - Cadastro</title>
    <link rel="stylesheet" href="style-register.css">
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
            <a href="profile.php"><img class="user" src="blank-pfp.png"></a>
            <br>
        </div>
    </section>
    <section class="register">
        <div class="register-header">
            Registre-se!
        </div>
        <div class="register-message">
            Queremos boas consequências do nosso projeto, trazendo sustentabilidade ambiental,
            <br>
            economia solidária, consciência social e promoção da moda sustentável. Participe dessa ação!
            <br>
        </div>
        <img src="logo.png">
        
        <form action="" method="POST">
            <button type="submit">
                Confirmar
            </button>
            <div class="register-info-2">
                <div class="register-input">
                    Data de Nascimento:
                    <br>
                    <input type="date" placeholder="__/__/____" id="birthdate" name="birthdate">
                </div>
                <br>
                <div class="register-input">
                    Telefone:
                    <br>
                    <input type="text" id="phone" name="phone">
                </div>
                <br>
                <div class="register-input">
                    Senha:
                    <br>
                    <input type="text" id="password" name="password">
                </div>
            </div>
            <div class="register-info">
                <div class="register-input">
                    Nome Completo:
                    <br>
                    <input type="text" id="name" name="name" placeholder="Nome Completo">
                </div>
                <br>
                <div class="register-input">
                    CPF:
                    <br>
                    <input type="text" id="cpf" name="cpf">
                </div>
                <br>
                <div class="register-input">
                    E-mail:
                    <br>
                    <input type="text" id="email" name="email">
                </div>
            </div>
            <div class="register-address-header">Dados de Endereço</div>
            <div class="register-address-number">
                Número:
                <br>
                <input type="text" id="number" name="number">
            </div>
            <div class="register-address">
                Endereço:
                <br>
                <input type="text" id="address" name="address">
            </div>
            <div class="register-cep">
                CEP:
                <br>
                <input type="text" id="cep" name="cep">
            </div>
            <br>
            <div class="register-info-2">
                <div class="register-input">
                    Bairro:
                    <br>
                    <input type="text" id="district" name="district">
                </div>
                <br>
                <div class="register-input">
                    Estado:
                    <br>
                    <input type="text" id="state" name="state">
                </div>
            </div>
            <div class="register-info">
                <div class="register-input">
                    Complemento:
                    <br>
                    <input type="text" id="complement" name="complement">
                </div>
                <br>
                <div class="register-input">
                    Cidade:
                    <br>
                    <input type="text" id="city" name="city">
                </div>
            </div>
        </form>
        <br>
        <br>
    </section>
</body>
</html>