<?php
function generateRow()
{
    $contents = '';

    require '../helper/config.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM savings_record WHERE code_savings='$id'";

    $query = $conn->query($sql);
    while ($row = $query->fetch_assoc()) {
        $contents .= "
        <tr>
        <td>" . $row['code_savings'] . "</td>
        <td>" . $row['savings_coin'] . "</td>
        </tr>
        ";
    }
    return $contents;
}

require_once('../lib/tcpdf/tcpdf.php');
$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle("SMK Yasiha - Invoice Payment");
$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->SetDefaultMonospacedFont('helvetica');
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->SetAutoPageBreak(TRUE, 10);
$pdf->SetFont('helvetica', '', 11);
$pdf->AddPage();
$content = '';
$content .= '
<h2 align="center">SMK Yasiha - Invoice Payment</h2>
<h4>SMK Yasiha - Your Invoice Payment</h4>
<table border="1" cellspacing="0" cellpadding="3">  
<tr>
<th width="60%">Code Savings</th>
<th width="20%">Nominal Money</th>
</tr>  
';
$content .= generateRow();
$content .= '</table>';
$pdf->writeHTML($content);
$pdf->Output('SMK Yasiha - Invoice Payment.pdf', 'I');