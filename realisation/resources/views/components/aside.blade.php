<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">

    <a href="/article" class="brand-link">
        <span class="brand-text font-weight-light text-center h6">Blog Minimaliste</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="/articles" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Accueil</p>
                    </a>
                </li>

                @auth
                    <li class="nav-item">
                        <a href="/articles/create" class="nav-link">
                            <i class="nav-icon fas fa-plus"></i>
                            <p>Créer un Article</p>
                        </a>
                    </li>
                @endauth

            </ul>
        </nav>
    </div>

</aside>
