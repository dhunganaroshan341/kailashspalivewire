<main>
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>News & Events</h3>
            </div>
        </div>
    </section>

    <section class="postpg-section section-wrapper">
        <div class="container">
            <div class="post-newspg-section">
                <div class="postblog-wrapper">
                    @foreach ($news as $item)
                        <div class="postblog-item">
                            <div class="post-img">
                                <!-- Add image display here -->
                                <img src="{{ asset('storage/' . $item->cover_photo_path) }}" alt="{{ $item->title }}">
                            </div>
                            <div class="post-content">
                                <div class="post-title">
                                    <h2>{{ $item->title }}</h2>
                                </div>
                                <div class="read-more-text">
                                    <a href="{{ route('news-detail', $item->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="load-more">
                    <a href="#">Load More</a>
                </div>
            </div>
        </div>
    </section>

</main>
