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
                <h1 style="color: black">Manito Civil Registry Online Services</h1>
                <p>Welcome to Communitech, a dedicated platform for the citizens of Manito. At Communitech, you can easily apply for vital records, including Certificates of Live Birth, Death Certificates, and Marriage Certificates. Our goal is to simplify the process, ensuring you can access these essential documents quickly and conveniently. Thank you for choosing Communitech, where your vital records are just a few clicks away.</p>
                <a href="/home/services" class="btn-apply">Apply Certificate</a>
            </div>
        </section>
      
<!-- Announcement Section FOR USERS -->
<!-- PAKI AYOS CREDENTIAL NITO NA VISIBLE LANG SA USERS-->
<!-- Display Announcements Section -->
<div class="announcement-display-container">
    <h1 class="announcement-header">Announcements</h1>
    <div id="display-announcements" class="display-announcements"></div>
</div>

<!-- END OF Announcement Section FOR USERS -->

<!-- ADMIN LANG MAKAKAKITA NITO, NAKA HIDE TO DAPAT SA USERS-->
<!--START announcement section FOR ADMIN-->
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
  <!--END announcement section FOR ADMIN-->


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
        
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header text-white" style="background-color: white">
            <h4 class="mb-0" style="color: #28a745;"><b>RIDER DASHBOARD</b></h4>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" id="deliveries-tab" data-bs-toggle="tab" data-bs-target="#deliveries" type="button" role="tab" aria-controls="deliveries" aria-selected="true">
                        Assigned Deliveries
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="false">
                        Delivery History
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                        Profile
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="earnings-tab" data-bs-toggle="tab" data-bs-target="#earnings" type="button" role="tab" aria-controls="earnings" aria-selected="false">
                        Earnings Summary
                    </button>
                </li>
                
            </ul>
            <div class="tab-content" id="dashboardTabsContent">
                <!-- Assigned Deliveries -->
                <div class="tab-pane fade show active" id="deliveries" role="tabpanel" aria-labelledby="deliveries-tab">
                    <h5>Assigned Deliveries</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Certificate Type</th>
                                <th>Client Name</th>
                                <th>Delivery Address</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Birth Certificate</td>
                                <td>John Doe</td>
                                <td>123 Main Street</td>
                                <td>In Transit</td>
                                <td>
                                    <button class="btn btn-success btn-sm">Delivered</button>
                                    <button class="btn btn-warning btn-sm">In Transit</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Delivery History -->
                <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <h5>Delivery History</h5>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Certificate Type</th>
                                <th>Client Name</th>
                                <th>Delivery Address</th>
                                <th>Status</th>
                                <th>Completed On</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marriage Certificate</td>
                                <td>Jane Smith</td>
                                <td>456 Elm Street</td>
                                <td>Delivered</td>
                                <td>2024-12-01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Profile -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h5>Profile</h5>
                    <form>
                        <div class="mb-3 text-center">
                            <!-- Profile Picture Holder -->
                            <label for="profile-picture" class="form-label d-block">Profile Picture</label>
                            <img src="{{ asset('images/default-profile.png') }}" alt="Profile Picture" id="profilePicturePreview" class="rounded-circle mb-3" style="width: 150px; height: 150px; object-fit: cover; border: 2px solid #28a745;">
                            <input type="file" class="form-control" id="profile-picture" onchange="previewProfilePicture(event)">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" value="John Rider">
                        </div>
                        <div class="mb-3">
                            <label for="contact" class="form-label">Contact Details</label>
                            <input type="text" class="form-control" id="contact" value="+639123456789">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>

                <!-- Earnings Summary -->
                <div class="tab-pane fade" id="earnings" role="tabpanel" aria-labelledby="earnings-tab">
                    <h5>Earnings Summary</h5>
                    <div>
                        <p>Total Earnings: ₱5000.00</p>
                        <label for="date-filter" class="form-label">Filter by Date</label>
                        <input type="date" class="form-control mb-3" id="date-filter">
                    </div>
                </div>

            
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between">
            <div>
                <button class="btn btn-secondary">Go Offline</button>
            </div>
            <button class="btn btn-danger">Logout</button>
        </div>
    </div>
</div>

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



<script>
// Updated script to include announcement display functionality
const displayAnnouncements = () => {
    const displayContainer = document.getElementById('display-announcements');
    displayContainer.innerHTML = '';

    const filteredAnnouncements = announcements.filter(item => item.status === viewMode);

    if (filteredAnnouncements.length === 0) {
        displayContainer.innerHTML = `<p class="empty-message">No ${viewMode} posts to display.</p>`;
        return;
    }

    filteredAnnouncements.forEach(({ title, text, timestamp, updated }) => {
        const displayItem = document.createElement('div');
        displayItem.classList.add('display-item');

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

        displayItem.appendChild(titleElement);
        displayItem.appendChild(textElement);
        displayItem.appendChild(timestampElement);

        displayContainer.appendChild(displayItem);
    });
};

// Update renderAnnouncements to also update the display container
function renderAnnouncements() {
    const announcementList = document.getElementById('announcement-list');
    announcementList.innerHTML = '';

    const filteredAnnouncements = announcements.filter(item => item.status === viewMode);
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const currentAnnouncements = filteredAnnouncements.slice(startIndex, endIndex);

    if (currentAnnouncements.length === 0) {
        announcementList.innerHTML = `<p class="empty-message">No ${viewMode} posts to display.</p>`;
        displayAnnouncements(); // Update display container
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
    displayAnnouncements(); // Update display container
}
</script>


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
