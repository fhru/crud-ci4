<?php

namespace App\Controllers;

use App\Models\AuthModel;
use App\Models\UsersModel;

class Login extends BaseController
{
    protected $userModel;
    protected $auth;

    public function __construct()
    {
        $this->userModel = new UsersModel();
        $this->auth = new AuthModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Login Page'
        ];
        return view('auth/login', $data);
    }
    public function register()
    {
        $data = [
            'title' => 'Register Page'
        ];

        return view('auth/register', $data);
    }
    public function postRegister()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field}  Harus Diisi',
                    'is_unique' => '{field}  Sudah Ada'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus Diisi'
                ]
            ]
        ])) {
            return redirect()->to('/register')->withInput();
        }

        $level = $this->request->getVar('level');
        $password = $this->request->getPost('password');

        $data = [
            'email' => $this->request->getPost('email'),
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'level' => $level
        ];
        // $model = new UsersModel;
        // $model->insert($data);
        $this->userModel->save($data);
        return redirect()->to('/login')->with('berhasil', 'Register Berhasil Silahkan Login');
    }

    public function login()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field}  Harus Diisi'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus Diisi'
                ]
            ]
        ])) {
            return redirect()->to('/login')->withInput();
        }

        $table = 'users';
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $row = $this->auth->get_data_login($email, $table);

        if ($row == NULL) {
            session()->setFlashdata('pesan', 'Email/Password Kamu salah');
            return redirect()->to('/login');
        }
        if (password_verify($password, $row->password)) {
            $data = [
                'log' => true,
                'email' => $row->email,
                'level' => $row->level
            ];
            session()->set($data);
            session()->setFlashdata('pesan', 'Berhasil Login');
            return redirect()->to('/komik');
        }
        session()->setFlashdata('pesan', 'Gagal Login');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
