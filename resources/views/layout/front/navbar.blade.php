<!-- Page container -->
<div class="page-container">

<!-- Page Sidebar -->
	<div class="page-sidebar">

		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="{{URL::route('index')}}"><img src="images/logo.png" alt="AMS" title="AMS"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->

		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			<li class="has-sub active "><a href="#"><i class="icon-home"></i><span class="title">Home</span></a>
				<ul class="nav">
					<li class="active"><a href="{{URL::route('index')}}"><span class="title">Dashboard</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-book"></i><span class="title">Account</span></a>
				<ul class="nav collapse">
					<li><a href="{{URL::route('getAccount')}}"><span class="title">Add Account</span></a></li>
					<li><a href="{{URL::route('allAccounts')}}"><span class="title">All Accounts</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-plus-circled"></i><span class="title">Income</span></a>
				<ul class="nav collapse">
					<li><a href="{{URL::route('getIncome')}}"><span class="title">Add Income</span></a></li>
					<li><a href="{{URL::route('allIncomes')}}"><span class="title">All Incomes</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-minus-circled"></i><span class="title">Expenses</span></a>
				<ul class="nav collapse">
					<li><a href="#"><span class="title">Add an Expense</span></a></li>
					<li><a href="#"><span class="title">All Expenses</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-layout"></i><span class="title">Stock Management</span></a>
				<ul class="nav collapse">
					<li><a href="#"><span class="title">Assets</span></a></li>
					<li><a href="#"><span class="title">Liabilities</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-book-open"></i><span class="title">Reports</span></a>
				<ul class="nav collapse">
					<li><a href="#"><span class="title">Income &amp; Expenditure Reports</span></a></li>
					<li><a href="#"><span class="title">Balance Sheet</span></a></li>
				</ul>
			</li>
			<li class="has-sub"><a href="#"><i class="icon-users"></i><span class="title">User Management</span></a>
				<ul class="nav collapse">
					<li><a href="#"><span class="title">Add User</span></a></li>
					<li><a href="#"><span class="title">Remove User</span></a></li>
				</ul>
			</li>
		</ul>
		<!-- /main navigation -->
  </div>
  <!-- /page sidebar -->

<!-- Main container -->
<div class="main-container gray-bg">

	<!-- Main header -->
	<div class="main-header row">
	  <div class="col-sm-6 col-xs-7">

		<!-- User info -->
		<ul class="user-info pull-left">
		  <li class="profile-info dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false"> <img width="44" class="img-circle avatar" alt="" src="images/man-3.jpg">{{Auth::user()->name}} &#9660;</a>

			<!-- User action menu -->
			<ul class="dropdown-menu">

			  <li><a href="#/"><i class="icon-user"></i>My profile</a></li>
			  <li><a href="#/"><i class="icon-mail"></i>Messages</a></li>
			  <li class="divider"></li>
			  <li><a href="#"><i class="icon-cog"></i>Account settings</a></li>
			  <li><a href="{{URL::route('getLogout')}}"><i class="icon-switch"></i>Logout</a></li>
			</ul>
			<!-- /user action menu -->

		  </li>
		</ul>
		<!-- /user info -->

	  </div>

	  <div class="col-sm-6 col-xs-5">
		<div class="pull-right">
			<!-- User alerts -->
			<ul class="user-info pull-left">

			  <!-- Notifications -->
			  <li class="notifications dropdown">
				<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-attention"></i><span class="badge badge-info">6</span></a>
				<ul class="dropdown-menu pull-right">
					<li class="first">
						<div class="small"><a class="pull-right danger" href="#">Mark all Read</a> You have <strong>3</strong> new notifications.</div>
					</li>
					<li>
						<ul class="dropdown-list">
							<li class="unread notification-success"><a href="#"><i class="icon-user-add pull-right"></i><span class="block-line strong">New user registered</span><span class="block-line small">30 seconds ago</span></a></li>
							<li class="unread notification-secondary"><a href="#"><i class="icon-heart pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="unread notification-primary"><a href="#"><i class="icon-user pull-right"></i><span class="block-line strong">Privacy settings have been changed</span><span class="block-line small">2 hours ago</span></a></li>
							<li class="notification-danger"><a href="#"><i class="icon-cancel-circled pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="notification-info"><a href="#"><i class="icon-info pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
							<li class="notification-warning"><a href="#"><i class="icon-rss pull-right"></i><span class="block-line strong">Someone special liked this</span><span class="block-line small">60 seconds ago</span></a></li>
						</ul>
					</li>
					<li class="external-last"> <a href="#" class="danger">View all notifications</a> </li>
				</ul>
			  </li>
			  <!-- /notifications -->

			  <!-- Messages -->
			  <li class="notifications dropdown">
				<a data-close-others="true" data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-mail"></i><span class="badge badge-secondary">12</span></a>
				<ul class="dropdown-menu pull-right">
					<li class="first">
						<div class="dropdown-content-header"><i class="fa fa-pencil-square-o pull-right"></i> Messages</div>
					</li>
					<li>
						<ul class="media-list">
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>
									<span class="text-muted">Your product sounds interesting I would love to check this ne...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/john-smith.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">John Smith</span>
										<span class="media-annotation pull-right">12:30</span>
									</a>
									<span class="text-muted">Thank you for posting such a wonderful content. The writing was outstanding...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/stella-johnson.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Stella Johnson</span>
										<span class="media-annotation pull-right">2 days ago</span>
									</a>
									<span class="text-muted">Thank you for trusting us to be your source for top quality sporting goods...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/alex-dolgove.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Alex Dolgove</span>
										<span class="media-annotation pull-right">10:45</span>
									</a>
									<span class="text-muted">After our Friday meeting I was thinking about our business relationship and how fortunate...</span>
								</div>
							</li>
							<li class="media">
								<div class="media-left"><img alt="" class="img-circle img-sm" src="images/domnic-brown.png"></div>
								<div class="media-body">
									<a class="media-heading" href="#">
										<span class="text-semibold">Domnic Brown</span>
										<span class="media-annotation pull-right">4:00</span>
									</a>
									<span class="text-muted">I would like to take this opportunity to thank you for your cooperation in recently completing...</span>
								</div>
							</li>
						</ul>
					</li>
					<li class="external-last"> <a class="danger" href="#">All Messages</a> </li>
				</ul>
			  </li>
			  <!-- /messages -->

			</ul>
			<!-- /user alerts -->

		</div>
	  </div>
	</div>
	<!-- /main header -->
