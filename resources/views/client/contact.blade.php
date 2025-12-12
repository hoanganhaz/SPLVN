@extends('client.layouts.master')
@section('content')

    <section class="flat-spacing">
                <div class="container">
                    <div class="contact-us-content">
                        <div class="row">
                            <div class="col-lg-4 mb-lg-30">
                                <h4 class="mb_30 wow fadeInUp">New York</h4>
                                <div class="mb_28">
                                    <h6 class="mb_8">Phone:</h6>
                                    <p class="text-body-default">+1 666 234 8888</p>
                                </div>
                                <div class="mb_28">
                                    <h6 class="mb_8">Email:</h6>
                                    <p class="text-body-default">example@example.com</p>
                                </div>
                                <div class="mb_28">
                                    <h6 class="mb_8">Address:</h6>
                                    <p class="text-body-default">2163 Phillips Gap Rd, West Jefferson, North Carolina,
                                        United States</p>
                                </div>
                                <div>
                                    <h6 class="mb_8">Open Time:</h6>
                                    <p class="text-body-default mb_4 open-time">
                                        <span>Mon - Sat:</span>
                                        7:30am - 8:00pm PST

                                    </p>
                                    <p class="text-body-default open-time">
                                        <span>Sunday:</span>
                                        9:00am - 5:00pm PST
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-7 offset-lg-1">
                                <h4 class="mb_7 wow fadeInUp">Get In Touch</h4>
                                <p class="text_secondary mb_24 wow fadeInUp" data-wow-delay="0.1s">Use the form below to get in touch with the sales team
                                </p>
                                <form id="contactform" action="https://gearo-html.vercel.app/contact/contact-process.php" method="post"
                                    class="form-leave-comment">
                                    <div class="wrap">
                                        <div class="cols">
                                            <fieldset class="">
                                                <input class="" type="text" placeholder="Your Name*" name="name"
                                                    id="name" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="">
                                                <input class="" type="email" placeholder="Your Email*" name="email"
                                                    id="email" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <div class="cols">
                                            <fieldset class="">
                                                <input class="" type="number" placeholder="Phone*" name="phone"
                                                    id="phone" tabindex="2" value="" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="">
                                                <input class="" type="number" placeholder="Order Numbers*"
                                                    name="order-numbers" id="order-numbers" tabindex="2" value=""
                                                    aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <fieldset class="">
                                            <textarea name="message" id="message" rows="4" placeholder="Your Message*"
                                                tabindex="2" aria-required="true" required=""></textarea>
                                        </fieldset>
                                    </div>

                                    <div class="button-submit send-wrap">
                                        <button class="tf-btn btn-onsurface" type="submit">
                                            Send Message <i class="icon-arrow-up-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection