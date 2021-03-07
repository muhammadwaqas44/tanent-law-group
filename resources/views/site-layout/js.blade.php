<script src="{{asset('site/js/jquery-ui.js')}}"></script>
<script src="{{asset('site/js/poper.js')}}"></script>
<script src="{{asset('site/js/bootstrap.v4.3.1.js')}}"></script>
<script src="{{asset('site/js/block_ui.min.js')}}"></script>
<script src="{{asset('site/js/keypress_functions.js')}}"></script>
<script src="{{asset('site/js/toastr.min.js')}}"></script>
<script src="{{asset('site/js/select2.full.min.js')}}"></script>


    <script>
        jQuery(document).ready(function($) {

            $(".show-fewer34").on("click", function () {
                var txt = $(".show-full-description").is(':visible') ? 'View Full' : 'View less';
                $(".show-fewer34").text(txt);
                if(txt == 'View Full')
                {
                    $(".show-fewer34").append(' <i class="fas fa-angle-down"></i>');
                }
                else if(txt == 'View less')
                {
                    $(".show-fewer34").append(' <i class="fas fa-angle-up"></i>');
                }
                $('.show-full-description').slideToggle(200);
            });

            $('a.scroll-area[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if( target.length ) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top
                    }, 20);
                }
            });

        });
    </script>

    <script type="text/javascript">
        jQuery("#accordion > li > div").click(function($){
            if(false == $(this).next().is(':visible')) {
                $('#accordion ul').slideUp(300);
                $('#accordion > li > div').removeClass('active');
            }
            $(this).next().slideToggle(300);
            $(this).toggleClass('active');

        });
    </script>

    <script>
        jQuery(document).ready(function($){
            $(".panel-title a, .btn-link").addClass('abc myclass');

        });
    </script>

    <script>$('.custom-menu').click(function(){
            $('.center-navigation ul').slideToggle(400);
        })
    </script>

