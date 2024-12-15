@extends('layouts.layout2')
@section('content')

<link rel="stylesheet" href="{{ asset('css/img-auth.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<div class="content" style="margin-bottom: 50px; margin-top:50px;">
    <!-- Left Side -->
    <div class="left-side">
        <!-- Logo as a background overlay -->
        <img src="{{ asset('/img/manito-logo.png') }}" alt="Manito Logo" class="logo-overlay">
        <br>
        <!-- Responsive Text Container -->
        <div class="text-container">
            <h1 style="margin-top: 100px"><b>CommuniTECH</b></h1>
            <h2 class="login-description">A Web-Based Application For Civil Registry Office of Manito, Albay</h2>
        </div>
    </div>

    <!-- Right Side -->
    <div class="right-side">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Email Input -->
                            <div class="mb-4">
                                <input id="email" type="email" 
                                       class="form-control form-control-lg @error('email') is-invalid @enderror" 
                                       name="email" 
                                       placeholder="Enter E-mail Address" 
                                       value="{{ old('email') }}" 
                                       required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Input -->
                        <div class="mb-4 position-relative">
                            <input id="password" type="password" 
                                class="form-control form-control-lg @error('password') is-invalid @enderror" 
                                name="password" 
                                placeholder="Enter Password" 
                                required autocomplete="current-password">
                                
                            <!-- Toggle Password Visibility -->
                            <span id="togglePassword" class="eye-icon position-absolute" 
                                style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer; color:gray;">
                                <i id="toggleIcon" class="bi bi-eye-slash"></i>
                            </span>
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                            <!-- Remember Me Checkbox -->
                            <div class="mb-3 form-check">
                                <input class="form-check-input" type="checkbox" 
                                       name="remember" id="remember" 
                                       {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn custom-btn btn-lg">
                                    {{ __('LOG IN') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <div class="d-flex justify-content-between mt-2">
                                        <a style="color: #28a745;" class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                        <a style="color: #28a745;" class="btn btn-link" href="{{ route('register') }}">
                                            {{ __('No Account Yet? Register') }}
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </form>      
    
    </div>
</div>

<script>
    // JavaScript for toggling password visibility
document.getElementById('togglePassword').addEventListener('click', function () {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');

    if (passwordField.type === 'password') {
        passwordField.type = 'text'; // Show password
        toggleIcon.classList.remove('bi-eye-slash'); // Change icon
        toggleIcon.classList.add('bi-eye');
    } else {
        passwordField.type = 'password'; // Hide password
        toggleIcon.classList.remove('bi-eye'); // Revert icon
        toggleIcon.classList.add('bi-eye-slash');
    }
});


    /*
        function validatePassword() {
    const password = document.getElementById('password').value;
    const passwordError = document.getElementById('passwordError');

    if (password.length < 8) {
        passwordError.style.display = 'block'; // Show error message
        return false;
    } else {
        passwordError.style.display = 'none'; // Hide error message
        return true;
    }
}

    */
    

</script>
@endsection
