<?php $this->load->view('layout/login_view')?>



    <div class="container">
        <div class="row">
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title">My Profile</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs responsive" id="myTab">
                    <li class="active"><a href="#first" data-toggle="tab">My Ads</a></li>
<!--                    <li><a href="#favourite" data-toggle="tab">Favourites</a></li>-->
                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                <div class="tab-content  responsive" id="myTabContent">
                    <div class="tab-pane fade in active" id="first">
                        <p>
                        <div>
                            <h3>You don't have any ads yet.</h3>
                        </div>
                        <div ><p>Click the <mark> "Post your ad" </mark> button to post your free ad now !.</p></div>
                        <div><button type="button" class="btn btn-warning"><i class="fa fa-steam"></i> Post your AD</button> </div>
                        </p>
                    </div>

<!--                    <div class="tab-pane fade" id="favourite">-->
<!--                        <p>-->
<!--                        </p>-->
<!--                    </div>-->

                    <div class="tab-pane fade" id="settings">
                        <!--Collapse begin-->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Edit Profile
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <form class="form-horizontal"  id="editProfile_form" action="register/Add_user" method="post">

                                            <div class="form-group">
                                                <label  class="col-lg-3 control-label">First Name</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control"  name="firstName" placeholder="First name" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-lg-3 control-label">Last Name</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-lg-3 control-label">User Name</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="userName" placeholder="User Name" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-lg-3 control-label">Email</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Manage Password
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <form id="manage_password" method="post" class="form-horizontal" action="target.php">

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Current Password</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="currentPassword" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">New Password</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="newPassword" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Confirm Password</label>
                                                <div class="col-lg-5">
                                                    <input type="password" class="form-control" name="confirmPassword" />
                                                </div>
                                            </div>

                                            <div class="col-sm-offset-3 col-sm-10">
                                                <input type="submit" class="btn btn-default" value="Change">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Subscribe
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <form class="form-horizontal"  id="email_subscribe" action="" method="post">

                                            <div class="form-group">
                                                <label  class="col-lg-3 control-label">Email</label>
                                                <div class="col-lg-5">
                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-offset-3 col-lg-5">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="languages[]" value="english" /> Publish User Email
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10">
                                                    <input type="submit" class="btn btn-default" value="Save">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Collapse Ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spacer60"></div>

<?php $this->load->view('layout/footer')?>

<?php

?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#email_subscribe')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {

                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email address is required and can\'t be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    },

                }
            });

        $('#manage_password')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {

                    currentPassword: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            }
                        }
                    },

                    newPassword: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            }
                        }
                    },

                    confirmPassword: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            }
                        }
                    },

                }
            })

    });
</script>
