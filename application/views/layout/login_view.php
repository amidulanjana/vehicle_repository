<?php $this->load->view('layout/header')?>

<div class="modal fade" id="singInForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Please Sing Up</h3>
                <div id="result"></div>
            </div>

            <div class="modal-body">
                <form class="contact" action="" method="post" >
                    <div class="form-group">
                        <label for="username" class="control-label">Login name:</label>
                        <input class="form-control"  type="text" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input class="form-control"  type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>

                        </div>
                        <label>
                            <a href=""><small>Not yet registered ?</small></a>
                        </label>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="submit">Login</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<script>

    $(document).ready(function() {
        $("#submit").click(function(){

            var name=$('#username').val();
            var password=$('#password').val();

            if(name.length !== 0 && password.length !== 0) {

                $.ajax({

                    type: 'POST',
                    url: 'login/validate_login_user',
                    data: {username: name, password: password},
                    dataType: "json",
                    success: function (msg) {
                        //$("#thanks").html(msg.message);
                        if (msg.message == "logged_in") {
                            //$("#result").html("</br><span class='label label-info' >your message has been submitted .. Thanks you</span>");
                            //$('#submit').prop('disabled', true);
                            //setTimeout(function() {
                            window.location.href = "register";
                            // $("#singInForm").modal('hide');
                            // }, 1000);

                        } else {
                            $("#result").html(msg.message);

                        }
                    }

                });
            }else{
                $("#result").html('<div class="label label-danger" >All fields are required </div>');
            }

        });

    });



</script>


