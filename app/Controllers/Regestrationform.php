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

        $lastUser = $userModel->orderBy('ID', 'DESC')->first();
        $nextNum = $lastUser ? intval(substr($lastUser['userID'], 3)) + 1 : 16;
        $newUserID = 'SS-' . str_pad($nextNum, 5, '0', STR_PAD_LEFT);

        $data = [
            'userID'     => $newUserID, 'role' => 'Customer',
            'firstName'      => $this->request->getPost('fname'),
            'lastName'      => $this->request->getPost('lname'),
            'email'      => $this->request->getPost('email'),
            'birthdate'  => $this->request->getPost('birthdate'),
            'gender'     => $this->request->getPost('gender'),
            'phone'      => $this->request->getPost('phone'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'username'      => $this->request->getPost('uname'),
            'address'    => $this->request->getPost('address'),
        ];

        $userModel->insert($data);

        return redirect()->to(site_url('/'))->with('message', 'Registered successfully!');
    }
}
