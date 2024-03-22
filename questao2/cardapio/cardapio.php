<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prato do Dia</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="content">
            <ul class="menu">
                <h1>Prato do Dia</h1>
                <li><p>0: Domingo</p></li>
                <li><p>1: Segunda</p></li>
                <li><p>2: Terça</p></li>
                <li><p>3: Quarta</p></li>
                <li><p>4: Quinta</p></li>
                <li><p>6: Sexta</p></li>
                <li><p>7: Sábado</p></li>
            </ul>
        </div>
        <div class="form">
            <label for="codigo">Digite o código desejado:</label>
            <form method="post" class="content-form">
                <input type="text" id="codigo" name="codigo" placeholder="Código">
                <input type="submit" value="Exibir informações" class="botao">
            </form>

            <?php
            $pratos_dia = array(
                array(
                    "codigo" => 0,
                    "dia_semana" => "domingo",
                    "prato" => "Lasanha de 4 queijos",
                    "imagem" => "img/lasanha-4-queijos.png",
                    "preco" => "R$12,60"
                ),
                array(
                    "codigo" => 1,
                    "dia_semana" => "segunda-feira",
                    "prato" => "Frango ao Molho",
                    "imagem" => "img/frango-ao-molho.png",
                    "preco" => "R$10,00"
                ),
                array(
                    "codigo" => 2,
                    "dia_semana" => "terça-feira",
                    "prato" => "Arroz com Legumes",
                    "imagem" => "img/arroz-com-legumes.png",
                    "preco" => "R$9,40"
                ),
                array(
                    "codigo" => 3,
                    "dia_semana" => "quarta-feira",
                    "prato" => "Feijoada",
                    "imagem" => "img/feijoada.png",
                    "preco" => "R$11,20"
                ),
                array(
                    "codigo" => 4,
                    "dia_semana" => "quinta-feira",
                    "prato" => "Panqueca",
                    "imagem" => "img/panqueca.png",
                    "preco" => "R$8,50"
                ),
                array(
                    "codigo" => 5,
                    "dia_semana" => "sexta-feira",
                    "prato" => "Nhoque Paulista",
                    "imagem" => "img/nhoque-paulista.png",
                    "preco" => "R$10,00"
                ),
                array(
                    "codigo" => 6,
                    "dia_semana" => "sábado",
                    "prato" => "Carne Assada",
                    "imagem" => "img/carne-assada.png",
                    "preco" => "R$15,00"
                ),
            );
            // Verificar se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

                        // Exibir as informacoes
                        echo "<p>{$prato_dia["prato"]}</p>";
                        echo "<img src='{$prato_dia["imagem"]}' alt='{$prato_dia["prato"]}'>";
                        echo "<button>Preço: {$prato_dia["preco"]}</button>";
                    }
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
