@extends('layouts.userlayouts')
@section('styles')
<link href="{{asset('assets/pages/css/contact.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->

        <h1 class="page-title"> <span style="color: #fa2c27;">K</span>asper
            <small>Rental of airline tickets, hotels and cars</small>
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Airline</span>
                </li>
            </ul>

        </div>



            <!-- Start My Content -->


            <!-- ****************** -->
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-body">
                    <div class="c-content-feedback-1 c-option-1 contact-page">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-container bg-green contact-know-more">
                                    <div class="c-content-title-1 c-inverse">
                                        <h3 class="uppercase">Need to know more?</h3>
                                        <div class="c-line-left"></div>
                                        <p class="c-font-lowercase">Try visiting our FAQ page to learn more about
                                            our
                                            greatest ever expanding theme, Metronic.</p>
                                        <button class="btn grey-cararra font-dark">Learn More</button>
                                    </div>
                                </div>
                                <div class="c-container bg-grey-steel contact-question">
                                    <div class="c-content-title-1">
                                        <h3 class="uppercase">Have a question?</h3>
                                        <div class="c-line-left bg-dark"></div>
                                        <form action="#">
                                            <div class="input-group input-group-lg c-square">
                                                <input type="text" class="form-control c-square"
                                                    placeholder="Ask a question" />
                                                <span class="input-group-btn">
                                                    <button class="btn uppercase" type="button">Go!</button>
                                                </span>
                                            </div>
                                        </form>
                                        <p>Ask your questions away and let our dedicated customer service help you
                                            look
                                            through our FAQs to get your questions answered!</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="c-contact contact-form">
                                    <div class="c-content-title-1">
                                        <h3 class="uppercase">Keep in touch</h3>
                                        <div class="c-line-left bg-dark"></div>
                                        <p class="c-font-lowercase">Our helpline is always open to receive any
                                            inquiry or
                                            feedback. Please feel free to drop us an email from the form below and
                                            we will
                                            get back to you as soon as we can.</p>
                                    </div>
                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name"
                                                class="form-control input-md">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Contact Phone"
                                                class="form-control input-md">
                                        </div>
                                        <div class="form-group">
                                            <textarea style="resize: none;" rows="8" name="message" placeholder="Write comment here ..."
                                                class="form-control input-md"></textarea>
                                        </div>
                                        <button type="submit" class="btn grey">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Portlet PORTLET-->










            <!-- End My Content -->


        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

@endsection
