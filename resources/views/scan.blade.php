@extends('layouts.layout')

@section('contents')

<style>
    .arial {
        font-family: Arial, Helvetica, sans-serif;
    }

    .adminUpload_container {
        margin-top: 60px;
        margin-bottom: 60px;
        text-align: center;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .adminUpload_previewPanel {
        
        padding: 10px;
        border-radius: 10px;
        background-color: #e8f7ec;
        margin-bottom: 20px;
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: center;
        align-items: center;
        min-height: 120px;
        position: relative;
    }

    .adminUpload_noImages {
        color: #999;
        font-style: italic;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 14px;
    }

    .adminUpload_previewCard {
        position: relative;
        width: 120px;
        height: 120px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .adminUpload_previewCard img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .adminUpload_removeBtn {
        position: absolute;
        top: 5px;
        right: 5px;
        background: #ff4d4d;
        color: white;
        border: none;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        line-height: 1;
    }

    .adminUpload_form {
        display: inline-block;
        margin-top: 20px;
    }

    .adminUpload_btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .adminUpload_btn:hover {
        background-color: #04aa6d;
    }

    #adminUpload_successModal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .adminUpload_modalContent {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        text-align: center;
    }

    .adminUpload_modalContent p {
        color: #28a745;
        font-size: 18px;
    }

    .adminUpload_closeBtn {
        background-color: #04aa6d;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .adminUpload_closeBtn:hover {
        background-color: #28a745;
    }
</style>

<div class="adminUpload_container">
    <h2 style="color:#28a745; font-family: Arial, Helvetica, sans-serif;"><b>Upload Photos</b></h2>
    <h3 class="arial">Please upload the copy/copies of certificate/s.</h3>
    <form class="adminUpload_form" id="adminUpload_form" enctype="multipart/form-data">
        <input type="file" name="adminUpload_photos[]" id="adminUpload_photos" multiple required><br><br>
        <div class="adminUpload_previewPanel" id="adminUpload_previewPanel">
            <div class="adminUpload_noImages arial">No images uploaded yet</div>
        </div>
        <button type="submit" class="adminUpload_btn arial">Submit Photos</button>
    </form>
</div>

<div id="adminUpload_successModal">
    <div class="adminUpload_modalContent">
        <p class="arial">Photos have been successfully sent to the user!</p>
        <button class="adminUpload_closeBtn arial" onclick="adminUpload_closeModal()">Close</button>
    </div>
</div>

<script>
    const adminUpload_photosInput = document.getElementById('adminUpload_photos');
const adminUpload_previewPanel = document.getElementById('adminUpload_previewPanel');
const adminUpload_selectedFiles = [];

function updateNoImagesMessage() {
    const noImagesMessage = adminUpload_previewPanel.querySelector('.adminUpload_noImages');
    if (adminUpload_selectedFiles.length === 0) {
        if (!noImagesMessage) {
            const message = document.createElement('div');
            message.className = 'adminUpload_noImages';
            message.textContent = 'No images uploaded yet';
            adminUpload_previewPanel.appendChild(message);
        }
    } else {
        if (noImagesMessage) {
            noImagesMessage.remove();
        }
    }
}

// Automatically display images in the preview panel
adminUpload_photosInput.addEventListener('change', function () {
    const files = Array.from(adminUpload_photosInput.files);
    files.forEach(file => {
        const reader = new FileReader();
        reader.onload = function (e) {
            const imageSrc = e.target.result;

            const index = adminUpload_selectedFiles.push(file) - 1;

            const card = document.createElement('div');
            card.className = 'adminUpload_previewCard';
            card.innerHTML = `
                <img src="${imageSrc}" alt="Preview">
                <button class="adminUpload_removeBtn" onclick="adminUpload_removePhoto(${index})">×</button>
            `;
            adminUpload_previewPanel.appendChild(card);
        };
        reader.readAsDataURL(file);
    });

    adminUpload_photosInput.value = ''; // Clear input after adding
    updateNoImagesMessage(); // Ensure the message is updated
});

function adminUpload_removePhoto(index) {
    adminUpload_selectedFiles.splice(index, 1);
    adminUpload_previewPanel.innerHTML = ''; // Clear and re-render
    adminUpload_selectedFiles.forEach((file, idx) => {
        const reader = new FileReader();
        reader.onload = function (e) {
            const imageSrc = e.target.result;
            const card = document.createElement('div');
            card.className = 'adminUpload_previewCard';
            card.innerHTML = `
                <img src="${imageSrc}" alt="Preview">
                <button class="adminUpload_removeBtn" onclick="adminUpload_removePhoto(${idx})">×</button>
            `;
            adminUpload_previewPanel.appendChild(card);
        };
        reader.readAsDataURL(file);
    });
    updateNoImagesMessage(); // Ensure the message is updated
}

document.getElementById('adminUpload_form').addEventListener('submit', function (e) {
    e.preventDefault();
    if (adminUpload_selectedFiles.length === 0) {
        alert('Please add photos before submitting.');
        return;
    }

    if (!confirm('Are you sure you want to submit these photos?')) {
        return;
    }

    const formData = new FormData();
    adminUpload_selectedFiles.forEach(file => formData.append('adminUpload_photos[]', file));

    fetch('adminUpload_upload.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById('adminUpload_successModal').style.display = 'flex';
                adminUpload_previewPanel.innerHTML = '';
                adminUpload_selectedFiles.length = 0;
                updateNoImagesMessage(); // Reset message on success
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while uploading the photos.');
        });
});

function adminUpload_closeModal() {
    document.getElementById('adminUpload_successModal').style.display = 'none';
}

// Initialize "No images uploaded yet" message
updateNoImagesMessage();

</script>

@endsection
