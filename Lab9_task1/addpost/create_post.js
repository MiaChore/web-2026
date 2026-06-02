const photoInput = document.getElementById('photoInput');
const addPhotoMainButton = document.getElementById('addPhotoMainButton');
const addPhotoSecondaryButton = document.getElementById('addPhotoSecondaryButton');
const descriptionInput = document.getElementById('descriptionInput');
const shareButton = document.getElementById('shareButton');
const previewImage = document.getElementById('previewImage');
const placeholderIcon = document.getElementById('placeholderIcon');
const leftArrow = document.getElementById('leftArrow');
const rightArrow = document.getElementById('rightArrow');
let photos = [];
let currentIndex = 0;

addPhotoMainButton.addEventListener('click', () => {
    photoInput.click();
});

addPhotoSecondaryButton.addEventListener('click', () => {
    photoInput.click();
});

photoInput.addEventListener('change', (event) => {
    const newFiles = Array.from(event.target.files);
    if (photos.length + newFiles.length > 3) {
        alert('Можно загрузить максимум 3 фотографии');
        return;
    }
    photos.push(...newFiles);
    currentIndex = photos.length - newFiles.length;
    updatePreview();
    updateShareButton();
    photoInput.value = '';
});

leftArrow.addEventListener('click', () => {
    if (photos.length === 0) {
        return;
    }
    currentIndex--;
    if (currentIndex < 0) {
        currentIndex = photos.length - 1;
    }
    updatePreview();
});

rightArrow.addEventListener('click', () => {
    if (photos.length === 0) {
        return;
    }
    currentIndex++;
    if (currentIndex >= photos.length) {
        currentIndex = 0;
    }
    updatePreview();
});

descriptionInput.addEventListener('input', () => {
    updateShareButton();
});

shareButton.addEventListener('click', () => {
    const post = {
        photos: photos,
        description:
            descriptionInput.value.trim()
    };
    console.log(post);
    photos = [];
    currentIndex = 0;
    descriptionInput.value = '';
    previewImage.style.display = 'none';
    placeholderIcon.style.display = 'block';
    addPhotoMainButton.style.display = 'block';
    leftArrow.style.display = 'none';
    rightArrow.style.display = 'none';
    updateShareButton();
});

function updatePreview() {
    if (photos.length === 0) {
        addPhotoMainButton.style.display = 'block';
        previewImage.style.display = 'none';
        placeholderIcon.style.display = 'block';
        leftArrow.style.display = 'none';
        rightArrow.style.display = 'none';
        return;
    }
    previewImage.src =
        URL.createObjectURL(photos[currentIndex]);
    previewImage.style.display = 'block';
    addPhotoMainButton.style.display = 'none';
    placeholderIcon.style.display = 'none';
    if (photos.length > 1) {
        leftArrow.style.display = 'flex';
        rightArrow.style.display = 'flex';
    } else {
        leftArrow.style.display = 'none';
        rightArrow.style.display = 'none';
    }
}

function updateShareButton() {
    const hasPhotos = photos.length > 0;
    const hasDescription = descriptionInput.value.trim().length > 0;
    shareButton.disabled = !(hasPhotos && hasDescription);
}