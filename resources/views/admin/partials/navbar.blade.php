<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-dropdown-left" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <a href="#" class="navbar-brand">{{ config('app.name') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-dropdown-left">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <ul class="modules-dropdown">

                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                                <li class="module">
                                    <span class="module-icon"></span>
                                    <h1 class="module-title">Some Title</h1>

                                    <p class="module-description">Some description</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">Visitar site</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">{{ Auth::user()->full_name }}<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Permissões</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Configuraçoes</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#" onclick="$('#logoutForm').submit()">Sair</a>
                            <form action="{{ route('logout') }}" id="logoutForm" method="post">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>