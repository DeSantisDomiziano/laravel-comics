<section>
    <footer id="footer-bottom">
        <div class="container py-4">
            <div class="row justify-content-between">
                <div class="col-auto">
                    <button type="button" class="btn rounded-0 border-primary text-white text-uppercase">sign-up now!</button>
                </div>

                <div class="col-auto">
                    <p href="#" class="text-uppercase m-0 text-primary d-inline-block">follow us</p>

                    @foreach( $keys['socials'] as $social)
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/' . $social) }}" alt="">
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>
</section>