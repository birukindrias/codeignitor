<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function index()
    {
        return view('main');
    }
    public function updateUser(int $userID)
    {
        if (!$this->validate([
            'email' => "required|is_unique[users.email,id,{$userID}]",
            'name'  => 'required|alpha_numeric_spaces',
        ])) {
            return view('users/update', [
                'errors' => $this->validator->getErrors(),
            ]);
        }

        // do something here if successful...
    }
}
