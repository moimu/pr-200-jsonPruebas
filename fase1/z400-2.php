<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
echo'{
    "mediciones":[
        {
            "nombreZona": "Z400",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "iluminacion",
            "valor": "88"
        },
        {
            "nombreZona": "Z400",
            "nombreArea": "B401",
            "fecha": "2021-11-25 15:30",
            "magnitud": "entradas",
            "valor": "77"
        },
        {
            "nombreZona": "Z400",
            "nombreArea": "B402",
            "fecha": "2021-11-25 15:30",
            "magnitud": "entradas",
            "valor": "25"
        }
    ]
}';