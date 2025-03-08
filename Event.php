<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                  Event Lists
                    <a href="Add-Eve nt.php" class="btn btn-primary float-end"> Add Event </a>
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
                        <th>Event Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                 <?php
                    
                    $events = GetData('event');
                    if(mysqli_num_rows($events) > 0 )
                    {
                        foreach($events as $eventList)
                        {
                            ?>
                              <tr>
                                <td> <?= $eventList['name']; ?></td>
                                <td> <?= $eventList['date']; ?></td>
                                <td> <?= $eventList['description']; ?></td>
                                <td> <?= $eventList['image']; ?></td>
                                <td> 
                                <a href="Event-Edit.php?id=<?= $eventList['id']; ?> "class="btn btn-success btn-sm">Edit</a>
                                <a href="Event-Delete.php?id=<?= $eventList['id'];?> "class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this event? ');">Delete</a>
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