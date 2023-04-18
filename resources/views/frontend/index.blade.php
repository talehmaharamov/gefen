@extends('master.frontend')
@section('front')
    <div role="main" class="main pt-3 mt-3">
        <div class="container">
                <section class="section section-concept section-no-border section-angled section-angled-reverse mb-3">
                    <div class="container">
                        <div class="owl-carousel carousel-center-active-item-3 dots-modern mb-3" data-plugin-options="{'items': 1, 'loop': true, 'margin': 60, 'autoplay': true, 'autoplayTimeout': 4000}">
                            @foreach($sliders as $slider)
                                <div class="border-0 border-radius-0 p-0 mb-3 d-block">
                                    <img class="img-fluid slider-resize" src="{{asset($slider->photo)}}" alt="{{ $slider->alt }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </section>
            @if($firstNews)
                <div class="row pb-1">
                    <div class="col-lg-7 mb-4 pb-2">
                        <a href="{{ route('frontend.selectedPost',$firstNews->id) }}">
                            <article
                                class="thumb-info thumb-info-no-borders thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom border-radius-0">
                                <div class="thumb-info-wrapper thumb-info-wrapper-opacity-6">
                                    <img src="{{ $firstNews->photo }}" class="img-fluid" alt="">
                                    <div class="thumb-info-title bg-transparent p-4">
                                        <div class="thumb-info-type bg-color-dark px-2 mb-1">@lang('backend.news')</div>
                                        <div class="thumb-info-inner mt-1">
                                            <h2 class="font-weight-bold text-color-light line-height-2 text-5 mb-0">
                                                {{ $firstNews->translate(app()->getLocale())->title }}
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                    <div class="col-lg-5">
                        @foreach($thereNews as $tn)
                            <article class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                <div class="row align-items-center pb-1">
                                    <div class="col-sm-5">
                                        <a href="{{ route('frontend.selectedPost',$firstNews->id) }}">
                                            <img src="{{ $tn->photo }}" class="img-fluid border-radius-0 news-resize"
                                                 alt="{{ $tn->translate(app()->getLocale())->title }}">
                                        </a>
                                    </div>
                                    <div class="col-sm-7 ps-sm-1">
                                        <div class="thumb-info-caption-text">
                                            <div
                                                class="thumb-info-type text-light text-uppercase d-inline-block bg-color-dark px-2 m-0 mb-1 float-none">
                                                <a href="{{ route('frontend.allPosts') }}"
                                                   class="text-decoration-none text-color-light">@lang('backend.news')</a>
                                            </div>
                                            <h2 class="d-block line-height-2 text-4 text-dark font-weight-bold mt-1 mb-0 titles">
                                                <a href="{{ route('frontend.selectedPost',$firstNews->id) }}"
                                                   class="text-decoration-none text-color-dark text-color-hover-primary">
                                                    {{ $tn->translate(app()->getLocale())->title }}
                                                </a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="text-center py-3 mb-4">
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-9095041631453435"
                     data-ad-slot="5412897216"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
            </div>
            <div class="row pb-1 pt-2">
                <div class="col-md-12">
                    @foreach($fourNews as $key => $fn)
                        <div class="heading heading-border heading-middle-border">
                            <a href="{{ route('frontend.selectedCategory',['slug' => \App\Models\Category::where('id',$exceptCats[$key])->first()->slug ]) }}">
                                <h3 class="text-4">
                                    <strong class="font-weight-bold text-1 px-3 text-light py-2 bg-primary">
                                        {{ \App\Models\Category::where('id',$exceptCats[$key])->first()->translate(app()->getLocale())->name }}
                                        :
                                    </strong>
                                </h3>
                            </a>
                        </div>
                        @if(count($fn) != 0)
                            <div class="row pb-1">
                                <div class="col-lg-6 mb-4 pb-1">
                                    <article
                                        class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-2 mb-2">
                                        <div class="row">
                                            <div class="col">
                                                <a href="{{ route('frontend.selectedPost',$fn[0]->id) }}">
                                                    <img src="{{ $fn[0]->photo }}" class="img-fluid border-radius-0"
                                                         alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="thumb-info-caption-text">
                                                    <div class="d-inline-block text-default text-1 mt-2 float-none">
                                                        <a class="text-decoration-none text-color-default">
                                                            {{ $fn[0]->created_at->format('d').' '.__('datetime.'.$fn[0]->created_at->format('M')).' '.$fn[0]->created_at->format('Y') }}
                                                        </a>
                                                    </div>
                                                    <h4 class="d-block line-height-2 text-4 text-dark font-weight-bold mb-0">
                                                        <a href="{{ route('frontend.selectedPost',$fn[0]->id) }}"
                                                           class="text-decoration-none text-color-dark text-color-hover-primary">{{ $fn[0]->translate(app()->getLocale())->title }}</a>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-6">
                                    @for($m=1;$m<count($fn);$m++)
                                        <article
                                            class="thumb-info thumb-info-no-zoom bg-transparent border-radius-0 pb-4 mb-2">
                                            <div class="row align-items-center pb-1">
                                                <div class="col-sm-4">
                                                    <a href="{{ route('frontend.selectedPost',$fn[$m]->id) }}">
                                                        <img src="{{ $fn[$m]->photo }}"
                                                             class="img-fluid border-radius-0 news-resize"
                                                             alt=" {{ $fn[$m]->translate(app()->getLocale())->title }}">
                                                    </a>
                                                </div>
                                                <div class="col-sm-8 ps-sm-0">
                                                    <div class="thumb-info-caption-text">
                                                        <div class="d-inline-block text-default text-1 float-none">
                                                            <a class="text-decoration-none text-color-default">
                                                                {{ $fn[$m]->created_at->format('d').' '.__('datetime.'.$fn[$m]->created_at->format('M')).' '.$fn[$m]->created_at->format('Y') }}
                                                            </a>
                                                        </div>
                                                        <h4 class="d-block pb-2 line-height-2 text-3 text-dark font-weight-bold mb-0">
                                                            <a href="{{ route('frontend.selectedPost',$fn[$m]->id) }}"
                                                               class="text-decoration-none text-color-dark text-color-hover-primary">
                                                                {{ $fn[$m]->translate(app()->getLocale())->title }}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    @endfor
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('frontend/js/examples/examples.carousels.js')}}"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
@endsection
