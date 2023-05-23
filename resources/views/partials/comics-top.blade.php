<section id="current-series">
    <div class="container py-5 position-relative">
        <p class="m-0 position-absolute text-uppercase fw-bold">current series</p>
        <div class="row row-cols-6">
            @foreach( $keys["comics"] as $comicbook)
            <div class="col mb-4">
                <div class="card text-uppercase border-0 rounded-0 text-white bg-transparent">
                    <a href="#">
                        <img src="{{ $comicbook['thumb'] }}" alt="" class="crad-img-top">
                        <h5 class="text-white m-0 mt-3">{{ $comicbook['series'] }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <button class="text-uppercase d-inline-block m-0">load more</button>
        </div>
    </div>
</section>