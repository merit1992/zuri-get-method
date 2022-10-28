<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode(
        array(
            "slackUsername" => "merit10",
            "backend" => true,
            "age" => 27,
            "bio" => "Msc student in UI, PHP(Laravel) Developer"
        )
        );