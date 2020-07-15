<!DOCTYPE html>

<?php
    setcookie("usuario1", "Nome1", time()+1000, "/");
    setcookie("usuario2", "Nome2", time()+2000, "/");

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    
<?php
    
    function verifica(){
        $num_args = func_num_args();
        $arg_list = func_get_args();

        if($num_args <= 0){
            echo "Nenhum argumento foi inserido";
            echo "<br>";
        } else{
            for ($i = 0; $i < $num_args; $i++){
                if(!isset($_COOKIE[$arg_list[$i]])){
                    echo "Cookie " . $arg_list[$i] . " não setado.";
                    echo "<br>";
                } else{
                    echo "O valor do cookie ". $arg_list[$i] . " : " . $_COOKIE[$arg_list[$i]];
                    echo "<br>";
                }
            }
        }
    }

    verifica('usuario1', 'usuario2');

    echo "-------------------- <br>";
    setcookie("usuario1", "",time()-1000);
    verifica('usuario1', 'usuario2');
?>


</body>
</html>
