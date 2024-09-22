<main>
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>
            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>
            <div class="navbar-name">
                <h3>Our Brands</h3>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="brands-pg-wrapper">
                @foreach ($brands as $brand)
                    <div class="brands-pg-item">
                        <a href="{{ route('brand-image', $brand->id) }}" target="_blank">
                            <div class="brands-pg-image">
                                <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="{{ $brand->name }}">
                            </div>
                            <div class="brands-pg-name">
                                <h2>{{ $brand->name }}</h2>
                            </div>
                            <div class="brands-pgdetail">
                                <p>{{ $brand->address }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
