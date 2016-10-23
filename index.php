<?php
require(__DIR__ . '/vendor/autoload.php');
use Cocur\Slugify\Slugify;
$faker = Faker\Factory::create();
$name = $faker->name;
$slugify = new Slugify();
?>

<h1>Hi, my name is <?php echo $name ?>!</h1>
<h2>My address is <?php echo $faker->address ?></h2>
<span>Visit my page: <a href="#">facebook.com/<?php echo $slugify->slugify($name);?> </a></span>