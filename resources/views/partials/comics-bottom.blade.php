<section id="link">
    <div class="container py-5">
        <div class="row row-cols-5 justify-content-between">
            @foreach( $keys["info"] as $infoText => $infoPath)
                <div class="col-auto">
                    @if($infoPath !== 'buy-dc-power-visa.svg')
                        <img src="{{ Vite::asset('resources/img/' . $infoPath) }}" alt="">
                        <p class="m-0 d-inline-block ms-2 text-uppercase"> {{ $infoText }}</p>
                    @else
                    <div class="d-inline-block" id="svg">
                        <svg version="1.1" id="Layer_2_1_" xmlns="http://www.w3.org/2000/svg" x="0" y="0" viewBox="0 0 79.5 50.9" xml:space="preserve"><style>.st0{fill:none;stroke:#fff;stroke-width:1.7732;stroke-miterlimit:10}</style><path class="st0" d="M73.9 49.6H5.3c-2.1 0-3.8-1.7-3.8-3.8V5.4c0-2.1 1.7-3.8 3.8-3.8h68.6c2.1 0 3.8 1.7 3.8 3.8v40.3c0 2.1-1.7 3.9-3.8 3.9zM1.5 15.4h76.2"/><path fill="#fff" stroke="#fff" stroke-width=".998" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M50.1 22.1l-9.7 1.4 5.1-16.4L29 30.2l9.3-1.3L34.4 44z"/></svg>
                    </div>
                        <p class="m-0 d-inline-block ms-2 text-uppercase"> {{ $infoText }}</p>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>