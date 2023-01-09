<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';

if(isset($_POST['submit_val']))
{
    $dompdf = new Dompdf();
    $dompdf->loadHtml('
');
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("",array("Attachment" => false));
    exit(0);
}
?>