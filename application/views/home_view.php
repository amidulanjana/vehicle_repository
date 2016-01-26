<h1>Hellooo</h1>

<p class="bg-success">

    <?php

        if($this->session->flashdata('login_success'))
        {
            echo $this->session->flashdata('login_success');
        }

    ?>

</p>

<div class="bg-danger">

    <?php

    if($this->session->flashdata('login_unsuccess'))
    {
        echo $this->session->flashdata('login_unsuccess');
    }

    ?>

</div>