<?php echo $header ?>
    
	<main class="container mt-5 my-4 py-4">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <form action="<?php echo site_url('share/save') ?>" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                            type="text" name="name" placeholder="Your name" />
                            <div class="invalid-feedback">
                                <?php echo form_error('name') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price">Wish*</label>
                            <input class="form-control <?php echo form_error('wish') ? 'is-invalid':'' ?>"
                            type="text" name="wish" placeholder="Your wish" />
                            <div class="invalid-feedback">
                                <?php echo form_error('wish') ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name">Description*</label>
                            <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                            name="description" placeholder="Description..."></textarea>
                            <div class="invalid-feedback">
                                <?php echo form_error('description') ?>
                            </div>
                        </div>

                        <input class="btn btn-success" type="submit" name="btn" value="Save" />
                    </form>
                </div>
                <div class="card-footer small text-muted">
                    * required fields
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
	</main>
    
<?php echo $footer ?>