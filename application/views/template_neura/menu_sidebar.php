<?php if ($user['role_id'] == 1) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 2) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li> -->

                    <!-- <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li> -->

                    <!-- <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li> -->

                    <!-- <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li> -->

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <!-- <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li> -->
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 3) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 4) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 5) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 6) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>

<?php if ($user['role_id'] == 7) { ?>
    <!-- Left Sidebar admin-->
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">
                <ul>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('dashboard'); ?>">
                            <i class="fas fa-bars"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'kurir' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('kurir'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Kurir </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'agen' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('agen'); ?>">
                            <i class="fa fa-users"></i>
                            <span>Data Agen </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'harga' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('harga'); ?>">
                            <i class="fas fa-file-alt"></i>
                            <span>Master Daftar Harga </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'daftar_barang' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('daftar_barang'); ?>">
                            <i class="fas fa-table"></i>
                            <span> Master Barang </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'pelanggan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('pelanggan'); ?>">
                            <i class="fas fa-people-carry"></i>
                            <span> Pelanggan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'penerimaan' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('penerimaan'); ?>">
                            <i class="fa fa-truck"></i>
                            <span> Penerimaan </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span> Barang </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a id="tables" href="#">
                            <i class="fas fa-print"></i>
                            <span> Laporan </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="tables-basic.html">Barang Masuk</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">Barang Keluar</a>
                            </li>
                            <li>
                                <a href="tables-datatable.html">History Barang</a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#">
                            <i class="fas fa-cog"></i>
                            <span> Acount User</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="ui-alerts.html">User Kurir</a>
                            </li>
                            <li>
                                <a href="ui-buttons.html">User Agen</a>
                            </li>
                            <li>
                                <a href="ui-cards.html">Cards</a>
                            </li>
                            <li>
                                <a href="ui-carousel.html">Carousel</a>
                            </li>
                            <li>
                                <a href="ui-collapse.html">Collapse</a>
                            </li>
                            <li>
                                <a href="ui-icons.html">Icons</a>
                            </li>
                            <li>
                                <a href="ui-modals.html">Modals</a>
                            </li>
                            <li>
                                <a href="ui-tooltips.html">Tooltips and Popovers</a>
                            </li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a <?php echo $this->uri->segment(1) == 'logout' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?> href="<?php echo base_url('auth/logout'); ?>">
                            <i class="fas fa-power-off tombol-logout"></i>
                            <span>Keluar </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar admin-->
<?php } ?>