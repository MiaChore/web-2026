const likeButtons = document.querySelectorAll('.like_button');

likeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        fetch('like.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                post_id: button.dataset.postId
            })
        })
        .then(response => response.json())
        .then(data => {
            if (!data.success) {
                alert('Ошибка');
                return;
            }
            const counter = button.querySelector('.counter');
            counter.textContent = data.likes;
        })
        .catch(function() {
            alert(
                'Не удалось выполнить запрос'
            );
        });
    });
});