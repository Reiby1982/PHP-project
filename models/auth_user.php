<?php
session_start();
include "reader_writer.php";
include "validator.php";

function getAllUsers() {
    $users = getDataFromFile("../files/users_lst.txt");
    return unserialize($users);
}

function authUser() {
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['auth_data'], true));
    $all_users = getAllUsers();

    foreach ($all_users as $value) {
        if ($value['login'] == $user_data['login']) {
            if ($value['pwd'] == $user_data['pwd']) {
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $user_data['login'];

                return true;
            }
            echo 'pwd is wrong';
            return false;
        }
    }
    echo 'user not found';
    return false;
}
if (isset($_POST['auth_data'])) {
    authUser();
}

if ($_GET['logout']) {
    session_unset();
    header("Location:/");
}

