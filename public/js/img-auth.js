document.addEventListener('DOMContentLoaded', () => {
    // Select the container for images and the verify button
    const imagesContainer = document.querySelector('.images');
    const verifyButton = document.getElementById('verifyButton');
    
    // Convert the NodeList of images into an array for easier manipulation
    let images = Array.from(document.querySelectorAll('.image'));
    
    // Initialize attempts and limits for user interactions
    let attempts = 0; // Count of the current attempts made by the user
    const maxAttempts = 2; // Max attempts before changing image set
    const maxTotalAttempts = 4; // Total attempts before entering cooldown
    let failedAttempts = 0; // Count of failed attempts
    let currentImageSet = 'default'; // Tracks the current set of images displayed

    // Define image sets and correct answers
    const imageSets = {
        default: [
            { src: 'img/auth-img/newImg2.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg3.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg4.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg5.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg6.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg7.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg8.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg9.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg1.jpg', name: 'wrong' }
        ],
        alternate: [
            { src: 'img/auth-img/img2.jpg', name: 'wrong' },
            { src: 'img/auth-img/img3.jpg', name: 'wrong' },
            { src: 'img/auth-img/img4.jpg', name: 'wrong' },
            { src: 'img/auth-img/img5.jpg', name: 'wrong' },
            { src: 'img/auth-img/img6.jpg', name: 'wrong' },
            { src: 'img/auth-img/img7.jpg', name: 'correct' },
            { src: 'img/auth-img/img8.jpg', name: 'wrong' },
            { src: 'img/auth-img/img9.jpg', name: 'correct' },
            { src: 'img/auth-img/img1.jpg', name: 'correct' }
        ]
    };

    // Restore cooldown end time from localStorage if it exists
    const cooldownEndTime = localStorage.getItem('cooldownEndTime');

    // Function to check if the cooldown period is still active
    function checkCooldown() {
        const now = Date.now();
        // If cooldown is still in effect, disable interactions
        if (cooldownEndTime && now < cooldownEndTime) {
            const remainingTime = Math.floor((cooldownEndTime - now) / 1000);
            disableInteraction(); // Disable user interaction during cooldown
            startCooldown(remainingTime); // Start countdown display
        } else {
            enableInteraction(); // Allow interaction if cooldown is over
        }
    }

    // Function to start the cooldown period
    function startCooldown(seconds) {
        const endTime = Date.now() + seconds * 1000; // Calculate the end time of cooldown
        localStorage.setItem('cooldownEndTime', endTime); // Save end time in localStorage

        const interval = setInterval(() => {
            const now = Date.now();
            const remainingTime = Math.floor((endTime - now) / 1000); // Calculate remaining time

            // Update the button text with remaining time
            verifyButton.innerText = `Please wait ${remainingTime} seconds to attempt again...`;

            // When cooldown is over
            if (remainingTime <= 0) {
                clearInterval(interval); // Stop the interval
                localStorage.removeItem('cooldownEndTime'); // Remove cooldown time from storage
                enableInteraction(); // Allow interaction again
                verifyButton.innerText = 'Verify'; // Reset button text
                resetAttempts(); // Reset attempts
                updateImages('default'); // Reset images to default set
            }
        }, 1000); // Update every second
    }

    // Function to disable user interactions with images and button
    function disableInteraction() {
        images.forEach(image => {
            image.removeEventListener('click', handleImageClick); // Remove click event
            image.style.pointerEvents = 'none'; // Disable pointer events on images
        });
        verifyButton.disabled = true; // Disable the verify button
    }

    // Function to enable user interactions with images and button
    function enableInteraction() {
        images.forEach(image => {
            image.addEventListener('click', handleImageClick); // Add click event back
            image.style.pointerEvents = 'auto'; // Enable pointer events on images
        });
        verifyButton.disabled = false; // Enable the verify button
    }

    // Function to handle image clicks and toggle selection
    function handleImageClick() {
        this.classList.toggle('selected'); // Toggle selected class on click
    }

    // Function to update images based on the selected set
    function updateImages(set) {
        const newSet = imageSets[set]; // Get new image set
        images.forEach((image, index) => {
            image.src = newSet[index].src; // Update image source
            image.dataset.name = newSet[index].name; // Update image name for verification
            image.classList.remove('selected'); // Deselect image
        });
        shuffleImages(); // Shuffle images for random order
    }

    // Function to shuffle images randomly
    function shuffleImages() {
        for (let i = images.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [images[i], images[j]] = [images[j], images[i]]; // Swap elements
        }
        images.forEach(image => imagesContainer.appendChild(image)); // Reattach shuffled images to the container
    }

    // Function to reset attempts and counters
    function resetAttempts() {
        attempts = 0; // Reset current attempts
        failedAttempts = 0; // Reset failed attempts
        currentImageSet = 'default'; // Reset current image set
    }

    // Event listener for the verify button click
    verifyButton.addEventListener('click', () => {
        const selectedImages = document.querySelectorAll('.image.selected'); // Get selected images
        // Check if exactly 3 images are selected
        if (selectedImages.length !== 3) {
            alert('You must select exactly 3 images.'); // Alert if not
            return; // Exit function if condition is not met
        }

        // Check if all selected images are correct
        const allCorrect = Array.from(selectedImages).every(image => image.dataset.name === 'correct');

        if (allCorrect) {
            window.location.href = '/login'; // Redirect if correct
        } else {
            attempts++; // Increment attempt counter
            failedAttempts++; // Increment failed attempt counter
            // Check if total attempts have been exceeded
            if (attempts >= maxTotalAttempts) {
                disableInteraction(); // Disable interaction
                alert('You have reached the maximum number of attempts. Please wait 250 seconds before trying again.'); // Alert user
                startCooldown(250); // Start cooldown
            } else if (failedAttempts % maxAttempts === 0) {
                // Check if failed attempts reached max attempts for image set change
                currentImageSet = currentImageSet === 'default' ? 'alternate' : 'default'; // Switch image sets
                updateImages(currentImageSet); // Update images
                alert(`You have failed ${failedAttempts} times. The images will change. Please ry again!`); // Alert user
            } else {
                alert('Incorrect images. Please try again.'); // Alert for incorrect selection
                clearSelected(); // Clear selected images
                shuffleImages(); // Shuffle images for a new attempt
            }
        }
    });

    // Function to clear selected images
    function clearSelected() {
        images.forEach(image => image.classList.remove('selected')); // Remove selected class from all images
    }

    // Initial setup: update images and check cooldown status
    updateImages(currentImageSet);
    checkCooldown();
});
