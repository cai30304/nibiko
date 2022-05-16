@extends('layouts.template')

@section('recaptcha')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('css')
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="/css/index.css">

<style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }

    main #news .container .link .news_title {
        width: calc(100% - 120px);
    }

    main #contact_us form .input-group-outline {
        border: 1px solid white;
    }


    @media(max-width: 575px) {
        main #news .container .link .news_pic {
            width: 90px;
            height: 90px;
        }

    }

</style>
@endsection

@section('content')
    <main>
        <section id="banner">
            <div class="swiper-container" style="overflow-x: hidden">
                <div class="swiper-wrapper">
                    @foreach($banners as $banner)
                        <div class="swiper-slide">
                            <img width="100%" src="{{$banner->img}}" alt="{{$banner->alt}}">
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <section id="about_us">
            <div class="container">
                <div class="content row">
                    <div class="col-12 col-md-4">
                        <div class="company">
                            <span class="title">
                                About NI BI KO
                            </span>
                            <div class="my-1 my-sm-5 px-3">
                                <img width="100%" class="lazy" data-src="/img/about_us.jpg" src="/img/about_us.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="title">
                            Your best partner,<br class="d-xl-none"> NI BI KO
                        </div>
                        <div class="text">
                            <p>
                                Thank you for visiting our website.<br><br>
                                NI BI KO International Trading Co.,Ltd. was a part of Ynx Ching Enterprise Co.,Ltd. Who as the leading manufacture of plastic cable ties, silicone cable ties, stainless steel cable ties, cable ties hand tools in Taiwan.
                                In this era of economic leadership, "Time is Money"
                                The least time to find the product you need is undoubtedly an important part.
                                We uphold the tenet of customer first and help customers find the most suitable products.Quality first is our highest guideline
                                Looking forward to your inquiry<br><br>
                                THANK YOU<br><br>

                                CEO<br>
                                Estla Hsu

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="application">
            <div class="container">
                <div class="content">
                    <span class="title">
                        APPLICATIONS
                    </span>
                    <div class="row">
                        <div class="col-md-3 pb-5 pb-md-0">
                            <div class="news_pic lazy">
                                <img src="\img\building_small.jpg" alt="Application-Building">
                            </div>
                            <div class="news_title text-center">Building</div>
                        </div>
                        <div class="col-md-3 pb-5 pb-md-0">
                            <div class="news_pic lazy">
                                <img src="\img\wriring_small.jpg" alt="Application-Wiring">
                            </div>
                            <div class="news_title text-center">Wiring</div>
                        </div>
                        <div class="col-md-3 pb-5 pb-md-0">
                            <div class="news_pic lazy">
                                <img src="\img\Marine.jpg" alt="Application-Marine">
                            </div>
                            <div class="news_title text-center">Marine</div>
                        </div>
                        <div class="col-md-3 pb-5 pb-md-0">
                            <div class="news_pic lazy">
                                <img src="\img\agruculture_small.jpg" alt="Application-Agriculture">
                            </div>
                            <div class="news_title text-center">Agriculture</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="news">
            <div class="container">
                <div class="content">
                    <span class="title">
                        News
                    </span>
                    @foreach ($all_news as $news)
                        <a class="link" href="/news/{{$news->id}}">
                            <div class="news_pic lazy" data-bg="{{$news->img}}" style="background-image: url({{$news->img}});"></div>
                            <div class="news_title">{{$news->title_ch}}</div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="products">
            <div class="container">
                <div class="content">
                    <span class="title">
                        Products
                    </span>
                </div>
                <div class="products">
                    <div class="row">
                        @foreach ($productTypes as $type)
                            <a href="/Types/{{$type->id}}" class="product">
                                <div class="product_pic">
                                    <div class="h-100 w-100 lazy" data-bg="{{$type->img}}" style="background-image: url({{$type->img}});"></div>
                                </div>
                                <div class="product_name">
                                    {{$type->type_name_ch}}
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <section id="contact_us">
            <div class="container">
                <div class="content">
                    <span class="title">
                        Contact Us
                    </span>
                </div>
                <div class="row bg_picture">

                    <div class="col-12 form_outline">
                        <div class="row justify-content-center">
                            <div class="mask"></div>
                            <div class="col-10">
                                <div class="form_title">
                                    Enquiry
                                </div>
                                <form action="/contact_us" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Company Name:</span>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="companyName">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text">Company Website:</span>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="companyWebsite">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text">Country:</span>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="country">
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text">Business Type:</span>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="business">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text">Contact Name First:</span>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="firstName">
                                        </div>
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text">Last:</span>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="lastName">
                                        </div>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="col-12 col-md-2">
                                            <span class="input-group-text" id="inputGroup-sizing-default">E-mail:</span>
                                        </div>
                                        <div class="col-12 col-md-10">
                                            <input type="text" class="form-control input-group-outline" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required name="email">
                                        </div>
                                    </div>

                                    <div class="border py-2">
                                        <span class="input-group-text">Message:</span>
                                        <div class="input-group text_area">
                                            <textarea class="form-control" aria-label="With textarea" height="300px" required name="content"></textarea>
                                        </div>
                                    </div>

                                    <div class="g-recaptcha" data-sitekey="6LfJjvMfAAAAAJns6znQ3dAh2QFC2ryo3h5fK9SA"></div>
                                    <button class="btn form_button" type="submit">＞</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <a class="backToTop" href="#">
            <span class="m-auto">
                ↑
            </span>
        </a>
    </main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            autoplay: {
                delay: 5000,
            },
            autoHeight: true, //enable auto height
            lazy: true, // lazyload
        });

        var product_imgs = document.querySelectorAll('.product');


        product_imgs.forEach(function (product_img) {
            var pic = product_img.children[0];

            pic.setAttribute("style", 'height:' + pic.offsetWidth + 'px')
        })


        window.addEventListener('resize', function (event) {
            product_imgs.forEach(function (product_img) {
                var pic = product_img.children[0];

                pic.setAttribute("style", ';height:' + pic.offsetWidth + 'px')
            })
        })

    </script>
@endsection
