<?php
if (!route(1)) {
    $route[1] = 'index';
}

if (!file_exists(admin_controller(route(1)))) {
    $route[1] = 'index';
}
$menus = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'tachometre'
    ],

    'users' => [
        'title' => 'Üyeler',
        'icon' => 'users',
        'submenu' => [
            'add-user' => 'Üyeleri Ekle',
            'users' => 'Üyeleri Listele'
        ]
    ],

    'settings' => [
        'title' => 'Ayarlar',
        'icon' => 'cog'
    ]
];

require admin_controller(route(1));

