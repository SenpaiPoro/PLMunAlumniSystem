<?php include ('./include/header.php'); ?>
<?php $selectedCollege = isset($_GET['college']) ? validate($_GET['college']) : null; ?>


<div class="card-body align-middle">
            <!-- Filter Form -->
            <form method="GET" action="">
                <label for="college">Filter by College:</label>
                <select name="college" id="college" class="form-select" onchange="this.form.submit()">
                    <option value="">Show All</option>
                    <option value="CITCS" <?= $selectedCollege == 'CITCS' ? 'selected' : '' ?>>CITCS</option>
                    <option value="CCJ" <?= $selectedCollege == 'CCJ' ? 'selected' : '' ?>>CCJ</option>
                    <option value="CAS" <?= $selectedCollege == 'CAS' ? 'selected' : '' ?>>CAS</option>
                    <option value="CBA" <?= $selectedCollege == 'CBA' ? 'selected' : '' ?>>CBA</option>
                    <option value="CTE" <?= $selectedCollege == 'CTE' ? 'selected' : '' ?>>CTE</option>
                </select>
            </form>

<?php
                    $posts = GetData('posts', $selectedCollege );
                    if(mysqli_num_rows($posts) > 0 )
                    {
                        foreach($posts as $postsList)
                        {
                            ?>
<div class="card" style="width: 80%;">
  <img src="../../users/Style/events/<?= $postsList['photos']; ?>" class="card-img-top">
  <div class="card-body">
  <div class="badge text-info text-wrap" style="width: 12rem;"><?= $postsList['time']; ?></div>
    <h5 class="card-title"><?= $postsList['name']; ?></h5>
    <p class="card-text"><?= $postsList['description']; ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<br>
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
</div>

<?php include ('./include/footer.php'); ?>