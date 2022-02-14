<?php
namespace App\classes;
use App\classes\Home;
use App\classes\Users;
class Auth
{
    protected $email;
    protected $password;
    protected $user;
    protected $users;
    protected $home;

public function __construct($post=null)
{
    $this->email = $post['email'];
    $this->password = $post['password'];
}
public function login(){
    header('Location:action.php?pages=login');
}
public function verify(){
    $this->user = New Users();
    $this->users=$this->user->getAllUsers();
    foreach($this->users as $data)
    {
        if($data['email'] == $this->email && $data['password'] = $this->password){
           session_start();
           $_SESSION['id'] = $data['id'];
           $_SESSION['name'] = $data['name'];
           $this->home = new Home();
           $this->home->index();
        }
    }
    return "Sorry Email or Id is invalid";
}
public function logout(){
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['name']);
    $this->login();
}

}