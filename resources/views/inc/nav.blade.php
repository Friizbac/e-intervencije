<ul class="sidebar-menu" data-widget="tree">
    <li class="header">GLAVNA NAVIGACIJA</li>
    <li class="{{ Request::is('/') ? 'active' : '' }}">

        <a href="/"><i class="fas fa-wrench"></i> <span>Kontrolna ploča</span>
        </a>
    </li>
    <li class="treeview {{ Request::is('interventions*') ? 'active' : '' }}">
        <a href="#">
            <i class="fas fa-exclamation-circle"></i>
            <span>Intervencije</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('interventions/create') ? 'active' : '' }}"><a href="/interventions/create">Dodaj intervenciju</a></li>
            <li class="{{ Request::is('interventions') ? 'active' : '' }}"><a href="/interventions">Lista intervencija</a></li>
        </ul>
    </li>
    <li class="treeview {{ Request::is('members*') ? 'active' : '' }}">
        <a href="#">
            <i class="fas fa-users"></i>
            <span>Operativni članovi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('members/create') ? 'active' : '' }}"><a href="/members/create">Dodaj člana</a></li>
            <li class="{{ Request::is('members') ? 'active' : '' }}"><a href="/members">Lista članova</a></li>
        </ul>
    </li>
    <li class="treeview {{ Request::is('notifications*') ? 'active' : '' }}">
        <a href="#">
            <i class="far fa-newspaper"></i>
            <span>Obavijesti</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('notifications/create') ? 'active' : '' }}"><a href="/notifications/create">Dodaj obavijest</a></li>
            <li class="{{ Request::is('notifications') ? 'active' : '' }}"><a href="/notifications">Lista obavijesti</a></li>
        </ul>
    </li>
    <li class="treeview {{ Request::is('users*') ? 'active' : '' }}">
        <a href="#">
            <i class="fas fa-toolbox"></i>
            <span>Administracija</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li class="{{ Request::is('users/create') ? 'active' : '' }}"><a href="/users/create">Dodaj administratora</a>
            </li>
            <li class="{{ Request::is('users') ? 'active' : '' }}"><a href="/users">Lista administratora</a></li>
        </ul>
    </li>

</ul>