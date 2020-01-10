@extends('layouts.app')

@section('content')
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" data-transition="zipReveal" data-duration="1500" style="background-image:url(images/slider-01.jpg);">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1> Vjenčanje iz snova</h1>

                                <a href="{{ route('register') }}" class="btn ">Registriraj se</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1>Vjenčanje iz snova</h1>

                                <a href="{{ route('register') }}" class="btn ">Registriraj se</a>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" data-transition="shrinkReveal" data-duration="2000" style="background-image:url(images/slider-03.jpg);">
                        <div class="lbox-caption">
                            <div class="lbox-details">
                                <h1>Vjenčanje iz snova</h1>

                                <a href="{{ route('register') }}" class="btn">Registriraj se</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
