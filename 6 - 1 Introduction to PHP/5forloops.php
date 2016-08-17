<?php

for ($i = 1; $i < 30; $i++)
{
    $y = 0; //I'm using this as a marker to tell that at least one thing is being made
    echo "<p>On day " . $i . " the following products are available: ";

    if ($i % 2 == 0)
    {
        echo "Specs ";
        $y = 1;
    }
    if ($i % 3 == 0)
    {
        echo "Mugs ";
        $y = 1;
    }
    if ($i % 4 == 0)
    {
        echo "Sausage Rolls";
        $y = 1;
    }
    if ($y != 1) //if one thing isn't being made on this day then it displays that nothing is available that day.
    {
        echo "NONE";
    }
    echo "</p>";
}

?>