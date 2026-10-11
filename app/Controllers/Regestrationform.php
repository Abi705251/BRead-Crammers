<?php
namespace App\Controllers;
use App\Models\UserModel;

class Regestrationform extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function save()
    {
        $userModel = new UserModel();

        $data = [
            'fname'      => $this->request->getPost('fname'),
            'lname'      => $this->request->getPost('lname'),
            'email'      => $this->request->getPost('email'),
            'birthdate'  => $this->request->getPost('birthdate'),
            'gender'     => $this->request->getPost('gender'),
            'phone'      => $this->request->getPost('phone'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'uname'      => $this->request->getPost('uname'),
            'address'    => $this->request->getPost('address'),
        ];

        $userModel->insert($data);

        return redirect()->to(site_url('/'))->with('message', 'Registered successfully!');
    }
}
