<?php

//school model

    class School extends Model{

        protected $allowedColumns = [
            'school',
            'date'
        ];

        protected $beforeInsert = [
            'make_school_id',
            'make_usr_id'
        ];

        public function validate($DATA){
            $this->errors = array();

            //chech for school
            if(empty($DATA['school'])){
                $this->errors['school']="Please enter school and try again";
            }
            elseif(!preg_match('/^[a-zA-Z]+$/',$DATA['school'])){
                $this->errors['school']="Only letters allowed in school";
            }

            if (count($this->errors)==0){
                return true;
            }

            return false;
        }

        public function make_user_id($data){
            
            $data['user_id'] = $this->random_string(60);
            return $data;
        }

        public function make_school_id($data){
            
            if(isset($_SESSION['USER']->school_id)){
                $data['school_id'] = $_SESSION['USER']->school_id;
            }
            return $data;
        }

        

    }