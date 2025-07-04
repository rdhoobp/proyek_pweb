<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="<?= base_url("asset/img/logos/icon-title.png") ?>" type="image/x-icon">
	<title>E-Lib</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/css/normalize.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/icomoon/icomoon.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/css/vendor.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/style.css") ?>">

	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/font-awesome/css/all.css") ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url("asset/frontend/font-awesome/css/all.min.css") ?>">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">
		<header id="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<div class="main-logo">
							<a href="<?= base_url('/') ?>">
								<img src="<?= base_url("asset/img/logos/icon-light-header.png") ?>" alt="logo">
							</a>
						</div>
					</div>

					<div class="col-md-10">
						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="<?= base_url("/"); ?>">Home</a></li>
									<li class="menu-item active"><a href="<?= base_url("/book/list") ?>">Library</a></li>
									<li class="menu-item">
										<div class="action-menu">
											<div class="search-bar">
												<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
													<i class="icon icon-search"></i>
												</a>
												<form action="<?= base_url('book/cari/') ?>" role="search" class="search-box" method="get">
													<input class="search-field text search-input" placeholder="Search"
														type="search" name="judul">
												</form>
											</div>
										</div>
									</li>
									<li class="menu-item has-sub" style="margin-left: 10px; margin-right: 20%;">
										<div class="action-menu">
											<div class="user-sub-menu">
												<a href="#" class="search-button search-toggle">
													<i class="icon icon-user"></i>
												</a>
											</div>
										</div>
										<ul>
											<?php
											if (session('id') != null) { ?>
												<?php if (session('role') == 1) { ?>
													<li><a href="<?= base_url('user/add') ?>">Add Users</a></li>
												<?php } ?>
												<li><a href="<?= base_url('user/settings/' . session('id')) ?>">Settings</a></li>
												<li><a href="<?= base_url('forgot-password') ?>">Change Password</a></li>
												<li><a href="<?= base_url('logout') ?>">Log Out</a></li>
											<?php } else { ?>
												<li><a href="<?= base_url('login') ?>">Login</a></li>
												<li><a href="<?= base_url('register') ?>">Register</a></li>
											<?php }
											?>
										</ul>
									</li>
								</ul>
								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>

	</div><!--header-wrap-->