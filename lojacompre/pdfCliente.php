<?php 

include_once 'config.php';
require_once '../dompdf/autoload.inc.php';


// Consulta SQL
$sql = "SELECT * FROM tbl_usuario";

// Executando a consulta
$res = $conn->query($sql);

// Verificando se há resultados
if ($res->num_rows > 0) {
    $html = "<table border='1'>";
    while ($row = $res->fetch_object()) {
        $html .= "<tr>";
        $html .= "<td>" . $row->id_usuario . "</td>";
        $html .= "<td>" . $row->nm_usuario . "</td>";
        $html .= "<td>" . $row->sbnm_usuario . "</td>";
        $html .= "<td>" . $row->cell_usuario . "</td>";
        $html .= "<td>" . $row->desc_email . "</td>";
        $html .= "<td>" . $row->desc_status . "</td>";
        $html .= "<td>" . $row->desc_endereco . "</td>";
        $html .= "<td>" . $row->desc_cidade . "</td>";
        $html .= "<td>" . $row->num_cep . "</td>";
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