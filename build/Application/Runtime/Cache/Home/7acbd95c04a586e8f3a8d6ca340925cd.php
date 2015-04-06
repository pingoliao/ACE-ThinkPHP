<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta charset="utf-8" />
	<title><?php echo ($_info["title"]); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="/admin/build/Public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/admin/build/Public/font-awesome/4.2.0/css/font-awesome.min.css" />

	<!-- page specific plugin styles -->

	<!-- text fonts -->
	<link rel="stylesheet" href="/admin/build/Public/fonts/fonts.googleapis.com.css" />

	<!-- ace styles -->
	<link rel="stylesheet" href="/admin/build/Public/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/admin/build/Public/css/ace-part2.min.css" class="ace-main-stylesheet" />
	<![endif]-->

	<!--[if lte IE 9]>
	<link rel="stylesheet" href="/admin/build/Public/css/ace-ie.min.css" />
	<![endif]-->

	<!-- inline styles related to this page -->
	<!-- ace settings handler -->
	<script src="/admin/build/Public/js/ace-extra.min.js"></script>

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
	<!--[if lte IE 8]>
	<script src="/admin/build/Public/js/html5shiv.min.js"></script>
	<script src="/admin/build/Public/js/respond.min.js"></script>
	<![endif]--> 
<link rel="stylesheet" href="/admin/build/Public/css/select2.min.css" />
<style>
	/* change navbar dropdown click to hover */
	ul.ace-nav li:hover>ul.dropdown-menu{display:block;}
</style>
</head>
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-container" id="navbar-container">
			<div class="navbar-header pull-left">
				<a href="index.html" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Ace Admin
					</small>
				</a>
			</div>

			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="grey">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-tasks"></i>
							<!-- <span class="badge badge-grey">4</span> -->
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-check"></i>
								4 Tasks to complete
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:65%" class="progress-bar"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Hardware Upgrade</span>
												<span class="pull-right">35%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:35%" class="progress-bar progress-bar-danger"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Unit Testing</span>
												<span class="pull-right">15%</span>
											</div>

											<div class="progress progress-mini">
												<div style="width:15%" class="progress-bar progress-bar-warning"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Bug Fixes</span>
												<span class="pull-right">90%</span>
											</div>

											<div class="progress progress-mini progress-striped active">
												<div style="width:90%" class="progress-bar progress-bar-success"></div>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See tasks with details
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="purple">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-bell icon-animated-bell"></i>
							<span class="badge badge-important">8</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-exclamation-triangle"></i>
								8 Notifications
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
													New Comments
												</span>
												<span class="pull-right badge badge-info">+12</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="btn btn-xs btn-primary fa fa-user"></i>
											Bob just signed up as an editor ...
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
													New Orders
												</span>
												<span class="pull-right badge badge-success">+8</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
													Followers
												</span>
												<span class="pull-right badge badge-info">+11</span>
											</div>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="#">
									See all notifications
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="green">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
							<span class="badge badge-success">5</span>
						</a>

						<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
							<li class="dropdown-header">
								<i class="ace-icon fa fa-envelope-o"></i>
								5 Messages
							</li>

							<li class="dropdown-content">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Alex:</span>
													Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>a moment ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Susan:</span>
													Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>20 minutes ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Bob:</span>
													Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>3:15 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Kate:</span>
													Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>1:33 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a href="#" class="clearfix">
											<img src="/admin/build/Public/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Fred:</span>
													Vestibulum id penatibus et auctor  ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>10:09 am</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>

							<li class="dropdown-footer">
								<a href="inbox.html">
									See all messages
									<i class="ace-icon fa fa-arrow-right"></i>
								</a>
							</li>
						</ul>
					</li>

					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="/admin/build/Public/avatars/user.jpg" alt="Jason's Photo" />
							<span class="user-info">
								<small>Welcome,</small>
								Jason
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
								<a href="#">
									<i class="ace-icon fa fa-cog"></i>
									Settings
								</a>
							</li>

							<li>
								<a href="profile.html">
									<i class="ace-icon fa fa-user"></i>
									Profile
								</a>
							</li>

							<li class="divider"></li>

							<li>
								<a href="#">
									<i class="ace-icon fa fa-power-off"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div> 
