<?php

require '../config/func.php';

$parameter_result = checkId('id');
if(is_numeric($parameter_result))
{
     $eventId =  validate($parameter_result);
     $event = getByid('event', $eventId);

     if($event['status'] == 200)
     {
        
        $eventDeleted = deleteQuery('event',$eventId);

        if($eventDeleted)
        {
            redirect('Event.php', 'Successfully Deleted');
        }
        else
        {
            redirect('Event.php', 'Something went Wrong');
        }
     }
     else
     {
        redirect('Event.php', $user['message']);
     }
}
else
{
    redirect('Event.php', $parameter_result);
}

?>