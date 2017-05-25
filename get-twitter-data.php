<?php
/*
http://localhost/dev/wwdah/get-twitter-data.php
*/
$criterion = $_GET["search"];

$json = <<< __DOC__
{
    "data": [{
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }, {
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }, {
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }, {
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }, {
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }, {
    "column1":"datum1",
    "column2":"datum2",
    "column3":"datum3"
    }]
}
__DOC__;
echo $json;
?>
