@extends('layouts.layout')

@section('contents')
@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
/* Slideshow container takes full width */
.banners {
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.slideshow-container {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Images inside the slideshow */
.mySlides {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Navigation buttons */
.slideshow-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    z-index: 10;
    font-size: 18px;
}

.slideshow-button.left {
    left: 10px;
}

.slideshow-button.right {
    right: 10px;
}

.slideshow-button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Optional: Adjustments for medium screen sizes (tablets) */
@media (max-width: 768px) {
    .slideshow-container {
        height: 70vh; /* Reduce height for smaller screens */
    }

    .slideshow-button {
        padding: 8px 16px;
        font-size: 16px;
    }
}

/* Optional: Adjustments for smaller screen sizes (phones) */
@media (max-width: 480px) {
    .slideshow-container {
        height: 50vh; /* Reduce height further for phones */
    }

    .mySlides {
        object-fit: contain; /* Ensure the images fit within the smaller screen */
    }

    .slideshow-button {
        padding: 6px 12px;
        font-size: 14px;
    }
}

.banners {
    margin: 0;
    padding: 0;
    display: flex; /* Use flexbox for alignment */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;
}

/* Slideshow container */
.slideshow-container {
    position: relative;
    width: 100%; /* Full width */
    height: 100vh; /* Full viewport height */
    overflow: hidden; /* Hide overflow */
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Images inside the slideshow */
.mySlides {
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    object-fit: cover; /* Ensure the images cover the container */
}

/* Navigation buttons */
.slideshow-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    color: white;
    border: none;
    cursor: pointer;
    padding: 10px 20px;
    z-index: 10;
}

.slideshow-button.left {
    left: 10px;
}

.slideshow-button.right {
    right: 10px;
}

.slideshow-button:hover {
    background-color: rgba(0, 0, 0, 0.8); /* Darker background on hover */
}

/* Adjustments for smaller screen sizes */
@media (max-width: 1000px) {
    .slideshow-container {
        width: 100%; /* Full width */
        height: auto; /* Adjust height to fit content */
    }

    .mySlides {
        height: auto; /* Maintain aspect ratio */
        object-fit: contain; /* Ensure images are fully visible */
    }
}

/* Further adjustments for very small devices */
@media (max-width: 600px) {
    .slideshow-container {
        height: auto; /* Allow content to dictate height */
    }

    .slideshow-button {
        padding: 5px 10px; /* Smaller button padding */
        font-size: 14px; /* Smaller font size */
    }
}

.announcement-item form button {
    background: none;
    border: none;
    color: red;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.announcement-item form button:hover {
    color: darkred;
}

/* Announcement Manager Styles */
.announcement-container {
    width: 100%;
    max-width: 2000px;
    margin: 20px auto;
    padding: 20px;
    background-color: #95D2B3;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.announcement-header {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
    color:rgb(0, 0, 0);
    background-color:#e8f7ec;   
}

.announcement-form,
#update-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.announcement-form input,
#update-form select,
.announcement-form textarea,
#update-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    box-sizing: border-box;
}

.announcement-form button,
#update-form button {
    padding: 12px 20px;
    border: none;
    background-color:rgb(6, 135, 103);
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.announcement-form button:hover,
#update-form button:hover {
    background-color:rgb(18, 158, 111);
}

.button-container {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 10px; /* Space between buttons */
}

#edit-announcement-btn {
    padding: 12px;
    background-color:rgb(7, 100, 71);
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

#edit-announcement-btn:hover {
    background-color:rgb(16, 137, 109);
}

/* Adjust Add Announcement button for consistency */
.announcement-form button[type="submit"] {
    padding: 12px 20px;
    background-color:rgb(7, 100, 71);
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.announcement-form button[type="submit"]:hover {
    background-color:rgb(16, 137, 109);
}

#update-form {
    display: none;
}

#announcement-title-select {
    font-size: 16px;
}

/* Optional: Style for input fields when they are focused */
input:focus, textarea:focus, select:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Media Query for small screens */
@media (max-width: 768px) {
    .announcement-container {
        padding: 15px;
    }

    .announcement-header {
        font-size: 20px;
    }

    .announcement-form input,
    .announcement-form textarea,
    #update-form select,
    #update-form textarea {
        font-size: 14px;
        padding: 10px;
    }

    .announcement-form button,
    #update-form button {
        font-size: 14px;
        padding: 10px;
    }

    #edit-announcement-btn {
        font-size: 14px;
        padding: 8px 16px;
    }
    #edit-announcement-btn {
    padding: 12px;
    background-color: #4CAF50;
    border: none;
    color: white;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}
}

