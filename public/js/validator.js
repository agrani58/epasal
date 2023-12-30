class Validator {

    // Display an error message for the given form element
    static showError(element, message) {
        const errorElement = element.nextElementSibling;
        errorElement.textContent = message;
    }

    // Validate if a required form element's value is not empty(not null)
    static validateRequired(element, message) {
        const value = element.value.trim();
        if (!value) {
            this.showError(element, message);
            return false;
        }
        return true;
    }

    // Validate if a form element's value is a valid email address
    static validateEmail(element, message) {
        const email = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email.test(element.value.trim())) {
            this.showError(element, message);
            return false;
        }
        return true;
    }


    // Validate if a form element's value is a valid 10-digit phone number
    static validateNumber(element, message) {
        const number = /^\d{10}$/;
        if (!number.test(element.value.trim())) {
            this.showError(element, message);
            return false;
        }
        return true;
    }

    // Validate if a form element's value meets password length requirement
    static validatePassword(element, message) {
        if (element.value.length < 8) {
            this.showError(element, message);
            return false;
        }
        return true;
    }

    // Validate if the confirmation password matches the original password
    static validateConfirmPassword(passwordElement, confirmPasswordElement, message) {
        if (passwordElement.value !== confirmPasswordElement.value) {
            this.showError(confirmPasswordElement, message);
            return false;
        }
        return true;
    }

    // Validate if a file input's value has an allowed image file extension
    static validateImage(element, message) {
        const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        const fileExtension = element.value.split('.').pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
            this.showError(element, errorMessage);
            return false;
        }
        return true;
    }

    // Clear error messages for elements with class 'error-msg'
    static clearInputErrors() {
        const errorMessages = document.querySelectorAll('.error-msg');
        errorMessages.forEach(message => {
            message.textContent = "";
        });
    }
}