<?php

//user model

    class User extends Model{

        protected $allowedColumns = [
            'firstname',
            'lastname',
            'email',
            'password',
            'gender',
            'rank',
            'date'
        ];

        protected $beforeInsert = [
            'make_user_id',
            'make_school_id',
            'hash_password'
        ];

        public function validate($DATA){
            $this->errors = array();

            //chech for firstname
            if(empty($DATA['firstname'])){
                $this->errors['firstname']="Please enter first name and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]+$/',$DATA['firstname'])){
                $this->errors['firstname']="Only letters allowed in first name";
            }

            //chech for lastname
            if(empty($DATA['lastname'])){
                $this->errors['lastname']="Please enter last name and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]+$/',$DATA['lastname'])){
                $this->errors['lastname']="Only letters allowed in last name";
            }

            //chech for email
            if(empty($DATA['email'])){
                $this->errors['email']="Please enter email and try again";
            }
            elseif(!filter_var($DATA['email'],FILTER_VALIDATE_EMAIL)){
                $this->errors['email']="Email is not valid";
            }

            // check if email exists
            elseif($this->where('email',$DATA['email'])){
                $this->errors['email']="That email is already use.";
            }

            //chech for gender
            $genders = ['female','male'];
            if(empty($DATA['gender'])){
                $this->errors['gender']="Please choose gender and try again";
            }
            elseif(!in_array($DATA['gender'], $genders)){
                $this->errors['gender']="Gender is not valid";
            }

            //chech for rank
            $genders = ['student','reception','lecture','admin','super_admin'];
            if(empty($DATA['rank'])){
                $this->errors['rank']="Please choose rank and try again";
            }
            elseif(!in_array($DATA['rank'], $genders)){
                $this->errors['rank']="Rank is not valid";
            }

            //chech for password
            if(empty($DATA['password']) && empty($DATA['password2'])){
                $this->errors['password']="Please enter password and try again";
            }
            elseif($DATA['password'] != $DATA['password2']){
                $this->errors['password']="The password do not match";
            }
            elseif(strlen($DATA['password'])<=7){
                $this->errors['password']="Password must be at least 8 characters long";
            }

            if (count($this->errors)==0){
                return true;
            }

            return false;
        }

        private function random_string($length){
            $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n');
            $text = "";


            return $text;
        }

        public function make_user_id($data){
            
            $data['user_id'] = random_string(60);
            return $data;
        }

        public function make_school_id($data){
            
            if(isset($_SESSION['USER']->school_id)){
                $data['school_id'] = $_SESSION['USER']->school_id;
            }
            return $data;
        }

        public function hash_password($data){
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            return $data;
        }

        

    }