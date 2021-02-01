<?php

use \Illuminate\Support\Facades\Hash;

// Defined as Global Function

// To get data dummy user
function getDataUser()
{
    $datas = [
      [
        'username'      => 'rachmat_hidayat',
        'password'      => Hash::make('bos1234'),
        'token'         => Hash::make('rachmat_hidayat@gmail.com'.date("Y-m-d H:i:s")),
        'name'          => 'Rachmat Hidayat',
        'email'         => 'rachmat_hidayat@gmail.com',
        'national_id'   => '3415218050936296',
        'workshop_name' => 'BOS Kedoya',
        'status_active' => 1
      ],
      [
        'username'      => 'putri_rahayu',
        'password'      => Hash::make('bos1234'),
        'token'         => Hash::make('putri_rahayu@gmail.com'.date("Y-m-d H:i:s")),
        'name'          => 'Putri Rahayu',
        'email'         => 'putri_rahayu@gmail.com',
        'national_id'   => '318642008064592',
        'workshop_name' => 'BOS Bintaro',
        'status_active' => 1
      ],
      [
        'username'      => 'jony_pangestu',
        'password'      => Hash::make('bos1234'),
        'token'         => Hash::make('jony_pangestu@gmail.com'.date("Y-m-d H:i:s")),
        'name'          => 'Jony Pangestu',
        'email'         => 'jony_pangestu@gmail.com',
        'national_id'   => '4802054182917283',
        'workshop_name' => 'BOS Kedoya',
        'status_active' => 1
      ]
    ];

    return $datas;
}

// To get data dummy workshop
function getDataWorkshop()
{
    $datas = [
      [
        'name' => 'BOS Kedoya',
        'address' => 'Jl. Panjang, Kedoya'
      ],
      [
        'name' => 'BOS Bintaro',
        'address' => 'Jl. Veteran Raya, Bintaro'
      ]
    ];

    return $datas;
}

// To get data dummy appConfig
function getAppConfig()
{
    $datas = [
      [
        'name_company' => 'PT. Penta Artha Impresi',
        'name_alias' => 'Bengkel BOS - Bengkel Hemat dan Baik',
        'picture_company' => '/img/logo.png',
      ]
    ];

    return $datas;
}

// To get data dummy inventoryItem
function getInventoryItem()
{
    $datas = [
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Ban Achilles',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-29147561584',
        'name_item' => 'Shell helix',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ],
      [
        'sku_number' => 'SKU-52147561584',
        'name_item' => 'Ban Corsa',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-81147561584',
        'name_item' => 'Ban Michelin',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-44147561584',
        'name_item' => 'Ban Bridgestone',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Fast',
        'alarm' => 3
      ],
      [
        'sku_number' => 'SKU-19147561584',
        'name_item' => 'Ban Dunlop',
        'category_item' => 'Ban',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Medium',
        'alarm' => 2
      ],
      [
        'sku_number' => 'SKU-80147561584',
        'name_item' => 'Castrol Magnatec',
        'category_item' => 'Oli',
        'demand' => '10',
        'min' => '5',
        'max' => '50',
        'stock' => '35',
        'on_order' => '15',
        'lead_time' => '4',
        'sgt_order' => '80',
        'status_moving' => 'Slow',
        'alarm' => 1
      ]
    ];

    return $datas;
}