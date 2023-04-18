@extends('master.frontend')
@section('title',__('backend.about').' | ' )
@section('front')
    {{--    <section class="section-padding pb-5 mb-5">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row mt-5">--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <img src="{{asset($about->photo)}}" width="850px" height="565px" alt="" class="img-fluid rounded">--}}
    {{--                </div>--}}
    {{--                <div class="col-lg-6 col-md-6">--}}
    {{--                    <h2 class="mb-4">{{ $about->translate(app()->getLocale())->title }}</h2>--}}
    {{--                    <p>{{ $about->translate(app()->getLocale())->description }}</p>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

    <div class="container pb-1">
        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                         <span class="word-rotator-words bg-primary">
{{--										<b class="is-visible">Dırnıs</b>--}}
                         </span>
                        <span>Dırnıs Xeyriyyə Cəmiyyəti</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="750">
        <div class="container py-4">

            <div class="row align-items-center">
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter"
                     data-appear-animation-delay="1000">
                    <div class="owl-carousel owl-theme nav-inside mb-0"
                         data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': false}">
                        <div>
                            <img alt="" class="img-fluid" src="{{asset($about->photo)}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden mb-2">
                        <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation"
                            data-appear-animation="maskUp" data-appear-animation-delay="1200">
                            {{ $about->translate(app()->getLocale())->title }}
                        </h2>
                    </div>
                    <p class="appear-animation" data-appear-animation="fadeInUpShorter"
                       data-appear-animation-delay="1400">{{ $about->translate(app()->getLocale())->description }}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-1 mb-3">
        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                        <span>@lang('frontend.directors')</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-default border-0 appear-animation" data-appear-animation="fadeIn"
             data-appear-animation-delay="750">
        <div class="container">
            <div class="row appear-animation" data-appear-animation="fadeInLeftShorter"
                 data-appear-animation-delay="1000">
                <div class="col">
                    <div class="owl-carousel owl-theme stage-margin nav-style-1 owl-loaded owl-drag owl-carousel-init"
                         data-plugin-options="{'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}"
                         style="height: auto;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(-577px, 0px, 0px); transition: all 0s ease 0s; width: 2967px; padding-left: 40px; padding-right: 40px;">
                                @foreach($directors as $director)
                                    <div class="owl-item appear-animation" data-appear-animation="fadeInLeftShorter"
                                         data-appear-animation-delay="1000">
                                        <div>
                                        <span class="thumb-info thumb-info-hide-wrapper-bg">
        									<span class="thumb-info-wrapper">
        										<img src="{{asset($director->photo)}}"
                                                     class="img-resize-directors" alt="">
                                                <span class="thumb-info-title">
                                                    <span
                                                        class="thumb-info-inner">{{ $director->translate(app()->getLocale())->name }}</span>
                                                    <span
                                                        class="thumb-info-type">{{ $director->translate(app()->getLocale())->position }}</span>
        										</span>
        									</span>

        								</span>
                                            <span
                                                class="thumb-info-caption-text">{{ $director->translate(app()->getLocale())->description }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"></button>
                            <button type="button" role="presentation" class="owl-next"></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-1 mb-3">
        <div class="row pt-4">
            <div class="col">
                <div class="overflow-hidden mb-3">
                    <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                        data-appear-animation="maskUp">
                        <span>@lang('backend.our-forigners')</span>
                    </h2>
                </div>
                <div class="alert alert-success text-center" role="alert">
                    <i class="fas fa-info-circle"></i>
                    @lang('backend.write-contact-us')
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($forigners as $forigner)
                <div class="col-lg-4 mb-4">
                    <ul class="list list-icons">
                        <li><i class="fas fa-user-alt"></i>
                            {{ $forigner->name }}
                        </li>
                        <li><i class="fas fa-phone-alt"></i>
                            {{ $forigner->phone }}
                        </li>
                        <li><i class="fas fa-map-marked-alt"></i>
                            {{ $forigner->location }}
                        </li>
                        @if($forigner->note)
                        <li><i class="fas fa-comment-alt"></i>
                            {{ $forigner->note }}
                        </li>
                        @endif
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
