<?php include ('include/header.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>
                    Event Management
                    <a href="Event.php" class="btn btn-danger float-end"> Back </a> 
                </h4>
            </div>
            <div class="card-body">
                    
                <?= alertMessage(); ?>

                <form action="code.php" method="POST" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label> Event Name</label>
                        <input type="text" name="name" require class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Event Date</label>
                        <input type="text" name="day" require class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label> Description</label>
                        <textarea name="description" require class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label>Upload Event Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="mb-3 text-end">
                        <button type="submit" name="saveEvent" class="btn btn-primary">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include ('include/footer.php'); ?>