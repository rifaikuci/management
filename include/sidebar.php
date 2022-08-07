<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <?php require_once "sidebar-top.php"?>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                   <?php menuTreeTitle("Title", "fas fa-tachometer-alt text-danger"); ?>
                    <ul class="nav nav-treeview">
                        <?php menuTreeSubTitle("Alt Title 1",
                            "far fa-circle nav-icon",
                            "https://rifaikuci.com/",
                            "", "",true ); ?>
                    </ul>
                </li>

                <?php menuTreeSubTitle("Alt Title 1",
                    "far fa-circle nav-icon",
                    "https://rifaikuci.com/",
                    "", badge("6","success"),false ); ?>
                <?php menuTreeSubTitle("Alt Title 1",
                    "far fa-circle nav-icon",
                    "https://rifaikuci.com/",
                    "", badge("6","success"),true ); ?>
                <?php menuTreeSubTitle("Alt Title 1",
                    "far fa-circle nav-icon",
                    "https://rifaikuci.com/",
                    "", badge("6","success"),false ); ?>
                <?php  menuTitle("LABEL", "danger"); ?>
            </ul>
        </nav>
    </div>
</aside>