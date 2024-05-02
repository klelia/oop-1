<?php
$template = "";
foreach ($steams as $steam) {
    $template .= "<tr> <td>{$steam['appid']}</td> <td>{$steam['name']}</td> <td>{$steam['playtime_forever']}</td> <td>{$steam['has_community_visible_stats']}</td> </tr>";

}


?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">appid</th>
            <th scope="col">name</th>
            <th scope="col">playtime_forever</th>
            <th scope="col">has_community_visible_stats</th>
        </tr>
    </thead>
    <tbody>
        <?= $template ?>

    </tbody>
</table>