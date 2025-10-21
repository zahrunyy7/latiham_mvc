<?php
// controller/BukuController.php
require_once "model/Buku.php";
require_once "view/BukuView.php";

class BukuController {
    public function index() {
        // Buat instance Model dan View yang baru (Buku)
        $model = new Buku();
        $view = new BukuView();

        // Ambil data dari model
        $bukuList = $model->getAllBuku();

        // Kirim data ke view dan tampilkan
        $view->tampilkan($bukuList);
    }
}
?>