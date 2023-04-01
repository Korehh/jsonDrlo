<?php
// Create an array of weapons, where each weapon is an associative array with various properties
// Each element is identified by a unique key
$weapons = array(
  array(
    "name" => "AK-47", // Name of the weapon
    "type" => "Assault Rifle", // Type of the weapon
    "caliber" => "7.62x39mm", // Caliber of the weapon
    "country" => "Russia", // Country of origin of the weapon
    "image" => "https://cdn.britannica.com/70/123170-050-D7AAF458/AK-47.jpg", //img of the weapon
  ),
  array(
    "name" => "M16",
    "type" => "Assault Rifle",
    "caliber" => "5.56x45mm",
    "country" => "United States",
    "image" => "https://texasshooterssupply.com/wp-content/uploads/2018/12/2018-12-04_001.jpg",
  ),
  array(
    "name" => "Glock 17",
    "type" => "Pistol",
    "caliber" => "9x19mm",
    "country" => "Austria",
    "image" => "https://speededge.ph/wp-content/uploads/2022/03/products-glock-17-gen-5-austria-177140.jpg",
  ),
  array(
    "name" => "MP5",
    "type" => "Submachine Gun",
    "caliber" => "9x19mm",
    "country" => "Germany",
    "image" => "https://media.istockphoto.com/id/524623321/photo/mp5-submachine-gun.jpg?s=612x612&w=0&k=20&c=oMwQJdXW0-FOk4U5lBBm3CCoD3RIyzv4ONjryby56Xo=",
  ),
  array(
    "name" => "Oni Claw",
    "type" => "Melee Weapon",
    "caliber" => "N/A", // Melee weapons don't have calibers, so this property is set to "N/A"
    "country" => "Japan",
    "image" => "https://vgraphs.com/images/weapons/skins/valorant-weapon-skin-oni-claw.png",
  ),
);
//header('Access-Control-Allow-Origin: *');  // Allow access
header("Content-Type: application/json");
echo json_encode(array("weapons" => $weapons));
?>
