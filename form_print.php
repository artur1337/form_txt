<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['tel']) || strlen($_POST['name'])<5) {
        $error = "Bad entry douchebag";
        if(strlen($_POST['name'])>=1){
            $error = "Name to short";
        }
    }
    else {
        $success = "Added Successfully";
        $file = 'formos.txt';
        $previousData = file_get_contents($file);
        $postdata = $_POST['name'] . " " . $_POST['email'] . " " . $_POST['surname'] ." " . $_POST['tel'] . " " . $_POST['email'] . " " . $_POST['address'] . " \n";
        file_put_contents($file, $previousData . $postdata);
    }
}