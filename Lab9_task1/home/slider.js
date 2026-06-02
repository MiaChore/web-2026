const sliders = document.querySelectorAll('.slider_container');
const modal = document.querySelector('.modal');
const modalImage = document.querySelector('.modal_image');
const closeModal = document.querySelector('.close_modal');
const slidersForModal = document.querySelectorAll('.slider_container');

let modalImages = [];
let modalCurrent = 0;

sliders.forEach(function(slider) {

    const slides = slider.querySelectorAll('.slide');
    const leftButton = slider.querySelector('.left_arrow');
    const rightButton = slider.querySelector('.right_arrow');
    const counter = slider.querySelector('.photo_counter');

    let current = 0;

    function showSlide(index) {
        slides.forEach(function(slide) {
            slide.style.display = 'none';
        });
        slides[index].style.display = 'block';
        if (counter) {
            counter.textContent =
                (index + 1) + '/' + slides.length;
        }
    }
    if (rightButton) {
        rightButton.addEventListener('click', function() {
            current++;
            if (current >= slides.length) {
                current = 0;
            }
            showSlide(current);
        });

    }
    if (leftButton) {
        leftButton.addEventListener('click', function() {
            current--;
            if (current < 0) {
                current = slides.length - 1;
            }
            showSlide(current);
        });
    }
});

slidersForModal.forEach(function(slider) {
    const slides = slider.querySelectorAll('.slide');
    slides.forEach(function(image, index) {
        image.addEventListener('click', function() {
            modal.style.display = 'flex';
            document.addEventListener('keydown', handleEsc);
            modalImages = [];
            slides.forEach(function(slide) {
                modalImages.push(slide.src);
            });
            modalCurrent = index;
            updateModal();
        });
    });
});

closeModal.addEventListener('click', function() {
    modal.style.display = 'none';
    document.removeEventListener(
        'keydown',
        handleEsc
    );
});

function handleEsc(event) {
    if (event.key === 'Escape') {
        modal.style.display = 'none';
        document.removeEventListener(
            'keydown',
            handleEsc
        );
    }
}

function updateModal() {
    modalImage.src = modalImages[modalCurrent];
    const modalCounter = document.querySelector('.modal_counter');
    if (modalImages.length <= 1) {
        modalLeft.style.display = 'none';
        modalRight.style.display = 'none';
        modalCounter.style.display = 'none';
        return;
    }
    modalLeft.style.display = 'flex';
    modalRight.style.display = 'flex';
    modalCounter.style.display = 'block';
    modalCounter.textContent =
        (modalCurrent + 1) + '/' + modalImages.length;
}

const modalLeft = document.querySelector('.modal_left');
const modalRight = document.querySelector('.modal_right');

modalRight.addEventListener('click', function() {
    modalCurrent++;
    if (modalCurrent >= modalImages.length) {
        modalCurrent = 0;
    }
    updateModal();
});

modalLeft.addEventListener('click', function() {
    modalCurrent--;
    if (modalCurrent < 0) {
        modalCurrent = modalImages.length - 1;
    }
    updateModal();
});

const textBlocks = document.querySelectorAll('.post_text');

textBlocks.forEach(function(text) {
    const button = text.parentElement.querySelector('.more_button');
    if (text.scrollHeight <= 36) {
        button.style.display = 'none';
    }
    button.addEventListener('click', function() {
        text.classList.toggle('expanded');
        if (text.classList.contains('expanded')) {
            button.textContent = 'Свернуть';
        } else {
            button.textContent = 'Ещё';
        }
    });
});