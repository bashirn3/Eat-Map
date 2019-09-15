@extends('layout.main')

@section('content')
<div id="page-content">
        <div class="container">
            
            
         <section>
            <div class="row" >
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                    <section class="page-title">
                        <h1>Register</h1>
                    </section>
                     
                    <section>
                        <form class="form inputs-underline" action="{{ route('register') }}" method="POST">
                            @csrf
                                
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name" id="name" placeholder="Name" required autofocus>
                                        @if ($errors->has('name'))
                                               <span class="bg-danger">
                                                <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                         @endif
                                    </div>
                                    <!--end form-group-->
                               
                                
                                
                                
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"name="email" id="email" placeholder="Email" required>
                                @if ($errors->has('email'))
                                    <span class="bg-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control{{ $errors->has('password') ? 'is-invalid' : ''}}" name="password" id="password" placeholder="Password" required>
                                @if ($errors->has('password'))
                                    <span class="bg-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="confirm_password" placeholder="Confirm Password">
                                 
                            </div>
                            <!--end form-group-->
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Register Now</button>
                            </div>
                            <!--end form-group-->
                        </form>

                        <hr>

                        <p class="center">By clicking on “Register Now” button you are accepting the <a href="terms-conditions.html">Terms & Conditions</a></p>
                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
            </section>
         
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection
