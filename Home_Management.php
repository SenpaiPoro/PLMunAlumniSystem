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
        </select>
            </div>
            <div class="mb-3">
                        <label>Graduated Year</label>
                        <select id="graduated-type" name="graduated" class="form-control" style="width: 10rem;">
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                        </select>
                        <label>Code</label>
                        <input type="number" name="tempcode" placeholder="Enter Code" class="form-control">
                        <!------------------------------------------------------------------------------------>
                        <!------this is only to identy if the form is sumbited by the super admin------------->
                        <input type="hidden" name="superadmin" value="1">
                        <!------------------------------------------------------------------------------------>
                        <!------------------------------------------------------------------------------------>
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