@include('layouts.head')

<title>Edit Password</title>

@include('layouts.nav')

    <main>
        <!-- Edit password -->
        <section id="edit-password" class="bg-f1dark my-5">
            <div class="container-lg">

                <!-- Row with 2 columns (aside-nav and their content-form) -->
                <div class="row justify-content-around pt-5">
                    <!-- aside-nav -->
                    <div class="col-4 col-sm-3 col-md-2" style="border-right: 1px solid white;">
                        <div id="aside-nav" class="d-flex align-items-start">
                            <ul class="navbar-nav column-gap-3">
                                <li class="nav-item">
                                    <a href="/edit-profile" class="nav-link btn btn-f1red text-white">Edit Profile</a>      
                                </li>
                                <li class="nav-item">
                                    <a href="/edit-password" class="nav-link btn btn-f1red text-white">Password</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/edit-admin" class="nav-link btn btn-f1red text-white">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/edit-delete-profile" class="nav-link btn btn-f1red text-white">Delete Profile</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Backend: form -->
                    <!-- content-form -->
                    <div class="col-6 col-md-5">
                        <form action="">                           
                            <!-- Old password input -->
                            <label for="password" class="form-label text-white">Old Password:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control" id="password">
                            </div>

                            <!-- New password input -->
                            <label for="new-password" class="form-label text-white">New Password:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control" id="new-password">
                            </div>

                            <!-- Confirm new password input -->
                            <label for="confirm-new-password" class="form-label text-white">Confirm New Password:</label>
                            <div class="mb-5 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" class="form-control" id="confirm-new-password">
                            </div>

                            <!-- Submit input -->
                            <div class="input-group mb-4">
                                <input type="submit" class="form-control btn btn-primary py-2 py-sm-3" value="Update Profile">
                            </div>                               
                        </form>
                    </div>
                </div>        
            </div>    
        </section>
    </main>

    <footer class="bg-footer text-white mt-auto">
        <div class="row">
            <div class="col-4 my-2">
                <p class="text-center">Daniel</p>
                <p><i class="bi bi-github text-f1red ms-2 me-3"></i>Daniel</p>
                <i class="bi bi-envelope-fill text-f1red d-flex ms-2"><span class="small-email-font text-white ms-3">daniel.pustjens@gmail.com</span></i>
            </div>
            <div class="col-4 mt-2">
                <p class="text-center">Sam</p>
                <p><i class="bi bi-github text-f1red me-3"> </i>Sam</p>
                <i class="bi bi-envelope-fill text-f1red d-flex"><span class="small-email-font text-white ms-3">daniel.pustjens@gmail.com</span></i>
            </div>
            <div class="col-4 mt-2">
                <p class="text-center">Yusuf</p>
                <p><i class="bi bi-github text-f1red me-3"></i>Yusuf</p>
                <i class="bi bi-envelope-fill text-f1red d-flex"><span class="small-email-font text-white ms-3">daniel.pustjens@gmail.com</span></i>
            </div>
        </div>

        
    </footer>

</body>
</html>