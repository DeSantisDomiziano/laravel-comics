<header>
    <section id="top-header">
        <div class="container py-1 text-end text-uppercase">
            <span>
                dc power&#8480; visa&#174;
            </span>

            <span class="d-inline-block ms-5">
                additional dc sites&#9660;
            </span>
        </div>
    </section>

    <nav>
        <div class="container pt-2">
            <div class="row justify-content-between">

                <div class="col-auto pb-2">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" width="80px" alt="" >
                </div>

                <div class="col-auto">
                    <ul class="list-unstyled d-flex gap-3 m-0 h-100 text-uppercase fw-bold">
                        @foreach( $pages as $page)
                            <li class="h-100 {{ Route::currentRouteName() === $page ? 'current' : ''}} d-flex justify-content-center align-items-center">
                                <a href='{{route("$page")}}'>
                                    {{ $page }}
                                </a>
                            </li>
                        @endforeach
                    </ul> 
                </div>

                <div class="col-auto d-flex justify-content-end align-items-center flex-shrink-0">
                    <div class="fs-5 text-end">
                        <input type="text" placeholder="Search" class="text-end border-0 d-inline">
                        <div class="d-inline-block">
                            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <section id="jumbo"></section>
</header>