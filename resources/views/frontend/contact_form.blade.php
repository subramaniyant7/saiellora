@extends('frontend.layout')


@section('content')


    <main id="content" style="background:#e7c49c;padding-top:4em;">
        <div id="shopify-section-template--15270806192288__main" class="shopify-section">
            <div class="section container cc-animate-init -in cc-animate-complete" data-cc-animate="">
                <div class="reading-column">
                    <div class="page-with-contact-form row space-below">
                        {{-- <div class="rte half column">

                        </div> --}}
                        <div class="half column">
                            <h1 class="page-title">Contact us</h1>
                            <form method="post" action="{{ url(FRONTENDURL.'contact_form') }}" id="contact_form" accept-charset="UTF-8"
                                class="contact-form"><input type="hidden" name="form_type" value="contact">
                                @csrf
                                <div class="input-row">
                                    <label for="contactFormName">Name:</label>
                                    <input type="text" id="contactFormName" name="name" required>
                                </div>
                                <div class="input-row">
                                    <label for="contactFormEmail">Email:</label>
                                    <input type="email" id="contactFormEmail" name="email" required>
                                </div>
                                <div class="input-row">
                                    <label for="contactFormTelephone">Phone:</label>
                                    <input type="telephone" id="contactFormTelephone" name="phone" required>
                                </div>
                                <div class="input-row">
                                    <label for="contactFormMessage">Message:</label>
                                    <textarea rows="15" cols="75" id="contactFormMessage" name="body" required></textarea>
                                </div>
                                <div class="input-row">
                                    <input type="submit" id="contactFormSubmit" value="Send" class="btn">
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>




        </div>
    </main>
@stop
