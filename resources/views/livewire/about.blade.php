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

            <section class="aboutus-section section-wrapper">
                <div class="aboutus-home-wrapper container">
                    @foreach ($sections as $section)
                        <div class="content-module-wrap">
                            <div class="about-content-wrapper">
                                <div class="aboutus-content">
                                    <h3>{{ $section->title }}</h3>
                                    <p>{{ $section->description }}</p> <!-- Use description instead of content -->
                                </div>
                                <div class="about-action load-more">
                                    <a href="{{ $section->link }}">Talk to Us</a> <!-- Updated to use link -->
                                </div>
                            </div>
                            <div class="about-img-wrapper">
                                <div class="aboutus-img">
                                    <img src="{{ asset('storage/' . $section->image) }}" alt="{{ $section->title }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="hteam-section section-wrapper">
                <div class="container">
                    <div class="top-sectiom-title">
                        <div class="top-title">
                            <h3>Our Awesome Team</h3>
                            <p>Our story is a tapestry of passion, innovation, and commitment. From our humble
                                beginnings to
                                significant milestones, join us on a journey that shapes who we are today.</p>
                        </div>
                    </div>
                    <div class="hteam-wrapper">
                        @foreach ($teamMembers as $member)
                            <div class="hteam-item">
                                <div class="hteam-img">
                                    <img src="{{ asset('storage/' . $member->image_path) }}" alt="{{ $member->name }}">
                                </div>
                                <div class="htem-about">
                                    <div class="name">{{ $member->name }}</div>
                                    <div class="post">{{ $member->role }}</div>
                                    <div class="hsocial">
                                        <ul>
                                            @foreach ($member->socialMedia as $social)
                                                @if ($social->name === 'facebook')
                                                    <li><a href="{{ $social->link }}"><i
                                                                class="fa-brands fa-facebook"></i></a></li>
                                                @elseif ($social->name === 'instagram')
                                                    <li><a href="{{ $social->link }}"><i
                                                                class="fa-brands fa-instagram"></i></a></li>
                                                @elseif ($social->name === 'twitter')
                                                    <li><a href="{{ $social->link }}"><i
                                                                class="fa-brands fa-twitter"></i></a></li>
                                                @elseif ($social->name === 'linkedin')
                                                    <li><a href="{{ $social->link }}"><i
                                                                class="fa-brands fa-linkedin"></i></a></li>
                                                @endif
                                            @endforeach
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

    {{--
        Here is a list of the variables used in the Blade view (`about.blade.php`):

    1. **`$aboutSections`**: Contains information about different sections of the About page.
       - `title`: Title of the section.
       - `description`: Description of the section.
       - `image`: URL of the section image.
       - `link`: URL for the "Talk to Us" link.

    2. **`$teamMembers`**: Contains information about team members.
       - `name`: Name of the team member.
       - `position`: Position of the team member.
       - `image`: URL of the team member's image.
       - `socialLinks`: Array of social media links (e.g., `facebook`, `instagram`, `twitter`, `linkedin`).

    These variables are used to populate the content dynamically in the Blade view.
    --}}

</main>
