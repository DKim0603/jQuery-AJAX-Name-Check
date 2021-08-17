<?php
    $exisitingNames = array("Daniel", "Dennis", "Danny", "Dom");

    if (isset($_POST['suggestion'])) {
        $username = $_POST['suggestion'];

        if (!empty($username)) {
            foreach ($exisitingNames as $exisitingName) {
                if (strpos($exisitingName, $name) !== false) {
                    echo $exisitingName;
                    echo "<br>";
                }
            }
        }      
    }
?>