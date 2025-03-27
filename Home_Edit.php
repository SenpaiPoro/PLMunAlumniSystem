<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                   Edit Alumni Data
                    <a href="Home_Settings.php" class="btn btn-danger float-end"> Back </a> 
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
     
    <input type="hidden" name="page" value="Home_Settings" required>                
        
    <div class="mb-3">
        <label> Colleges</label>
        <select id="Department-type" name="colleges" class="form-control" rows="2" required>
            <option value="<?= $user['data']['colleges'];?>"><?= $user['data']['colleges'];?></option>
            <option value="CITCS">CITCS</option>
            <option value="CCJ">CCJ</option>
            <option value="CAS">CAS</option>
            <option value="CBA">CBA</option>
            <option value="CTE">CTE</option>
        </select>
    </div>
                    <div class="mb-3">
                        <label> Program</label>
                <select id="program-option" name="program" class="form-control">
                     <option value="<?= $user['data']['program'];?>"><?= $user['data']['program'];?></option>
                </select>
                    </div>
                    <div class="mb-3">

                    <div class="input-group">
                    <span class="input-group-text"><b>FULL NAME: </b></h></span>
                    <input type="text" aria-label="First name" name="firstname" class="form-control" placeholder="First Name" value="<?= $user['data']['FirstName'] ;?>">
                    <input type="text" aria-label="last name" name="lastname" class="form-control" placeholder="Last Name" value="<?= $user['data']['LastName'] ;?>">
                    <input type="text" aria-label="middle name"name="middlename"  class="form-control" placeholder="Middle Name" value="<?= $user['data']['MiddleName'] ;?>">
                    </div>
                    <br>
                    <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect01" ><b>Sex:</b></label>
                    <select class="form-select " id="inputGroupSelect01" name="sex" value="<?= $user['data']['MiddleName'] ;?>">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    </div>
                        
                    <label>Year Graduated: </label>
                        <input type="number" name="graduatedyear" value="<?= $user['data']['graduated'] ;?>"  class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
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
<script src="assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>