<?php

function desenhaLinha(array $linha) {
    // Exibindo os valores da linha formatados
    echo "{$linha['ordem']}. {$linha['pais']} - Ouro: {$linha['ouro']}, Prata: {$linha['prata']}, Bronze: {$linha['bronze']}, Total: {$linha['total']}\n";
}

$linha1 = array("ordem" => 1, "pais" => "Estados Unidos", "ouro" => 46, "prata" => 37, "bronze" => 38,  "total" => 121);
$linha2 = array("ordem" => 2, "pais" => "Grã Bretanha", "ouro" => 27, "prata" => 23, "bronze" => 17,  "total" => 67);
$linha3 = array("ordem" => 3, "pais" => "China", "ouro" => 26, "prata" => 18, "bronze" => 26,  "total" => 60);
$linha4 = array("ordem" => 4, "pais" => "Russia", "ouro" => 19, "prata" => 17, "bronze" => 20,  "total" => 56);
$linha5 = array("ordem" => 5, "pais" => "Alemanha", "ouro" => 17, "prata" => 10, "bronze" => 15,  "total" => 42);

// Criar a matriz
$linhas = array($linha1, $linha2, $linha3, $linha4, $linha5);

// Percorrer a matriz e chamar a função para desenhar a linha
foreach ($linhas as $linha) {
    desenhaLinha($linha);
}
?>
