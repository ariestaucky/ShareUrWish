<?php echo $header ?>

<main class="container mt-5 pt-2">
	<?php $this->load->view('_parts/news.php') ?>
	<?php $this->load->view('_parts/list.php') ?>
</main>

<?php $this->load->view("_parts/footer.php") ?>
<?php echo $footer ?>