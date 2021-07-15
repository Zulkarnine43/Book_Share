@extends('frontend.layouts.app')
@section('content')


<h1 class="text-primary mt-5"></h1>

    <section class="my-5">
    <div class="col-lg-6 mx-auto  jumbotron">
        <form class="form-group" action="{{route('user_reg_db')}}" method="POST">
            @csrf
            <div>
                <h1 class="text-center">Register Here</h1>
            </div>


              <div class="form-group row">
                  <!-- Username-->
                    <label class="col-md-2">User-Name</label>
                    <div class="col-md-10">
                    <input type="text" class="form-control" name="name" placeholder="Enter username" required>
           
                    </div>
              </div>


                 <div class="form-group row">
                   <!-- E-mail-->
                    <label class="col-md-2">E-mail</label>

                    <div class="col-md-10">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                  
                    </div>
                </div>


            <div class="form-group row">
                <!-- Mobile-->
                <label class="col-md-2">Mobile</label>
                <div class="col-md-10">
                    <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Enter Your mobile" required>
                 
                </div>
            </div>

             <div class="form-group row">
                <!-- Date of Birth-->
                <label class="col-md-2">Date of Birth</label>
                <div class="col-md-10">
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="" required>
                </div>
            </div>


            <div class="form-group row">
                <!-- Division-->
                <label class="col-md-2">Division</label>
                 <div class="col-md-10">
                <select class="form-control" name="division" required>
                    <option value=""><-------Select Your Division------------></option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Barishal">Barishal</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Rangpur">Rangpur</option>
                </select>
            </div>

            </div>

        
            <div class="form-group row">
               <!-- Address-->
                <label class="col-md-2">Address</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your address" required>
                </div>
            </div>


               <div class=" form-group row">
                 <!-- Gender-->
                  <label class="col-md-2 pt-0">Gender</label>
                  
                  <div class="col-md-10">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="gender" id="gender1" value="male" checked>Male
                      <input class="form-check-input" type="radio" name="gender" id="gender2" value="female">Female
                    </div>
                  </div>

                </div>

            <div class="form-group row">
                <!-- Password-->
                <label class="col-md-2">Password</label>
                <div class="col-md-10">
                    <input type="password" id="password" name="password" placeholder="Enter password ex: Xyz123" class="form-control" required>
       
                </div>
            </div>

            <div class="form-group row">
                <!-- Confirm Password -->
                <label class="col-md-2">Password (Confirm)</label>
                <div class="col-md-10">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="Enter password ex: Xyz123" class="form-control" required>
 
                </div>
            </div>

            <div class="form-group mt-2">
                <!-- Button -->
                <div>
                    <button class="btn btn-block btn-primary">SignUp</button>
                </div>
            </div>
        </form>
        <span>Have an Account?</span><a class="btn btn-outline-primary" href="{{route('usr_login')}}">Login</a>
    </div>
    </section>

@endsection






