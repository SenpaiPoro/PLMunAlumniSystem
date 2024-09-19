<?php

require '../config/func.php';

$parameter_result = checkId('id');
if(is_numeric($parameter_result))
{
     $eventId =  validate($parameter_result);
     $event = getByid('home', $eventId);

     if($event['status'] == 200)
     {
        
        $eventDeleted = deleteQuery('home',$eventId);

        if($eventDeleted)
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