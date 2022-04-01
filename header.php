<!doctype html>
<html lang="en" class="light">
    <head>
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head() ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="header header_TypeA">
            <a href="#">
                <div class="logo logo_Type">
                    <div class="main_Type">TSMC PIP</div>
                    <div class="sub_Type">Proprietary Information Protection</div>
                </div>
            </a>
            <div class="menu_Group">
                <div class="menu expandable">
                    <div>Regulation</div>
                    <i class="Iconfont_Arrow_Thin_Down"></i>
                </div>
                <div class="menu expandable">
                    <div>Download</div>
                    <i class="Iconfont_Arrow_Thin_Down"></i>
                </div>
                <div class="menu expandable">
                    <div>Training</div>
                    <i class="Iconfont_Arrow_Thin_Down"></i>
                </div>
            </div>
            <div class="textField textField--withRightIcon textField--highlight textField--rounded">
                <input class="textField-input" placeholder="Type Something">
                <div class="icon icon--secondary" style="--image-icon: url(https://design-system-27b07.web.app/icon/interface_essential/search_loupe_2.svg)"></div>    
            </div>
            <div class="profile">
                <div class="user_Name">
                    <div class="name_ENG">Georgios Velliantis</div>
                </div>
                <div class="avatar avatar--rounded avatar--xs"></div>
            </div>
            <div class="button_More">
                <i class="Iconfont_Icon_More"></i>
            </div>
        </nav>
