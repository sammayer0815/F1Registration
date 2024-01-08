@include('layouts.head')

<title> Login </title>

<main>
        <!-- Login and signup -->
        <section id="login-signup" class="my-5">
            <div class="container-lg">
                <!-- Row with 1 column (form) -->
                <div class="row justify-content-center">
                    <div class="col-10 col-md-7 bg-f1purple bg-opacity-50 rounded px-4 px-md-5" style="box-shadow: 0px 0px 5px 0.1px #ffff;">  
                        <!-- Image -->
                        <div class="d-flex justify-content-center rounded">
                            <img src="../assets/logo-form.png" alt="background image race helmet" class="img-fluid mt-5 mb-4" style="min-width: 50px; max-width: 120px;">  
                        </div>
                        <!-- Tabs button -->
                        <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="{{ route('register') }}" class="nav-link" id="pills-profile-tab" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</a>
                            </li>
                        </ul>
                        
                        <!-- Tabs content -->
                        <div class="tab-content" id="pills-tabContent">
                            
                            <!-- Left tab (login form) -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <!-- Backend: form login -->
                                <form method="POST" action="{{ route('login') }}">         
                                    @csrf                
                                    <!-- Email input -->
                                    <label for="login-email" class="form-label text-white">Email:</label>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
        
                                    <!-- Password input -->
                                    <label for="login-password" class="form-label text-white">Password:</label>
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>                          

                                    <button type="submit" class="form-control btn btn-primary py-2 py-sm-3">
                                        {{ __('Login') }}
                                    </button>
                                    <!-- Forgot password link -->
                                    <a href="/forgot-password" class="nav-link mb-4"><small>Forgot Password?</small></a>                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>      
        </section>
    </main>

@include('layouts.footer')
