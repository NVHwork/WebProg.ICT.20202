<h5>Sins:</h5>
<ul>
    <?php

    // set name of XML file 
    $file = "sins.xml";

    // load file 
    $xml = simplexml_load_file($file) or die("Unable to load XML file!");

    // access each <sin> 
    // iterate over <sin> element collection 
    foreach ($xml->sin as $sin) {
        echo '<li>' . $sin . "</li>";
    }
    ?>
</ul>