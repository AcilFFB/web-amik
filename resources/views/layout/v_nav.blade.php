<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
  <li class="{{ request()->is('dosen') ? 'active' : '' }}"><a href="/dosen"><i class="fa fa-book"></i> <span>Dosen</span></a></li>
  <li class="{{ request()->is('mahasiswa') ? 'active' : '' }}"><a href="/mahasiswa"><i class="fa fa-book"></i> <span>Mahasiswa</span></a></li>
</ul>