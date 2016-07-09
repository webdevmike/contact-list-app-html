<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php'); ?>
</head>

<body>
	<?php include('includes/header.php'); ?>

	<main class="single-contact edit">
		<div class="content-container">

			<h2>Edit Contact</h2>

			<div class="contact-info">
				<form>
					<div class="row">
						<label>Name:</label>
						<input type="text" name="name">
					</div>
					<div class="row">
						<label>Address:</label>
						<input type="text" name="address1">
					</div>
					<div class="row">
						<input type="text" name="address2">
					</div>
					<div class="row">
						<label>Email:</label>
						<input type="email" name="email">
					</div>
					<div class="row">
						<label>Phone:</label>
						<input type="text" name="phone">
					</div>
					<div class="row vip">
						<label>
							<input type="checkbox" name="vip">
							<span>This is a VIP contact</span>
						</label>
					</div>
				</form>

				<div class="actions">
					<button type="button" class="generic-btn">Update</button>
					<div class="delete"><a>Delete</a></div>
				</div>
			</div>

			<div class="contact-preview">
				<div class="icon">
					<i class="fa fa-user"></i>
					<span class="vip">Vip</span>
				</div>
				<div class="address">
					<ul>
						<li>Mike Bostone</li>
						<li>1802 Dublin Trail #37</li>
						<li>Neenah, WI 54956</li>
						<li>mikebostone@gmail.com</li>
						<li>952-449-1771</li>
					</ul>
				</div>
			</div>

		</div>
	</main>

	<?php include('includes/footer.php'); ?>
	
</body>
</html>