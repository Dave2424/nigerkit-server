$(document).ready(function() {
    $().ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //show the success from the product Insertion
        if ($('#success_post').val()) {
            $msg = $('#success_post').val();
            md.showSuccessMessage($msg);
        }
    });
});