@include('layouts.head')

<title>Reset Password</title>

<main>   
        <!-- Forgot password -->
        <section id="forgot-password" class="my-5">
            <div class="container-lg">
                <!-- Row with 1 column (forgot password form) -->
                <div class="row justify-content-center">
                    <div class="col-10 col-md-7 bg-f1purple bg-opacity-50 rounded px-4 px-md-5 mb-5" id="form-container" style="box-shadow: 0px 0px 5px 0.1px #ffff;">
                        
                        <!-- Image -->
                        <div class="d-flex justify-content-center rounded">
                            <img src="../assets/logo-form.png" alt="background image race helmet" class="img-fluid mt-5 mb-4" style="min-width: 50px; max-width: 120px;">  
                        </div>

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <!-- Form forgot password -->
                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                            <!-- Text -->
                            <h4 class="text-center mb-3">Forgot password</h4>
                            <p class="text-center mb-4">Enter the email address associated with your F1 Application account.</p>
    
                            <!-- Email input -->
                            <label for="email" class="form-label text-white">Email address:</label>
                            <div class="mb-5 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>                               
    
                            <button type="submit" class="form-control btn btn-primary py-2 py-sm-3">
                                    {{ __('Send Password Reset Link') }}
                            </button>

                            <!-- Go back link -->
                            <a href="/login" class="nav-link mb-4"><small>Go Back</small></a>                               
                        </form>              
                    </div>
                </div>
            </div>         
        </section>
    </main>

    @include('layouts.footer')