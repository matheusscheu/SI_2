<?php
//definindo as variaveis
$name =  $age = $password = $email = "";
$nameError = $ageError = $passwordError = $emailError = "";

//verificação de método usado e faz as validações de segurança
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameError = "Nome é Obrigatório";
    }if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {$nameError = "Somente letras e espaços são permitidos";
        }else{$name = test($_POST["name"]);
    }
    if (empty($_POST["age"])){
        $ageError = "Idade é Obrigatório";
    }else{$age = test($_POST["age"]);
    }
    if (empty($_POST["password"])){
        $passwordError = "Senha é Obrigatório";
    }else{$password = test($_POST["password"]);
    }
    if (empty($_POST["email"])){
        $emailError = "Email é Obrigatório";
    }else{$email = test($_POST["email"]);
}

//função que testa as entradas
function test($data){
    $data = trim($data);                //remove espaços
    $data = stripslashes($data);        //revove barras invertidas
    $data = htmlspecialchars($data);    //converte carac. especiais em HTML Codes
    return $data;
}

?>