<script>

    $(document).ready(function(){

        $('.signupBtn').click(function(){

            var data = $('.signupForm').serialize();
            var this_data = $(this);
            $('.error-div').css('display','none');
            $('.validation_error').html('');
            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });

            $.ajax({

                type: 'POST',
                url: '{{route('registerUser')}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        console.log(this_data.find('.success'));
                        this_data.parents('div.modal-content').find('.success').text(response.message);
                        this_data.parents('div.modal-content').find('.success').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".success").fadeOut(4000,function(){
                            window.location.href = "{{route('dashboard')}}";
//                            alert('123');
                        });


                    }
                    else if (response.result == 'error') {
                        $.unblockUI();
                        this_data.parents('div.modal-content').find('.error').text(response.message);
                        this_data.parents('div.modal-content').find('.error').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".error").fadeOut(5000);
                    }
                },
                error: function (data) {
//                    var html = '';
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        var html = '<li>'+value+'</li>';
//                        console.log(this_data.parents('div.modal-content').find('.validation_error').append(html));
                        this_data.parents('div.modal-content').find('ul.validation_error').append(html);
                        this_data.parents('div.modal-content').find('.error-div').css('display','inline-block');

                    });


                }

            });


        });

        $('.loginBtn').click(function(){

            $('.error-div').css('display','none');
            $('.validation_error').html();
            var this_data = $(this);

            var data = $('.loginForm').serialize();

            $('.error-div').css('display','none');
            $('.validation_error').html('');

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({

                type: 'POST',
                url: '{{route('loginUser')}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        this_data.parents('div.modal-content').find('.success').text(response.message);
                        this_data.parents('div.modal-content').find('.success').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".success").fadeOut(4000,function(){
                            window.location.href = "{{route('dashboard')}}"
                        });
//                        $('.success').text(response.message);
//                        $('.success').css('display','inline-block');
//                        $(".success").fadeOut(4000,function(){
//                            window.location.reload('false');
//                        });

                    }

                    else if (response.result == 'error') {
                        $.unblockUI();
                        this_data.parents('div.modal-content').find('.error-div').text(response.message);
                        this_data.parents('div.modal-content').find('.error-div').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".error-div").fadeOut(5000);
//                        $('.error').text(response.message);
//                        $('.error').css('display','inline-block');
//                        $('.error').fadeOut(5000);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        var html = '<li>'+value+'</li>';
//                        console.log(this_data.parents('div.modal-content').find('.validation_error').append(html));
                        this_data.parents('div.modal-content').find('ul.validation_error').append(html);
                        this_data.parents('div.modal-content').find('.error-div').css('display','inline-block');
//                        $('.validation_error').append('<li>'+value+'</li>');
//                        $('.error-div').css('display','inline-block');
//                        return false;
                    });
                }

            });


        });

        $('.forgetPasswordBtn').click(function(){

            var data = $('.forgetPasswordForm').serialize();
            var this_data = $(this);

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({

                type: 'POST',
                url: '{{route('forgetPassword')}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
//                        alert(response.message);
//                        $("[data-dismiss=modal]").trigger({ type: "click" });
                        this_data.parents('div.modal-content').find('.success').text(response.message);
                        this_data.parents('div.modal-content').find('.success').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".success").fadeOut(4000,function(){
                            $('#forgetPasswordModal').modal('hide');

                        });


                    }

                    else if (response.result == 'error') {
                        $.unblockUI();
//                        alert(response.message);
                        this_data.parents('div.modal-content').find('.error').text(response.message);
                        this_data.parents('div.modal-content').find('.error').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".error").fadeOut(5000);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
//                        alert(response.message);
                        var html = '<li>'+value+'</li>';
                        this_data.parents('div.modal-content').find('ul.validation_error').append(html);
                        this_data.parents('div.modal-content').find('.error-div').css('display','inline-block');
                    });
                }

            });


        });

        $('.updatePasswordBtn').click(function () {

            var data = $('.updatePasswordForm').serialize();
            var this_data = $(this);

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({

                type: 'POST',
                url: '{{route('changePassword')}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        this_data.parents('div.modal-content').find('.success').text(response.message);
                        this_data.parents('div.modal-content').find('.success').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".success").fadeOut(4000,function(){
                            window.location.reload('false');


                        });
//                        alert(response.message);
                    }

                    else if (response.result == 'error') {
                        $.unblockUI();
    //                        alert(response.message);
                        this_data.parents('div.modal-content').find('.error').text(response.message);
                        this_data.parents('div.modal-content').find('.error').css('display','inline-block');
                        this_data.parents('div.modal-content').find(".error").fadeOut(5000);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
//                        alert(value);
                        var html = '<li>'+value+'</li>';
                        this_data.parents('div.modal-content').find('ul.validation_error').append(html);
                        this_data.parents('div.modal-content').find('.error-div').css('display','inline-block');
                    });
                }

            });

        });

        $('.signupPageBtn').click(function(){

            $('#loginModal').modal('hide');

        });

        $('.loginPageBtn').click(function(){
            $('#signupModal').modal('hide');

        });

        $('.forgetPasswordPageBtn').click(function(){
            $('#loginModal').modal('hide');
        });

        @if(Session::has('openChangePasswordModal'))
            $('#updatePasswordModal').css('display','block');
            $('#updatePasswordModal').modal('show');
        @endif


        @if(Session::has('openForgetPasswordModal'))
            @if(Session::has('error'))
                    $('#forgetPasswordModal').find('.error').css('display','inline-block');
            @endif

            $('#forgetPasswordModal').css('display','block');

            $('#forgetPasswordModal').modal('show');
        @endif

        $('.userUpdatePasswordBtn').click(function () {

            var data = $('.userUpdatePasswordForm').serialize();
            $('.error-div').css('display','none');
            $('.validation_error').html('');

            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({

                type: 'POST',
                url: '{{route('userUpdatePassword')}}',
                data: data,

                success: function (response, status) {

                    if (response.result == 'success') {
                        $.unblockUI();
                        $('.success').text(response.message);
                        $('.success').css('display','inline-block');
                        $(".success").fadeOut(4000,function(){
                           $('#user-change-password-modal').modal('hide');
                        });

                    }

                    else if (response.result == 'error') {
                        $.unblockUI();
                        $('.error').text(response.message);
                        $('.error').css('display','inline-block');
                        $(".error").fadeOut(5000);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        $('.validation_error').append('<li>'+value+'</li>');
                        $('.error-div').css('display','inline-block');

                    });
                }

            });

        });

        $(".select2-class").select2({
        });

        if($(window).width() <= '768') {
            $('body').on('click', function (e) {
                var container = $('.custom-menu');
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    $('.navigation-ul-mo').slideUp('fast');
                }

            });
        }
    });

    function successMsg(_msg){
        window.toastr.success(_msg);
    }

    function errorMsg(_msg){
        window.toastr.error(_msg);
    }

    function warningMsg(_msg){
        window.toastr.warning(_msg);
    }

</script>



