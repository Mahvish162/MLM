
<x-website>
   <!-- Login Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="crypt-login-form mt-5">
                <div class="d-flex justify-content-between mb-4 text-center">
                    <h3 class="fw-bold">Log in</h3>
                    <div class="dropup">
                        <a class="card card-border circle crypt-grayscale-600 text-link p-2" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="QR code login" 
                                width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 4h7v7H4V4zm0 9h7v7H4v-7zm11 0h-2v4h4v-2h3v-2h-4v2h-1v-2zm5 3h-2v2h-2v2h4v-4zm-5 2h-2v2h2v-2zM13 4h7v7h-7V4zM8.5 6.5h-2v2h2v-2zm-2 9h2v2h-2v-2zm11-9h-2v2h2v-2z" fill="currentColor"></path>
                            </svg>
                        </a>
                       
                    </div>
                </div>
             <form class="needs-validation" method="POST" action="{{ route('login.submit') }}" novalidate>
                    @csrf
                    <div class="d-flex flex-column">
                        <div class="d-flex flex-column mb-3">
                            <label for="email" class="form-label text-light">Email/Phone Number <span class="crypt-grayscale-600">*</span></label>
                            <input type="text" class="form-control py-2" name="email" id="email" placeholder="Email/Phone Number" required>
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between">
                                <label for="password" class="form-label text-light">Password <span class="crypt-grayscale-600">*</span></label>
                                <a href="#" class="link-primary text-sm text-decoration-none">Forgot password?</a>
                            </div>
                            <div class="input-group-append">
                                <input type="password" class="form-control form-controls py-2" name="password" id="password" placeholder="Login Password" required>
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me">
                            <label class="form-check-label text-secondary" for="remember_me">
                                Remember me
                            </label>
                        </div>

                        <button class="btn btn-primary rounded-pill text-center mt-4" type="submit">Continue</button>
                    </div>
                </form>

           
                <div class="d-flex flex-row gap-2 mt-4 justify-content-center">
                    <p class="crypt-grayscale-500">Don't have an account?</p>
                    <a href="signup.html" class="link-primary fw-bold">Sign up</a>
                </div>
            </div>
        </div>
    </div>
</x-website>