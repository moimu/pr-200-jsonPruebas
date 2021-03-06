<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo '{
    "mediciones":[
        {
            "nombreZona": "Z300",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "temperatura",
            "valor": "12"
        },
        {
            "nombreZona": "Z300",
            "nombreArea": null,
            "fecha": "2021-11-25 15:30",
            "magnitud": "humedad",
            "valor": "25"
        },
        {
            "nombreZona": "Z300",
            "nombreArea": "A301",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "2"
        },
        {
            "nombreZona": "Z300",
            "nombreArea": "A302",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "14"
        },
        {
            "nombreZona": "Z300",
            "nombreArea": "A303",
            "fecha": "2021-11-25 15:30",
            "magnitud": "pulsaciones",
            "valor": "81"
        }

    ]
} ';