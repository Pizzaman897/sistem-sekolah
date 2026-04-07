<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';

use App\Core\Controller;

class StudentController extends Controller
{
    public function index()
        {
            $this->view('Students.index');
        }
 
    public function create()
        {
            $this->view('Students.create');
        }

    public function show(string $id)
        {
            $this->view('Students.show');
        }

    public function edit(string $id)
        {
            $this->view('Students.edit');
        }
}

   