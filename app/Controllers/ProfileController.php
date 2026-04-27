<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    public function index()
    {
        // cek udah login belum
        $session = session();

        $data = [
            'title' => 'Profile',
            'username' => $session->get('username'),
            'role' => $session->get('role'),
            'email' => $session->get('email'),
            'waktu_login' => $session->get('waktu_login'),
            'status_login' => $session->get('isLoggedIn') ? 'Sudah Login' : 'Belum Login',
        ];

        // $data itu untuk kirim ke view v_profile.php
        return view('v_profile', $data);
    }
}
