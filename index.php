<!DOCTYPE html>
<html>
<head>
	<?php include('includes/head.php'); ?>
</head>

<body>
	<?php include('includes/header.php'); ?>

	<main class="home">
		<div class="content-container">

			<ul class="home-nav">
				<li>
					<button type="button" class="generic-btn">Add New Contact</button>
				</li>
				<li>-or-</li>
				<li>
					<button type="button" class="generic-btn">View All Contacts</button>
				</li>
			</ul>

			<div class="vip-contacts">
				<h2>VIP Contacts</h2>
				<div class="empty">You have no VIP contacts yet.</div>
				<ul class="contact-list">
					<li>
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
						<div class="edit">
							<button type="button" class="generic-btn">Edit</button>
						</div>
					</li>
					<li>
						<div class="icon">
							<i class="fa fa-user"></i>
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
						<div class="edit">
							<button type="button" class="generic-btn">Edit</button>
						</div>
					</li>
					<li>
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
						<div class="edit">
							<button type="button" class="generic-btn">Edit</button>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</main>

	<?php include('includes/footer.php'); ?>
	
</body>
</html>