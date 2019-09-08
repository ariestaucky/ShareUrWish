<?php echo $header ?>

	<main class="container mt-5 pt-2">
        <?php $this->load->view('content/list.php') ?>
	</main>

    <div class="fixed-bottom">
        <?php $this->load->view("_parts/footer.php") ?>
    </div>

<?php echo $footer ?>