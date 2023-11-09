<?php

namespace App\Controllers;


class Admin extends BaseController
{

    // public function index()
    // {
    //     return ('asd');
    // }
    public function setAdminSession($admin)
    {
        $data = [
            'id' => $admin->id,
            'name' => $admin->name,
            'email' => $admin->email,
            'isAdminLoggedIn' => true
        ];

        $session = session();
        $session->set($data);
    }

    public function login()
    {
        $admin_model = new \App\Models\AdminModel();
        if ($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['email', 'password']);

            $admin = $admin_model->where('email', $post['email'])
                ->where('password', sha1($post['password']))
                ->first();
            $session = session();
            if (!$admin) {
                $session->setFlashdata('invalid', 'Invalid Username or Password');
            } else {
                $this->setAdminSession($admin);
                return redirect()->to('item/index');
            }
        }
        return view('admin/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('admin/login');
    }
}
