<?php 

include_once 'config.php';
require_once '../dompdf/autoload.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Fiscal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #0066cc;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Nota Fiscal</h1>

    <p>Informações da nota fiscal...</p>

    <table>
        <?php
        if ($res->num_rows > 0) {
            $html = "<table>";
            $html .= "<tr>
                    <th>N° Cliente</th>
                    <th>Nome</th>
                    <th>Nº Ticket</th>
                    <th>Data</th>
                    <th>Qtd</th>
                    <th>Valor</th>
                    <th>Produto</th>
                    </tr>";
        
            while ($row = $res->fetch_object()) {
                $html .= "<tr margin-top: 5px; >";
                $html .= "<td>" . $row->nm_usuario . "</td>";
                $html .= "<td>" . $row->nm_nome . "</td>";
                $html .= "<td>" . $row->nm_ticket. "</td>";
                $html .= "<td>" . $row->data_venda . "</td>";
                $html .= "<td>" . $row->qtd_produto . "</td>";
                $html .= "<td>" . $row->vl_total . "</td>";
                $html .= "<td>" . $row->nm_nome . "</td>";
                $html .= "</tr>";
            }
            $html .= "</table>";
        } else {
            $html = "Nenhum dado localizado!";
        }
        ?>
    </table>

    <img src="Logos/logo compre.png" alt="Imagem da nota fiscal">

</body>
</html>
