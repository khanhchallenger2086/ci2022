<aside>
    <div class="menu-close"><i class="mdi mdi-close d-block d-xl-none"></i></div>
    <div class="logo"><a href="<?= base_url('admincp') ?>"><img class="logo-large"
                src="<?= base_url() ?>public/admin/img/logo.png" /></a><img class="logo-mini"
            src="<?= base_url() ?>public/admin/img/logo-mini.png" /></div>
    <div class="menu">
        <nav class="sidebar" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link waves-effect" data-toggle="collapse" href="#manager" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-view-dashboard-outline menu-icon"></i>
                        <span class="menu-title">Quản lý website</span>
                    </a>
                    <i class="mdi mdi-chevron-down menu-down" data-toggle="collapse" href="#manager" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="manager">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp') ?>">Bảng điều khiển</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/configs') ?>">Cấu hình tổng quát</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" data-toggle="collapse" href="#account" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-circle-outline menu-icon"></i>
                        <span class="menu-title">Quản lý tài khoản</span>
                    </a>
                    <i class="mdi mdi-chevron-down menu-down" data-toggle="collapse" href="#account" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="account">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/admin') ?>">Danh sách tài khoản</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/admin/add') ?>">Thêm tài khoản</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect" data-toggle="collapse" href="#supports" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-circle-outline menu-icon"></i>
                        <span class="menu-title">Quản lý hỗ trợ</span>
                    </a>
                    <i class="mdi mdi-chevron-down menu-down" data-toggle="collapse" href="#supports" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="supports">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/supports') ?>">Danh sách hỗ trợ</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/supports/detail') ?>">Thêm thông tin hỗ trợ</a></li>
                        </ul>
                    </div>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link waves-effect" data-toggle="collapse" href="#home-manager" aria-expanded="false" aria-controls="ui-basic">-->
                <!--        <i class="mdi mdi-home"></i>-->
                <!--        <span class="menu-title">Quản lý trang home</span>-->
                <!--    </a>-->
                <!--    <i class="mdi mdi-chevron-down menu-down" data-toggle="collapse" href="#home-manager" aria-expanded="false" aria-controls="ui-basic"></i>-->
                <!--    <div class="collapse show" id="home-manager">-->
                <!--        <ul class="nav flex-column sub-menu">-->
                <!--            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/home/top') ?>">Nhập liệu top</a></li>-->
                <!--            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/home/about') ?>">Giới thiệu</a></li>-->
                <!--            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/home/thong_ke') ?>">Thống kê</a></li>-->
                <!--        </ul>-->
                <!--    </div>-->
                <!--</li>-->
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#product"
                        aria-expanded="false" aria-controls="ui-basic"><i class="mdi mdi-newspaper menu-icon"></i><span
                            class="menu-title">Quản lý sản phẩm</span></a><i class="mdi mdi-chevron-down menu-down"
                        data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="product">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/product_category') ?>">Danh mục sản phẩm</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/product_category/detail') ?>">Thêm danh mục</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/product') ?>">Danh sách sản phẩm</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/product/detail') ?>">Thêm sản phẩm</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#post-manager"
                        aria-expanded="false" aria-controls="ui-basic"><i class="mdi mdi-newspaper menu-icon"></i><span
                            class="menu-title">Quản lý bài viết</span></a><i class="mdi mdi-chevron-down menu-down"
                        data-toggle="collapse" href="#post-manager" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="post-manager">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/articles_category') ?>">Danh mục bài viết</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/articles_category/detail') ?>">Thêm danh mục</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/articles') ?>">Danh sách bài
                                    viết</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/articles/detail') ?>">Thêm bài viết</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#post-manager"
                        aria-expanded="false" aria-controls="ui-basic"><i class="mdi mdi-newspaper menu-icon"></i><span
                            class="menu-title">Quản lý khách hàng</span></a><i class="mdi mdi-chevron-down menu-down"
                        data-toggle="collapse" href="#post-manager" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="post-manager">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/customer') ?>">Danh sách khách hàng</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/customer/detail') ?>">Thêm khách hàng</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#static-page"
                        aria-expanded="false" aria-controls="ui-basic"><i
                            class="mdi mdi-comment-text-outline menu-icon"></i><span class="menu-title">Quản lý trang
                            tĩnh</span></a><i class="mdi mdi-chevron-down menu-down" data-toggle="collapse"
                        href="#static-page" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="static-page">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/staticpage') ?>">Danh sách trang
                                    tĩnh</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/staticpage/detail') ?>">Thêm trang tĩnh</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#contact-manager"
                        aria-expanded="false" aria-controls="ui-basic"><i
                            class="mdi mdi-email-outline menu-icon"></i><span class="menu-title">Quản lý liên
                            hệ</span></a><i class="mdi mdi-chevron-down menu-down" data-toggle="collapse"
                        href="#contact-manager" aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="contact-manager">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/contact') ?>">Danh sách liên hệ</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link waves-effect" data-toggle="collapse" href="#ads-manager"
                        aria-expanded="false" aria-controls="ui-basic"><i
                            class="mdi mdi-credit-card menu-icon"></i><span class="menu-title">Quản lý ADS</span></a><i
                        class="mdi mdi-chevron-down menu-down" data-toggle="collapse" href="#ads-manager"
                        aria-expanded="false" aria-controls="ui-basic"></i>
                    <div class="collapse show" id="ads-manager">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/ads_category') ?>">Danh mục ADS</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/ads_category/detail') ?>">Thêm danh mục</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/ads') ?>">Danh sách ADS</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('admincp/ads/detail') ?>">Thêm ADS</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</aside>