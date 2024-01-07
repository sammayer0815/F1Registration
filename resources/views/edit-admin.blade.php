@include('layouts.head')

<title>Delete User</title>

@include('layouts.nav')

    <main>
        <!-- Admin page -->
        <section id="admin-page" class="bg-f1dark my-5">
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
                            <h5 class="text-center text-white mb-3" id="header-admin-profile">Find User:</h5>

                            <!-- Find user input -->
                            <div class="mb-5 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control" id="find-user">
                            </div>

                            <!-- Submit input -->
                            <div class="input-group mb-4">
                                <input type="submit" class="form-control btn btn-f1red py-2 py-sm-3" value="Delete User">
                            </div>                               
                        </form>
                    </div>
                </div>    
            </div>    
        </section>
    </main>

    @include('layouts.footer')