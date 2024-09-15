<main>
    <div class="news-detail-section section-wrapper">
        <div class="detail-page-body container">
            <div class="detail-data-wrapper">

                <div class="img-detail-news">
                    <img src="{{ asset('storage/' . $newsItem->cover_photo_path) }}"
                        alt="{{ $newsItem->photo_alt_text }}">
                </div>
                <div class="content-details-all">
                    <div class="data-collection-wrapper">
                        <div class="title-news-details">
                            <h2>{{ $newsItem->title }}</h2>
                        </div>
                        <div class="wrapper-date-blog">
                            <div class="blog-blogdate"><i class="fas fa-clock"></i></div>
                            <div class="gnlcat-Date">
                                {{ $newsItem->published_at ? \Carbon\Carbon::parse($newsItem->published_at)->format('d M Y') : 'Date not available' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="content-pgraph-detail">
                        {!! $newsItem->body !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-wrapper">
        <div class="container">
            <div class="top-sectiom-title">
                <div class="top-title">
                    <h3>Other Posts</h3>
                </div>
            </div>
            <div class="post-section">
                <div class="post-wrapper owl-carousel owl-theme" id="ta_post">
                    @foreach ($otherPosts as $post)
                        <div class="post-item">
                            <div class="post-img">
                                <img src="{{ asset('storage/' . $post->cover_photo_path) }}"
                                    alt="{{ $post->photo_alt_text }}">
                            </div>
                            <div class="post-content">
                                <div class="post-date">
                                    {{ $post->published_at ? $post->published_at->format('d M Y') : 'Date not available' }}
                                </div>
                                <div class="post-title">{{ $post->title }}</div>
                                <div class="post-des">{{ $post->sub_title }}</div>
                                <div class="read-more-text">
                                    <a href="{{ route('newsdetail', $post->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
