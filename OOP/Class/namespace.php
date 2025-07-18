<?php

namespace Data\User{
    
    class Register{
        function create(){
        echo "ini adalah function untuk create data user" . PHP_EOL;
        }
    }

    class Login{
        public string $username; //this is a visibility public
        public string $password;

        function login(string $username, string $password){
            echo "Anda telah berhasil mengeksekusi function login, {$this->username}";
        }
    }
    
} //create namespace to different class register from user and admin

namespace Data\Admin{
    class Register{
        function create(){
            echo "ini adalah function untuk create data admin" . PHP_EOL;
        }
    } //this class is overriding from parent user
    


} //create namespace to different class register from user and admin