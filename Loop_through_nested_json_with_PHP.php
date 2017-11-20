//test JSON

[{
    "Item": {
        "name": "Item 1",
        "schedule": {
            "class": "Class",
            "uic": "UIC"
        },
        "days": "Mondays",
        "segment": {
            "branding": "A1",
            "location": [{
                "location_type": "L1",
                "time": "18:00"
            }, {
                "location_type": "L2",
                "time": "18:15"
            }, {
                "location_type": "L3",
                "time": "18:18"
            }]
        },
        "transaction": "Trans"
}
}, {        "Item": {
        "name": "Item 2",
        "schedule": {
            "class": "Class",
            "uic": "UIC"
        },
        "days": "Tuesdays",
        "segment": {
            "branding": "A2",
            "location": [{
                "location_type": "Lu1",
                "time": "19:00"
            }, {
                "location_type": "L2",
                "time": "19:15"
            }, {
                "location_type": "L3",
                "time": "19:18"
            }, {
                "location_type": "L4",
                "time": "19:25"
            }]
        },
        "transaction": "Trans"
    }
}]

/**************** Loop through nested json with php ************************************/m
<?php
foreach($JSON as $item)
{
    $item = $item->Item; // because you changed the code

    for($i=0;$i<count($item->segment->location);$i++)
    {
        echo $item->name, ', ';
        echo $item->schedule->class. ', ';
        echo $item->schedule->uic. ', ';
        echo $item->days. ', ';
        echo $item->segment->branding. ', ';
        echo $item->segment->location[$i]->location_type. ', ';
        echo $item->segment->location[$i]->time. ', ';
        echo $item->segment->transaction. '<br>';
    }
}

?>
