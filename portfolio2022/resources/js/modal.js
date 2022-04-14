$(function () {

    var input = document.getElementById('error-modal');
    var value = input.getAttribute('value');
    if (value == 1) {
        $('#RegisterModal').modal('show');
    }
    var input = document.getElementById('mail-modal');
    var value = input.getAttribute('value');
    if (value == 1) {
        $('#result-modal').modal('show');
    }
    var input = document.getElementById('login');
    var value = input.getAttribute('value');
    if (value == 2) {
        $('#LoginModal').modal('show');
    }
});
