<?php

namespace App\Controller;

use Core\Controller;

class HomeController extends Controller
{
    public function home(): void
    {
        $this->render('home/index');
    }
}