document.addEventListener('DOMContentLoaded', () => {
    const imagesContainer = document.querySelector('.images');
    const verifyButton = document.getElementById('verifyButton');
    let images = Array.from(document.querySelectorAll('.image'));
    let attempts = 0;
    const maxAttempts = 2;
    const maxTotalAttempts = 4;
    let failedAttempts = 0;
    let currentImageSet = 'default';

    // Define image sets and correct answers
    const imageSets = {
        default: [
            { src: 'img/auth-img/img2.jpg', name: 'wrong' },
            { src: 'img/auth-img/img3.jpg', name: 'wrong' },
            { src: 'img/auth-img/img4.jpg', name: 'wrong' },
            { src: 'img/auth-img/img5.jpg', name: 'wrong' },
            { src: 'img/auth-img/img6.jpg', name: 'wrong' },
            { src: 'img/auth-img/img7.jpg', name: 'correct' },
            { src: 'img/auth-img/img8.jpg', name: 'wrong' },
            { src: 'img/auth-img/img9.jpg', name: 'correct' },
            { src: 'img/auth-img/img1.jpg', name: 'correct' }
        ],
        alternate: [
            { src: 'img/auth-img/newImg2.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg3.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg4.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg5.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg6.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg7.jpg', name: 'wrong' },
            { src: 'img/auth-img/newImg8.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg9.jpg', name: 'correct' },
            { src: 'img/auth-img/newImg1.jpg', name: 'wrong' }
        ]
    };

    // Restore cooldown end time from localStorage if it exists
    const cooldownEndTime = localStorage.getItem('cooldownEndTime');

    function checkCooldown() {
        const now = Date.now();
        if (cooldownEndTime && now < cooldownEndTime) {
            const remainingTime = Math.floor((cooldownEndTime - now) / 1000);
            disableInteraction();
            startCooldown(remainingTime);
        } else {
            enableInteraction();
        }
    }

    function startCooldown(seconds) {
        const endTime = Date.now() + seconds * 1000;
        localStorage.setItem('cooldownEndTime', endTime);

        const interval = setInterval(() => {
            const now = Date.now();
            const remainingTime = Math.floor((endTime - now) / 1000);

            verifyButton.innerText = `Please wait ${remainingTime} seconds to attemp again...`;

            if (remainingTime <= 0) {
                clearInterval(interval);
                localStorage.removeItem('cooldownEndTime');
                enableInteraction();
                verifyButton.innerText = 'Verify';
                resetAttempts();
                updateImages('default');
            }
        }, 1000);
    }

    function disableInteraction() {
        images.forEach(image => {
            image.removeEventListener('click', handleImageClick);
            image.style.pointerEvents = 'none';
        });
        verifyButton.disabled = true;
    }

    function enableInteraction() {
        images.forEach(image => {
            image.addEventListener('click', handleImageClick);
            image.style.pointerEvents = 'auto';
        });
        verifyButton.disabled = false;
    }

    function handleImageClick() {
        this.classList.toggle('selected');
    }

    function updateImages(set) {
        const newSet = imageSets[set];
        images.forEach((image, index) => {
            image.src = newSet[index].src;
            image.dataset.name = newSet[index].name;
            image.classList.remove('selected');
        });
        shuffleImages();
    }

    function shuffleImages() {
        for (let i = images.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [images[i], images[j]] = [images[j], images[i]];
        }
        images.forEach(image => imagesContainer.appendChild(image));
    }

    function resetAttempts() {
        attempts = 0;
        failedAttempts = 0;
        currentImageSet = 'default';
    }

    verifyButton.addEventListener('click', () => {
        const selectedImages = document.querySelectorAll('.image.selected');
        if (selectedImages.length !== 3) {
            alert('You must select exactly 3 images.');
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
                alert('You have reached the maximum number of attempts. Please wait 250 seconds before trying again.');
                startCooldown(250);
            } else if (failedAttempts % maxAttempts === 0) {
                currentImageSet = currentImageSet === 'default' ? 'alternate' : 'default';
                updateImages(currentImageSet);
                alert(`You have failed ${failedAttempts} times. The images have changed. Try again!`);
            } else {
                alert('Incorrect images. Please try again.');
                clearSelected();
                shuffleImages();
            }
        }
    });

    function clearSelected() {
        images.forEach(image => image.classList.remove('selected'));
    }

    // Initial setup
    updateImages(currentImageSet);
    checkCooldown();
});
