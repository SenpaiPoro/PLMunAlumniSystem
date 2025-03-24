<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                   Edit Event Management
                    <a href="Event.php" class="btn btn-danger float-end"> Back </a> 
                </h4>
            </div>
            <div class="card-body">
                <form action="../config/code.php" method="POST">

                <?php
                    $paramResult = checkId('id');
                        if(!is_numeric($paramResult)){
                            echo '<h5>'.$paramResult.'</h5>';
                        return false;
                     }

                     $user = getByid('users', checkId('id'));
                     if($user['status'] == 200)
                     {
                ?>
                    <input type="hidden" name="Id" value="<?= $user['data']['id'] ;?>" required>
                    
                    <div class="mb-3">
                        <label> Event Name</label>
                        <input type="text" name="name" value="<?= $user['data']['name'] ;?>" required class="form-control">
                    </div>

                    <div class="mb-3">
                        <label> Date</label>
                        <input name="date" value="<?= $user['data']['date'] ;?>"  required class="form-control"></input>
                    </div>

                    <div class="mb-3">
                        <label> Description</label>
                        <input name="description" value="<?= $user['data']['description'] ;?>"  required class="form-control" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label>Upload Event Image</label>
                        <input type="file" name="image" value="<?= $user['data']['image'] ;?>"  class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="updateEvent" class="btn btn-primary">Update</button>
                    </div>
                <?php

                     }
                     else
                     {
                        echo '<h5>'.$user['message'].'</h5>';
                     }

                ?>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include ('include/footer.php'); ?>