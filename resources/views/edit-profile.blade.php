@include('layouts.head')

<title>Edit Profile</title>

@include('layouts.nav')

<main class>
    <!-- Edit profile -->
    <section id="edit-profile" class="my-5">
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
                    
                    <!-- backend: form -->
                    <!-- content-form -->
                    <div class="col-6 col-md-5">
                        <form action="">                           
                            <!-- Profile picture input -->
                            <div class="mb-4 d-flex flex-column align-items-center">
                                <!-- Image -->
                                <img src="../assets/f1-team-logo/redbull-logo.jpeg" id="default-pfp" class="rounded-circle img-fluid border border-2 mb-4" alt="profile picture">
                                
                                <!-- Button trigger modal -->
                                <button type="button" class="btn border text-white" data-bs-toggle="modal" data-bs-target="#edit-profile-picture-modal">Add Profile Picture</button>
                                
                                <!-- Modal (profile picture) -->
                                <div class="modal fade" id="edit-profile-picture-modal" tabindex="-1" aria-labelledby="edit-profile-picture-modal" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content text-start">
                                            <!-- Modal header -->
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="edit-profile-picture-modal">Choose your profile picture</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <!-- Backend: form time -->
                                            <!-- Modal body: form images -->
                                            <div class="modal-body px-0 text-center">
                                                <form action="" method="post" id="send-time-form">
                                                    <img src="../assets/f1-team-logo/redbull-logo.jpeg" alt="redbull logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/alpha-logo.jpeg" alt="alpha logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/alpine-logo.jpeg" alt="alpine logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/mercedes-logo.jpeg" alt="mercedes logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/aston-logo.jpeg" alt="aston logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/mclaren-logo.jpeg" alt="mclaren logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/ferrari-logo.jpeg" alt="ferrari logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/haas-logo.jpeg" alt="haas logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/williams-logo.jpeg" alt="williams logo" style="width: 150px;" class="img-fluid mb-1 border">
                                                    <img src="../assets/f1-team-logo/alfa-logo.jpeg" alt="alfalogo" style="width: 150px;" class="img-fluid mb-1 border">
                                                </form>
                                            </div>
                                            <!-- Backend: form time submit btn -->
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-f1purple" onclick="submitForm()">Add Picture</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Username input -->
                            <label for="username" class="form-label text-white">Username:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control" id="username" value="Test1">
                            </div>

                            <!-- Email input -->
                            <label for="email" class="form-label text-white">Email address:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" class="form-control" id="email" value="test123@gmail.com">                        
                            </div>
                                    
                            <!-- About input -->
                            <label for="about" class="form-label text-white">About:</label>
                            <div class="input-group mb-5">                              
                                <textarea id="about" class="form-control" style="height: 140px;" value="">I love f1!</textarea>    
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

@include('layouts.footer')


