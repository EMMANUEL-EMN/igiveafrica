<div class="bg-white">
    <nav class="navbar navbar-expand-sm bg-primary">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/charity_shop">
                    IGIVEAFRICA <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <input type="text" name="search" id="search" placeholder="search product">
                <button class="btn btn-warning btn-sm">SEARCH</button>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/shopping_cart">
                    <i class="fa fa-shopping-cart"></i>
                    @if (session()->has('cart'))
                        {{ count(session('cart')) }} item(s)
                    @else
                        0
                    @endif
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    sign-in
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Help
                </a>
            </li>
        </ul>

    </nav>
</div>
