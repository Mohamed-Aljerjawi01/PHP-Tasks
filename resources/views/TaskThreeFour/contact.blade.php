@extends('TaskThreeFour.master')
@section('content')
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->

                        <form id="contactForm" method="post" action="{{route('taskthreefour.postform')}}" enctype="multipart/form-data">
                            <!-- hidden input-->
                            <div class="form-floating mb-3">
                                <input type="hidden" name="_token" value=" {{ csrf_token() }} "/>
                            </div>
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..."/>
                                <label for="name">Full name</label>
                            </div>

                            @error('name')
                                <small style='color: red;'>{{ $message }}</small>
                            @enderror

                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required/>
                                <label for="email">Email address</label>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890"/>
                                <label for="phone">Phone number</label>
                            </div>
                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control @error('message') is-invalid  @enderror" id="message" name="message" type="text" placeholder="Enter your message here..." style="height: 10rem"></textarea>
                                <label for="message">Message</label>
                            </div>

                            @error('message')
                                    <small class="invalid-feedback">{{ $message }}</small>
                            @enderror

                            <!-- file input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" type="file" name="image"/>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->

                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!-- Submit Button-->
                            <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
@stop