

<?php

    foreach($_POST['incexc'] as $x) {
        $query = "INSERT INTO tbl_assign_inc_exc(p_id, p_i_e, is_inc_exc) VALUES($p_id, $x, $p_i_e)";
        $run = mysqli_query($dbcon, $$query);
    }

    die();
    

?>