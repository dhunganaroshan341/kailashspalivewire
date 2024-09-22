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

    <div class="brands-detail-section section-wrapper">
        <div class="brandsdetail-body container">
            <div class="brandsdetail-wrapper">
                <div class="brands-pg-wrapper brands-contacts-detail">
                    <div class="brands-pg-item">
                        <a href="{{ $brandMain->website }}">
                            <div class="brands-pg-image">
                                <img src="{{ asset('storage/' . $brandMain->logo_path) }}" alt="{{ $brandMain->name }}">
                            </div>
                        </a>
                    </div>
                    <div class="contact-info-brands">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-phone"></i> {{ $brandMain->phone }}</p>
                        <p><i class="fas fa-envelope"></i> {{ $brandMain->email }}</p>
                    </div>
                    <div class="contact-info-brands">
                        <h3>Visit Website</h3>
                        <a href="{{ $brandMain->website }}">{{ $brandMain->website }}</a>
                    </div>
                </div>
                <div class="brands-content-details">
                    <div class="brands-top-title">
                        <h2>{{ $brandMain->name }}</h2>
                    </div>
                    <div class="brands-details-data">
                        <p>{{ $brandMain->description }}</p>
                    </div>

                    <div class="brands-details-images">
                        <div class="brands-detail-img">
                            @foreach ($brand->image_path as $image)
                                <div class="brands-detail-item">
                                    <img src="{{ asset('storage/' . $image) }}" alt="Brand Image" />
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
