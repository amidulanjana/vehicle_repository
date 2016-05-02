<?php $this->load->view('layout/login_view')?>

    <link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" media="screen" />


<section id="section">
    <div class="container">
        <div class="row">
            <div class="spacer60"></div>

            <div class="col-md-12">
                <div class="message-body">
                    <div class="message-left">
                        <ul>

                            <?php
                            foreach($data as $post) {
                                echo "<a href='message?id={$post['id']}'><li><img src=''> {$post['username']}</li></a>";
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="message-right">
                        <!-- display message -->
                        <div class="display-message">


                        </div>
                        <!-- /display message -->

                        <!-- send message -->
                        <div class="send-message">

                            <input type="hidden" id="conversation_id" value="<?php echo $conversationID; ?>">
                            <input type="hidden" id="user_form" value="<?php echo $user_one ?>">
                            <input type="hidden" id="user_to" value="1">

                            <div class="form-group" >
                                <input type="text"  class="form-control input-lg"  id="message" placeholder="Enter Your Message">
                            </div>
                            <button class="btn btn-primary" id="reply">Reply</button>
                            <span id="error"></span>
                        <!-- / send message -->
                        </div>
                    </div>
                </div>
                <div class="spacer60"></div>
            </div>
        </div>
    </div>
</section>


<script>

    $(document).ready(function(){
        /*post message via ajax*/
        $("#reply").on("click", function(){
            var message = $.trim($("#message").val()),
                conversation_id = $.trim($("#conversation_id").val()),
                user_form = $.trim($("#user_form").val()),
                user_to = $.trim($("#user_to").val()),
                error = $("#error");

            if((message != "") && (conversation_id != "") && (user_form != "") && (user_to != "")){
                error.text("Sending...");
                $.post("post_message_ajax.php",{message:message,conversation_id:conversation_id,user_form:user_form,user_to:user_to}, function(data){
                    error.text(data);
                    //clear the message box
                    $("#message").val("");
                });
            }
        });


        //get message
        c_id = $("#conversation_id").val();
        //get new message every 2 second
        setInterval(function(){
            $(".display-message").load("message/showMessage?c_id="+c_id);
        }, 2000);

        $(".display-message").scrollTop($(".display-message")[0].scrollHeight);
    });


</script>


<?php $this->load->view('layout/footer')?>
