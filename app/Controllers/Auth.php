<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Auth extends BaseController
{
    public function regpage()
    {
        return view('auth/reg');
    }
    public function reg()
    {
        if (!$this->validate([
            'email' => "required",
            'username'  => 'required',
        ])) {
            return view('users/update', [
                'errors' => $this->validator->getErrors(),
            ]);
        }else{
            return 'yep';
        }

        // do something here if successful...
    }
}
