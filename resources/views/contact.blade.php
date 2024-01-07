@include('layouts.head')

<title>Contact</title>

@include('layouts.nav')

    <main>
        <!-- Contact -->
        <section id="contact">
            <div class="container-lg mt-5">
                <!-- Header -->
                <div class="text-center">
                    <h2>Get in Touch</h2>
                    <p class="lead">Question to ask? Fill out the form to contact us directly...</p>
                </div>
            
                <!-- Row with 1 column (form) -->
                <div class="row justify-content-center my-5">
                    <div class="col-8 col-lg-6 col-xxl-5">
                        <!-- backend: form -->
                        <!-- Form -->
                        <form action="">
                            <!-- Email -->
                            <label for="email" class="form-label">Email address:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-envelope-fill"></i>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="e.g. test@example.com">                        
                            </div>

                            <!-- Name -->
                            <label for="name" class="form-label">Name:</label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-fill"></i>
                                </span>
                                <input type="text" class="form-control" id="name" placeholder="e.g. Test">
                            </div>

                            <!-- Subject question -->
                            <label for="subject" class="form-label">What is your question about?</label>
                            <div class="input-group mb-4">
                                <span class="input-group-text">
                                    <i class="bi bi-chat-right-dots-fill"></i>
                                </span>
                                <select name="" id="subject" class="form-select">
                                    <option value="pricing" selected>Problem/bug</option>
                                    <option value="content">Cheating</option>
                                    <option value="other">Other...</option>
                                </select>
                            </div>
                            
                            <!-- Textarea -->
                            <div class="form-floating mt-5 mb-4">
                                <textarea id="question" class="form-control" style="height: 140px;"></textarea>
                                <label for="question" >Your question...</label>
                            </div>
                            
                            <!-- Submit button -->
                            <div class="mb-4 text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('layouts.footer')