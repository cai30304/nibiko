@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="/css/product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" />

{{-- <style>
    main #news .container .link .news_pic {
        background-size: cover;
        background-position: center;
    }
</style> --}}
@endsection

@section('content')
<main>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item">Products</li>
                <li class="breadcrumb-item active" aria-current="page">{{$product->name_ch}}</li>
            </ol>
        </nav>
        <div class="products">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img width="100%" src="{{$product->img}}" alt="">

                </div>
                <div class="col-12 col-md-6 mt-3 mt-md-0">
<pre style="white-space: break-spaces;word-break: break-all;">
{{$product->content_ch}}
</pre>
                </div>
                <div class="col-12 mt-3">
                    {!! $product->datail_ch !!}
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.3.1/dist/lazyload.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script>

@endsection
