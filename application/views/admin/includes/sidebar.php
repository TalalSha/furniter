<div class="sidebar-menu fixed">
    <div class="sidebar-menu-inner ps-container ps-active-y">
        <header class="logo-env">
            <!-- logo -->
            <div class="logo">
                <a href="<?=site_url(ADMIN.'/dashboard')?>">
                    <img src="<?= SITE_IMAGES.'/images/'.$adminsite_setting->site_logo ?>" width="120" alt="">
                </a>
            </div>
            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>
        </header>
        <ul id="main-menu" class="main-menu">
            <li class="opened <?= ($this->uri->segment(2) == 'dashboard') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/dashboard') ?>">
                    <i class="entypo-gauge"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment(2) == 'section' || $this->uri->segment(3) == 'home' || $this->uri->segment(3) == 'about' || $this->uri->segment(3) == 'blog' || $this->uri->segment(3) == 'faq' || $this->uri->segment(3) == 'news' || $this->uri->segment(3) == 'loan_forms' || $this->uri->segment(3) == 'contact') ? ' opened  active' : '' ?>">
                <a href="<?=base_url(ADMIN.'/section')?>">
                    <i class="fa fa-file  "></i>
                    <span class="title">Manage Pages Content</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'categories' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/categories') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Manage category</span>
                </a>
            </li>
            <li class="opened <?= ($this->uri->segment(2) == 'products' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/products') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Manage Products</span>
                </a>
            </li>
            <li class=" <?= ($this->uri->segment('2') == 'sub_categories' ) ? ' opened  active' : '' ?>">
                    <a href="<?= site_url(ADMIN.'/sub_categories') ?>">
                        <i class="fa fa-quote-left"></i>
                        <span class="title">Sub-Categories</span>
                    </a>
            </li>

            <li class=" <?= ($this->uri->segment('2') == 'testimonials' ) ? ' opened  active' : '' ?>">
                    <a href="<?= site_url(ADMIN.'/testimonials') ?>">
                        <i class="fa fa-quote-left"></i>
                        <span class="title">Testimonials & reviews</span>
                    </a>
            </li>

            
            <li class="opened <?= ($this->uri->segment(2) == 'settings' && $this->uri->segment(3) == '') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/settings') ?>">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Site Settings</span>
                </a>
            </li>
            
            <!-- <li class="opened <?= ($this->uri->segment(2) == 'sub-admin') ? 'active' : '' ?>">
                <a href="<?= site_url(ADMIN.'/sub-admin') ?>">
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                    <span class="title">Sub Admin</span>
                </a>
            </li> -->
            <li class="opened">
                <a href="<?= site_url(ADMIN.'/settings/change') ?>">
                    <i class="fa fa-lock"></i>
                    <span class="title">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>