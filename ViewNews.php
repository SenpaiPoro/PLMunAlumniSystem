<?php include ('include/header.php'); ?>
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
            </div>
            <hr Style="margin: 1px auto; width: 97%;
                           border: 2.5px solid black;">
                           <br><br>
            <form class="d-flex" method="POST">
            <div class="input-group input-group-sm mb-3">
                <input class="form-control" type="hidden" name="id" value="<?= $row['id'];?>">
                <input class="form-control" type="search" name="comment" placeholder="Comment" aria-label="Comment">
            </div>
                 <button class="btn btn-info btn-lg" type="submit">Send</button>
            </form>
</div>

<?php include('include/footer.php');?>