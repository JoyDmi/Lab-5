<?php

include 'create.php';
foreach ($adsDict as $categoryName => $categoryData)
{
    foreach ($categoryData as $titleEmailText)
    {
        echo "<tr>";
        echo "<td>" . $categoryName . "</td>";
        echo "<td>" . $titleEmailText['heading'] . "</td>";
        echo "<td>" . $titleEmailText['email'] . "</td>";
        echo "<td>" . $titleEmailText['description'] . "</td>";
        echo "</tr>";
    }
}
