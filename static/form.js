function validateForm() {
    const firstName = document.getElementById('first_name').value;
    const lastName = document.getElementById('last_name').value;
    const phone = document.getElementById('phone').value;
    const field = document.getElementById('field').value;
    const description = document.getElementById('description').value;

    const nameRegex = /^[a-zA-Z]+$/;
    const phoneRegex = /^\d{10}$/;
    const fieldRegex = /^[a-zA-Z\s]+$/;
    const descriptionRegex = /^[a-zA-Z0-9\s]+$/;

    if (!nameRegex.test(firstName)) {
        alert('Please enter a valid first name');
        return false;
    }

    if (!nameRegex.test(lastName)) {
        alert('Please enter a valid last name');
        return false;
    }

    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid 10-digit phone number');
        return false;
    }

    if (!fieldRegex.test(field)) {
        alert('Please enter a valid field');
        return false;
    }

    if (!descriptionRegex.test(description)) {
        alert('Please enter a valid description');
        return false;
    }

    return true;
}

document.querySelector('form').onsubmit = validateForm;