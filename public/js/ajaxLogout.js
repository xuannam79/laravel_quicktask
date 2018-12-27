$('.dropdown-item').on('click', function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    $.ajax({
        url: '/logout',
        type: 'POST',
        cache: false,
        success: function(data){
            $('.ml-auto').replaceWith('<ul class="navbar-nav ml-auto"><li class="nav-item"><a class="nav-link" href="/login">Đăng Nhập</a></li><li class="nav-item"><a class="nav-link" href="/register">Đăng Kí</a></li></ul>');
        },
        error: function (){
            alert('có lỗi xảy ra');
        }
    });
});
