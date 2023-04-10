<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php 
            $informacao = array ();
            $nome = "Juan";
            $idade = "16";
            $sexo = "Masculino";
            $estado = "Sofrendo";
            $profissao = "Vagabundo";

            $informacao [0][0] = "Nome";
            $informacao [0][1] = "O seu nome é: " . $nome;

            $informacao [1][0] = "Idade";
            $informacao [1][1] = "A sua idade é: " . $idade;

            $informacao [2][0] = "Sexo";
            $informacao [2][1] = "O seu sexo é: " . $sexo;

            $informacao [3][0] = "Estado civil";
            $informacao [3][1] = "O seu estado civil atual é: " . $estado;

            $informacao [4][0] = "Profissão";
            $informacao [4][1] = "A sua profissão é: " . $profissao;

            foreach ($informacao as $indice => $valor){
                foreach ($valor as $indice_1 => $valor_1){
                    echo "[$indice] [$indice_1] $valor_1 </br>";
                }
            }
        ?>
    </body>
</html>