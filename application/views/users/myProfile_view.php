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
                            <div class="testimonal-title">Seller Name<span class="theme-color">Company Name </span>(4<span class="glyphicon glyphicon-star" aria-hidden="true"></span>)</div>
                            <label>address</label>
                                <label>City</label>
                                <label>Phone No</label>
                                <label>rate me</label>
                            <p><button type="button" class="btn btn-info" data-toggle="modal" data-target="#messageModal">Message</button></p>
                                <p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#feedBackModal">FeedBack</button></p>

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">

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
        </div>
        <div class="spacer30"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="r-bg">
                        <h3>FeedBack</h3>
                        <div class="comments-container">
                            <ul class="blog-post-comments">
                                <li>
                                    <span class="user-image"><i class="fa fa-user"></i></span>
                                    <span class="user-name">Sam Carlos</span>
                                    <span class="date"><i class="fa fa-clock-o"></i>01.12.2014</span>
                                    <span class="comment">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</span>
                                </li>
                            </ul>
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
                            <div class="item col-xs-3 col-sm-3 col-md-3">
                                <div class="search-result-item-container">
                                    <div class="search-result-item-media">
                                        <img src="<?php echo base_url();?>assets/img/car/1.jpg" alt="">
                                    </div>
                                    <div class="search-result-item-content">
                                        <div class="title"><a href="product-detail.html">BMW M3</a></div>
                                        <ul class="tags grid-hidden">
                                            <li><a href="#">Lpg</a></li>
                                            <li><a href="#">Used</a></li>
                                            <li><a href="#">2l</a></li>
                                        </ul>
                                        <ul class="list-4">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        <div class="price">$ 200,000</div>
                                        <a href="product-detail.html" class="btn btn-default" role="button">Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item col-xs-3 col-sm-3 col-md-3">
                                <div class="search-result-item-container">
                                    <div class="search-result-item-media">
                                        <img src="<?php echo base_url();?>assets/img/car/1.jpg" alt="">
                                    </div>
                                    <div class="search-result-item-content">
                                        <div class="title"><a href="product-detail.html">BMW M3</a></div>
                                        <ul class="tags grid-hidden">
                                            <li><a href="#">Lpg</a></li>
                                            <li><a href="#">Used</a></li>
                                            <li><a href="#">2l</a></li>
                                        </ul>
                                        <ul class="list-4">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        <div class="price">$ 200,000</div>
                                        <a href="product-detail.html" class="btn btn-default" role="button">Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item col-xs-3 col-sm-3 col-md-3">
                                <div class="search-result-item-container">
                                    <div class="search-result-item-media">
                                        <img src="<?php echo base_url();?>assets/img/car/1.jpg" alt="">
                                    </div>
                                    <div class="search-result-item-content">
                                        <div class="title"><a href="product-detail.html">BMW M3</a></div>
                                        <ul class="tags grid-hidden">
                                            <li><a href="#">Lpg</a></li>
                                            <li><a href="#">Used</a></li>
                                            <li><a href="#">2l</a></li>
                                        </ul>
                                        <ul class="list-4">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        <div class="price">$ 200,000</div>
                                        <a href="product-detail.html" class="btn btn-default" role="button">Details</a>
                                    </div>
                                </div>
                            </div>

                            <div class="item col-xs-3 col-sm-3 col-md-3">
                                <div class="search-result-item-container">
                                    <div class="search-result-item-media">
                                        <img src="<?php echo base_url();?>assets/img/car/1.jpg" alt="">
                                    </div>
                                    <div class="search-result-item-content">
                                        <div class="title"><a href="product-detail.html">BMW M3</a></div>
                                        <ul class="tags grid-hidden">
                                            <li><a href="#">Lpg</a></li>
                                            <li><a href="#">Used</a></li>
                                            <li><a href="#">2l</a></li>
                                        </ul>
                                        <ul class="list-4">
                                            <li><strong>Location:</strong> Los Angels</li>
                                            <li><strong>Engine:</strong> 6.5L LP, petrol</li>
                                            <li><strong>Mileage:</strong> 30000 km</li>
                                            <li><strong>Condition:</strong> used</li>
                                        </ul>
                                        <p class="grid-hidden">Looking cautiously round, to ascertain that they we. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                                        <div class="price">$ 200,000</div>
                                        <a href="product-detail.html" class="btn btn-default" role="button">Details</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--modal for message-->
<div  class="modal fade " id="messageModal" tabindex="-1" role="dialog">
    <div style="width: 30%" class="modal-dialog" role="document">
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

<!--modal for feedback-->
<div  class="modal fade " id="feedBackModal" tabindex="-1" role="dialog">
    <div style="width: 30%" class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" >FeedBack</h4>
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



<?php $this->load->view('layout/footer')?>
