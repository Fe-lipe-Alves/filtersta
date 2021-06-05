<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5 justify-content-between">
            <div class="col-md-4 offset-md-2">
                <div class="ftco-footer-widget mb-2">
                    <h2 class="ftco-heading-2">{{ config('app.name') }}</h2>
                    <p>Aplicador de filtros em imagens</p>
                </div>
            </div>
            <div class="col-md-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('filter') }}" class="nav-link">Aplicar Filtro</a></li>
                    <li class="nav-item"><a href="{{ route('getText') }}" class="nav-link">Obter Texto</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Todos os direitos reservados
                    <br/>
                    Template desenvolvido por <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>
