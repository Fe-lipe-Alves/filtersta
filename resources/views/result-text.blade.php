@extends('layout.layout')

@section('content')
    <div class="js-fullheight bg-light d-flex align-items-center">
        <section class="ftco-section-featured mt-0 ftco-animate vw-100">
            <div class="container-fluid" data-scrollax-parent="true">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="h1">Conteúdo da imagem <strong class="px-3">{{ $imagename }}</strong></h2>
                        @empty($text)
                            <p class="my-4 text-danger">A imagem enviada não tem texto</p>
                        @else
                            <p class="my-4">{!! $text !!}</p>
                        @endempty

                        <a href="{{ route('getText') }}" class="btn btn-primary btn-outline-primary px-3 py-1">Obter Novo Texto</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
