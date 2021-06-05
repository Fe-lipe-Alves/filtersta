<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light scrolled awake" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ $active == "home" ? 'active' : '' }}">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ $active == "filter" ? 'active' : '' }}">
                    <a href="{{ route('filter') }}" class="nav-link">Aplicar Filtro</a>
                </li>
                <li class="nav-item {{ $active == "image-to-text" ? 'active' : '' }}">
                    <a href="{{ route('getText') }}" class="nav-link">Obter Texto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
