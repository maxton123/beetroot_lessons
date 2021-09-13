<?php

$json = '{
    "menu": {
    "id": "file",
    "value": "File",
    "popup": {
        "menuitem": [{
            "value": "New",
          "onclick": "CreateNewDoc()"
        },
        {
            "value": "Open",
          "onclick": "OpenDoc()"
        },
        {
            "value": "Close",
          "onclick": "CloseDoc()"
        }
      ]
    }
  }
}';

$mass=json_decode($json,true);
var_dump($mass);
