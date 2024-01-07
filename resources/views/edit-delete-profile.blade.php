@include('layouts.head')

<title>Delete Profile</title>

@include('layouts.nav')

    <main>
        <!-- Delete profile -->
        <section id="delete-profile" class="bg-f1dark my-5">
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

                    <!-- Content-form -->
                    <div class="col-6 col-md-5">
                        <form action="">                           
                            <h5 class="text-center text-white mb-5" id="header-delete-profile">Click on the delete button if you want to delete your profile</h5>

                            <!-- Delete input -->
                            <div class="input-group mb-5">
                                <input type="submit" class="form-control btn btn-f1red py-2 py-sm-3" value="Delete Profile">
                            </div>                               
                        </form>
                    </div>
                </div>
            <div>       
        </section>
    </main>

    @include('layouts.footer')