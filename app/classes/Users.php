<?php
namespace App\classes;
class Users
{
    public function getAllUsers(){
        return[
            0=>[
                'id'=>1,
                'name'=>'hasib',
                'email'=>'hasib@email.com',
                'password'=>'123456',
            ],
            1=>[
                'id'=>2,
                'name'=>'fahim',
                'email'=>'fahim@email.com',
                'password'=>'123456',
            ],
        ];
    }
}