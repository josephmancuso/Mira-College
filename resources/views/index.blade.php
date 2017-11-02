@extends('layouts.base')

@section('content')
    <section class="header-section">
        <div class="container" style="margin-top:0px;z-index:100">
            <div style="margin-top:30vh;">
                <h1 class="text-center" data-aos="fade-up" style="margin-top:20px;color:#ffffff;font-size:51px;">What Book Would You Like Today?</h1></div>
            <hr data-aos="fade-up" data-aos-delay="100" class="short-hr" style="background-color:#d81e05;font-size:12px;border:2px solid red;">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="text-center">
                        <form action="/search">
                            <input class="form-control form-control" type="text" required="" placeholder="Enter a book title, author, or ISBN" minlength="3" data-aos="fade-up" data-aos-delay="200" style="margin-top:21px;">
                            <button class="btn btn-link btn-round" type="submit" data-aos="fade-up" data-aos-delay="300" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;margin:30px;">Search</button>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="padding:25px;">
        <h1 class="text-center" style="margin-bottom:20px;">How It Works</h1>
        <hr class="short-hr" style="background-color:#d81e05;font-size:12px;border:2px solid red;">
        <p class="text-center">You only pay your monthly subscription</p>
        <div class="container steps-container" style="padding-top:0px;">
            <div class="col-md-3 col-sm-4 col-xs-6 process-step">
                <div class="primary-color primary-background-color step-base" style="background-color:#2cade3;"><strong class="step-title">Step 1</strong>
                    <p class="step-short-desc">Search For a Book</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 process-step">
                <div class="primary-color primary-background-color step-base" style="background-color:#2cade3;"><strong class="step-title">Step 2</strong>
                    <p class="step-short-desc">Find The Book</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 process-step">
                <div class="primary-color primary-background-color step-base" style="background-color:#2cade3;"><strong class="step-title">Step 3</strong>
                    <p class="step-short-desc">We Send It To You</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 process-step">
                <div class="primary-color primary-background-color step-base" style="background-color:#2cade3;"><strong class="step-title">Step 4</strong>
                    <p class="step-short-desc">You Send It Back</p>
                </div>
            </div>
        </div>
    </section>
    <hr class="hidden-sm hidden-md hidden-lg">
    <section style="padding:25px;">
        <h1 class="text-center" style="margin-bottom:20px;">Pricing </h1>
        <hr class="short-hr" style="background-color:#d81e05;font-size:12px;border:2px solid red;">
        <div class="row">
            <div class="col-md-4">
                <div class="text-center" style="background-color:#2cade3;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">Basic </h1><i class="glyphicon glyphicon-send" style="font-size:32px;color:#f7f7f7;"></i></div>
                <div style="height:5vh;background-color:#f7f7f7;"></div>
                <div class="text-center" style="background-color:#2cade3;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">$12.99 /mo</h1></div>
                <div style="background-color:#f7f7f7;">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>2 Books</strong> Out at Anytime</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>Unlimited</strong> Time</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="text-center" style="background-color:#ffffff;padding:0px;">
                                <button class="btn btn-link btn-block" type="button" style="background-color:#2cade3;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" style="background-color:#b31b1b;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">Premium </h1><i class="fa fa-rocket" style="font-size:36px;color:#f7f7f7;"></i></div>
                <div style="height:5vh;background-color:#f7f7f7;"></div>
                <div class="text-center" style="background-color:#b31b1b;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">$18.99 /mo</h1></div>
                <div style="background-color:#f7f7f7;">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>3 Books</strong> Out at Anytime</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>Unlimited</strong> Time</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="text-center" style="background-color:#ffffff;padding:0px;">
                                <button class="btn btn-link btn-block" type="button" style="background-color:#b31b1b;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center" style="background-color:#f1c40f;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">Platnum </h1><i class="fa fa-empire" style="font-size:36px;color:#f7f7f7;"></i></div>
                <div style="height:5vh;background-color:#f7f7f7;"></div>
                <div class="text-center" style="background-color:#f1c40f;padding-top:20px;padding-bottom:20px;">
                    <h1 class="text-center" style="margin-top:10px;color:#ffffff;">$24.99 /mo</h1></div>
                <div style="background-color:#f7f7f7;">
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>4 Books</strong> Out at Anytime</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <div class="col-md-12" style="padding:15px;padding-top:13px;">
                            <p class="text-center" style="margin-bottom:0;"><strong>Unlimited</strong> Time</p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                            <div class="text-center" style="background-color:#ffffff;padding:0px;">
                                <button class="btn btn-link btn-block" type="button" style="background-color:#f1c40f;color:#ffffff;padding-top:18px;padding-bottom:18px;padding-right:36px;padding-left:36px;">Sign Up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection