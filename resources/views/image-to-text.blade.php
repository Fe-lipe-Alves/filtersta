@extends('layout.layout', ['active' => 'image-to-text'])

@section('content')
    <div class="js-fullheight bg-light d-flex align-items-center">
        <section class="ftco-section-featured mt-0 ftco-animate vw-100">
            <div class="container-fluid" data-scrollax-parent="true">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="h1">Clique no botão e <strong class="px-3">selecione uma imagem</strong> que deseja obter o texto</h2>
                        <p><button id="select-image" type="button" class="btn btn-primary mt-3 py-3 px-5">Selecionar Imagem</button></p>

                        <form action="{{ route('image-to-text') }}" method="post" id="form-image" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image" id="input-image" class="d-none" accept="image/*">
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        window.scroller = false;
    </script>
@endsection
