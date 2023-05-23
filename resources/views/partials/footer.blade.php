<footer>
    <section id="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-6 py-4">
                    <div class="row row-cols-3">
                        <div class="col">
                            <h4 class="text-uppercase">dc comics</h4>

                            <ul class="p-0 mb-4">
                                @foreach( $keys["dcComics"] as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>

                            <h4 class="text-uppercase">shop</h4>

                            <ul class="p-0">
                                @foreach( $keys["shop"] as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h4 class="text-uppercase">dc</h4>

                            <ul class="p-0">
                                @foreach( $keys["dc"] as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col">
                            <h4 class="text-uppercase">sites</h4>

                            <ul class="p-0">
                                @foreach( $keys["sites"] as $item )
                                    <li>
                                        <a href="#"> {{ $item }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-6" id="logo"></div>
            </div>
        </div>
    </section> 
</footer>