

<?php 

$config = array (
  'base_path' => "../storage/web/",
  'entity' => '2520b329',
  'relatedTo' => 'common\models\Art:',
  'status' => '1',
  'dbhost' => '127.0.0.1',
  'dbname' => 'yii2',
  'dbuser' => 'root',
  'dbpassword' => '',
  'blockchain' => array(
  'name' => 'golos',
  'node' => '127.0.0.1:8090',
  'currency' => 'SBD',
  'start_block' => '1731426', //use 'current' for production.
   
  )
);

//'node' => 'this.piston.rocks',
  