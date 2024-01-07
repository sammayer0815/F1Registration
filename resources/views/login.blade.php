@include('layouts.head')

<title>Login</title>

@include('layouts.nav')

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
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Signup</button>
                            </li>               
                        </ul>
                        
                        <!-- Tabs content -->
                        <div class="tab-content" id="pills-tabContent">
                            
                            <!-- Left tab (login form) -->
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                                <!-- Backend: form login -->
                                <form action="">                           
                                    <!-- Username input -->
                                    <label for="login-username" class="form-label text-white">Username:</label>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="text" class="form-control" id="login-username">
                                    </div>
        
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
                                        <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Submit">
                                    </div>

                                    <!-- Forgot password link -->
                                    <a href="/forgot-password" class="nav-link mb-4"><small>Forgot Password?</small></a>                               
                                </form>
                            </div>

                            <!-- Right tab (signup form) -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                                <!-- Backend: form signup -->
                                <form action="">                           
                                    <!-- Username input -->
                                    <label for="signup-username" class="form-label text-white">Username:</label>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        <input type="text" class="form-control" id="signup-username">
                                    </div>
        
                                    <!-- Email input -->
                                    <label for="signup-email" class="form-label text-white">Email address:</label>
                                    <div class="mb-4 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope-fill"></i>
                                        </span>
                                        <input type="email" class="form-control" id="signup-email">                        
                                    </div>

                                    <!-- Password input -->
                                    <label for="signup-password" class="form-label text-white">Password:</label>
                                    <div class="mb-5 input-group">
                                        <span class="input-group-text">
                                            <i class="bi bi-lock-fill"></i>
                                        </span>
                                        <input type="password" class="form-control" id="signup-password">
                                    </div>
                                            
                                    <!-- Submit input -->
                                    <div class="input-group mb-4">
                                        <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Submit">
                                    </div>                               
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>      
        </section>
    </main>

    @include('layouts.footer')