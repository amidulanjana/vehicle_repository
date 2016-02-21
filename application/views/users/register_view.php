<?php $this->load->view('layout/header')?>

<section id="section">
    <div class="container">
        <div class="row">

                <div class="page-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title">Register form</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-offset-1 col-sm-10">
                            <div class="r-bg">
                                <form class="form-horizontal"  id="register_form" action="register/Add_user" method="post">

                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label">Full Name</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" value="<?php echo set_value('firstName') ?>" name="firstName" placeholder="First name" />
                                        </div>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label">User Name</label>
                                        <div class="col-lg-5">
                                            <input type="text" class="form-control" name="username" autocomplete="off" placeholder="User Name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label">Retype password</label>
                                        <div class="col-lg-5">
                                            <input type="password" class="form-control" name="confirmed_password" placeholder="Confirmed password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-10">
                                            <input type="submit" class="btn btn-default" value="Register">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</section>  <!-- section ends -->

<?php $this->load->view('layout/footer')?>


<script type="text/javascript">
    $(document).ready(function(){
        $('#register_form')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh gly-spin'
                },
                fields: {

                    firstName:{
                        message: 'The first name is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The username is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z\s]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },

                    lastName:{
                        message: 'The first name is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The username is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z\s]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            }
                        }
                    },

                    username: {
                        message: 'The username is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The username is required and can\'t be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'The username must be more than 6 and less than 30 characters long'
                            },
                            /*remote: {
                             url: 'remote.php',
                             message: 'The username is not available'
                             },*/
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'The username can only consist of alphabetical, number, dot and underscore'
                            },


                            remote: {
                                message: 'This username is already registered',
                                url: 'register/validate_username',
                                data: {
                                    type: 'username'
                                },
                                type: 'POST',
                                delay: 1000
                            }

                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            },

                            remote: {
                                message: 'This email is already registered',
                                url: 'register/validate_email',
                                data: {
                                    type: 'email'
                                },
                                type: 'POST',
                                delay: 1000
                            }
                        }
                    },
                    password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            }
                        }
                    },

                    confirmed_password: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            },
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    }
                }
            })

    });
</script>
