<?php
require(__DIR__ . '/vendor/autoload.php');
$faker = Faker\Factory::create();
?>

<h1>Hi, my name is <?php echo $faker->name ?>!</h1>
<h2>My address is <?php echo $faker->address ?></h2>
<span>Visit my page: <a href="#">facebook.com</a></span>