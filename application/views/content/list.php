<div id="content-wrapper">

<div class="container-fluid">
    <h2>People wishes</h2>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('warning')): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $this->session->flashdata('warning'); ?>
        </div>
    <?php endif; ?>
                
    <!-- DataTables -->
    <div class="card card-custom mb-3">
        <div class="card-header">
            <a href="<?php echo site_url('share/add') ?>"><i class="fas fa-plus"></i> Add Your Wish</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-custom">
                        <tr>
                            <th>Name</th>
                            <th>Wish</th>
                            <th>Description</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody class="text-custom">
                        <?php foreach ($wish as $product): ?>
                        <tr>
                            <td width="150">
                                <?php echo $product->name ?>
                            </td>
                            <td>
                                <?php echo $product->wish ?>
                            </td>
                      
                            <td class="small">
                                <?php echo substr($product->description, 0, 120) ?>...
                            </td>
                            
                            <!-- <td width="250">

                            </td> -->
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
