document.addEventListener('DOMContentLoaded', () => {
    const imagesContainer = document.querySelector('.images');
    const verifyButton = document.getElementById('verifyButton');
    let images = Array.from(document.querySelectorAll('.image'));
    let attempts = 0;
    const maxAttempts = 2;  // Number of attempts before changing image set
    const maxTotalAttempts = 4;  // Total number of attempts before cooldown
    let failedAttempts = 0;
    let cooldownTimer = null;
    let currentImageSet = 'default'; // Start with the default image set

    // Define image sets and correct answers
    const imageSets = {
        default: [
            { src: 'img/auth-img/img1.jpg', name: 'correct' },
            { src: 'img/auth-img/img2.jpg', name: 'wrong' },
            { src: 'img/auth-img/img3.jpg', name: 'wrong' },
            { src: 'img/auth-img/img4.jpg', name: 'wrong' },
            { src: 'img/auth-img/img5.jpg', name: 'wrong' },
            { src: 'img/auth-img/img6.jpg', name: 'wrong' }
        ],
        alternate: [
            { src: 'img/auth-img/newImg1.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg2.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg3.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg4.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg5.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg6.jpg', name: 'wrong' }
        ]
    };

    // Function to update images
    function updateImages(set) {
        const newSet = imageSets[set];
        images.forEach((image, index) => {
            image.src = newSet[index].src;
            image.dataset.name = newSet[index].name; // Set correct/incorrect data-name
            image.classList.remove('selected'); // Ensure selected state is cleared
        });
        shuffleImages(); // Shuffle the new set of images
    }

    // Function to shuffle the images
    function shuffleImages() {
        for (let i = images.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [images[i], images[j]] = [images[j], images[i]];
        }
        images.forEach(image => imagesContainer.appendChild(image));
    }

    // Function to clear the selected class from all images
    function clearSelected() {
        images.forEach(image => {
            image.classList.remove('selected');
        });
    }

    // Function to disable the images and verify button
    function disableInteraction() {
        images.forEach(image => {
            image.removeEventListener('click', handleImageClick);
            image.style.pointerEvents = 'none';
        });
        verifyButton.disabled = true;
    }

    // Function to enable the images and verify button
    function enableInteraction() {
        images.forEach(image => {
            image.addEventListener('click', handleImageClick);
            image.style.pointerEvents = 'auto';
        });
        verifyButton.disabled = false;
    }

    // Handle image click
    function handleImageClick() {
        this.classList.toggle('selected');
    }

    images.forEach(image => {
        image.addEventListener('click', handleImageClick);
    });

    verifyButton.addEventListener('click', () => {
        const selectedImages = document.querySelectorAll('.image.selected');
        if (selectedImages.length !== 1) {
            alert('You must select exactly 1 images.');
            return;
        }

        const allCorrect = Array.from(selectedImages).every(image => image.dataset.name === 'correct');
        
        if (allCorrect) {
            window.location.href = '/login';
        } else {
            attempts++;
            failedAttempts++;
            if (attempts >= maxTotalAttempts) {
                disableInteraction();
                alert('You have reached the maximum number of attempts. Please wait 150 seconds before trying again.');

                // Start cooldown timer
                let cooldownSeconds = 150;
                cooldownTimer = setInterval(() => {
                    cooldownSeconds--;
                    document.getElementById('verifyButton').innerText = `Please wait ${cooldownSeconds} seconds...`;
                    if (cooldownSeconds <= 0) {
                        clearInterval(cooldownTimer);
                        enableInteraction();
                        document.getElementById('verifyButton').innerText = 'Verify';
                        attempts = 0; // Reset attempts after cooldown
                        failedAttempts = 0; // Reset failed attempts after cooldown
                        currentImageSet = 'default'; // Reset image set after cooldown
                        updateImages(currentImageSet);
                    }
                }, 1000);
            } else if (failedAttempts % maxAttempts === 0) {
                // Alternate between default and alternate image sets
                currentImageSet = currentImageSet === 'default' ? 'alternate' : 'default';
                updateImages(currentImageSet);
                alert(`You have failed ${failedAttempts} times. The images have changed. Try again!`);
            } else {
                alert('You selected incorrect images. Please try again.');
                // Clear selected class and shuffle images if the selection is incorrect
                clearSelected();
                shuffleImages();
            }
        }
    });

    // Initial setup
    updateImages(currentImageSet);
});
