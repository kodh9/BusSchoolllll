document.addEventListener('DOMContentLoaded', function () {
    const submitButton = document.getElementById('submit');
    const tbody = document.getElementById('tbody');
    
    // Load saved reviews from localStorage
    const savedReviews = JSON.parse(localStorage.getItem('reviews')) || [];
    savedReviews.forEach(review => addReviewToTable(review));

    submitButton.addEventListener('click', function (e) {
        e.preventDefault();

        const starWidget = document.querySelector('.star-widget');
        const ratingInputs = starWidget.querySelectorAll('input[name="rate"]');
        let selectedRatingValue = null;

        for (const input of ratingInputs) {
            if (input.checked) {
                selectedRatingValue = input.id.split('-')[1];
                break;
            }
        }

        const nameValue = document.getElementById('textarea').value;
        const titleValue = document.getElementById('textarea1').value;

        const review = {
            rating: selectedRatingValue,
            title: titleValue,
            name: nameValue
        };

        addReviewToTable(review);

        // Save the review to localStorage
        savedReviews.push(review);
        localStorage.setItem('reviews', JSON.stringify(savedReviews));

        document.getElementById('textarea').value = '';
        document.getElementById('textarea1').value = '';
        for (const input of ratingInputs) {
            input.checked = false;
        }
    });

    function addReviewToTable(review) {
        const starsContainer = document.createElement('div');
        for (let i = 1; i <= 5; i++) {
            const star = document.createElement('i');
            star.classList.add('fas', 'fa-star');
            if (i <= review.rating) {
                star.style.color = '#fd4';
            } else {
                star.style.color = '#ccc';
            }
            starsContainer.appendChild(star);
        }

        const row = tbody.insertRow();
        const cell1 = row.insertCell(0);
        const cell2 = row.insertCell(1);
        const cell3 = row.insertCell(2);

        cell1.appendChild(starsContainer);
        cell2.textContent = review.title;
        cell3.textContent = review.name;
    }
});