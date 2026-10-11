<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'ID';
    protected $allowedFields = [
        'userID', 'role', 'firstName', 'middleName', 'lastName', 
        'email', 'username', 'password', 'department', 
        'birthdate', 'gender', 'phone', 'address'
    ];
    protected $useTimestamps = false;
}
