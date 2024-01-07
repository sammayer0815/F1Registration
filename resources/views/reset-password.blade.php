@include('layouts.head')

<title>Reset Password</title>

@include('layouts.nav')

    <main>   
        <!-- Reset password -->
        <section id="reset-password" class="my-5">
            <div class="container-lg">
                <!-- Row with 1 column (reset password form) -->
                <div class="row justify-content-center">
                    <div class="col-10 col-md-7 bg-f1purple bg-opacity-50 rounded px-4 px-md-5" id="form-container" style="box-shadow: 0px 0px 5px 0.1px #ffff;">
                        
                        <!-- Image -->
                        <div class="d-flex justify-content-center rounded">
                            <img src="../assets/logo-form.png" alt="background image race helmet" class="img-fluid mt-5 mb-4" style="min-width: 50px; max-width: 120px;">  
                        </div>

                        <!-- backend: form reset password -->
                        <!-- Form reset password -->
                        <form action="">   
                            <!-- Text -->
                            <h4 class="text-center mb-3">Reset password</h4>
                            <p class="text-center mb-4">Enter a new password.</p>

                            <!-- Password input -->
                            <label for="login-password" class="form-label text-white">Password:</label>
                            <div class="mb-5 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control" id="login-password">
                            </div>                               

                            <!-- Submit input -->
                            <div class="input-group mb-4">
                                <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Reset">
                            </div>                            
                        </form>              
                    </div>
                </div>  
            </div>      
        </section>
    </main>

    @include('layouts.footer')