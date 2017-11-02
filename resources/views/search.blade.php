@extends('layouts.base')

@section('content')
    <section class="header-section">
        <div class="container" style="margin-top:0px;z-index:100">
            <div style="margin-top:30vh;">
                <h1 class="text-center" data-aos="fade-up" style="margin-top:20px;color:#ffffff;font-size:51px;">Find Your Book</h1></div>
        </div>
    </section>
    <section style="padding-top:20px;">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 text-center"><img src="img/Rich_Dad_Poor_Dad.jpg" style="height:200px;">
                    <h4>Rich Dad Poor Dad</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                    <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">View </button>
                </div>
                <div class="col-sm-4 text-center"><img src="img/Rich_Dad_Poor_Dad.jpg" style="height:200px;">
                    <h4>Rich Dad Poor Dad</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                    <a href="/book">
                        <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">View </button>
                    </a>
                </div>
                <div class="col-sm-4 text-center"><img src="img/Rich_Dad_Poor_Dad.jpg" style="height:200px;">
                    <h4>Rich Dad Poor Dad</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                    <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">View </button>
                </div>
            </div>
        </div>
    </section>
@endsection