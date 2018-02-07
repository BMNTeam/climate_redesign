<?php

if( ! isset( $db )){
    $is_test_server = true;

    if ($is_test_server){

        // Initiate PDO library with options
        $db = new PDO('mysql:host=localhost;dbname=c0678_sniish;charset=utf8', 'root', 'root');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    }else{
        /**
         *
         * Server sql connection
         *
         */

        try {
            $db = new PDO ('mysql:host=localhost; dbname=climate.mshsk.ru; charset=utf8', 'user_sniish', 'B7h6H7f1');

        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }


        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->exec("SET NAMES 'utf8'");
    }




}


