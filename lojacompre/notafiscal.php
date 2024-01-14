<?php 

include_once 'config.php';
require_once '../dompdf/autoload.inc.php';


$nota = $_GET['id_nota'];
// Consulta SQL
$sql = "SELECT * FROM vw_venda WHERE nm_ticket = '$nota'";

// Executando a consulta
$res = $conn->query($sql); 

// Verificando se há resultados
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

// Fechando a conexão com o banco de dados
$conn->close();

// Gerando o PDF

use Dompdf\Dompdf;
use Dompdf\Options;


$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);

$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->set_option('defaultFont', 'Arial');
$dompdf->setPaper('A4', 'landscape');
$dompdf->render();
$dompdf->stream();

?>