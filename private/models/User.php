<?php

//user model

    class User extends Model{
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
    }