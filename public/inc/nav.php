<?php
error_reporting(0);
$page = $_GET['p'];
if (!isset($page)) {
    $one = "active";
}
if ($page == "intervencije" && !isset($_GET['akcija'])) {
    $three = "active";
} elseif ($page == "intervencije" && isset($_GET['akcija'])) {
    $two = "active";
} elseif ($page == "clanovi" && isset($_GET['akcija'])) {
    $four = "active";
} elseif ($page == "clanovi" && !isset($_GET['akcija'])) {
    $five = "active";
} elseif ($page == "obavijesti" && isset($_GET['akcija'])) {
    $six = "active";
} elseif ($page == "obavijesti" && !isset($_GET['akcija'])) {
    $seven = "active";
} elseif ($page == "administracija" && isset($_GET['akcija'])) {
    $eight = "active";
} elseif ($page == "administracija" && !isset($_GET['akcija'])) {
    $nine = "active";
}

?>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">GLAVNA NAVIGACIJA</li>
    <li class="<?php echo $one; ?>">

        <a href="index.php"><i class="fas fa-wrench"></i> <span>Kontrolna ploča</span>
        </a>
    </li>
    <li class="treeview <?php echo $two; ?> <?php echo $three; ?>">
        <a href="#">
            <i class="fas fa-exclamation-circle"></i>
            <span>Intervencije</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $two; ?>"><a href="index.php?p=intervencije&akcija=dodaj">Dodaj intervenciju</a></li>
            <li class="<?php echo $three; ?>"><a href="index.php?p=intervencije">Lista intervencija</a></li>
        </ul>
    </li>
    <li class="treeview <?php echo $four; ?> <?php echo $five; ?>">
        <a href="#">
            <i class="fas fa-users"></i>
            <span>Operativni članovi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $four; ?>"><a href="index.php?p=clanovi&akcija=dodaj">Dodaj člana</a></li>
            <li class="<?php echo $five; ?>"><a href="index.php?p=clanovi">Lista članova</a></li>
        </ul>
    </li>
    <li class="treeview <?php echo $six; ?> <?php echo $seven; ?>">
        <a href="#">
            <i class="far fa-newspaper"></i>
            <span>Obavijesti</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo $six; ?>"><a href="index.php?p=obavijesti&akcija=dodaj">Dodaj obavijest</a></li>
            <li class="<?php echo $seven; ?>"><a href="index.php?p=obavijesti">Lista obavijesti</a></li>
        </ul>
    </li>
    <li class="treeview <?php echo $eight; ?> <?php echo $nine; ?>">
        <a href="#">
            <i class="fas fa-toolbox"></i>
            <span>Administracija</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">

            <li class="<?php echo $eight; ?>"><a href="index.php?p=administracija&akcija=dodaj">Dodaj administratora</a>
            </li>
            <li class="<?php echo $nine; ?>"><a href="index.php?p=administracija">Lista administratora</a></li>
        </ul>
    </li>

</ul>