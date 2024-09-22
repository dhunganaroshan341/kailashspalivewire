<main>

    <section class="banner-section">
        <div class="banner-wrapper owl-carousel owl-theme" id="banner">
            @isset($banners)
                @foreach ($banners as $banner)
                    <div class="banner-item">
                        <img src="{{ asset('storage/' . $banner->image) }}" alt="Banner Image">
                        <div class="overlay"></div>
                        <div class="banner-content">
                            <p>{!! $banner->description ?? 'No description available' !!}</p>
                            <h1>{{ $banner->title ?? 'No title available' }}</h1>
                        </div>
                    </div>
                @endforeach
            @endisset
        </div>
    </section>

    <section class="section-wrapper">
        <div class="container">
            <div class="about-section">
                <div class="about-content">
                    <div class="head-tag">{{ $about->title ?? 'About Us' }}</div>
                    <h1>About <span>{{ $about->sub_heading ?? 'Our Company' }}</span></h1>
                    <div class="about-des">
                        <p class="para-head">{!! $about->description ?? 'No description available' !!}</p>
                    </div>
                    <div class="more-button">
                        <a href="{{ route('about') }}">About Us</a>
                    </div>
                </div>
                <div class="img-about">
                    <img class="img" src="{{ asset('storage/' . ($about->image ?? 'default-about-image.png')) }}"
                        alt="About Image">
                </div>
            </div>
        </div>
    </section>

    <section class="section-wrapper brands-section">
        <div class="container">
            <div class="our-brands">
                <div class="top-sectiom-title">
                    <div class="top-title">
                        <h3>{{ $brands_title ?? 'Our Brand Journey' }}</h3>
                        <p>{{ $brands_description ?? 'Our story is a tapestry of passion, innovation, and commitment. From our humble beginnings to significant milestones, join us on a journey that shapes who we are today.' }}
                        </p>
                    </div>
                </div>
                <div class="brands-wrapper">
                    <div class="brands-lists owl-carousel owl-theme" id="brands-kailash">
                        @isset($brands)
                            @foreach ($brands as $brand)
                                <div class="item">
                                    <span class="number">{{ $brand->date ?? 'Year' }}</span>
                                    <div class="icon">
                                        <img src="{{ asset('storage/' . ($brand->image ?? 'default-brand-image.png')) }}"
                                            alt="Brand Logo">
                                    </div>
                                    <div class="pt-amenities-title-class">
                                        <a href="{{ route('home') }}">{{ $brand->title ?? 'Brand Title' }}</a>
                                        <div class="section-text">
                                            <p>{!! $brand->description ?? 'No description available' !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (isset($testimonials) && $testimonials->isNotEmpty())
        <section class="section-wrapper">
            <div class="container">

                <div class="testimonial-wrapper">
                    @foreach ($testimonials as $testimonial)
                        <div style="margin-top:3em" class="top-sectiom-title">
                            <div class="top-title">
                                <h3>{{ $testimonial->testimonial_title ?? 'Message from the chairman' }}</h3>
                            </div>
                        </div>

                        <div class="testimonial-item">
                            <div class="testimonial-img">
                                <div class="testimonial-img-wrapper">
                                    <img src="{{ $testimonial->image_path ? asset('storage/' . $testimonial->image_path) : asset('images/default-image.png') }}"
                                        alt="Testimonial Image">
                                </div>
                            </div>
                            <div class="message-wrapper">
                                <div class="testimonial-para">
                                    {!! $testimonial->testimonial ?? 'No testimonial available' !!}
                                </div>
                                <div class="testimonial-title">{{ $testimonial->name ?? 'Anonymous' }}</div>
                                <div class="testimonial-post">{{ $testimonial->position ?? 'Position' }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No testimonials available.</p>
    @endif
    </div>
    </section>
    @if (isset($contactDescriptions) && $contactDescriptions != null)
        <section class="section-wrapper cta-section">
            <div class="container">
                {{-- @foreach ($contactDescriptions as $description) --}}
                <div class="cta-wrapper">
                    <div class="title-cta">
                        <h3>{{ $contactDescription->title ?? 'Default Title' }}</h3>
                        <!-- Fallback to a default title if it's missing -->
                    </div>
                    <div class="pgraph-cta">
                        <p>{{ $contactDescription->description ?? 'Default description text. This is a fallback description for when no specific description is available.' }}
                        </p>
                    </div>
                    <div class="load-more cta-link-more">
                        <a href="{{ route('contact') }}">
                            Contact Here
                        </a>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </section>
    @else
        <section class="section-wrapper cta-section">
            <div class="container">
                <div class="cta-wrapper">
                    <div class="title-cta">
                        <h3>Default Title</h3>
                    </div>
                    <div class="pgraph-cta">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis officia qui, dolorum
                            adipisci facilis mollitia beatae quaerat commodi repudiandae, repellendus harum provident
                            animi quo aliquam aliquid. Illo, officia fugit! Sequi, nemo? Fugiat, nemo ullam laudantium
                            blanditiis asperiores veritatis doloremque consequatur.</p>
                    </div>
                    <div class="load-more cta-link-more">
                        <a href="#">
                            Contact Here
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="section-wrapper commit-section">
        <div class="container">
            @if (isset($commitments) && $commitments->isNotEmpty())
                <div class="our-commitments ">
                    <div class="top-sectiom-title">
                        <div class="top-title">
                            <h3>{{ $commitments_title ?? 'Our Commitments' }}</h3>
                            <p>Kailash Group Hardware and Supplies,
                                your one-stop destination for premium quality tools,
                                materials, and equipment.</p>
                        </div>
                    </div>
                    <div class="commmitment-wrapper">
                        <div class="commitment-lists owl-carousel owl-theme" id="commit-kailash">
                            @foreach ($commitments as $commitment)
                                <div class="item">
                                    <div class="content-image">
                                        <img src="{{ asset('storage/' . ($commitment->image ?? 'default-commitment-image.png')) }}"
                                            alt="Commitment Image">
                                    </div>
                                    <div class="commitment-content">
                                        <h3>{{ $commitment->title ?? 'Commitment Title' }}</h3>
                                        <p>{{ $commitment->description ?? 'No description available' }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>



    <section class="section-wrapper honors-wrapper">
        @if (isset($milestones) && $milestones->isNotEmpty())
            <div class="container">
                <div class="honors-details">
                    @foreach ($milestones as $milestone)
                        <div class="honors-list">
                            <h1>{{ $milestone->date ?? 'Milestone Date' }}+</h1>
                            <p>{{ $milestone->title ?? 'Milestone Title' }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p>No milestones available.</p>
        @endif
    </section>

    <section class="post-section section-wrapper">
        <div class="container">
            <div class="top-sectiom-title">
                <div class="top-title">
                    <h3>{{ $news_title ?? 'News & Notices' }}</h3>
                    <p>{{ $news_description ?? 'Kailash Group Hardware and Supplies, your one-stop destination for premium quality tools, materials, and equipment.' }}
                    </p>
                </div>
            </div>
            <div class="post-news-section">
                <div class="post-wrapper owl-carousel owl-theme" id="ta_post">
                    @isset($news)
                        @foreach ($news as $item)
                            <div class="post-item">
                                <div class="post-img">
                                    <img src="{{ asset('storage/' . ($item->cover_photo_path ?? 'default-news-image.png')) }}"
                                        alt="News Image">
                                </div>
                                <div class="post-content">
                                    <div class="post-date">{{ $item->created_at->format('d M Y') ?? 'Date' }}</div>
                                    <div class="post-title">{{ $item->title ?? 'News Title' }}</div>
                                    <div class="post-des">{{ $item->subheading ?? 'No description available' }}</div>
                                    <div class="read-more-text"><a href="{{ $item->link ?? '#' }}">Read More</a></div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
                <div class="view-more load-more">
                    <a href="{{ $view_more_link ?? '#' }}">
                        View More
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="news-suscribe-section section-wrapper">
        <div class="container">
            <div class="news-suscribe-wrapper">
                <div class="suscribe-title">
                    <h4>{{ $subscribe_title ?? 'Fill in the form from here' }}</h4>
                </div>
                <div class="suscribe-pgraph">
                    <p>{{ $subscribe_description ?? 'Stay updated with our latest news. and feel free to ask questions' }}
                    </p>
                </div>
                <div class="suscribe-form-wrap">
                    <div class="suscribe-grid-form">
                        <div class="control">
                            <input class="input" type="email" name="email" placeholder="Enter your email"
                                required>
                        </div>
                        <div class="control-suscribe-btn load-more">
                            <a href="{{ route('subscribepost') }}">subscribe Here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>
