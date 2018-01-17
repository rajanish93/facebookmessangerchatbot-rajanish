<?php
$access_token = "EAAay2RMWI3sBAGoqsb7PdZAUyySnT42l3fEp1Mz4XVnoZCuyRdXtCZCA6lZCRJGPZCsM78dQNbfzNvZA4pZA8x3QguCJ12ymWlONU5AjrplZCKDOr2TnYaz8MUiRwFWEdr6WltdxSH4ZBlIxdjYXxRRQqJqQaF9Ufc0WRkt1cKLrTcVe0oa538XzN";
$verify_token = "12132dffgfg";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}


if ($hub_verify_token === $verify_token) {
    echo $challenge;
}
?>