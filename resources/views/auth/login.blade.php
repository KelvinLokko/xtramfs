<!-- resources/views/layouts/sign_in.blade.php -->
@extends('layouts.sign_in')

@section('content')

<div class="container bg-white p-0">
      <div class="row no-gutters">
        <div class="col-sm-6 align-self-center">
          <div class="sign-in-from">
            <h1 class="mb-0 dark-signin">Sign in</h1>
            <p>Enter your email address and password to access dashboard.</p>

            <form class="mt-4" id="loginForm" method="POST" action="{{ route('login.submit') }}">
              @csrf

               <!-- Display Server-Side Errors -->
                @if ($errors->any())
                  <div class="alert alert-danger">
                    <ul>
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter Email"
                  required
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                  title="Please enter a valid email address (e.g., user@example.com)"
                  oninput="clearInvalidFlag()"
                />
                <div class="invalid-feedback">
                  Please provide a valid email address.
                </div>
              </div>

              <div class="form-group">
                <label for="password">Password:</label>
                <a href="forget-password" class="float-right">Forgot password?</a>
                <div class="input-group">
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Enter Password"
                    required
                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                    title="Password must be at least 8 characters, contain one uppercase letter, one lowercase letter, and one number."
                    oninput="clearInvalidPasswordFlag()"  
                  />
                  <div class="input-group-append">
                    <button 
                      class="btn btn-outline-secondary" 
                      type="button" 
                      onclick="togglePasswordVisibility()"
                    >
                      <i id="toggleIcon" class="fa fa-eye"></i>
                    </button>
                  </div>
                </div>
                <div class="invalid-feedback" id="passwordFeedback" style="display: none;">
                  Password must be at least 8 characters, contain one uppercase letter, one lowercase letter, and one number.
                </div>
              </div>
              <div class="d-inline-block w-100">

                <button
                  type="submit"
                  class="btn text-white float-right"
                  style="background-color: #007bff; border-color: #007bff"
                >
                  Sign in
                </button>

              </div>
            </form>
            
          </div>
        </div>
        <div class="col-sm-6 text-center">
          <div class="sign-in-detail text-white">
            <a class="sign-in-logo mb-10" href="#"
              ><img
                src="{{asset(path: '/assets/images/npontulogo.png')}}"
                class="img-fluid"
                alt="logo"
                style="width: 200px; height: 100px; margin-top: 60px"
              />
            </a>
            <div class="item">
              <img src="{{asset(path: '/assets/images/bro.png')}}" class="img-fluid mb-4" alt="logo" />
              <p>Report. Analyze. Decide. Simplified.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@push('js')
<script>
document.getElementById('togglePassword').addEventListener('click', function() {
    const password = document.getElementById('password');
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    this.querySelector('i').classList.toggle('fa-eye');
    this.querySelector('i').classList.toggle('fa-eye-slash');
});
</script>
@endpush