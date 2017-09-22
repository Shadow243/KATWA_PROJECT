@extends('layouts.default')

@section('title') Contact @endsection

@section('content')
    @include('pages.partials.contact-partial')

    <section class="flat-row contact-page pad-top-134">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="contact-address">
                            <div class="style1">
                                <img src="{{ asset('images/icon/c1.png') }}" alt="image">
                            </div>
                            <div class="details">
                                <h5>Our Location</h5>
                                <p>{{ Voyager::setting('school_location_adress') }}</p>
                                <p>{{ Voyager::setting('school_po_box') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="contact-address">
                            <div class="style1">
                                <img src="{{ asset('images/icon/c2.png') }}" alt="image">
                            </div>
                            <div class="details">
                                <h5>Contact us Anytime</h5>
                                <p>Mobile: {{ Voyager::setting('school_contact_phone') }} </p>
                                <p>Email: {{ Voyager::setting('school_contact_email') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="contact-address">
                            <div class="style1">
                                <img src="{{ asset('images/icon/c3.png') }}" alt="image">
                            </div>
                            <div class="details">
                                <h5>Write Some Words</h5>
                                <p>{{ Voyager::setting('school_contact_email') }} </p>
                                <p>Info@domain.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-spacer d74px"></div>
            </div>

            <div id="respond" class="comment-respond contact style2">
                <h1 class="title comment-title">Leave a Message</h1>
                <form id="contactform" class="flat-contact-form style2 bg-dark height-small" method="post" action="./contact/contact-process.php">
                    <div class="field clearfix">
                        <div class="wrap-type-input">
                            <div class="input-wrap name">
                                <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                            </div>
                            <div class="input-wrap email">
                                <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email" required>
                            </div>
                            <div class="input-wrap last Subject">
                                <input type="text" value="" placeholder="Subject (Optinal)" name="subject" id="subject" >
                            </div>
                        </div>
                        <div class="textarea-wrap">
                            <textarea class="" style="height: 70px;" placeholder="Message" name="message" id="message-contact" required></textarea>
                        </div>
                    </div>
                    <div class="submit-wrap">
                        <button class="flat-button bg-orange">Send Your Message</button>
                    </div>
                </form><!-- /.comment-form -->
            </div><!-- /#respond -->
        </div><!-- /.container -->
    </section>

    <!-- Map -->
    <section class="row-map">
        <div class="container-fluid">
            <div class="row">
                <div id="map" style="width: 100%; height: 559px; "></div>
            </div>
        </div><!-- /.container -->
    </section>

@endsection