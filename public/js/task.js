// confirm delete task
$('.btn-danger').on('click', function (e) {
    if (confirm($(this).data('confirm'))) {
        return true;
    }
    else {
        return false;
    }
});
