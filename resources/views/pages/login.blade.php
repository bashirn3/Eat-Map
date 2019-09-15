@extends("layout.main")
@section('content')
    <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4">
                
                    <section class="page-title">
                        <h1>Login</h1>
                    </section>
                    <!--end page-title-->
                    <section>
                        <form class="form inputs-underline" action="{{route('login')}}"  method="POST">
                             @csrf
                            <div class="form-group">
                                 <label for="email">Email</label></strong>
                            
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" id="email" placeholder="Your email" required >
                                @if ($errors->has('email'))
                                    <span class="bg-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password"  name="password" id="password" placeholder="Your password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required >
                                @if($errors->has('password'))
                                    <span class="bg-danger">
                                         <strong>{{$errors->first('password')}}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                        
                                    <label class="form-check-label" for="remember">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                           
                            <div class="form-group center">
                                <button type="submit" class="btn btn-primary width-100">Login</button>
                            </div>
                            <!--end form-group-->
                        </form>
                       



                        <hr>
                        @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}">Forgot your password ? </a>
                        @endif

                    </section>
                </div>
                <!--col-md-4-->
            </div>
            <!--end ro-->
        </div>
        <!--end container-->
@endsection