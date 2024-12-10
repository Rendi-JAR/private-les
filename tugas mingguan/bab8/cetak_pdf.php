<?php
// Memasukkan autoload Dompdf
require_once 'dompdf/autoload.inc.php';  // Sesuaikan dengan path Dompdf Anda
include 'db.php';  // Koneksi database

use Dompdf\Dompdf;
use Dompdf\Options;

// Ambil semua data mahasiswa
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

// Jika ada data mahasiswa
if ($result->num_rows > 0) {
    // Mulai HTML untuk PDF (dalam format tabel)
    $html = "
    <html>
    <head>
        <style>
            body { font-family: Arial, sans-serif; margin: 20px; }
            h1 { text-align: center; }
            table { width: 100%; border-collapse: collapse; margin-top: 20px; }
            table, th, td { border: 1px solid black; }
            th, td { padding: 8px; text-align: left; }
            th { background-color: #f2f2f2; }
            tr:nth-child(even) { background-color: #f9f9f9; }
        </style>
    </head>
    <body>
        <h1>Students List</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                </tr>
            </thead>
            <tbody>
    ";

    // Ambil semua data siswa dan masukkan ke dalam tabel
    while ($row = $result->fetch_assoc()) {
        $html .= "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['course']}</td>
        </tr>
        ";
    }

    // Tutup tabel dan HTML
    $html .= "
            </tbody>
        </table>
    </body>
    </html>
    ";

    // Membuat instance Dompdf
    $dompdf = new Dompdf();

    // Set opsi untuk mengubah ukuran kertas (A4 dan orientasi portrait)
    $options = new Options();
    $options->set('isHtml5ParserEnabled', true);
    $dompdf->setOptions($options);

    // Memuat HTML
    $dompdf->loadHtml($html);

    // Set ukuran kertas A4 (portrait)
    $dompdf->setPaper('A4', 'portrait');

    // Render PDF
    $dompdf->render();

    // Kirim PDF ke browser
    $dompdf->stream("students_list.pdf", ["Attachment" => false]);

} else {
    echo "Tidak ada data mahasiswa untuk dicetak!";
}
?>
