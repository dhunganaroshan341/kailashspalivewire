{{-- <main>
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>
            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>
            <div class="navbar-name">
                <h3>Contact</h3>
            </div>
        </div>
    </section>

    <!-- Contact Details Section -->
    <section class="contact-top-wrapper section-wrapper">
        <div class="contact-top-body container">
            <div class="contact-top-details">
                @if ($contactDetails->isNotEmpty())
                    @foreach ($contactDetails as $detail)
                        <div class="wrapper-data-contact">
                            <div class="wrapper-icon-contact">
                                <i class="{{ $detail->icon }}" aria-hidden="true"></i>
                            </div>
                            <div class="title-contact-top">
                                <h4>{{ $detail->title }}</h4>
                            </div>
                            <div class="pgraph-contact-top">{{ $detail->description }}</div>
                            <div class="mail-wrapper">
                                @if ($detail->type == 'email')
                                    <a href="mailto:{{ $detail->value }}" target="_blank">{{ $detail->value }}</a>
                                @elseif($detail->type == 'phone')
                                    <a href="tel:{{ $detail->value }}">{{ $detail->value }}</a>
                                @elseif($detail->type == 'address')
                                    <a href="#" target="_blank">{{ $detail->value }}</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <!-- Fallback Contact Details -->
                    @php
                        $fallbackContacts = [
                            [
                                'icon' => 'fa-regular fa-envelope',
                                'title' => 'Email',
                                'description' => 'Mail Us at this Address',
                                'type' => 'email',
                                'value' => 'tashikailash@gmail.com',
                                'link' => 'mailto:tashikailash@gmail.com',
                            ],
                            [
                                'icon' => 'fa-solid fa-location-dot',
                                'title' => 'Office',
                                'description' => 'Office Location In case You Visit',
                                'type' => 'address',
                                'value' => 'J.P. Road, Thamel, Kathmandu, Nepal',
                                'link' => '#',
                            ],
                            [
                                'icon' => 'fa-solid fa-phone-volume',
                                'title' => 'Phone',
                                'description' => 'Contact Us for any Inquiry',
                                'type' => 'phone',
                                'value' => '+977 1 4265845 , 4265717 , 4263026',
                                'link' => 'tel:+97714265845',
                            ],
                        ];
                    @endphp

                    @foreach ($fallbackContacts as $contact)
                        <div class="wrapper-data-contact">
                            <div class="wrapper-icon-contact">
                                <i class="{{ $contact['icon'] }}" aria-hidden="true"></i>
                            </div>
                            <div class="title-contact-top">
                                <h4>{{ $contact['title'] }}</h4>
                            </div>
                            <div class="pgraph-contact-top">{{ $contact['description'] }}</div>
                            <div class="mail-wrapper">
                                <a href="{{ $contact['link'] }}" target="_blank">{{ $contact['value'] }}</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Get in Touch Form -->
    <section class="section-wrapper">
        <div class="container">
            <div class="contact-head">
                <h2>Get in Touch</h2>
                <p>We’d love to hear from you. Inquire anything you want.</p>
            </div>
            <form id="contactform" class="contact-form" novalidate="novalidate">
                <div class="form">
                    <div>
                        <div class="form-body">
                            <div class="grid-show-wrapper">
                                <div class="control">
                                    <label class="label">
                                        Name
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Your Name" name="name">
                                </div>

                                <div class="control">
                                    <label class="label">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="email" placeholder="Your Email" name="email">
                                </div>
                                <div class="control">
                                    <label class="label">
                                        Phone
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Phone Number" name="phone">
                                </div>

                                <div class="control">
                                    <label class="label">
                                        Subject
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="message-wrapper">
                                <label class="label">Message <span class="required">*</span></label>
                                <textarea class="textarea" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="btn-submit">
                                <div class="subBtn" id="submitBtn"><span class="text-hov">SUBMIT</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <!-- Google Map Section -->
    {{-- <section class="section-wrapper">
        <iframe src="{{ $mapUrl }}" width="100%" height="450" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
    </section>
> --}}

<main>

    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>Contact</h3>
            </div>
        </div>
    </section>
    <!-- Success Message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error Message -->
    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}
        </div>
    @endif

    <!-- Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <section class="contact-top-wrapper section-wrapper">
        <div class="contact-top-body container">
            <div class="contact-top-details">
                <div class="wrapper-data-contact">
                    <div class="wrapper-icon-contact"><i class="fa-regular fa-envelope" aria-hidden="true"></i></div>

                    <div class="title-contact-top">
                        <h4>Email</h4>
                    </div>

                    <div class="pgraph-contact-top">Mail Us at this Address</div>

                    <div class="mail-wrapper"><a href="mailto:#" target="_blank">tashikailash@gmail.com</a></div>
                </div>

                <div class="wrapper-data-contact">
                    <div class="wrapper-icon-contact"><i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                    </div>

                    <div class="title-contact-top">
                        <h4>Office</h4>
                    </div>

                    <div class="pgraph-contact-top">Office Location In case You Visit</div>

                    <div class="mail-wrapper"><a href="#" target="_blank">J.P. Road, Thamel, Kathmandu, Nepal</a>
                    </div>
                </div>

                <div class="wrapper-data-contact">
                    <div class="wrapper-icon-contact"><i class="fa-solid fa-phone-volume" aria-hidden="true"></i>
                    </div>

                    <div class="title-contact-top">
                        <h4>Phone</h4>
                    </div>

                    <div class="pgraph-contact-top">Contact Us for any Inquiry</div>

                    <div class="mail-wrapper"><a href="tel:#">+977 1 4265845 , 4265717 , 4263026</a></div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-wrapper">
        <div class="container">
            <div class="contact-head">
                <h2>Get in Touch</h2>
                <p>We’d love to hear from you. Inquire anything you want.</p>
            </div>
            <form method="POST" action="{{ route('userMessage.store') }}" id="contactform" class="contact-form"
                novalidate="novalidate">
                @csrf
                <div class="form">
                    <div>
                        <div class="form-body">
                            <div class="grid-show-wrapper">
                                <div class="control">
                                    <label class="label">
                                        Name
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Your Name" id=""
                                        name="name">
                                </div>

                                <div class="control">
                                    <label class="label">
                                        Email
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Your Email" id=""
                                        name="email">
                                </div>
                                <div class="control">
                                    <label class="label">
                                        Phone
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Phone Number" name="phone">
                                </div>

                                <div class="control">
                                    <label class="label">
                                        Subject
                                        <span class="required">*</span>
                                    </label>
                                    <input class="input" type="text" placeholder="Subject" id=""
                                        name="subject">
                                </div>
                            </div>
                            <div class="message-wrapper">
                                <label class="label">Message <span class="required">*</span></label>
                                <textarea class="textarea" name="message" placeholder="Message" id=""></textarea>
                            </div>
                            <div class="btn-submit">
                                <button type="submit" class="subBtn text-hov" id="">
                                    SUBMIT </button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
        </div>
    </section>

    <section class="section-wrapper">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56525.489391371695!2d85.210285188949!3d27.69124424150373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fbf95bd1ef%3A0x694da54208519a3d!2sHimalaya%20Kailash%20Travels!5e0!3m2!1sen!2snp!4v1707617410858!5m2!1sen!2snp"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>
</main>
