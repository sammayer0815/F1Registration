@include('layouts.head')

<title>Homepage</title>

@include('layouts.nav')

    <main>   
        <!-- Upcoming race -->
        <section id="upcoming-race" class="my-5">
            <div class="container-lg">

                <!-- Header -->
                <div class="upcoming-race-header">
                    <h2>Upcoming Race:</h2>
                    <!-- GP content -->
                    <div class="d-flex align-items-center mb-4">
                        <!-- Backend: name GP, flag and image (and full date?) -->
                        <p class="mb-0 me-2">Bahrain GP (2024)</p>
                        <img src="../assets/Flag_of_Bahrain.png" class="flag-race" alt="flag country race" style="height: 1rem;" >
                    </div>
                </div>       

                <!-- 1 row with 2 columns (background image GP and image racetrack) -->
                <div class="row justify-content-between gy-2">           
                    <!-- Backend: background image GP -->
                    <!-- Left column: background image GP -->
                    <div class="col-10 col-sm-5 p-0 ms-3"> 
                        <img src="../assets/wp12082122-f1-bahrein-2023-wallpapers.jpg" class="img-fluid rounded border border-1 border-white border-opacity-75" alt="background image GP" style="object-fit: cover;">
                    </div>

                    <!-- Backend: image racetrack -->
                    <!-- Right column: image racetrack -->
                    <div class="col-10 col-sm-5 p-0 d-flex align-items-center ms-3 me-sm-3"> 
                        <img src="../assets/Bahrain-circuit-768x432.png" class="img-fluid bg-f1purple bg-opacity-50 rounded border border-1 border-white border-opacity-75" alt="image racetrack"  style="object-fit: cover;">
                    </div>
                </div>
            </div>        
        </section>

        <!-- Leaderboard -->
        <section id="leaderboard" class="mb-5">
            <div class="container-lg">

                <!-- Row with 2 columns (leaderboard header and add time button) -->
                <div class="row justify-content-between align-items-center mb-3">
                    <!-- Column left (header text) -->
                    <div class="col-6">
                        <!-- Backend: change GP name -->
                        <h4 class="text-decoration-underline">Leaderboard <span>Bahrain GP (2024)</span></h4>    
                    </div>

                    <!-- Column right (add time button/modal) -->
                    <div class="col-6 text-end">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-f1purple" data-bs-toggle="modal" data-bs-target="#send-time-modal">Add Time</button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="send-time-modal" tabindex="-1" aria-labelledby="send-time-modal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content text-start">
                                    <!-- Modal header -->
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="send-time-modal">Add your time here</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <!-- Backend: form time -->
                                    <!-- Modal body: form inputs -->
                                    <div class="modal-body">
                                        <form action="" method="post" id="send-time-form">
                                            <label for="race-time">Race Time:</label>
                                            <input type="text" name="time" id="race-time" placeholder="0:00.000" maxlength="8" class="mb-3">
                                            <input type="file" name="file" value="">
                                        </form>
                                    </div>
                                    <!-- Backend: form time submit btn -->
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-f1purple" onclick="submitForm()">Send Time</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row with 3 columns (leaderboard content) -->
                <div class="row g-0 mb-4 border border-2 border-footer">
                    <!-- Column rank -->
                    <div class="col-3">
                        <ul class="list-group">
                            <li class="list-group-item custum-color border-0 fw-bold">Rank</li>
                            <!-- Backend: copy under in a loop -->
                            <li class="list-group-item custum-color border-0">1</li>
                            <li class="list-group-item custum-color border-0">2</li>
                            <li class="list-group-item custum-color border-0">3</li>
                            <li class="list-group-item custum-color border-0">4</li>
                            <li class="list-group-item custum-color border-0">5</li>
                            <li class="list-group-item custum-color border-0">6</li>
                            <li class="list-group-item custum-color border-0">7</li>
                            <li class="list-group-item custum-color border-0">8</li>
                            <li class="list-group-item custum-color border-0">9</li>
                            <li class="list-group-item custum-color border-0">10</li>
                            <li class="list-group-item custum-color border-0">100</li>
                            <li class="list-group-item custum-color border-0">1000</li>
                            <li class="list-group-item custum-color border-0">10000</li>
                        <ul>
                    </div>
                    <!-- Column name -->
                    <div class="col-3">
                        <ul class="list-group text-start">
                            <!-- Backend: copy under in a loop -->
                            <li class="list-group-item custum-color border-0 fw-bold">Name</li>
                            <li class="list-group-item custum-color border-0">hi</li>
                            <li class="list-group-item custum-color border-0">hihihihi</li>
                            <li class="list-group-item custum-color border-0">hi</li>
                            <li class="list-group-item custum-color border-0">11hi2</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                            <li class="list-group-item custum-color border-0">12hihi12</li>
                        <ul>
                    </div>
                    <!-- column time -->
                    <div class="col-3">
                        <ul class="list-group text-end">
                            <!-- Backend: copy under in a loop -->
                            <li class="list-group-item custum-color border-0 fw-bold">Time</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                            <li class="list-group-item custum-color border-0">1:22:21</li>
                        <ul>
                    </div>

                    <!-- Column proof -->
                    <div class="col-3">
                        <ul class="list-group text-end">
                            <!-- Backend: copy under in a loop -->
                            <li class="list-group-item custum-color border-0 fw-bold">Proof</li>
                            <!-- Image link proof -->
                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>

                            <li class="list-group-item custum-color border-0">
                                <a href="" class="text-white">
                                    <i class="bi bi-image"></i>
                                </a>
                            </li>
                        <ul>
                    </div>
                </div>

                <!-- Backend: agination js or php? -->
                <!-- Pagination -->
                <nav aria-label="...">
                    <ul class="pagination justify-content-end">
                        <!-- Go to the previous page -->
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>

                        <!-- Only 3 pages visible  -->
                        <li class="page-item">
                            <a class="page-link active" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>

                        <!-- Go to the next page -->
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                  </nav>
            </div>
        </section>
    </main>

    @include('layouts.footer')
