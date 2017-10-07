$(document).ready(function(){
    CKEDITOR.replace('body_email');
    $('#select_add_address').select2({
        width:'70px',
        minimumResultsForSearch: Infinity
    });
    $('#user_role_type_select').select2({
        width:'100%',
        minimumResultsForSearch: Infinity
    });
});