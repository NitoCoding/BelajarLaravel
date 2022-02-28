<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @canany(['admin', 'kasir', 'guest', 'customer'])
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            @endcanany
            @canany(['admin'])
            <li class="nav-item">
                <a class="nav-link" href="{{ route('menu.index')}}">
                    <span data-feather="shopping-cart"></span>
                    Menu
                </a>
            </li>
            @endcanany
            @canany(['admin', 'kasir', 'guest','customer'])
            <li class="nav-item">
                <a class="nav-link" href="{{route('pembayaran.index')}}">
                    <span data-feather="file"></span>
                    Pesanan
                </a>
            </li>
            @endcanany
            @canany(['admin', 'kasir'])
            <li class="nav-item">
                <a class="nav-link" href="{{route('pembayaran.index')}}">
                    <span data-feather="bar-chart-"></span>
                    Transaksi
                </a>
            </li>
            @endcanany
            @canany(['admin','kasir'])
            <li class="nav-item">
                <a class="nav-link" href="{{route('pembayaran.index')}}">
                    <span data-feather="bar-chart-2"></span>
                    Laporan
                </a>
            </li>
            @endcanany
        </ul>
    </div>
</nav>
