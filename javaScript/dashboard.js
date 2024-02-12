function toggleProductDetails(btn) {
    var detailsContainer = btn.nextElementSibling;
    detailsContainer.style.display = (detailsContainer.style.display === 'none' || detailsContainer.style.display === '') ? 'block' : 'none';
}

function validateAccountForm() {
    var emailInput = document.getElementById('emailInput');
    var passwordInput = document.getElementById('passwordInput');
    if (emailInput.value === '' || passwordInput.value === '') {
        alert('Please fill in all fields.');
        return false;
    }
    return true;
}

document.addEventListener('DOMContentLoaded', function () {
    var expandButtons = document.querySelectorAll('.expand-details-btn');
    expandButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            toggleProductDetails(btn);
        });
    });
    var accountForm = document.getElementById('account-form');
    accountForm.addEventListener('submit', function (event) {
        event.preventDefault(); 
        if (validateAccountForm()) {
            alert('Form Submitted!');
        }
    });
});
