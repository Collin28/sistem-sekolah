<?php
namespace App\Controllers;

class StudentController
{

    public function index():void
    {
        require_once './app/views/students/index.php';
    }

    public function create():void
    {
        require_once './app/views/students/create.php';
    }

    public function show(string $id)
    {
        echo '<h1>Detail siswa</h1>';
        echo "<p>Menampilkan form detail siswa dengan id: {$id}</p>";
    }

}

?>