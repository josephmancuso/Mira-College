@extends('layouts.base')

@section('content')
    <section class="header-section">
        <div class="container" style="margin-top:0px;z-index:100">
            <div style="margin-top:30vh;">
                <h1 class="text-center" data-aos="fade-up" style="margin-top:20px;color:#ffffff;font-size:51px;">Rich Dad Poor Dad</h1></div>
        </div>
    </section>
    <div>
        <div class="container" style="padding-top:20px;">
            <div class="row">
                <div class="col-md-4 text-center"><img src="img/Rich_Dad_Poor_Dad.jpg" style="height:200px;">
                    <h2>Rich Dad Poor Dad</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque</p>
                    <button class="btn btn-link btn-round" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:0;">Checkout </button>
                </div>
                <div class="col-md-8">
                    <p>Rating: <i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star" style="color:#ffd700;"></i><i class="fa fa-star-half"
                        style="color:#ffd700;"></i></p><span class="label label-primary">Books Available: 1</span><span class="label label-danger">Books Available: 0 <span style="text-decoration: underline;">upgrade</span></span>
                    <h2>Description </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dapibus felis et libero scelerisque, sed aliquet nulla tincidunt. Quisque lorem nisl, semper vitae mattis nec, vestibulum nec risus. Sed ut volutpat tortor, ut sodales
                        diam.</p>
                </div>
            </div>
        </div>
    </div>
@endsection