</style>

<!-- Home content -->

<!-- Background overlay div with image -->
 
@auth
    {{-- Check if the user is admin or user --}}
    @if (Auth::user()->Credential == 'admin' || Auth::user()->Credential == 'user')
        <div class="background-overlay" style="background-image: url('{{ asset('img/municipalhall.jpg') }}');">
        </div>
<!-- Payment Success message display -->
@if(session('success'))
    <div id="successMessage" class="alert alert-success" style="color: green; text-align: center;">
        {{ session('success') }}
    </div>
@endif

@if(session('flash_message'))
<!-- Flash Message -->
<div id="flashMessage" style="
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: green; /* Text color set to green */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 2px solid green; /* Added green border */
    border-radius: 8px;
    text-align: center;
    z-index: 9999; /* Make sure it's above content */
">
    <p>{{ session('flash_message') }}</p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');
        
        if (flashMessage) {
            // Set timeout to remove flash message after 20 seconds
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 1000); // Remove the element after fading out
            }, 20000); // 20000 milliseconds = 20 seconds
        }
    });
</script>
@endif

        <!-- Intro section -->
        <section class="intro-container">
            <div class="intro">
                <h1 style="color:black;">Manito Civil Registry Online Services</h1>
                <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>  
            @auth
                @if (Auth::user()->Credential == 'user')
                <a href="/home/services" class="btn-apply">Apply Certificate</a>
                @endif
            @endauth
            </div>
        </section>
      
<!-- Announcement Section FOR USERS -->
<div class="announcement-display-container">
    <h1 class="announcement-header">Announcements</h1>
    <div id="display-announcements" class="display-announcements">
    @foreach ($announcements as $announcement)
    <div class="announcement-item">
        <h3>{{ $announcement->announcement_title }}</h3>
        <p>{{ $announcement->announcement_text }}</p>
        <small>Posted on {{ $announcement->created_at->timezone('Asia/Manila')->format('F j, Y, g:i a') }}</small>


@auth
    {{-- Check if the user is admin --}}
    @if (Auth::user()->Credential == 'admin')
    <form action="{{ route('announcement.destroy', $announcement->Memo_id) }}" method="POST" style="display: inline; float: right;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Are you sure you want to delete this announcement?')" style="background: none; border: none; color: red; font-size: 20px; cursor: pointer;">
            ✖
        </button>
    </form>  

    @endif
 @endauth

    </div>
    @endforeach
    </div>
</div>
<!-- END OF Announcement Section FOR USERS -->

@if(session('success_announcement'))
<!-- Flash Message -->
<div id="flashMessage" style="
    position: fixed;
    width: 70%;
    height: 30%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    color: green; /* Text color set to green */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    border: 2px solid green; /* Added green border */
    border-radius: 8px;

    display: flex; /* Use flexbox to align text */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    text-align: center;

    font-size: 20px; /* Make text bigger */
    font-weight: bold; /* Optional: make it bold */
    z-index: 9999; /* Make sure it's above content */
">
    <p>{{ session('success_announcement') }}</p>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const flashMessage = document.getElementById('flashMessage');
        
        if (flashMessage) {
            // Set timeout to remove flash message after 20 seconds
            setTimeout(() => {
                flashMessage.style.transition = "opacity 1s ease";
                flashMessage.style.opacity = "0";
                setTimeout(() => flashMessage.remove(), 2000); // Remove the element after fading out
            }, 2000); 
        }
    });
</script>
@endif


@auth
    {{-- Check if the user is admin --}}
    @if (Auth::user()->Credential == 'admin')
