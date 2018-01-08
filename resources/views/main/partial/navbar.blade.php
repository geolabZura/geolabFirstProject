<nav class="navbar" id="navbar">
    <div class="navbarHeader">

        {!! svgToCode("/images/Logo.svg")  !!}

        <button class="burger" type="button">
				<span>
					<i class="fa fa-bars Bar" aria-hidden="true"></i>
					<i class="fa fa-times Bar" aria-hidden="true"></i>
				</span>
        </button>
        <button class="login">
            <i class="fa fa-user Bar" aria-hidden="true"></i>
        </button>
    </div>
    <div id="collapsibleNavbar">
        <ul class="navbar-nav text-capitalize">
            <li class="nav-item">
                <a class="nav-link" href="#navbar">home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Service">services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Cont">contact</a>
            </li>
        </ul>
    </div>
    @include('main.partial.login')
</nav>