<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                   <b> Add Alumni </b>
                    <a href="Home_Settings.php" class="btn btn-danger float-end"> Back </a> 
                </h4>
            </div>
            <div class="card-body">             
                <?= alertMessage(); ?>
                <form action="../config/code.php" method="POST" enctype="multipart/form-data">
            <div class="mb-5">
                <label>Level</label>
        <select name="level" class="form-control" rows="2">
            <option value="student">Student</option>
            <option value="dean">Dean</option>
        </select>
        <label>Department</label>
        <select id="Department-type" name="colleges" class="form-control" rows="2">
            <option value="">Select</option>
            <option value="CITCS">CITCS</option>
            <option value="CCJ">CCJ</option>
            <option value="CAS">CAS</option>
            <option value="CBA">CBA</option>
            <option value="CTE">CTE</option>
        </select>
            </div>
            <div class="mb-5">
                <label> Program </label>
        <select id="program-option" name="program" class="form-control">
            <option value="">Select</option>
        </select>
            </div>
            <div class="mb-3">
                        <label>Graduated Year</label>
                        <input type="number" id="graduated" name="graduated" required class="form-control">
                        <label>Code</label>
                        <input type="number" name="tempcode" placeholder="Enter Code" class="form-control">
                    </div>
                    <!--------------------------------->
                    <!-- Personal Information fields -->
                    <!--------------------------------->
                <h5>
                    Personal Information
                </h5>
                <div class="mb-3">
                </div>
                    <label>First Name</label>
                    <input type="text" name="firstname" class="form-control">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control">
                    <label>Midle Name</label>
                    <input type="text" name="middlename" class="form-control">
                    <label>Day of Birth</label>
                    <input type="date" id="bday" name="bday" required class="form-control">
        <label>Sex</label>
        <select id="Department-type" name="sex" class="form-control" rows="2">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
            </div>
            </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="save" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/script.js"></script>
<?php include ('include/footer.php'); ?>