<div class="main-container" id="main-container">
	<div id="sidebar" class="sidebar responsive sidebar-fixed compact" data-sidebar="true" data-sidebar-hover="true" >
		<!-- /.sidebar-shortcuts -->
		<ul class="nav nav-list">
			<li class="active hover">
				<a href="<?php echo U('Index/index');?>">
					<i class="menu-icon fa fa-tachometer"></i>
					<span class="menu-text"> Dashboard </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-desktop"></i>
					<span class="menu-text">
						UI &amp; Elements
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu" style="">
					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>
							Layouts
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="top-menu.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Top Menu
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="two-menu-1.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Two Menus 1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="two-menu-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Two Menus 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-1.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Default Mobile Menu
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-2.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Mobile Menu 2
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="mobile-menu-3.html">
									<i class="menu-icon fa fa-caret-right"></i>
									Mobile Menu 3
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

					<li class="hover">
						<a href="typography.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Typography
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/elements');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Elements
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/buttons');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Buttons &amp; Icons
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="content-slider.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Content Sliders
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/treeview');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Treeview
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/jquery-ui');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							jQuery UI
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="nestable-list.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Nestable Lists
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-caret-right"></i>

							Three Level Menu
							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="hover">
								<a href="#">
									<i class="menu-icon fa fa-leaf green"></i>
									Item #1
								</a>

								<b class="arrow"></b>
							</li>

							<li class="hover">
								<a href="#" class="dropdown-toggle">
									<i class="menu-icon fa fa-pencil orange"></i>

									4th level
									<b class="arrow fa fa-angle-down"></b>
								</a>

								<b class="arrow"></b>

								<ul class="submenu">
									<li class="hover">
										<a href="#">
											<i class="menu-icon fa fa-plus purple"></i>
											Add Product
										</a>

										<b class="arrow"></b>
									</li>

									<li class="hover">
										<a href="#">
											<i class="menu-icon fa fa-eye pink"></i>
											View Products
										</a>

										<b class="arrow"></b>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-list"></i>
					<span class="menu-text"> Tables </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="<?php echo U('Index/tables');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Simple &amp; Dynamic
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="jqgrid.html">
							<i class="menu-icon fa fa-caret-right"></i>
							jqGrid plugin
						</a>

						<b class="arrow"></b>
					</li>
				</ul><div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: 1px; left: 288px;"><div class="scroll-bar" style="top: 0px;"></div></div>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-pencil-square-o"></i>
					<span class="menu-text"> Forms </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="form-elements.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Form Elements
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="form-elements-2.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Form Elements 2
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="form-wizard.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Wizard &amp; Validation
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="wysiwyg.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Wysiwyg &amp; Markdown
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="<?php echo U('Index/dropzone');?>">
							<i class="menu-icon fa fa-caret-right"></i>
							Dropzone File Upload
						</a>

						<b class="arrow"></b>
					</li>
				</ul><div class="scroll-track scroll-detached no-track scroll-thin scroll-margin scroll-visible" style="display: none; top: -101px; left: 288px;"><div class="scroll-bar" style="top: 0px;"></div></div>
			</li>

			<li class="hover">
				<a href="widgets.html">
					<i class="menu-icon fa fa-list-alt"></i>
					<span class="menu-text"> Widgets </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="calendar.html">
					<i class="menu-icon fa fa-calendar"></i>

					<span class="menu-text">
						Calendar

						<span class="badge badge-transparent tooltip-error" title="" data-original-title="2 Important Events">
							<i class="ace-icon fa fa-exclamation-triangle red bigger-130"></i>
						</span>
					</span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="gallery.html">
					<i class="menu-icon fa fa-picture-o"></i>
					<span class="menu-text"> Gallery </span>
				</a>

				<b class="arrow"></b>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-tag"></i>
					<span class="menu-text"> More Pages </span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="profile.html">
							<i class="menu-icon fa fa-caret-right"></i>
							User Profile
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="inbox.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Inbox
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="pricing.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Pricing Tables
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="invoice.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Invoice
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="timeline.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Timeline
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="email-confirmation.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Email Templates
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="login.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Login &amp; Register
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>

			<li class="hover">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-file-o"></i>

					<span class="menu-text">
						Other Pages

						<span class="badge badge-primary">5</span>
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu ace-scroll scroll-disabled" style="">
					<li class="hover">
						<a href="faq.html">
							<i class="menu-icon fa fa-caret-right"></i>
							FAQ
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="error-404.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Error 404
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="error-500.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Error 500
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="grid.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Grid
						</a>

						<b class="arrow"></b>
					</li>

					<li class="hover">
						<a href="blank.html">
							<i class="menu-icon fa fa-caret-right"></i>
							Blank Page
						</a>

						<b class="arrow"></b>
					</li>
				</ul>
			</li>
		</ul>
	</div>

