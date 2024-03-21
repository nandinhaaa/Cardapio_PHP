<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="prato.css" />
    <title>Prato do Dia</title>
</head>
<body>
    <h1>Prato do Dia</h1>
    <form method="post">
        <h3> 0 = Domingo || 1 = Segunda || 2 = Terça || 3 = Quarta || 4 = Quinta || 6 = Sexta || 7 = Sábado </h2> 
        <label for="codigo">Digite o código do prato:</label>
        <br>
        <input type="text" id="codigo" name="codigo" placeholder="Código">
        <br>
        <input type="submit" value="Exibir informações">
    </form>

    <?php

    
   $pratos_dia = array(
    array(
        "codigo" => 0,
        "dia_semana" => "domingo",
        "prato" => "Lasanha de 4 queijos",
        "preco" => 12.60
    ),
    array(
        "codigo" => 1,
        "dia_semana" => "segunda-feira",
        "prato" => "Frango ao molho",
        "preco" => 10.00
    ),
    array(
        "codigo" => 2,
        "dia_semana" => "terça-feira",
        "prato" => "Arroz com legumes",
        "preco" => 9.40
    ),
    array(
        "codigo" => 3,
        "dia_semana" => "quarta-feira",
        "prato" => "Feijoada",
        "preco" => 11.20
    ),
    array(
        "codigo" => 4,
        "dia_semana" => "quinta-feira",
        "prato" => "Panqueca",
        "preco" => 8.50
    ),
    array(
        "codigo" => 5,
        "dia_semana" => "sexta-feira",
        "prato" => "Nhoque Paulista",
        "preco" => 10.00
    ),
    array(
        "codigo" => 6,
        "dia_semana" => "sábado",
        "prato" => "Carne assada",
        "preco" => 15.00
    ),
);
  // Obter o código do formulário
$codigo = $_POST["codigo"];


if (!is_numeric($codigo)) {
    echo "<p>Erro: o código do prato precisa ser um número.</p>";
} else {
    $codigo = intval($codigo);

    if ($codigo < 0 || $codigo >= count($pratos_dia)) {
        echo "<p>Erro: código do prato inválido.</p>";

    } else {
        // Buscar o prato do dia
        $prato_dia = $pratos_dia[$codigo];

        // Exibir o prato do dia
        echo "<p>Prato do dia: {$prato_dia["prato"]}</p>";
        echo "<p>Preço: R\$ {$prato_dia["preco"]}</p>";
    }
}

?>
</body>
</html>