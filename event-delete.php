<?php

require '../config/func.php';

$parameter_result = checkId('id');
$level = isset($_GET['level']) ? $_GET['level'] : null;

if(is_numeric($parameter_result))
{
    $usersId =  validate($parameter_result);
        $usersDeleted = deletetable('posts',$usersId);
        if($usersDeleted)
        {
                if($level === 'superadmin'){
                redirect('Event.php', 'Successfully Deleted');
                }else{
                    redirect('../dean/alumnilist.php', 'Successfully Deleted');
                }
         }
    {
    redirect('Home_Settings.php', $parameter_result);
    }
}
?>