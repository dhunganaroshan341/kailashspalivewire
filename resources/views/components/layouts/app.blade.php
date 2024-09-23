<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <title>Kailash Group Nepal</title>
    <style>
        .alert {
            padding: 1em;
            margin: 1em 0;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
    @livewireStyles
</head>

<body>
    <header>
        <nav>
            <div class="navbar-wrapper">
                <div class="logo">
                    <a href="/"><img src=" {{ asset('kailashgroupnepal_logo1.jpg') }}" alt = "kailash-group"></a>
                </div>
                <div class="menu-nav-all">
                    <div class="top-nav-wrapper">
                        <div class="nav-container">
                            <div class="top-nav">
                                <div class="tItem">
                                    <ul class="titem-wrapper">
                                        <li class="item"><i class="fa-solid fa-phone"></i><span>+977 01-4265845 ,
                                                4265717 , 4263026</span></li>
                                        <li class="item"><i class="fa-solid fa-envelope"></i>tashikailash@gmail.com
                                        </li>
                                    </ul>
                                    <ul class="titem-wrapper">
                                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-nav">
                        <div class="nav-container">
                            <div class="down-nav">
                                <div class="dItem">
                                    <ul class="left-item-link">
                                        <li class="item"><a href="{{ route('about') }}">About</a></li>
                                        <li class="item"><a href="{{ route('brands') }}">Our Brands</a></li>
                                        <!-- <li class="item isParent"><a href="#">About<i class="fas fa-angle-down"></i></a>
                                           <ul class="parentDropdown">
                                               <li><a href="">About Us</a></li>
                                               <li><a href="">Our Goals</a></li>
                                               <li><a href="">Our Team</a></li>
                                               <li><a href="">Organizational Structure</a></li>
                                               <li><a href="#">News and Events</a></li>
                                           </ul>
                                       </li>                             -->
                                        <li class="item"><a href="{{ route('newsnotice') }}">News & Notices</a></li>
                                        <li class="item"><a href="{{ route('gallerylist') }}">Gallery</a></li>
                                        <li class="item"><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                    <ul class="right-item">
                                        <li class="contact">
                                            <input type="text" placeholder="Search here..." name="search">
                                            <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </nav>
    </header>

    {{ $slot }}


    <footer class="footer-section">
        <div class="container">
            <div class="footer-wrapper">
                <div class="logo-wrapper">
                    <div class="logo-text">Kailash Group Nepal</div>
                    <div class="fdes">A leading conglomerate in construction, manufacturing, trading, and real estate,
                        committed to quality, innovation, and sustainable growth.</div>
                </div>
                <div class="footer-link-wrapper">
                    <div class="footer-item">
                        <div class="footer-title">Quicklinks</div>
                        <ul class="footer-list">
                            <li><a
                                    href="A leading conglomerate in construction, manufacturing, trading, and real estate, committed to quality, innovation, and sustainable growth.">About
                                    Us</a></li>
                            <li><a href="{{ route('brands') }}">Our Brands</a></li>
                            <li><a href="{{ route('gallerylist') }}">Our Guests</a></li>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <div class="footer-title">Other Links</div>
                        <ul class="footer-list">
                            <li><a href="{{ route('gallerylist') }}">Gallery</a></li>
                            <li><a href="{{ route('newsnotice') }}">News & Notices</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-item">
                        <div class="footer-title">Social</div>
                        <ul class="footer-list fcontact">
                            <li class="cell">+977 01-4265845, 4265717, 4263026</li>
                            <li>tashikailash@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-section">
            <div class="container">
                <div class="copyright-section-wrapper">
                    <div class="copyright">Copyright 2024<i class="fa-regular fa-copyright"></i> <span>Kailash Group
                            Nepal</span>. All Rights Reserved</div>
                    <div class="extra-links">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/529c523225.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var owl = $('#banner');
            owl.owlCarousel({
                autoplay: 5000,
                nav: true,
                dots: false,
                loop: true,
                mouseDrag: true,
                navText: ['<span class="fa fa-chevron-left fa-2x"></span>',
                    '<span class="fa fa-chevron-right fa-2x"></span>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('#commit-kailash').owlCarousel({
                autoplay: 2000,
                nav: false,
                loop: false,
                mouseDrag: true,
                dots: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3,
                        margin: 20
                    }
                }
            })
            $('#brands-kailash').owlCarousel({
                autoplay: 2000,
                nav: false,
                loop: false,
                mouseDrag: true,
                dots: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3,
                        margin: 25
                    }
                }
            })

            $('#ta_post').owlCarousel({
                autoplay: 2000,
                nav: false,
                loop: false,
                mouseDrag: true,
                dots: false,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3,
                        margin: 12
                    }
                }
            })
        });
    </script>
    @livewireScripts
</body>

</html>
