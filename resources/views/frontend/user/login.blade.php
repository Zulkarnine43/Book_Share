@extends('frontend.layouts.app')
@section('content')

    <section class="my-3">
        <div class="col-lg-6 mx-auto  jumbotron">
            <form class="form-group" action="{{route('user_db_action')}}" method="POST">
                @csrf
                <div>
                    <h1 class=" text-center">Login Here</h1>
                </div>

                 <div class="form-group row">
                   <!-- E-mail-->
                    <label class="col-sm-2">E-mail</label>

                    <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" required>
                  
                    </div>
                </div>


                  <div class="form-group row">
                <!-- Password-->
                        <label class="col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" placeholder="Enter your Password" class="form-control" required>
                          
                        </div>
                    </div>

                <div class="control-group mt-2">
                    <!-- Button -->
                    <div>
                        <button class="btn btn-block btn-primary">Login</button>
                    </div>
                </div>
            </form>
           <span>Not an Account?</span><a class="btn btn-outline-primary" href="{{route('user_signup')}}">SignUp</a>
            <button class="btn btn-outline-primary" data-toggle="modal" data-target="#ForgotPasswordModal">Forgot Password</button>
        </div>
    </section>


    <div class="modal" id="ForgotPasswordModal">
        <div class="modal-dialog">
            <div class="modal-content bg-light">
                <div class="modal-header">
                    <h3>Forgot Password</h3>
                    <button class="close text-dark" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="" class="form-control" placeholder="Enter your email" required>
                        </div>
                        <input type="submit" value="Send" class="btn btn-primary btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection