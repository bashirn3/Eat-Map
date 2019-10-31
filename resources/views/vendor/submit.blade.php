@extends("layout.main")
@section("content")

<div class="container">

            <section class="page-title center">
                <h1>Submit Vendor</h1>
            </section>
            <!--end page-title-->
            <section>
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <form method = "POST" class="form inputs-underline" action="{{ route('vendors.store') }}">
                        @csrf
                            <section>
                                <h3>About</h3>
                                <div class="row">
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <label for="name">Vendor Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" name="category" id="category">
                                                <option value="">Category</option>
                                                <option value="1">Restaurant</option>
                                                <option value="2">Bakery</option>
                                                <option value="3">Small-chops</option>
                                                <option value="4">Others</option>
                                                <option value="5">Event</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--col-md-3-->
                                </div>
                                <!--end row-->
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="4" name="description" placeholder="Describe"></textarea>
                                </div>
                                <!--end form-group-->
                               <!-- <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <input type="text" class="form-control" name="tags" id="tags" placeholder="+ Add tag">
                                </div> -->
                                <!--end form-group-->
                            </section>
                            <section>
                                <h3>Contact</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="address-autocomplete">Address</label>
                                            <input type="text" class="form-control" name="address" id="address-autocomplete" placeholder="Address">
                                        </div>
                                        <!--end form-group-->
                                            <div class="map height-200px shadow" id="map-submit"></div>
                                        <!--end map-->
                                        <div class="form-group hidden">
                                            <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                                            <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                                        </div>
                                        <p class="note">Enter the exact address or drag the map marker to position</p>
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <select class="form-control" name="location" id="location">
                                                <option value="">Select Location</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Abuja">Abuja</option>
                                                
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="phone">Vendor Phone 1</label>
                                            <input type="text" class="form-control" name="phone_1" id="phone" placeholder="Phone number">
                                        </div>
                                        <!--end form-group--> 
                                        <div class="form-group">
                                            <label for="phone">Vendor Phone 2 (Optional)</label>
                                            <input type="text" class="form-control" name="phone_2" id="phone" placeholder="Phone number">
                                        </div>
                                        <!--end form-group-->

                                        <div class="form-group">
                                            <label for="email">Vendor Email</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="hello@example.com">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="website">Vendor Website</label>
                                            <input type="text" class="form-control" name="website" id="website" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                            </section>
                           
                            <section>
                                <h3>Social(Optional)</h3>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="facebook">Facebook URL</label>
                                            <input type="text" class="form-control" name="facebook" id="facebook" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for=twitter>Twitter URL</label>
                                            <input type="text" class="form-control" name="twitter" id="twitter" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="instagram">Instagram URL</label>
                                            <input type="text" class="form-control" name="instagram" id="instagram" placeholder="http://">
                                        </div>
                                        <!--end form-group-->
                                        
                                    </div>
                                    <!--end col-md-6-->
                                </div>
                                <!--end row-->
                            </section>
                            <section>
                                    <div class="row">
                                     <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="opening">Opening hours</label>
                                            <input type="text" class="form-control" name="opening_hours" id="opening" placeholder="Open">
                                        </div>
                                        <!--end form-group-->
                                        
                                    </div>
                                    <!--end col-md-6-->
                                      <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="closing">Closing hours</label>
                                            <input type="text" class="form-control" name="closing_hours" id="closing" placeholder="Close">
                                        </div>
                                        <!--end form-group-->
                                </div>
                                <!--end row-->
                            </section>
                           
                            <hr>

                            <section class="center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-rounded">Preview & Submit Vendor</button>
                                </div>
                                <!--end form-group-->
                            </section>
                        </form>
                        <!--end form-->
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </section>
        </div>
        <!--end container-->
       
@endsection