document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.toggle-password').forEach(function(toggle) {
        toggle.addEventListener('click', function () {
            const targetId = this.getAttribute('data-target');
            const passwordField = document.getElementById(targetId);
            if (!passwordField) return;
            const icon = this.querySelector('i');
            if (passwordField.type === "password") {
                passwordField.type = "text";
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = "password";
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    });
});