<div class="main-content">
	<div class="main-content-inner">
		<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
					<a href="#">Home</a>
				</li>

				<li>
					<a href="#">Forms</a>
				</li>
				<li class="active">Wizard &amp; Validation</li>
			</ul><!-- /.breadcrumb -->

			<div class="nav-search" id="nav-search">
				<form class="form-search">
					<span class="input-icon">
						<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
						<i class="ace-icon fa fa-search nav-search-icon"></i>
					</span>
				</form>
			</div><!-- /.nav-search -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
					Form Wizard
					<small>
						<i class="ace-icon fa fa-angle-double-right"></i>
						and Validation
					</small>
				</h1>
			</div><!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<h4 class="lighter">
						<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
						<a href="#modal-wizard" data-toggle="modal" class="pink"> Wizard Inside a Modal Box </a>
					</h4>

					<div class="hr hr-18 hr-double dotted"></div>

					<div class="widget-box">
						<div class="widget-header widget-header-blue widget-header-flat">
							<h4 class="widget-title lighter">New Item Wizard</h4>

							<div class="widget-toolbar">
								<label>
									<small class="green">
										<b>Validation</b>
									</small>

									<input id="skip-validation" type="checkbox" class="ace ace-switch ace-switch-4" />
									<span class="lbl middle"></span>
								</label>
							</div>
						</div>

						<div class="widget-body">
							<div class="widget-main">
								<div id="fuelux-wizard-container">
									<div>
										<ul class="steps">
											<li data-step="1" class="active">
												<span class="step">1</span>
												<span class="title">Validation states</span>
											</li>

											<li data-step="2">
												<span class="step">2</span>
												<span class="title">Alerts</span>
											</li>

											<li data-step="3">
												<span class="step">3</span>
												<span class="title">Payment Info</span>
											</li>

											<li data-step="4">
												<span class="step">4</span>
												<span class="title">Other Info</span>
											</li>
										</ul>
									</div>

									<hr />

									<div class="step-content pos-rel">
										<div class="step-pane active" data-step="1">
											<h3 class="lighter block green">Enter the following information</h3>

											<form class="form-horizontal" id="sample-form">
												<div class="form-group has-warning">
													<label for="inputWarning" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with warning</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="text" id="inputWarning" class="width-100" />
															<i class="ace-icon fa fa-leaf"></i>
														</span>
													</div>
													<div class="help-block col-xs-12 col-sm-reset inline"> Warning tip help! </div>
												</div>

												<div class="form-group has-error">
													<label for="inputError" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Input with error</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="text" id="inputError" class="width-100" />
															<i class="ace-icon fa fa-times-circle"></i>
														</span>
													</div>
													<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
												</div>

												<div class="form-group has-success">
													<label for="inputSuccess" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with success</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="text" id="inputSuccess" class="width-100" />
															<i class="ace-icon fa fa-check-circle"></i>
														</span>
													</div>
													<div class="help-block col-xs-12 col-sm-reset inline"> Success tip help! </div>
												</div>

												<div class="form-group has-info">
													<label for="inputInfo" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with info</label>

													<div class="col-xs-12 col-sm-5">
														<span class="block input-icon input-icon-right">
															<input type="text" id="inputInfo" class="width-100" />
															<i class="ace-icon fa fa-info-circle"></i>
														</span>
													</div>
													<div class="help-block col-xs-12 col-sm-reset inline"> Info tip help! </div>
												</div>

												<div class="form-group">
													<label for="inputError2" class="col-xs-12 col-sm-3 control-label no-padding-right">Input with error</label>

													<div class="col-xs-12 col-sm-5">
														<span class="input-icon block">
															<input type="text" id="inputError2" class="width-100" />
															<i class="ace-icon fa fa-times-circle red"></i>
														</span>
													</div>
													<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
												</div>
											</form>

											<form class="form-horizontal hide" id="validation-form" method="get">
												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="email">Email Address:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="email" name="email" id="email" class="col-xs-12 col-sm-6" />
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password">Password:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="password" name="password" id="password" class="col-xs-12 col-sm-4" />
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="password2">Confirm Password:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="password" name="password2" id="password2" class="col-xs-12 col-sm-4" />
														</div>
													</div>
												</div>

												<div class="hr hr-dotted"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="name">Company Name:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="text" id="name" name="name" class="col-xs-12 col-sm-5" />
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="phone">Phone Number:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="input-group">
															<span class="input-group-addon">
																<i class="ace-icon fa fa-phone"></i>
															</span>

															<input type="tel" id="phone" name="phone" />
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="url">Company URL:</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="url" id="url" name="url" class="col-xs-12 col-sm-8" />
														</div>
													</div>
												</div>

												<div class="hr hr-dotted"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

													<div class="col-xs-12 col-sm-9">
														<div>
															<label>
																<input name="subscription" value="1" type="checkbox" class="ace" />
																<span class="lbl"> Latest news and announcements</span>
															</label>
														</div>

														<div>
															<label>
																<input name="subscription" value="2" type="checkbox" class="ace" />
																<span class="lbl"> Product offers and discounts</span>
															</label>
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

													<div class="col-xs-12 col-sm-9">
														<div>
															<label class="line-height-1 blue">
																<input name="gender" value="1" type="radio" class="ace" />
																<span class="lbl"> Male</span>
															</label>
														</div>

														<div>
															<label class="line-height-1 blue">
																<input name="gender" value="2" type="radio" class="ace" />
																<span class="lbl"> Female</span>
															</label>
														</div>
													</div>
												</div>

												<div class="hr hr-dotted"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="state">State</label>

													<div class="col-xs-12 col-sm-9">
														<select id="state" name="state" class="select2" data-placeholder="Click to Choose...">
															<option value="">&nbsp;</option>
															<option value="AL">Alabama</option>
															<option value="AK">Alaska</option>
															<option value="AZ">Arizona</option>
															<option value="AR">Arkansas</option>
															<option value="CA">California</option>
															<option value="CO">Colorado</option>
															<option value="CT">Connecticut</option>
															<option value="DE">Delaware</option>
															<option value="FL">Florida</option>
															<option value="GA">Georgia</option>
															<option value="HI">Hawaii</option>
															<option value="ID">Idaho</option>
															<option value="IL">Illinois</option>
															<option value="IN">Indiana</option>
															<option value="IA">Iowa</option>
															<option value="KS">Kansas</option>
															<option value="KY">Kentucky</option>
															<option value="LA">Louisiana</option>
															<option value="ME">Maine</option>
															<option value="MD">Maryland</option>
															<option value="MA">Massachusetts</option>
															<option value="MI">Michigan</option>
															<option value="MN">Minnesota</option>
															<option value="MS">Mississippi</option>
															<option value="MO">Missouri</option>
															<option value="MT">Montana</option>
															<option value="NE">Nebraska</option>
															<option value="NV">Nevada</option>
															<option value="NH">New Hampshire</option>
															<option value="NJ">New Jersey</option>
															<option value="NM">New Mexico</option>
															<option value="NY">New York</option>
															<option value="NC">North Carolina</option>
															<option value="ND">North Dakota</option>
															<option value="OH">Ohio</option>
															<option value="OK">Oklahoma</option>
															<option value="OR">Oregon</option>
															<option value="PA">Pennsylvania</option>
															<option value="RI">Rhode Island</option>
															<option value="SC">South Carolina</option>
															<option value="SD">South Dakota</option>
															<option value="TN">Tennessee</option>
															<option value="TX">Texas</option>
															<option value="UT">Utah</option>
															<option value="VT">Vermont</option>
															<option value="VA">Virginia</option>
															<option value="WA">Washington</option>
															<option value="WV">West Virginia</option>
															<option value="WI">Wisconsin</option>
															<option value="WY">Wyoming</option>
														</select>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="platform">Platform</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<select class="input-medium" id="platform" name="platform">
																<option value="">------------------</option>
																<option value="linux">Linux</option>
																<option value="windows">Windows</option>
																<option value="mac">Mac OS</option>
																<option value="ios">iOS</option>
																<option value="android">Android</option>
															</select>
														</div>
													</div>
												</div>

												<div class="space-2"></div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="comment">Comment</label>

													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<textarea class="input-xlarge" name="comment" id="comment"></textarea>
														</div>
													</div>
												</div>

												<div class="space-8"></div>

												<div class="form-group">
													<div class="col-xs-12 col-sm-4 col-sm-offset-3">
														<label>
															<input name="agree" id="agree" type="checkbox" class="ace" />
															<span class="lbl"> I accept the policy</span>
														</label>
													</div>
												</div>
											</form>
										</div>

										<div class="step-pane" data-step="2">
											<div>
												<div class="alert alert-success">
													<button type="button" class="close" data-dismiss="alert">
														<i class="ace-icon fa fa-times"></i>
													</button>

													<strong>
														<i class="ace-icon fa fa-check"></i>
														Well done!
													</strong>

													You successfully read this important alert message.
													<br />
												</div>

												<div class="alert alert-danger">
													<button type="button" class="close" data-dismiss="alert">
														<i class="ace-icon fa fa-times"></i>
													</button>

													<strong>
														<i class="ace-icon fa fa-times"></i>
														Oh snap!
													</strong>

													Change a few things up and try submitting again.
													<br />
												</div>

												<div class="alert alert-warning">
													<button type="button" class="close" data-dismiss="alert">
														<i class="ace-icon fa fa-times"></i>
													</button>
													<strong>Warning!</strong>

													Best check yo self, you're not looking too good.
													<br />
												</div>

												<div class="alert alert-info">
													<button type="button" class="close" data-dismiss="alert">
														<i class="ace-icon fa fa-times"></i>
													</button>
													<strong>Heads up!</strong>

													This alert needs your attention, but it's not super important.
													<br />
												</div>
											</div>
										</div>

										<div class="step-pane" data-step="3">
											<div class="center">
												<h3 class="blue lighter">This is step 3</h3>
											</div>
										</div>

										<div class="step-pane" data-step="4">
											<div class="center">
												<h3 class="green">Congrats!</h3>
												Your product is ready to ship! Click finish to continue!
											</div>
										</div>
									</div>
								</div>

								<hr />
								<div class="wizard-actions">
									<button class="btn btn-prev">
										<i class="ace-icon fa fa-arrow-left"></i>
										Prev
									</button>

									<button class="btn btn-success btn-next" data-last="Finish">
										Next
										<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
									</button>
								</div>
							</div><!-- /.widget-main -->
						</div><!-- /.widget-body -->
					</div>

					<div id="modal-wizard" class="modal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div id="modal-wizard-container">
									<div class="modal-header">
										<ul class="steps">
											<li data-step="1" class="active">
												<span class="step">1</span>
												<span class="title">Validation states</span>
											</li>

											<li data-step="2">
												<span class="step">2</span>
												<span class="title">Alerts</span>
											</li>

											<li data-step="3">
												<span class="step">3</span>
												<span class="title">Payment Info</span>
											</li>

											<li data-step="4">
												<span class="step">4</span>
												<span class="title">Other Info</span>
											</li>
										</ul>
									</div>

									<div class="modal-body step-content">
										<div class="step-pane active" data-step="1">
											<div class="center">
												<h4 class="blue">Step 1</h4>
											</div>
										</div>

										<div class="step-pane" data-step="2">
											<div class="center">
												<h4 class="blue">Step 2</h4>
											</div>
										</div>

										<div class="step-pane" data-step="3">
											<div class="center">
												<h4 class="blue">Step 3</h4>
											</div>
										</div>

										<div class="step-pane" data-step="4">
											<div class="center">
												<h4 class="blue">Step 4</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="modal-footer wizard-actions">
									<button class="btn btn-sm btn-prev">
										<i class="ace-icon fa fa-arrow-left"></i>
										Prev
									</button>

									<button class="btn btn-success btn-sm btn-next" data-last="Finish">
										Next
										<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
									</button>

									<button class="btn btn-danger btn-sm pull-left" data-dismiss="modal">
										<i class="ace-icon fa fa-times"></i>
										Cancel
									</button>
								</div>
							</div>
						</div>
					</div><!-- PAGE CONTENT ENDS -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.page-content -->
	</div>
