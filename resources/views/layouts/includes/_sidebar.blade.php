<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
		<a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-laugh-wink"></i>
			</div>
		<div class="sidebar-brand-text mx-3">Dashboard</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Menu -->

	<li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
		<a class="nav-link" href="{{ url('dashboard') }}">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>	
	<li class="nav-item {{ Request::is('siswa') ? 'active' : '' }}">
		<a class="nav-link" href="{{ url('siswa') }}">
			<i class="fas fa-fw fa-table"></i>
			<span>Data Employee</span>
		</a>
	</li>


	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>