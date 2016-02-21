<?php $this->load->view('layout/header')?>

<style>

    hr {
        -moz-border-bottom-colors: none;
        -moz-border-image: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: #00b4c9;
        border-style: solid none;
        border-width: 0.0001em;
        margin: 18px 0;
    }



</style>

<section id="section">
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



                   <div class="container"> <!-- nav tab open-->
                        <ul class="nav nav-pills nav-stacked col-md-2 ">
                            <li class="active"><a href="#tab_adds" data-toggle="pill"><i class="fa fa-tags"></i> My Ads</a></li>
                            <li><a href="#tab_b" data-toggle="pill"><i class="fa fa-heart"></i> Favourites</a></li>
                            <li><a href="#tab_c" data-toggle="pill"><i class="fa fa-cogs"></i> Settings</a></li>
                            <li><a href="#tab_d" data-toggle="pill"><i class="fa fa-sign-out"></i> Log Out</a></li>
                        </ul>
                        <div class="tab-content col-md-10">

                            <div class="tab-pane active" id="tab_adds">

                                <h3>My Ads <hr></h3>

                                <div class="col-md-offset-3 col-md-6">

                                    <div class="col-md-offset-2 col-md-10"><h4>You don't have any ads yet.</h4></div>
                                    <div ><p>Click the <mark> "Post your ad" </mark> button to post your free ad now !.</p></div>
                                    <div class="col-md-offset-3"><button type="button" class="btn btn-warning"><i class="fa fa-steam"></i> Post your AD</button> </div>
                                </br>
                                </div>

                            </div>
                            <div class="tab-pane" id="tab_b">

                                <h3>Favourites <hr></h3>

                                <div class="col-md-offset-3 col-md-6">

                                    <div class="col-md-offset-1 col-md-11"><h4>You haven't marked any ads as favorite yet.</h4></div>
                                    <div ><p>Click on the star symbol on any ad to save it as a favorite.
                                            Start to <mark> browse ads </mark> to find ads you would like to favorite.</p></div>
                                    <div class="col-md-offset-3"><button type="button" class="btn btn-warning"><i class="fa fa-steam"></i> Browse ADs</button> </div>

                                </div>
                            </div>


                            <div class="tab-pane " id="tab_c">
                                <h3>Settings</h3>
                                <hr>
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



                                <form id="manage_password" method="post" class="form-horizontal" action="target.php">
                                    <div class="panel-group" id="steps">
                                        <!-- Step 1 -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#steps" href="#stepOne">Manage Password</a></h4>
                                            </div>
                                            <div id="stepOne" class="panel-collapse collapse in">
                                                <div class="panel-body">
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

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>



                            <div class="tab-pane" id="tab_d">
                                <h4>Pane D</h4>
                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames
                                    ac turpis egestas.</p>
                            </div>
                        </div><!-- tab content -->
                    </div><!-- end of container -->



<!-- user profile                    <div class="col-sm-4">-->
<!--                        <div class="r-bg">-->
<!--                            <form class="form-horizontal"  id="" action="" method="post">-->
<!---->
<!--                                <h4>User Name</h4>-->
<!---->
<!--                                    <div class="col-md-offset-4 col-md-4 ">-->
<!--                                        <a href="#" class="thumbnail">-->
<!--                                            <img src="--><?php //echo base_url();?><!--img/user.ico" alt="..." >-->
<!--                                        </a>-->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-md-12">-->
<!--                                        <label  class="col-md-5 ">Name</label>-->
<!--                                        <label  class="col-md-7 ">User Name</label>-->
<!---->
<!--                                    </div>-->
<!---->
<!--                                    <div class="col-md-12">-->
<!--                                        <label  class="col-md-5 ">AccountType</label>-->
<!--                                        <label  class="col-md-7 ">Private</label>-->
<!--                                    </div>-->
<!---->
<!--                            </form>-->
<!---->
<!--                        </div>-->
<!--                    </div>-->





</div>

</div>

</section>  <!-- section ends -->

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
