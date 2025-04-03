<?php include ('include/header.php'); ?>

<?php $selectedCollege = isset($_GET['college']) ? validate($_GET['college']) : null; ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                  Alumni Lists
                    <a href="Home_Management.php" class="btn btn-primary float-end"> Add Alumni </a>
                </h4> 
            </div>
        </div>

        <div class="card-body">
            <!-- Filter Form -->
            <form class="d-flex" role="search" method="GET">
    <input class="form-control me-2" type="search" name="search" placeholder="Search Username" aria-label="Search" value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>
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

            <!-- Table -->
            <?= alertMessage(); ?>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Program</th>
                        <th>Username</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $searchQuery = ""; // Initialize search query
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $searchQuery = trim($_GET['search']);
                        $users = GetCollegeData("users", $selectedCollege, $searchQuery);
                    } else {
                        $users = GetCollegeData("users", $selectedCollege);
                    }

                    if (mysqli_num_rows($users) > 0) {
                        foreach ($users as $usersList) {
                ?>
                              <tr> 
                                    <td> <?= htmlspecialchars($usersList['level']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['program']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['username']); ?></td>
                                    <td> <?= htmlspecialchars($usersList['tempcode']); ?></td>
                                <td> 
                                <a href="Home_Edit.php?id=<?= $usersList['id'];?>&level=superadmin" class="btn btn-success btn-sm">Edit</a>
                                <a href="user-delete.php?id=<?= $usersList['id'];?>&level=superadmin" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
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
                                <td colspan="5">
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