<?php

return [
  'perPage' => [
    'siteControl' => 10,
    'frontEnd'    => 10,
  ],
  'url'            => 'breaker-shoes.com',
  'shipping'       => 1000,
  'price_shipping' => 50,
  'email' => [
    'forget_password' => [
      'from'    => 'no-reply@all-we-design.com',
      'title'   => 'Breaker Shoe Shopping Online',
      'subject' => 'Forget Password :: Breaker Shoe',
    ],
    'register' => [
      'from'    => 'no-reply@all-we-design.com',
      'title'   => 'Breaker Shoe Shopping Online',
      'subject' => 'ยินดีต้อนรับสู่บัญชี Breaker Shoe ของคุณ',
    ],
    'order_complete' => [
      'from'    => 'no-reply@all-we-design.com',
      'title'   => 'Breaker Shoe Shopping Online',
      'subject' => 'รายการสั่งซื้อ TheCentral MO5601001029 ของคุณ',
    ]
  ]
];
