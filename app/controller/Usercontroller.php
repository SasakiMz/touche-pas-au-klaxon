<?php

namespace App\Controller;

use App\Model\UserModel;
use Core\Controller;

class UserController extends Controller
{
    public function index(): void
    {
        $userModel = new UserModel();
        $users = $userModel->findAll();

        $this->render('user/index', [
            'users' => $users
        ]);
    }
}