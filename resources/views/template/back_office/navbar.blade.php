<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse navbar-fixed-top">

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/">Machine à café</a>

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            @if(Request::is("boissons"))
                <li class="nav-item active">
            @else
                <li class="nav-item">
                    @endif
                    <a class="nav-link" href="/drinks">Drinks</a>
                </li>
                @if(Request::is("recettes"))
                    <li class="nav-item active">
                @else
                    <li class="nav-item">
                        @endif
                        <a class="nav-link" href="/recipes">Recipes</a>
                    </li>

                    @if(Request::is("commandes"))
                        <li class="nav-item active">
                    @else
                        <li class="nav-item">
                            @endif
                            <a class="nav-link" href="/sales">Sales</a>
                        </li>

                        @if(Request::is("pieces"))
                            <li class="nav-item active">
                        @else
                            <li class="nav-item">
                                @endif
                                <a class="nav-link" href="/coins">Coins</a>
                            </li>
                            @if(Request::is("stocks"))
                                <li class="nav-item active">
                            @else
                                <li class="nav-item">
                                    @endif
                                    <a class="nav-link" href="/ingredients">Ingredients</a>
                                </li>

                                @if(Request::is("login"))
                                    <li class="nav-item active">
                                @else
                                    <li class="nav-item">
                                        @endif
                                        <a class="nav-link" href="/login">Login</a>
                                    </li>
                                    @if(Request::is("register"))
                                        <li class="nav-item active">
                                    @else
                                        <li class="nav-item">
                                            @endif
                                            <a class="nav-link" href="/register">Register</a>
                                        </li>
        </ul>
    </div>
</nav>