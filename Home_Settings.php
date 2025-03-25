<?php include ('include/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                  Alumni Lists
                    <a href="Home_Management.php" class="btn btn-primary float-end"> Add Almuni </a>
                </h4> 
            </div>
        </div>
        <div class="card-body">
        <?= alertMessage(); ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Colleges</th>
                        <th>Program</th>
                        <th>Username</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 <?php
                    $users = GetData('users');
                    if(mysqli_num_rows($users) > 0 )
                    {
                        foreach($users as $usersList)
                        {
                            ?>
                              <tr>
                                <td> <?= $usersList['colleges']; ?></td>
                                <td> <?= $usersList['program']; ?></td>
                                <td> <?= $usersList['username']; ?></td>
                                <td> <?= $usersList['tempcode']; ?></td>
                                <td> 
                                <a href="Home_Edit.php?id=<?= $usersList['id'];?>&level=superadmin" class="btn btn-success btn-sm">Edit</a>
                                <a href="user-delete.php?id=<?= $usersList['id'];?>&level=superadmin" class="btn btn-danger btn-sm" onclick="return confirm('Are you Sure that you want to delete this User?');">Delete</a>
                                <a href="View-pfp.php?id=<?= $usersList['id'];?>" class="btn btn-info btn-sm">View</a>
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