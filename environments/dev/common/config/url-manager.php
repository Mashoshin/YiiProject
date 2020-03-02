<?php
return [
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        '<action>' => 'site/<action>',
        'site/index/<id>' => 'site/index'
    ]
];