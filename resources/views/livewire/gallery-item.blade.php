<main>
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>
            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>
            <div class="navbar-name">
                <h3>{{ $galleryTitle }}</h3>
            </div>
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="gallery-design">
                @if ($galleryItem && $galleryItem->image && is_array($galleryItem->image))
                    @forelse ($galleryItem->image as $path)
                        <div class="magnific-img">
                            <a class="magnific-img-item" href="{{ asset('storage/' . $path) }}">
                                <img src="{{ asset('storage/' . $path) }}" alt="{{ basename($path) }}" />
                            </a>
                        </div>
                    @empty
                        <p>No images available.</p>
                    @endforelse
                @else
                    <p>No images available.</p>
                @endif
            </div>

            <div class="gBack-buttonWrapper">
                <div class="gBack-button"><a href="{{ url('/gallery') }}">Back To Album</a></div>
            </div>
        </div>
    </section>
</main>
