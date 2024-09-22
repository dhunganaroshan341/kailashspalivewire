<main>
    <header>
        <nav>
            <section class="banner-common-section">
                <div class="name-middle">
                    <div class="home-link">
                        <a href="/home"><span>Home</span></a>
                    </div>
                    <div class="angle-banner">
                        <i class="fa-solid fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="navbar-name">
                        <h3>About</h3>
                    </div>
                </div>
            </section>

            <!-- Dynamic Sections -->
            <section class="aboutus-section section-wrapper">
                <div class="aboutus-home-wrapper container">
                    @foreach ($sections as $index => $section)
                        <div class="content-module-wrap">
                            @if ($index % 2 == 0)
                                <!-- For even indexes, image on the right -->
                                <div class="about-content-wrapper">
                                    <div class="aboutus-content">
                                        <h3>{{ $section->title }}</h3>
                                        <p>{!! $section->description !!}</p>
                                    </div>
                                    <div class="about-action load-more">
                                        <a href="{{ $section->link }}">Talk to Us</a>
                                    </div>
                                </div>
                                <div class="about-img-wrapper">
                                    <div class="aboutus-img">
                                        <img src="{{ asset('storage/' . $section->image) }}"
                                            alt="{{ $section->title }}">
                                    </div>
                                </div>
                            @else
                                <!-- For odd indexes, image on the left -->
                                <div class="about-img-wrapper">
                                    <div class="aboutus-img">
                                        <img src="{{ asset('storage/' . $section->image) }}"
                                            alt="{{ $section->title }}">
                                    </div>
                                </div>
                                <div class="about-content-wrapper">
                                    <div class="aboutus-content">
                                        <h3>{{ $section->title }}</h3>
                                        <p>{!! $section->description !!}</p>
                                    </div>
                                    <div class="about-action load-more">
                                        <a href="{{ $section->link }}">Talk to Us</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- Static Content -->
            <section class="section-wrapper">
                <div class="container">
                    <div class="about-pg-section">
                        <div class="about-pg-diff">
                            <div class="about-des">
                                <p class="para-head">With 17+ Years of experience, the journey of Kailash Group Nepal
                                    started in 2001. This Group is the formation of more than 10 different companies,
                                    including Travel & Trekking, Marathon, Investment Offices, Heli Services, Hotels &
                                    Resorts in Kathmandu & Pokhara, and a Bricks company in Chitwan, etc.</p>
                            </div>

                            <div class="about-des">
                                <p class="para-head">With 17+ Years of experience, Kailash Group Nepal is involved in
                                    numerous sectors including travel, trekking, heli services, investment offices, and
                                    more.</p>
                            </div>
                        </div>
                        <div class="img-about-pg">
                            <img class="img" src="./img/001-1.jpg" alt="About Image">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Team Section (Dynamic) -->
            <section class="hteam-section section-wrapper">
                <div class="container">
                    <div class="top-section-title">
                        <div class="top-title">
                            <h3>Our Awesome Team</h3>
                            <p>Our story is a tapestry of passion, innovation, and commitment. From our humble
                                beginnings to significant milestones, join us on a journey that shapes who we are today.
                            </p>
                        </div>
                    </div>
                    <div class="hteam-wrapper">
                        @foreach ($teamMembers as $member)
                            <div class="hteam-item">
                                <div class="hteam-img">
                                    <img src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                </div>
                                <div class="htem-about">
                                    <div class="name">{{ $member->name }}</div>
                                    <div class="post">{{ $member->role }}</div>
                                    <div class="hsocial">
                                        <ul>
                                            <li><a href="{{ $member->facebook }}"><i
                                                        class="fa-brands fa-facebook"></i></a></li>
                                            <li><a href="{{ $member->instagram }}"><i
                                                        class="fa-brands fa-instagram"></i></a></li>
                                            <li><a href="{{ $member->link }}"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li><a href="{{ $member->linked_in }}"><i
                                                        class="fa-brands fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </nav>
    </header>
</main>
