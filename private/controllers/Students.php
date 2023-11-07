<?php

    // home controller
    class Students extends Controller{

        function index($id = null){
            echo "I'm "."$id";
        }
    }