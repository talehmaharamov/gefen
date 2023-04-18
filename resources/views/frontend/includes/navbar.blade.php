<section id="topNav">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="topBox">
                    <div class="left">
                        <select name="" id="">
                            @foreach(active_langs() as $lang)
                               <a href="{{ route('frontend.frontLanguage',$lang->code) }}"><option>{{ Str::upper($lang->code) }}</option></a>
                            @endforeach
                        </select>
                    </div>
                    <div class="right">
                        <a href="{{ settings('facebook') }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ settings('instagram') }}"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="Logo">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="logoBox">
                    <a href="{{ route('frontend.index') }}">
                        <img src="{{asset('frontend/img/Logo-2 gefen 1.svg')}}" alt="">
                    </a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</section>
<section id="Navbar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pageLink">
                    <a href="{{ route('frontend.about') }}">@lang('backend.about')</a>
                    <a href="{{ route('frontend.services') }}">@lang('backend.services')</a>
                    <a href="">@lang('backend.products')</a>
                    <a href="{{ route('frontend.createOrder') }}">@lang('backend.create-order')</a>
                    <a href="{{ route('frontend.contact-us-page') }}">@lang('backend.contact-us')</a>
                </div>
            </div>
        </div>
    </div>
</section>
