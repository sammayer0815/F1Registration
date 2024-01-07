@include('layouts.head')

<title>All Races</title>

@include('layouts.nav')

    <main>   
        <!-- All races -->
        <section id="all-races" class="my-5">
            <div class="container-lg">
                <h2 class="mb-4">All races</h2>

                <!-- 1 row with 1 column (accordian) -->
                <div class="row">
                    <div class="col-12">
                        <!-- Accordian -->
                        <div class="accordion" id="accordian-all-races">
                            <!-- Backend: loop accoridan item and change "1" with +1 (2,3,4 ect.) -->
                            <!-- Accordian item -->
                            <div class="accordion-item">
                                <!-- Accordian header -->
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="true" aria-controls="panelsStayOpen-collapse1">
                                        <!-- Backend: race number and name GP -->
                                        Race&nbsp; <span>1</span> :&nbsp; <span>Bahrain GP (2024)</span>
                                    </button>
                                </h2>
                                <!-- Accordian content -->
                                <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <!-- Content header -->
                                        <div class="d-flex align-items-center mb-4">
                                            <!-- Backend: name GP and flag -->
                                            <p class="fw-bold mb-0 me-2">Bahrain GP (2024)</p>
                                            <img src="Flag_of_Bahrain.png" class="flag-race" alt="" style="height: 1rem;" >
                                        </div>
                        
                                        <!-- 1 row with 2 columns (background image  GP and image racetrack) -->
                                        <div class="row justify-content-between gy-2">

                                            <!-- Backend: background image GP -->
                                            <!-- Left column: background image GP -->
                                            <div class="col-10 col-sm-5 p-0 ms-3 d-none d-sm-block"> 
                                                <img src="../assets/wp12082122-f1-bahrein-2023-wallpapers.jpg" class="img-fluid rounded border border-1 border-white border-opacity-75" alt="background image of the GP" style="object-fit: cover;">
                                            </div>
                        
                                            <!-- Backend: image racetrack -->
                                            <!-- Right column: image racetrack -->
                                            <div class="col-10 col-sm-5 p-0 d-flex align-items-center ms-3 me-sm-3 mb-2"> 
                                                <img src="../assets/Bahrain-circuit-768x432.png" class="img-fluid bg-f1purple bg-opacity-50 rounded border border-1 border-white border-opacity-75" alt="image of racetrack"  style="object-fit: cover;">
                                            </div>
                                            
                                            <!-- backend: (token in) link for the full page -->
                                            <a href="" class="text-end text-white">See Leaderboard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Example of more accordian items here under (delete those when you are done)-->
        
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #2
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                    </div>
                                </div>
                            </div>
        
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #3
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                    </div>
                                </div>
                            </div>
        
                            <!-- <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #4
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #5
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #6
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #7
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #8
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #9
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #10
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #11
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #12
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #13
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #14
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #15
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Accordion Item #16
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
          
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #17
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #17
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #17
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #18
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
                              
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #19
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #20
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #21
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #22
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #23
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div>
        
                              <div class="accordion-item">
                                <h2 class="accordion-header">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Accordion Item #24
                                  </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                  <div class="accordion-body">
                                  </div>
                                </div>
                              </div> -->

                          </div>
                    </div>
                </div>
                
            </div>        
        </section>

   
    </main>

    @include('layouts.footer')