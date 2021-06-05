$(document).ready(function() {

    $('#select-image').on('click', function() {
        $('#input-image').click()
    })

    $('#input-image').on('change', function() {
        $('#form-image').submit();
    })

})
