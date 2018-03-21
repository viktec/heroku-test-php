<?php
Header("Custom-Header: Ciao");
Header("Content-Type: application/json");

echo json_encode(array(
    "property" => "value",
    "other_property" => array(
        "subprop" => 123
    )
));
