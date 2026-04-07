<?php
namespace App\Controllers;
class StudentController
{
    public function index()
        {
            require_once '../app/views/Students/index.php';
        }
 
    public function create()
        {
            require_once '../app/views/Students/create.php';
        }

    public function show(string $id)
        {
            require_once '../app/views/Students/show.php';
        }

    public function edit(string $id)
        {
            require_once '../app/views/Students/edit.php';
        }
}

   