</div><!-- /.main-content -->

		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Ace</span>
						Application &copy; 2013-2014
					</span>

					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>
			</div>
		</div>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-250"></i>
		</a>
	</div><!-- /.main-container -->
	
	<!-- basic scripts -->
	<!--[if !IE]> -->
	<script src="/admin/build/Public/js/jquery.2.1.1.min.js"></script>
	<!-- <![endif]-->

	<!--[if IE]>
	<script src="/admin/build/Public/js/jquery.1.11.1.min.js"></script>
	<![endif]-->

	<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='/admin/build/Public/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>
	<script src="/admin/build/Public/js/bootstrap.min.js"></script>

	<!-- ace scripts -->
	<script src="/admin/build/Public/js/ace-elements.min.js"></script>
	<script src="/admin/build/Public/js/ace.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('[data-rel=tooltip]').tooltip({container:'body'});
			$('[data-rel=popover]').popover({container:'body'});}

			//TODO: iframe载入页面处理
		);
	</script>
<script src="/admin/build/Public/js/fuelux.wizard.min.js"></script>
<script src="/admin/build/Public/js/jquery.validate.min.js"></script>
<script src="/admin/build/Public/js/additional-methods.min.js"></script>
<script src="/admin/build/Public/js/bootbox.min.js"></script>
<script src="/admin/build/Public/js/jquery.maskedinput.min.js"></script>
<script src="/admin/build/Public/js/select2.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
	
		$('[data-rel=tooltip]').tooltip();
	
		$(".select2").css('width','200px').select2({allowClear:true})
		.on('change', function(){
			$(this).closest('form').validate().element($(this));
		}); 
	
	
		var $validation = false;
		$('#fuelux-wizard-container')
		.ace_wizard({
			//step: 2 //optional argument. wizard will jump to step "2" at first
			//buttons: '.wizard-actions:eq(0)'
		})
		.on('actionclicked.fu.wizard' , function(e, info){
			if(info.step == 1 && $validation) {
				if(!$('#validation-form').valid()) e.preventDefault();
			}
		})
		.on('finished.fu.wizard', function(e) {
			bootbox.dialog({
				message: "Thank you! Your information was successfully saved!", 
				buttons: {
					"success" : {
						"label" : "OK",
						"className" : "btn-sm btn-primary"
					}
				}
			});
		}).on('stepclick.fu.wizard', function(e){
			//e.preventDefault();//this will prevent clicking and selecting steps
		});
	
	
		//jump to a step
		/**
		var wizard = $('#fuelux-wizard-container').data('fu.wizard')
		wizard.currentStep = 3;
		wizard.setState();
		*/
	
		//determine selected step
		//wizard.selectedItem().step
	
	
	
		//hide or show the other form which requires validation
		//this is for demo only, you usullay want just one form in your application
		$('#skip-validation').removeAttr('checked').on('click', function(){
			$validation = this.checked;
			if(this.checked) {
				$('#sample-form').hide();
				$('#validation-form').removeClass('hide');
			}
			else {
				$('#validation-form').addClass('hide');
				$('#sample-form').show();
			}
		})
	
	
	
		//documentation : http://docs.jquery.com/Plugins/Validation/validate
	
	
		$.mask.definitions['~']='[+-]';
		$('#phone').mask('(999) 999-9999');
	
		jQuery.validator.addMethod("phone", function (value, element) {
			return this.optional(element) || /^\(\d{3}\) \d{3}\-\d{4}( x\d{1,6})?$/.test(value);
		}, "Enter a valid phone number.");
	
		$('#validation-form').validate({
			errorElement: 'div',
			errorClass: 'help-block',
			focusInvalid: false,
			ignore: "",
			rules: {
				email: {
					required: true,
					email:true
				},
				password: {
					required: true,
					minlength: 5
				},
				password2: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				name: {
					required: true
				},
				phone: {
					required: true,
					phone: 'required'
				},
				url: {
					required: true,
					url: true
				},
				comment: {
					required: true
				},
				state: {
					required: true
				},
				platform: {
					required: true
				},
				subscription: {
					required: true
				},
				gender: {
					required: true,
				},
				agree: {
					required: true,
				}
			},
	
			messages: {
				email: {
					required: "Please provide a valid email.",
					email: "Please provide a valid email."
				},
				password: {
					required: "Please specify a password.",
					minlength: "Please specify a secure password."
				},
				state: "Please choose state",
				subscription: "Please choose at least one option",
				gender: "Please choose gender",
				agree: "Please accept our policy"
			},
	
	
			highlight: function (e) {
				$(e).closest('.form-group').removeClass('has-info').addClass('has-error');
			},
	
			success: function (e) {
				$(e).closest('.form-group').removeClass('has-error');//.addClass('has-info');
				$(e).remove();
			},
	
			errorPlacement: function (error, element) {
				if(element.is('input[type=checkbox]') || element.is('input[type=radio]')) {
					var controls = element.closest('div[class*="col-"]');
					if(controls.find(':checkbox,:radio').length > 1) controls.append(error);
					else error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
				}
				else if(element.is('.select2')) {
					error.insertAfter(element.siblings('[class*="select2-container"]:eq(0)'));
				}
				else if(element.is('.chosen-select')) {
					error.insertAfter(element.siblings('[class*="chosen-container"]:eq(0)'));
				}
				else error.insertAfter(element.parent());
			},
	
			submitHandler: function (form) {
			},
			invalidHandler: function (form) {
			}
		});
	
		
		
		
		$('#modal-wizard-container').ace_wizard();
		$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
		
		
		/**
		$('#date').datepicker({autoclose:true}).on('changeDate', function(ev) {
			$(this).closest('form').validate().element($(this));
		});
		
		$('#mychosen').chosen().on('change', function(ev) {
			$(this).closest('form').validate().element($(this));
		});
		*/
		
		
		$(document).one('ajaxloadstart.page', function(e) {
			//in ajax mode, remove remaining elements before leaving page
			$('[class*=select2]').remove();
		});
	})
</script>
</body>
</html>