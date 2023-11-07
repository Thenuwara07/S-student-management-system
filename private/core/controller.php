<?php

    // main controller class
    class Controller{
        public function view($view){
              if(file_exists("../private/views/"."$view".".php")){
                require ("../private/views/"."$view".".php");
              }
              else{
                require ("../private/views/404.php");
              }
        }
    }