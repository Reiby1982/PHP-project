<?php
include "reader_writer.php";
include "validator.php";

//'user_data=' + JSON.stringify(user_data);

function reg_user() {
    
    $post = $_POST;
    $user_data = check_array_data(json_decode($post['user_data']));
    
    if (!$user_data or (addDataToFile($user_data, '../files/users_lst.txt') === false)) {
        echo 'not add';
        return;
    }
    echo 'user add';
    return;
}

reg_user();