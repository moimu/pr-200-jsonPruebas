<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo'{
    "mediciones":[
        {
            "nombreZona": "Z200",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "temperatura",
            "valor": "26"
        },
        {
            "nombreZona": "Z200",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "humedad",
            "valor": "15"
        },
        {
            "nombreZona": "Z200",
            "nombreArea": "B201",
            "fecha": "2021-11-25 15:30",
            "magnitud": "entradas",
            "valor": "20"
        }
    ]
} ';