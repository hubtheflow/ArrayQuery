<?php
$json = '[{
    "name":"Mongo",
    "type":"db",
    "release":{
        "arch":"x86",
        "version":22,
        "year":2012
    }
},
{
    "name":"Mongo",
    "type":"db",
    "release":{
        "arch":"x64",
        "version":21,
        "year":2012
    }
},
{
    "name":"Mongo",
    "type":"db",
    "release":{
        "arch":"x86",
        "version":23,
        "year":2013
    }
},      
{
    "key":"Different",
    "value":"cool",
    "children":{
        "tech":"json",
        "lang":"php",
        "year":2013
    }
}
]';

$array = json_decode($json, true);
?>