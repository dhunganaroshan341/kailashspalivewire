<main>
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>Gallery</h3>
            </div>
        </div>
    </section>

    <section class="gallery-item-wrapper section-wrapper">
        <div class="container">
            <div class="albumG-wrapper">
                @foreach ($galleries as $gallery)
                    <div class="album-content">
                        <div class="album-column">
                            <a class="detail-link" href="{{ route('gallery.show', $gallery->id) }}">
                                <img src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->title }}">
                            </a>
                        </div>
                        <p>{{ $gallery->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
