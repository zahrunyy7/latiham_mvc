<?php
// view/BukuView.php

class BukuView {
    public function tampilkan($bukuList) {
        
        // CSS Inline Sederhana untuk Tampilan Lebih Menarik
        $style = '
            <style>
                body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
                .container { max-width: 900px; margin: 0 auto; background-color: #ffffff; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
                h2 { color: #333; text-align: center; margin-bottom: 25px; border-bottom: 2px solid #007bff; padding-bottom: 10px; }
                table { width: 100%; border-collapse: collapse; margin-top: 20px; }
                th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #ddd; }
                th { background-color: #007bff; color: white; text-transform: uppercase; font-size: 14px; }
                tr:nth-child(even) { background-color: #f9f9f9; }
                tr:hover { background-color: #f1f1f1; cursor: pointer; }
                td:nth-child(3) { text-align: center; } /* Memposisikan Tahun Terbit di tengah */
            </style>
        ';

        echo $style;
        echo '<div class="container">';
        echo "<h2>📚 Daftar 100 Buku Paling Terkenal di Dunia (MVC Sederhana)</h2>";
        
        // Mulai tabel
        echo "<table>";
        echo "<thead><tr><th>Judul Buku</th><th>Pengarang</th><th>Tahun Terbit</th></tr></thead>";
        echo "<tbody>";
        
        foreach ($bukuList as $buku) {
            echo "<tr>";
            echo "<td>" . $buku['judul'] . "</td>";
            echo "<td>" . $buku['pengarang'] . "</td>";
            echo "<td>" . $buku['tahun_terbit'] . "</td>";
            echo "</tr>";
        }
        
        echo "</tbody>";
        echo "</table>";
        echo '</div>'; // Tutup container
    }
}
?>