<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/about/reviews/([^\\d/]+)/(\\?.*|$)#',
    'RULE' => 'SPECIALTY_CODE=$1',
    'ID' => '',
    'PATH' => '/about/reviews/index.php',
    'SORT' => 800,
  ),
  1 => 
  array (
    'CONDITION' => '#^/experts/events/([^/]+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/experts/events/detail.php',
    'SORT' => 810,
  ),
  2 => 
  array (
    'CONDITION' => '#^/encyclopedia/articles/([^/]+)/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/encyclopedia/articles/detail.php',
    'SORT' => 820,
  ),
  3 => 
  array (
    'CONDITION' => '#^/encyclopedia/articles/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/encyclopedia/articles/list.php',
    'SORT' => 830,
  ),
  4 => 
  array (
    'CONDITION' => '#^/about/media/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/about/media/detail.php',
    'SORT' => 840,
  ),
  5 => 
  array (
    'CONDITION' => '#^/experts/vacancies/([^/]+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/experts/vacancies/detail.php',
    'SORT' => 850,
  ),
  6 => 
  array (
    'CONDITION' => '#^/prices-and-actions/actions/([^/]+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/prices-and-actions/actions/detail.php',
    'SORT' => 860,
  ),
  7 => 
  array (
    'CONDITION' => '#^/encyclopedia/terms/([^/]+)/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/encyclopedia/terms/detail.php',
    'SORT' => 870,
  ),
  8 => 
  array (
    'CONDITION' => '#^/encyclopedia/terms/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/encyclopedia/terms/list.php',
    'SORT' => 880,
  ),
  9 => 
  array (
    'CONDITION' => '#^/encyclopedia/questions/([^/]+)/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/encyclopedia/questions/detail.php',
    'SORT' => 890,
  ),
  10 => 
  array (
    'CONDITION' => '#^/encyclopedia/questions/([^/]+)/(\\?.*|$)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/encyclopedia/questions/section.php',
    'SORT' => 900,
  ),
  11 => 
  array (
    'CONDITION' => '#^/donors/become/([^/]+)/(\\?.*|$)#',
    'RULE' => 'donor_type=$1',
    'ID' => '',
    'PATH' => '/donors/become/detail.php',
    'SORT' => 910,
  ),
  12 => 
  array (
    'CONDITION' => '#^/patients/bank/([^/]+)/(\\d+)/(\\?.*|$)#',
    'RULE' => 'donor_type=$1&external_id=$2',
    'ID' => '',
    'PATH' => '/patients/bank/detail.php',
    'SORT' => 920,
  ),
  13 => 
  array (
    'CONDITION' => '#^/patients/bank/([^/]+)/(\\?.*|$)#',
    'RULE' => 'donor_type=$1',
    'ID' => '',
    'PATH' => '/patients/bank/list.php',
    'SORT' => 930,
  ),
  14 => 
  array (
    'CONDITION' => '#^/about/news/([\\d]+)/(\\?.*|$)#',
    'RULE' => 'EXTERNAL_ID=$1',
    'ID' => '',
    'PATH' => '/about/news/detail.php',
    'SORT' => 935,
  ),
  15 => 
  array (
    'CONDITION' => '#^/about/news/([^/]+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/about/news/detail.php',
    'SORT' => 940,
  ),
  16 => 
  array (
    'CONDITION' => '#^/patients/faq/(\\d+)/(\\?.*|$)#',
    'RULE' => 'EXTERNAL_ID=$1',
    'ID' => '',
    'PATH' => '/patients/consult/detail.php',
    'SORT' => 945,
  ),
  17 => 
  array (
    'CONDITION' => '#^/patients/consult/(\\d+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => '',
    'PATH' => '/patients/consult/detail.php',
    'SORT' => 950,
  ),
  18 => 
  array (
    'CONDITION' => '#^/patients/consult/([^\\d/]+)/(\\?.*|$)#',
    'RULE' => 'SPECIALTY_CODE=$1',
    'ID' => '',
    'PATH' => '/patients/consult/index.php',
    'SORT' => 955,
  ),
  19 => 
  array (
    'CONDITION' => '#^/patients/quotas/([^\\/]+)/(\\?.*|$)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/patients/quotas/detail.php',
    'SORT' => 960,
  ),
  20 => 
  array (
    'CONDITION' => '#^/services/([^/]+)/([^/]+)/([^/]+)/(\\?(.*))?$#',
    'RULE' => 'SECTION_CODE=$2&ELEMENT_CODE=$3',
    'ID' => '',
    'PATH' => '/services/detail.php',
    'SORT' => 969,
  ),
  21 => 
  array (
    'CONDITION' => '#^/services/([^/]+)/([^/]+)/(\\?(.*))?$#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/services/detail.php',
    'SORT' => 970,
  ),
  22 => 
  array (
    'CONDITION' => '#^/services/([^/]+)/(\\?(.*))?$#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/services/section.php',
    'SORT' => 980,
  ),
  23 => 
  array (
    'CONDITION' => '#^/about/specialists/([^/]+)/(\\?(.*))?$#',
    'RULE' => 'SPECIALTY_CODE=$1',
    'ID' => '',
    'PATH' => '/about/specialists/index.php',
    'SORT' => 990,
  ),
  24 => 
  array (
    'CONDITION' => '#^/about/specialists/([^/]+)/([^/]+)/(\\?(.*))?$#',
    'RULE' => 'SPECIALTY_CODE=$1&CODE=$2',
    'ID' => '',
    'PATH' => '/about/specialists/detail.php',
    'SORT' => 995,
  ),
  25 => 
  array (
    'CONDITION' => '#^/(.+)/(\\?(.*))?$#',
    'RULE' => 'CODE=$1',
    'PATH' => '/content_page/index.php',
    'SORT' => 1000,
  ),
);
