<?php include ('include/header.php'); ?>
<link  href="../../users/Style/collabStyle.css" rel="stylesheet"/>

<?php
                    $paramResult = checkId('id');
                    
                        $sql = "SELECT * 
                                FROM posts
                                WHERE id = $paramResult ";
                        $result = mysqli_query($conn, $sql);
                        $row = $result->fetch_assoc();
                       ?>
                       <div class="main-content">
            <div class="card" style="width: 90%; margin:2.5rem;">
            <div class="badge text-info text-wrap" style="width: 12rem;"><?= $row['time']; ?></div>
                <img src="../../users/Style/events/<?= $row['photos']; ?>" class="card-img-top">
                <div class="card-body">
                <h4 class="card-title"><?= $row['name']; ?></h4>
                <p class="card-text"><?= $row['description']; ?></p>
            <hr Style="margin: 1px auto; width: 97%;
                           border: 2.5px solid black;">
</div>
                           <br><br>
                           <div class="comment-container">

                    <?php
                        $comments = GetComment('comment',$paramResult);
                        if(mysqli_num_rows($comments) > 0 )
                    {
                        foreach($comments as $commentList)
                        {
                            ?>
        <div class="comment">
            <div class="comment-header">
                <div class="user-avatar"> <img <?php 
                        if ($commentList['photo'] != NULL) {
                              echo 'src="../../users/Style/profile/'.$commentList['photo'].'"';
                        } else {
                               echo 'src="../../users/Style/Photos/profile.jpg"';
                        }?> ></div>
                <span class="user-name"><?=  $commentList['name'];?></span>
            </div>
            <div class="comment-body">
            <?=  $commentList['comment'];?>          
          </div>
        </div>
        <?php
                        }
                    }
        ?>
        <!-- You can duplicate this block for more comments -->
    </div>




<br><br>
                           <form action="../config/code.php" method="POST" enctype="multipart/form-data" class="d-flex">
                           <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="hidden" name="level" value="SuperAdmin">
                <input class="form-control" type="hidden" name="name" value="Admin">
                <input class="form-control" type="hidden" name="photo">
                <input class="form-control" type="hidden" name="id" value="<?= $row['id'];?>">
                <input required class="form-control" type="text" name="comment_text" placeholder="Comment"style="padding: 1rem;">
            </div>
                 <button class="btn btn-info btn-lg" type="submit" name="comment">Send</button>
            </form>
</div>
<?php include('include/footer.php');?>