<h5>Pet Information:</h5>
<ul>
    <?php

    // set name of XML file 
    $file = "pet.xml";

    // load file 
    $xml = simplexml_load_file($file) or die("Unable to load XML file!");

    // access XML data 
    echo "<li>Name: " . $xml->name . "</li>";
    echo "<li>Age: " . $xml->age . "</li>";
    echo "<li>Species: " . $xml->species . "</li>";
    echo "<li>Parents: " . $xml->parents->father . " and " . $xml->parents->mother . '</li>';


    // modify XML data 
    $xml->name = "Sammy Snail";
    $xml->age = 4;
    $xml->species = "snail";
    $xml->parents->mother = "Suzy Snail";
    $xml->parents->father = "Sid Snail";

    // write new data to file 
    file_put_contents($file, $xml->asXML());
    ?>

</ul>