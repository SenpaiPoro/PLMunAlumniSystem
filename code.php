<?php
require '../config/func.php';


// //////////////////
// Home Management Add Data
////////////////////
if(isset($_POST['save']))
{
    $name = validate($_POST['name']);
    $description = validate($_POST['description']);

    if ($name != '' && $description != '')
    {
        $query = "INSERT INTO home (name,description,image) 
        VALUES ('$name','$description','$filename')";   
        
        
        $result = mysqli_query($conn, $query);
        
        if($result)
        {
            redirect('Home_Settings.php', 'Event Successfully Added');
        }
        else
        {
            redirect('Home_Management.php', 'Something went wrong.');
        }
    }
    else
    {
        redirect('Home_Management.php','Please Fill Up all the input Fields');
    }   
}

// //////////////////
// Home Management Upadate Data
////////////////////

if(isset($_POST['update']))
{
    $name = validate($_POST['name']);
    $description = validate($_POST['description']);
    $image = validate($_POST['image']);
    $EventId = validate($_POST['Id']);

    $user = getByid('home', $EventId);

    if($user['status'] != 200)
    {
        redirect('Home_Edit.php?id='.$EventId.'', 'ID not found.');
    }
    
    if ($name != '' && $description != '')
    {
        $query = "UPDATE home SET
        name = '$name',
        description = '$description',
        image = '$image'
        WHERE id = '$EventId' "; 
        
        $result = mysqli_query($conn, $query);
        
        if($result)
        {
            redirect('Home_Settings.php', 'Event Successfully Updated');
        }
        else
        {
            redirect('Home_Edit.php', 'Something went wrong.');
        }
    }
    else
    {
        redirect('Home_Edit.php','Please Fill Up all the input Fields');
    }   
}


// ////////////////////////////////////////////////
// Event Management Add Data
////////////////////////////////////////////////////
if(isset($_POST['saveEvent']))
{
    $name = validate($_POST['name']);
    $day = validate($_POST['day']);
    $description = validate($_POST['description']);
    

    if ($name != "" && $description != "" && $day != "")
    {
        $query = "INSERT INTO event (name,date,description,image) 
        VALUES ('$name','$day','$description','$filename')";   
        
        $result = mysqli_query($conn, $query);
        
        if($result)
        {
            redirect('Event.php', 'Event Successfully Added');
        }
        else
        {
            redirect('Add-Event.php', 'Something went wrong.');
        }
    }
    else
    {
        redirect('Add-Event.php','Please Fill Up all the input Fields');
    }   
}

// Event Management Upadte Data

if(isset($_POST['updateEvent']))
{  
    $EventId = validate($_POST['Id']);
    $name = validate($_POST['name']);
    $day = validate($_POST['date']);
    $description = validate($_POST['description']);
    $image = validate($_POST['image']);

    $user = getByid('event', $EventId);
    if($user['status'] != 200)
    {
        redirect('Event-Edit.php?id='.$EventId.'', 'ID not found.');
    }

if($name !='' && $day !='' && $description !='')
{  
    $queryEvent = "UPDATE event SET
    name = '$name',
    date = '$day', 
    description = '$description' 
    WHERE id = '$EventId' ";

    $result = mysqli_query($conn, $queryEvent);

    if($result)
    { 
        redirect('Event.php', 'Event Successfully Upadate!');
    }
    else
    {
        redirect('Event-Edit.php', 'Something Wend Wrong');
    }
}
else
{
    redirect('Event-Edit.php', 'Fill up All The Form');
}

}


?>