@include('layouts.head')

<title>Forgot Password</title>

@include('layouts.nav')

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
    
                        <!-- backend: form forgot password -->
                        <!-- Form forgot password -->
                        <form action="">   
                            <!-- Text -->
                            <h4 class="text-center mb-3">Forgot password</h4>
                            <p class="text-center mb-4">Enter the email address associated with your F1 Application account.</p>
    
                            <!-- Email input -S->
                            <label for="signup-email" class="form-label text-white">Email address:</label>
                            <div class="mb-5 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" class="form-control" id="signup-email">                        
                            </div>                               
    
                            <!-- Submit input -->
                            <div class="input-group mb-4">
                                <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Continue">
                            </div>

                            <!-- Go back link -->
                            <a href="/login" class="nav-link mb-4"><small>Go Back</small></a>                               
                        </form>              
                    </div>
                </div>
            </div>         
        </section>
    </main>

    @include('layouts.footer')