<!--START announcement section FOR ADMIN-->
<div class="announcement-container">
    <h1 class="announcement-header">Announcements Manager</h1>

    <!-- Input Form -->
    <form action="{{ route('announcement.store') }}" method="POST" class="announcement-form">
        @csrf
        <input type="text" name="announcement_title" id="title-input" placeholder="Enter Title" required />
        <textarea name="announcement_text" id="announcement-input" placeholder="Enter Announcement" required></textarea>
        <div class="button-container">
            <button type="submit">Add Announcement</button>
            <button type="button" id="edit-announcement-btn" onclick="showUpdateForm()">Edit Announcement</button>
        </div>
    </form>

    <!-- Hidden Update Form -->
    <form action="{{ route('announcement.update') }}" method="POST" id="update-form" style="display: none;">
        @csrf
        @method('PUT')

        <select name="announcement_title" id="announcement-title-select" onchange="populateTextArea()">
            <option value="">Select Announcement Title</option>
            @foreach ($announcements as $announcement)
                <option value="{{ $announcement->Memo_id }}" data-text="{{ $announcement->announcement_text }}">
                    {{ $announcement->announcement_title }}
                </option>
            @endforeach
        </select><br><br>
        <textarea name="announcement_text" id="announcement-input-update" placeholder="Enter Announcement" required></textarea>
        <button type="submit">Update Announcement</button>
        <button type="button" onclick="window.location.href='/home'">Back</button>

    </form>
</div>
<!--END announcement section FOR ADMIN-->
@endif
@endauth
<!--banner section-->
  <div class="banners">
    <div class="slideshow-container">
        <img class="mySlides img-16-9" src="{{ asset('img/rider-banner.png') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/banner2.jpg') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/banner3.jpg') }}">
        <img class="mySlides img-16-9" src="{{ asset('img/banner4.jpg') }}">

        <button class="slideshow-button left" onclick="plusDivs(-1)">&#10094;</button>
        <button class="slideshow-button right" onclick="plusDivs(1)">&#10095;</button>
    </div>
</div>
<br><br>

    @endif
@endauth

@auth
    {{-- Check if the user is rider --}}
    @if (Auth::user()->Credential === 'rider')
        <div class="card-header text-white" style="background-color: #04aa6d;">
            <h4 class="mb-3 text-center"><b>WELCOME TO RIDER PAGE</b></h4>
        </div>
        <div class="card-body">
            <p class="text-center">
                The Rider Dashboard is your hub for managing deliveries efficiently. 
                Here, you can view and update your assigned deliveries, track progress, 
                and review your delivery history. Stay organized and keep your clients satisfied!
            </p>
        </div>
        <style>
            /* General Styling for the Welcome Section */
.card-header {
    background-color: #04aa6d;
    color: white;
    text-align: center;
    padding: 15px;
    border-radius: 5px 5px 0 0;
}

.card-header h4 {
    font-size: 1.5rem;
    font-weight: bold;
}

.card-body p {
    font-size: 2rem;
    color: #333;
    line-height: 1.5;
    margin: 20px 0;
    text-align: center;
    padding: 15px; /* Adds space inside the border */
    border: 2px solid #04aa6d; /* Green border */
    border-radius: 8px; /* Rounded corners */
    background-color: #f9f9f9; /* Light background for better contrast */
}


/* Mobile Responsiveness */
@media (max-width: 768px) {
    .card-header h4 {
        font-size: 1.2rem;
    }

    .card-body p {
        font-size: 0.9rem;
        margin: 15px 10px;
        line-height: 1.4;
    }

    .card-header {
        padding: 10px;
    }
}

            </style>
    @endif
@endauth

<!-- JavaScript Announcement-->
<script>
    function showUpdateForm() {
        document.getElementById('update-form').style.display = 'block';
        document.getElementById('edit-announcement-btn').style.display = 'none';
    }

    function populateTextArea() {
        var selectedOption = document.getElementById('announcement-title-select').selectedOptions[0];
        var announcementText = selectedOption.getAttribute('data-text');
        document.getElementById('announcement-input-update').value = announcementText;
    }
</script>

<script>
        // Function to hide the success message after 10 seconds
        window.onload = function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(function() {
                successMessage.style.display = 'none';
            }, 10000); // 10000ms = 10 seconds
        }
    };
</script>

<script> /* SCRIPT FOR SLIDESHOW */
            var slideIndex = 1;
            showDivs(slideIndex);

            function plusDivs(n) {
            showDivs(slideIndex += n);
            }

            function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            x[slideIndex-1].style.display = "block";  
            }


    </script>
<script>
<!--rider script-->
<script>
    function previewProfilePicture(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const output = document.getElementById('profilePicturePreview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection