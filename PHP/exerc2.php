<?php 
    $file = fopen("arquivo.txt","a+");

    fwrite($file, "Primeiro texto1 \n");
    fwrite($file, "Primeiro texto2 \n");
    fwrite($file, "Primeiro texto3 \n");
    fwrite($file, "Primeiro texto4 \n");

    fclose($file);

    //Abrindo pela segundo vez o arquivo

    $file = fopen("arquivo.txt","a+");

    fwrite($file, "Segundo texto \n");

    fclose($file);

    //Visualizar dados
    $file = fopen("arquivo.txt","r");

    echo fread($file, filesize("arquivo.txt"));

    fclose($file);
?>
