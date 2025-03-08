<?php

require '../config/func.php';

$parameter_result = checkId('id');
if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
    $users = getByid('users', $usersId);
    $personalId = $users['data']['tempcode'];

     if($users['status'] == 200)
     {
        $usersDeleted = deleteQuery('users',$usersId, $personalId);

        if($usersDeleted)
        {
            redirect('Home_Settings.php', 'Successfully Deleted');
        }
        else
        {
            redirect('Home_Settings.php', 'Something went Wrong');
        }
     }
     else
     {
        redirect('Home_Settings.php', $user['message']);
     }
}
else
{
    redirect('Home_Settings.php', $parameter_result);
}

?>