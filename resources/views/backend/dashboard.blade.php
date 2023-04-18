@extends('master.backend')
@section('title',__('backend.dashboard'))
@section('content')
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <i class="ri-loader-line spin-icon"></i>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    @can('posts index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('backend.news')</p>
                                            <h4 class="mb-2 wb-all">
                                                {{$counts['news'] }}
                                            </h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="ri-pages-fill font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('backend.posts')</p>
                                            <h4 class="mb-2 wb-all">{{ $counts['posts'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-blog font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('directors index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('frontend.directors')</p>
                                            <h4 class="mb-2 wb-all"> {{ $counts['directors'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-users font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('contact-us index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('frontend.contact-us')</p>
                                            <h4 class="mb-2 wb-all"> {{ $counts['contactUs'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-user font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('forigners index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="wbb-all font-size-14 mb-2">@lang('backend.our-forigners')</p>
                                            <h4 class="mb-2 wb-all"> {{ $counts['forigners'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-newspaper font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @auth()
                        @can('posts create')
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <p class="text-truncate font-size-14 mb-2">@lang('backend.sharedPostMe')</p>
                                                <h4 class="mb-2 wb-all"> {{ $counts['sharedPostCount'] }}</h4>
                                            </div>
                                            <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-newspaper font-size-24"></i>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endcan
                    @endauth
{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.general') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['generalViews'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-eye font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.posts') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['allViews'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-blog font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.news') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['newsViews'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-newspaper font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.home-page') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['homeCount'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-home font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.categories') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['categoriesCount'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-bookmark font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.news') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['newsCount'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-paperclip font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.about') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['aboutCount'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-info font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-xl-3 col-md-6">--}}
{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="d-flex">--}}
{{--                                    <div class="flex-grow-1">--}}
{{--                                        <p class="text-truncate font-size-14 mb-2">@lang('backend.contact-us') @lang('backend.views')</p>--}}
{{--                                        <h4 class="mb-2 wb-all"> {{ $counts['contactCount'] }}</h4>--}}
{{--                                    </div>--}}
{{--                                    <div class="avatar-sm">--}}
{{--                                    <span class="avatar-title bg-light text-info rounded-3">--}}
{{--                                        <i class="fas fa-user-check font-size-24"></i>--}}
{{--                                    </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    @can('slider index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('backend.slider')</p>
                                            <h4 class="mb-2 wb-all"> {{ $counts['sliderCount'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-sliders-h font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('seo-tags index')
                        <div class="col-xl-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <p class="text-truncate font-size-14 mb-2">@lang('backend.tags')</p>
                                            <h4 class="mb-2 wb-all"> {{ $counts['tagCount'] }}</h4>
                                        </div>
                                        <div class="avatar-sm">
                                    <span class="avatar-title bg-light text-info rounded-3">
                                        <i class="fas fa-tags font-size-24"></i>
                                    </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
