<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                  Event Lists
                    <a href="Add-Event.php" class="btn btn-primary float-end"> Add Event </a>
                </h4>
            </div>
        </div>
        <div class="card-body">

        <?= alertMessage(); ?>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Event Name</th>
                        <th>Date</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                 <?php
                    
                    $events = GetData('posts');
                    if(mysqli_num_rows($events) > 0 )
                    {
                        foreach($events as $eventList)
                        {
                            ?>
                              <tr>
                                <td> <?= $eventList['name']; ?></td>
                                <td> <?= $eventList['time']; ?></td>
                                <td> <?= $eventList['description']; ?></td>
                                <td> 
                                <a href="Event-Edit.php?id=<?= $eventList['id']; ?> "class="btn btn-success btn-sm">Edit</a>
                                <a href="event-delete.php?id=<?= $eventList['id'];?>&level=superadmin" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this event? ');">Delete</a>
                                </td>
                    </tr>
                            <?php
                        }
                    }
                    else
                    {
                        ?>
                            <tr>
                                <td colspan="4">
                                    No Record!
                                </td>
                            </tr>
                        <?php
                    }
                  ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

<?php include ('include/footer.php'); ?>