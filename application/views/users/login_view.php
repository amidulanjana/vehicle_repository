<?php $this->load->view('layout/header')?>

<div class="modal fade" id="singInForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h3 class="modal-title" id="myModalLabel">Please Sing Up</h3>
                <div id="thanks"></div>
            </div>
            <div class="modal-body">
                <form class="contact">
                    <div class="form-group">
                        <label for="login-name" class="control-label">Login name:</label>
                        <input class="form-control" autocomplete="off" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label">Password:</label>
                        <input class="form-control"  type="text" name="password">
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
                <button class="btn btn-success" id="submit">submit</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(function() {
//twitter bootstrap script
        $("button#submit").click(function(){
            $.ajax({
                type: "POST",
                url: '<?php echo base_url("process"); ?>',
                data: $('form.contact').serialize(),
                success: function(msg){
                    $("#thanks").html(msg)
                    //$("#form-content").modal('hide');
                },
                error: function(){
                    alert("failure");
                }
            });
        });
    });
</script>


