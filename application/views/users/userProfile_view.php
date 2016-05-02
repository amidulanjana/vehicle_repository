<?php $this->load->view('layout/login_view')?>

<section id="section">
    <div class="container">
        <div class="row">
            <div class="spacer20"></div>
            <h3>About Seller</h3>
            <div class="testimonal">

                <div class="testimonal-image">
                    <img src="<?php echo base_url();?>assets/img/team/1.jpg" alt="">

                </div>
                <div class="testimonal-text">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="testimonal-title"><?php echo $userData['fname'] ." ".$userData['lname'] ?><span class="theme-color"><?php echo $userData['company']?> </span>(4<span class="glyphicon glyphicon-star" aria-hidden="true"></span>)</div>
                            <label><?php echo $userData['address'] ."</label>
                                <label>" .$userData['email']."</label>
                                <label>".$userData['phone']."</label>
                                <label> <input id='input-4' class='rating rating-loading' data-show-clear='false' data-show-caption='false' data-size='xs'>"; ?></label>
                            <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#messageModal">Message</button></p>


                        </div>
                        <div class="col-md-6">
                            <div class="row">


                                    <ul class="counter row">
                                        <li class="col-md-6">
                                            <div class="counter-item">
                                                <i class="fa fa-car"></i>
                                                <div class="timer" id="item1" data-to="3991" data-speed="5000"></div>
                                                <h5>Cars available</h5>
                                            </div>
                                        </li>
                                        <li class="col-md-6">
                                            <div class="counter-item">
                                                <i class="fa fa-check"></i>
                                                <div class="timer" id="item2" data-to="6394" data-speed="5000"></div>
                                                <h5>Cars Sold</h5>
                                            </div>
                                        </li>
                                    </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer30"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="r-bg">
                        <h3>FeedBack</h3>
                        <div class="comments-container">
                            <ul class="blog-post-comments" >
                                <span id="postfeed"></span>
                                <?php  foreach($data as $row) {
                                    echo '<li>
                                    <span class="user-image"><i class="fa fa-user"></i></span>
                                    <span class="user-name">Sam Carlos</span>
                                    <span class="date"><i class="fa fa-clock-o"></i>'.$row['date'].'</span>
                                    <span class="comment">'.$row['feedback'].'</span>
                                </li>';
                                }?>
                            </ul>

                            <div class="row spacer20"></div>
                            <!--feedBack form-->
                            <!--feedBack form-->
                            <form >
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <textarea class="form-control" id="comment" name="comment" placeholder="Your FeedBack"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <button type="submit" id="feed" name="feed" class="btn btn-default btn-lg">Post FeedBack</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="spacer30"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="r-bg">
                        <h3>Vehicles to Sale</h3>
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
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--modal for message-->
<div  class="modal fade " id="messageModal" tabindex="-1" role="dialog">
    <div style="width:350px" class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >New message</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>


<script>

    $(document).ready(function() {
        $("#feed").click(function(e){
            e.preventDefault();
            //var loggedUser=$('#loggedUser').val();
            var feed=$('#comment').val();

            if(feed.length !== 0) {

                $.ajax({

                    type: 'POST',
                    url: '../feedBack',
                    data: {feedBack: feed},
                    dataType: "json",
                    success: function (msg) {
                        //console.log("ok");
                        if(msg.message)
                        {
                           // var item = new Array();
                            $('#comment').val("");
                            console.log(msg.message);
                             //msg.message.forEach(function (item,i){ console.log(item["feedback"])});
                            msg.message.forEach(function (item,i){

                                $('#postfeed').html( '<li> ' +
                                    '<span class="user-image"><i class="fa fa-user"></i></span> ' +
                                    '<span class="user-name">Sam Carlos</span>' +
                                    '<span class="date"><i class="fa fa-clock-o"></i>'+item["date"]+'</span>' +
                                    ' <span class="comment">'+item["feedback"]+'</span> ' +
                                    '</li>');
                                console.log(item["feedback"])});

                        }

                    }


                });
            }

        });

    });

    $(document).ready(function() {
        $('#input-4').on('rating.change', function(event, value) {
            console.log(value);

            if (value.length !=0){

                $.ajax({
                    type:'POST',
                    url:'../updateRating',
                    data:{rate:value},
                    success: function (msg) { console.log(msg)}
                });

            }
        });


    });



</script>




</script>



<?php $this->load->view('layout/footer')?>
