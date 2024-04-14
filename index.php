<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style1.css">

	<title>Dashboard</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx'></i>
			<span class="text">Project Time</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Tableau de bord</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-folder' ></i>
					<span class="text">Projets</span>
				</a>
			</li>
			<li>
				<a href="users.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Message</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Paramètres</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Sortir du module</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
				<div id="notificationModal" class="modal">
					<div class="modal-content">
						<span class="close">&times;</span>
						<h2>Notifications</h2>
						<ul id="notificationList">
							<!-- Liste des notifications dynamiquement générée -->
						</ul>
					</div>
				</div>				
			</a>
			<a href="#" class="profile">
				<img src="people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Tableau de bord</h1>
				</div>
				<a href="#" class="btn-plus">
					<i class='bx bx-plus'></i>
					<span class="text">Ajouter un projet</span>
				</a>
			</div>
			<div class="projects-section">
				<div class="projects-section-header">
					<p>Projets</p>
					<div class="time" id="date"></div>
				</div>
				<div class="projects-section-line">
					<div class="projects-status">
						<div class="item-status">
							<span class="status-number">6</span>
							<span class="status-type">En cours</span>
						</div>
						<div class="item-status">
							<span class="status-number">4</span>
							<span class="status-type">Validés</span>
						</div>
						<div class="item-status">
							<span class="status-number">10</span>
							<span class="status-type">Tous les projets</span>
						</div>
					</div>
				</div>
			</div>
			<div class="project-boxes jsGridView">
				<div class="project-box-wrapper">
					<div class="project-box" style="background-color: #fee4cb;">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Web Designing</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 60%; background-color: #ff942e"></span>
							</div>
							<p class="box-progress-percentage">60%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
								<img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
							</div>
							<div class="days-left" style="color: #ff942e;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>
				<div class="project-box-wrapper">
					<div class="project-box" style="background-color: #e9e7fd;">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Testing</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 50%; background-color: #4f3ff0"></span>
							</div>
							<p class="box-progress-percentage">50%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
							</div>
							<div class="days-left" style="color: #4f3ff0;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>
				<div class="project-box-wrapper">
					<div class="project-box">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Svg Animations</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 80%; background-color: #096c86"></span>
							</div>
							<p class="box-progress-percentage">80%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
								<img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
							</div>
							<div class="days-left" style="color: #096c86;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>
				<div class="project-box-wrapper">
					<div class="project-box" style="background-color: #c8f7dc;">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Data Analysis</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 60%; background-color: #34c471"></span>
							</div>
							<p class="box-progress-percentage">60%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
							</div>
							<div class="days-left" style="color: #34c471;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>
				<div class="project-box-wrapper">
					<div class="project-box" style="background-color: #c8f7dc;">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Data Analysis</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 60%; background-color: #34c471"></span>
							</div>
							<p class="box-progress-percentage">60%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG1hbnxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="participant">
							</div>
							<div class="days-left" style="color: #34c471;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>
				<div class="project-box-wrapper">
					<div class="project-box" style="background-color: #d5deff;">
						<div class="project-box-header">
							<span>December 10, 2020</span>
						</div>
						<div class="project-box-content-header">
							<p class="box-content-header">Web Designing</p>
							<p class="box-content-subheader">Prototyping</p>
						</div>
						<div class="box-progress-wrapper">
							<p class="box-progress-header">Progress</p>
							<div class="box-progress-bar">
								<span class="box-progress" style="width: 40%; background-color: #4067f9"></span>
							</div>
							<p class="box-progress-percentage">40%</p>
						</div>
						<div class="project-box-footer">
							<div class="participants">
								<img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="participant">
								<img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="participant">
							</div>
							<div class="days-left" style="color: #4067f9;">
								2 Days Left
							</div>
						</div>
					</div>
				</div>																				
			</div>						
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="script.js"></script>
</body>
</html>