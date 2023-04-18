@extends('master.frontend')
@section('title',__('backend.services').' | ' )
@section('front')
    <section id="Services">
        <div class="container">
            <div class="row my-5">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="servicesCard" style="background-image: url({{ asset($service->photo) }});">
                            <div class="overlay"></div>
                            <div class="servicesText">
                                <h1>{{ $service->name }}</h1>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
