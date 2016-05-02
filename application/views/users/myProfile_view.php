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

                    <?php
                    if ($ad==0){?>

                        <p>
                        <div>
                            <h3>You don't have any ads yet.</h3>
                        </div>
                        <div ><p>Click the <mark> "Post your ad" </mark> button to post your free ad now !.</p></div>
                        <div><button type="button" class="btn btn-warning"><i class="fa fa-steam"></i> Post your AD</button> </div>
                        </p>

                        <?php }
                    else {?>

                        <div id="products" class="row">

                            <?php foreach ($ad as $row)
                            { ?>

                            <div class="item col-xs-4 col-sm-4 col-md-3">
                                <div class="search-result-item-container">
                                    <div class="search-result-item-media">
                                        <img src="<?php echo base_url()?>assets/img/car/1.jpg" alt="">
                                    </div>
                                    <div class="search-result-item-content">
                                        <div class="title"><a href="product-detail.html"><?php echo $row['brand_name']?></a></div>
                                        <ul class="tags grid-hidden">
                                            <li><a href="#">Lpg</a></li>
                                            <li><a href="#">Used</a></li>
                                            <li><a href="#">2l</a></li>
                                        </ul>
                                        <ul class="list-4">
                                            <li><strong>Location:</strong><?php echo $row['location']?></li>
                                            <li><strong>Engine:</strong> <?php echo $row['engine']?></li>
                                            <li><strong>Mileage:</strong><?php echo $row['mileage']?></li>
                                            <li><strong>Condition:</strong><?php echo $row['condition']?></li>
                                        </ul>
                                        <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        <div class="price"><?php echo $row['price']?></div>
                                        <a href="product-detail.html" class="btn btn-default" role="button">Details</a>
                                    </div>
                                </div>
                            </div>
                            <?php }
                            }?>
                        </div>

                    </div>

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
                                        <form class="form-horizontal"  id="editProfile_form" action="" method="post">

                                            <div class="form-group">
                                                <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Full Name</label>
                                                <div class="col-lg-4 col-md-4 col-xs-4">
                                                    <input type="text" class="form-control" value="<?php echo $userData['fname'] ?>" name="firstName" placeholder="First name" />
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-xs-4">
                                                    <input type="text" class="form-control" name="lastName" value="<?php echo $userData['lname'] ?>" placeholder="Last name" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Full Name</label>
                                                <div class="col-lg-5 col-md-5 col-xs-5">
                                                    <input id="file-0a" class="file" type="file" multiple data-min-file-count="1" multiple data-show-upload="false" multiple data-show-remove="false" multiple data-show-required="false">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Address</label>
                                                <div class="col-lg-5 col-md-5 col-xs-5">
                                                    <input type="text" class="form-control" name="address" value="<?php echo $userData['address'] ?>" placeholder="Address">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Phone No</label>
                                                <div class="col-lg-5 col-md-5 col-xs-5">
                                                    <input type="text" class="form-control" name="phoneNo" value="<?php echo $userData['phone'] ?>" placeholder="Phone No">
                                                </div>
                                            </div>

                                            <?php if ($userData['accountType']=='personal') {?>

                                            <div class="form-group" style="display: none">
                                                <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Company</label>
                                                <div class="col-lg-5 col-md-5 col-xs-5">
                                                    <input type="text" class="form-control" name="company" value="<?php echo $userData['company'] ?>" placeholder="Company">
                                                </div>
                                            </div>
                                            <?php } else {?>

                                                <div class="form-group" >
                                                    <label  class="col-lg-3 col-md-3 col-xs-3 control-label">Company</label>
                                                    <div class="col-lg-5 col-md-5 col-xs-5">
                                                        <input type="text" class="form-control" name="company" value="<?php echo $userData['company'] ?>" placeholder="Company">
                                                    </div>
                                                </div>

                                            <?php }?>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-10">
                                                    <input type="submit" class="btn btn-default" value="Update" id="updateProfile">
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

        $('#editProfile_form')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
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


                    company: {
                        validators: {
                            notEmpty: {
                                message: 'The Company is required and can\'t be empty'
                            }

                        }
                    },

                    address: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 130,
                                message: 'The address is not a valid address'
                            },
                        }
                    },

                    phoneNo: {
                        validators: {
                            notEmpty: {
                                message: 'The password is required and can\'t be empty'
                            },
                            regexp: {
                                regexp: /^\(?0\d{2}\)?[\s\-]?\d{7}$/,
                                message: 'Incorrect Phone number.Please use local phone numbers'
                            }
                        }
                    }

                }
            });

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

    $('#file-0a').fileinput({
        allowedFileExtensions : ['jpg', 'png','gif'],
        browseClass: "btn btn-primary btn-md"
    });

</script>
