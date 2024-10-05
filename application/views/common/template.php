<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/head') ?>
</head>
<body>

<?php 
 $this->load->view('common/header');
 $this->load->view($main_content);
 $this->load->view('common/footer');
 ?>
</body>
</html>