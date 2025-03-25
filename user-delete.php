<?php

require '../config/func.php';

$parameter_result = checkId('id');
$level = isset($_GET['level']) ? $_GET['level'] : null;

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
         
            $query = 
            "DELETE FROM workrecord WHERE tempcode = $personalId";
             $result = mysqli_query($conn, $query);
            if($result){
                if($level === 'superadmin'){
                redirect('Home_Settings.php', 'Successfully Deleted');
                }else{
                    redirect('../dean/alumnilist.php', 'Successfully Deleted');
                }
         }else{
                    redirect('Home_Settings.php', 'Something Went Wrong!');
                }
    }
    else
    {
    redirect('Home_Settings.php', $parameter_result);
    }
}
}
?>