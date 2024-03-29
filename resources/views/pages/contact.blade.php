@extends("layout.main")
        @section("content")
                 <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <section class="page-title">
                <h1 class="pull-left">Contact</h1>
                <div class="pull-right featured-contact">
                    <i class="icon_comment_alt"></i>
                    <h4>24/7 Support</h4>
                    <h3>08173625431</h3>
                </div>
            </section>
            <!--end section-title-->
        </div>
        <!--end container-->
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <h3>Contact Information</h3>
                        <div class="box">
                            <address>
                                <strong>Location</strong>
                                <figure>36 Liman Street Naibawa</figure>
                                <br>
                                <strong>Phone Number</strong>
                                <figure><a href="">08173625431</a></figure>
                                <br>
                                <strong>Email</strong>
                                <figure><a href="#">EatMap@gmail.com</a></figure>
                                <br>
                                <strong>Customer Care</strong>
                                <figure><a href="#">support@example.com</a></figure>
                            </address>
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-9 col-sm-9">
                        <h3>Form</h3>
                        <form class="form form-email inputs-underline" id="form-hero">
                             @csrf
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject" id="subject">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                            </div>
                            <!--end row-->
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="4" name="message"></textarea>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary icon shadow">Send Message<i class="fa fa-caret-right"></i></button>
                            </div>
                            <!--end form-group-->
                        </form>
                    </div>
                    <!--end col-md-9-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
    </div>
    <!--end page-content-->
         @endsection