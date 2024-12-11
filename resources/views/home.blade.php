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
        <!-- Intro section -->
        <section class="intro-container">
            <div class="intro">
                <h1>Manito Civil Registry Online Services</h1>
                <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>
                <a href="/home/services" class="btn-apply">Apply Certificate</a>
            </div>
        </section>
      
<!--announcement section-->
<div class="announcement-container">
    <h1 class="announcement-header">Announcements Manager</h1>

    <!-- Input Form -->
    <div class="announcement-form">
      <input type="text" id="title-input" placeholder="Enter Title" />
      <textarea id="announcement-input" placeholder="Enter Announcement"></textarea>
      <button id="add-announcement">Add Announcement</button>
      <button id="update-announcement" style="display: none;">Update Announcement</button>
    </div>

    <!-- View Buttons -->
    <div class="view-buttons">
      <button id="view-posts">Posts</button>
      <button id="view-archived">Archived</button>
      <button id="view-deleted">Deleted</button>
    </div>

    <!-- Announcements List -->
    <div id="announcement-list" class="announcement-list"></div>

    <!-- Pagination -->
    <div id="pagination" class="pagination"></div>
  </div>

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
    @if (Auth::user()->Credential == 'rider')
        <p>Rider Interface</p>
    @endif
@endauth
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

    <script> /* script for announcement**/ 
const announcements = [];
let currentPage = 1;
const itemsPerPage = 3;
let editMode = false;
let editId = null;
let viewMode = 'active'; // 'active', 'archived', or 'deleted'

function renderAnnouncements() {
  const announcementList = document.getElementById('announcement-list');
  announcementList.innerHTML = '';

  const filteredAnnouncements = announcements.filter(item => item.status === viewMode);
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const currentAnnouncements = filteredAnnouncements.slice(startIndex, endIndex);

  if (currentAnnouncements.length === 0) {
    announcementList.innerHTML = `<p class="empty-message">No ${viewMode} posts to display.</p>`;
    return;
  }

  currentAnnouncements.forEach(({ id, title, text, timestamp, updated }) => {
    const item = document.createElement('div');
    item.classList.add('announcement-item');

    const titleElement = document.createElement('h3');
    titleElement.classList.add('announcement-title');
    titleElement.textContent = title;

    if (updated) {
      const updatedLabel = document.createElement('span');
      updatedLabel.classList.add('updated-label');
      updatedLabel.textContent = ' (Updated)';
      titleElement.appendChild(updatedLabel);
    }

    const textElement = document.createElement('p');
    textElement.textContent = text;

    const timestampElement = document.createElement('p');
    timestampElement.classList.add('announcement-timestamp');
    timestampElement.textContent = `Posted on: ${timestamp}`;

    const actions = document.createElement('div');
    actions.classList.add('actions');

    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.onclick = () => editAnnouncement(id);
    actions.appendChild(editButton);

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.onclick = () => deleteAnnouncement(id);
    actions.appendChild(deleteButton);

    const archiveButton = document.createElement('button');
    archiveButton.textContent = 'Archive';
    archiveButton.onclick = () => archiveAnnouncement(id);
    actions.appendChild(archiveButton);

    item.appendChild(titleElement);
    item.appendChild(textElement);
    item.appendChild(timestampElement);
    item.appendChild(actions);

    announcementList.appendChild(item);
  });

  renderPagination(filteredAnnouncements.length);
}

function renderPagination(totalItems) {
  const pagination = document.getElementById('pagination');
  pagination.innerHTML = '';

  const totalPages = Math.ceil(totalItems / itemsPerPage);

  for (let i = 1; i <= totalPages; i++) {
    const button = document.createElement('button');
    button.textContent = i;
    if (i === currentPage) {
      button.classList.add('active');
    }
    button.addEventListener('click', () => {
      currentPage = i;
      renderAnnouncements();
    });
    pagination.appendChild(button);
  }
}

document.getElementById('add-announcement').addEventListener('click', () => {
  const titleInput = document.getElementById('title-input');
  const announcementInput = document.getElementById('announcement-input');

  const title = titleInput.value.trim();
  const text = announcementInput.value.trim();

  if (!title || !text) {
    alert('Please fill in both fields.');
    return;
  }

  const currentDateTime = new Date().toLocaleString();

  announcements.unshift({
    id: Date.now(),
    title,
    text,
    timestamp: currentDateTime,
    updated: false,
    status: 'active',
  });

  titleInput.value = '';
  announcementInput.value = '';
  currentPage = 1;
  renderAnnouncements();
});

function editAnnouncement(id) {
  const announcement = announcements.find(item => item.id === id);
  if (!announcement) return;

  document.getElementById('title-input').value = announcement.title;
  document.getElementById('announcement-input').value = announcement.text;

  editMode = true;
  editId = id;

  document.getElementById('add-announcement').style.display = 'none';
  document.getElementById('update-announcement').style.display = 'inline-block';
}

document.getElementById('update-announcement').addEventListener('click', () => {
  if (!editMode || !editId) return;

  const titleInput = document.getElementById('title-input');
  const announcementInput = document.getElementById('announcement-input');

  const title = titleInput.value.trim();
  const text = announcementInput.value.trim();

  if (!title || !text) {
    alert('Please fill in both fields.');
    return;
  }

  const announcement = announcements.find(item => item.id === editId);
  if (announcement) {
    announcement.title = title;
    announcement.text = text;
    announcement.updated = true;
    announcement.timestamp = new Date().toLocaleString();
  }

  editMode = false;
  editId = null;

  titleInput.value = '';
  announcementInput.value = '';
  document.getElementById('add-announcement').style.display = 'inline-block';
  document.getElementById('update-announcement').style.display = 'none';

  renderAnnouncements();
});

function deleteAnnouncement(id) {
  const announcement = announcements.find(item => item.id === id);
  if (!announcement) return;

  announcement.status = 'deleted';
  renderAnnouncements();
}

function archiveAnnouncement(id) {
  const announcement = announcements.find(item => item.id === id);
  if (!announcement) return;

  announcement.status = 'archived';
  renderAnnouncements();
}

document.getElementById('view-posts').addEventListener('click', () => {
  viewMode = 'active';
  currentPage = 1;
  renderAnnouncements();
});

document.getElementById('view-archived').addEventListener('click', () => {
  viewMode = 'archived';
  currentPage = 1;
  renderAnnouncements();
});

document.getElementById('view-deleted').addEventListener('click', () => {
  viewMode = 'deleted';
  currentPage = 1;
  renderAnnouncements();
});

// Initial render
renderAnnouncements();

    </script>

@endsection
