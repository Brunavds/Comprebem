<?php 

include_once 'config.php';
require_once '../dompdf/autoload.inc.php';


// Consulta SQL
$sql = "SELECT * FROM tbl_vendas";

// Executando a consulta
$res = $conn->query($sql);

// Verificando se há resultados
if ($res->num_rows > 0) {
    $html = "<table style= border='1' 'border: #000000 2px; text-align:center;'>";
    $html = "<table>";
    $html .= "<tr style = 'margin-top:5px;'>
            <th>N° Id Venda</th>
            <th>Nº Ticket</th>
            <th>Id Cliente</th>
            <th>Id Produto</th>
            <th>Qtd</th>
            <th>Valor Produto</th>
            <th>Total</th>
            <th>Data</th>
            </tr>";
            
    while ($row = $res->fetch_object()) {
        $html .= "<tr>";
        $html .= "<td>" . $row->id_venda . "</td>";
        $html .= "<td>" . $row->nm_ticket . "</td>";
        $html .= "<td>" . $row->id_cliente . "</td>";
        $html .= "<td>" . $row->id_produto . "</td>";
        $html .= "<td>" . $row->qtd_produto . "</td>";
        $html .= "<td>" . $row->vl_produto . "</td>";
        $html .= "<td>" . $row->vl_total . "</td>";
        $html .= "<td>" . $row->data_venda . "</td>";
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