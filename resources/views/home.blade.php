@extends('layout.layout', ['active' => 'home'])

@section('content')
    <div class="hero-wrap js-fullheight">
        <div class="overlay"></div>
        <div id="particles-js"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-6 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Aplique <strong>filtros</strong> em suas imagens ou obtenha o <strong>texto</strong> de conteúdo</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <a href="{{ route('filter') }}" class="btn btn-primary btn-outline-white px-5 py-3">Aplicar Filtro em Imagem</a>
                        <a href="{{ route('getText') }}" class="btn btn-primary btn-outline-white px-5 py-3">Obter Texto de Imagem</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
