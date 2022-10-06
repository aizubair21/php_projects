<?php
require_once "dompdf/autoload.inc.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

//object
$dompdf = new Dompdf();

//pass html to dompdf
$dompdf->loadHtml(
    `<table border="1">
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Address</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>01</td>
            <td>Amimul Ihsan Zubair</td>
            <td>01254875200</td>
            <td>email.ami@example.xyz</td>
            <td>Dan kore dilam</td>
        </tr>
    </tbody>
    </table>`
);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();