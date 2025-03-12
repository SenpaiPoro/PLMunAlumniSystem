<?php include ('include/header.php'); ?>
<?php
                    $paramResult = checkId('id');
                    $tempcode = "SELECT tempcode FROM users WHERE id= '$paramResult' LIMIT 1";
                    $results = $conn->query($tempcode);

                    $code = $results->fetch_assoc();
                        $tempcodeValue = $code['tempcode']; // Extract the tempcode value from the array

                        $sql = "SELECT * 
                                FROM users
                                INNER JOIN personal ON users.tempcode = personal.tempcode
                                INNER JOIN contacts ON users.tempcode = contacts.contactId
                                WHERE users.tempcode = '$tempcodeValue' ";
                        $result = mysqli_query($conn, $sql);
                        $row = $result->fetch_assoc();
                       ?>
                       <div class="card">
            <div class="card-header">
                <h3>
                   Alumni Profile
                    <a href="Home_Settings.php" class="btn btn-danger float-end"> Back </a> 
                </h3>
            </div>
<div class="main-content">
            <div class="content">
                <div class="prof">
            <div class="profile">
            <div class="profile-pic-container">
                    <img <?php 
                        if ($row['photos'] != NULL) {
                              echo 'src="../../users/Style/profile/'.$row['photos'].'"';
                        } else {
                               echo 'src="../../users/Style/Photos/profile.jpg"';
                        }?>
                    alt="Profile Picture" class="profile-pic" id="profileImage">
                    </label>
                    <input value="submit" type="file" id="uploadProfilePic" accept="image/*" style="display: none;">
                </div>
                <h1><?php echo $row['FirstName'] ;?> <?php echo $row['LastName'] ;?></h1>
            </div>
        </aside>
        <main class="content">
            <section class="profile-section">
                <h2>Details</h2>
                <br>
                <div class="form-group">
                    <label><b>Lives in:</b> <p> </p></label><br>
                    <label><b>Working Status:</b> <p> </p></label><br>
                    <label><b>Education:</b> <?php echo $row['program'] ;?></label><br>
                    <label><b>Year Graduated:</b> </label><br>
                </div>
                <div class="account-info">
                <h2>Contact</h2>
                <br>
                <div class="form-group">
                    <label><b>Phone No:</b> <?php echo $row['phone'] ;?></label><br>
                    <label><b>Email:</b> <?php echo $row['username'] ;?></label><br>
                    <?php 
                        if ($row['email'] != NULL) { ?>
                            <label><b>Email:</b> <?php echo $row['email'] ;?></label><br>
                        <?php } else {
                            //no display
                        }
                        ?>
                    <label><b>Landline No:</b> <?php echo $row['landline'] ;?></label><br>
                </div>
                <div class="account-info">
                <h2>Personal Information</h2>
                <br>
                <div class="form-group">
                    <label><b>Age:</b> <?php echo $row['age'] ;?></label><br>
                    <label><b>Sex:</b> <?php echo $row['sex'] ;?></label><br>
                    <label><b>Relationship:</b><?php echo $row['RelationStatus'] ;?></label><br>
                </div>
                </div>
                <br>
</section>
        </main>
    </div>
    </div>
<?php include ('include/footer.php'); ?>