<?php
include __DIR__ . "/Models/steam.php";
//var_dump($db);

if (!empty($_GET['stats']) || (isset($_GET['stats']) && $_GET['stats'] == 0)) {
  $stats = $_GET['stats'];
  $steams = array_filter($db, function ($steam) use ($stats) {
    return $steam['has_community_visible_stats'] == $stats || $stats == "all";
  });
} else {
  $steams = $db;
}



include __DIR__ . "/Views/header.php";
?>
<main class="container">
  <?php
  include __DIR__ . "/Views/table.php";
  ?>
</main>
<?php
include __DIR__ . "/Views/footer.php"
  ?>