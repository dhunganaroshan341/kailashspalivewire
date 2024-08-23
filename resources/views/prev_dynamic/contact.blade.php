@extends('layouts.main')

@section('content')
    <section class="banner-common-section">
        <div class="name-middle">
            <div class="home-link"><a href="/home"><span>Home</span></a></div>

            <div class="angle-banner"><i class="fa-solid fa-angle-right" aria-hidden="true"></i></div>

            <div class="navbar-name">
                <h3>Contact</h3>
            </div>
        </div>
    </section>

    <section class="contact-top-wrapper section-wrapper">
        <div class="contact-top-body container">
            <div class="contact-top-details">
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
            </div>
        </div>
    </section>

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

    <section class="section-wrapper">
        <iframe src="{{ $mapUrl }}" width="100%" height="450" style="border:0;" allowfullscreen=""
            loading="lazy"></iframe>
    </section>
@endSection
