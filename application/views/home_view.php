<h1>Hellooo</h1>

<?php

if ($logged_in) {
    $firstname = $this->session->userdata('first_name');
    echo $firstname;
} else {
    echo "error";
}


?>

<a href="login/logout" class="btn btn-success">logout</a>
