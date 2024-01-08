@include('layouts.head')

<title>Home</title>

    <main>   
        <!-- Intro header -->
        <section id="intro" class="mt-4">
            <div class="container-lg">
                <h2 class="">Welcome To TechTribe!</h2>
                <p>The Race Page To Track The Fastest Laps.</p>
            </div>
        </section>

        <!-- Upcoming race -->
        <section id="upcoming-race" class="mt-5">
            <div class="container-lg">
                <h4 class="mb-3 text-decoration-underline">Upcoming Race:</h4>

                <!-- 1 row with 2 columns (GP and leaderboard) -->
                <div class="row justify-content-between">
                    <!-- Column GP -->
                    <div class="col-10 col-md-6 mb-3">
                        <!-- Backend: gp name (and perhaps date instead of year?)-->
                        <h5 class="mb-3"><span>Bahrain GP</span> (2024)</h5> 
                        <!-- Backend: image -->
                        <img src="../assets/Bahrain-circuit-768x432.png" class="img-fluid bg-f1purple bg-opacity-50 rounded border border-1 border-white border-opacity-75 mb-3" alt="Upcoming race track image"  style="object-fit: cover;">             
                        <!-- Backend: link upcoming race -->
                        <a href="/upcoming-race.html" class="text-white d-none d-md-block">Click here for the full leaderboard on this race</a>
                    </div>
            
                    <!-- Column leaderboard -->
                    <div class="col-12 col-md-6 mb-5" id="leaderboard" >   
                        <h5 class="mb-3">Leaderboard</h5>

                        <!-- 1 row with 3 columns (rank, name and time)-->
                        <div class="row g-0 border border-2 border-footer">
                            <!-- Column rank -->
                            <div class="col-4">
                                <ul class="list-group">
                                    <li class="list-group-item custum-color border-0 fw-bold">Rank</li>
                                    <!-- Backend: copy under in a loop til rank 8th -->
                                    <li class="list-group-item custum-color border-0">1</li>
                                    <li class="list-group-item custum-color border-0">2</li>
                                    <li class="list-group-item custum-color border-0">3</li>
                                    <li class="list-group-item custum-color border-0">4</li>
                                    <li class="list-group-item custum-color border-0">5</li>
                                    <li class="list-group-item custum-color border-0">6</li>
                                    <li class="list-group-item custum-color border-0">7</li>
                                    <li class="list-group-item custum-color border-0">8</li>
                                <ul>
                            </div>
                            <!-- Column Name -->
                            <div class="col-4">
                                <ul class="list-group text-center">
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
                                <ul>
                            </div>
                            <!-- Column time -->
                            <div class="col-4">
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

                                <ul>
                            </div>
                        </div>
                        <!-- Link to go to the full page -->
                        <a href="/upcoming-race" class="d-md-none text-white">Click here for the full leaderboard on this race</a>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- All races -->
        <section id="all-races" class="mt-4 mb-5">
            <div class="container-lg">
                <h4 class="mb-3 text-decoration-underline">All Races:</h4>
                <!-- 1 row with 1 column (calendar image) -->
                <div class="row">
                    <div class="col-10 col-md-6">
                        <img src="https://corp.formula1.com/wp-content/uploads/2023/07/F1-2024-Calendar-16x9-1-1024x576-1.jpg" class="img-fluid rounded border border-1 border-white border-opacity-75 mb-3" alt="image of the f1 2024 calendar">      
                    </div>
                    <!-- Link to go to the full page -->
                    <a href="/all-races" class="text-white">Click here for all the races</a>
                </div>
            </div>
        </section> 
    </main>

    @include('layouts.footer')