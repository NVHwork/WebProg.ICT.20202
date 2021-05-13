 <h5>All Ingredients:</h5>

 <ul>
     <?php

        /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $file = "ingredients.xml";

        // load file
        $xml = simplexml_load_file($file) or die("Unable to load XML file!");

        // get all the <desc> elements and print
        foreach ($xml->xpath('//desc') as $desc) {
            echo "<li>$desc</li>";
        }
        ?>
 </ul>
 <h5>All Ingredients which have quantity > 1:</h5>

 <ul>
     <?php
        // set name of XML file
        $file = "ingredients.xml";

        // load file
        $xml = simplexml_load_file($file) or die("Unable to load XML file!");

        // get all the <desc> elements and print
        foreach ($xml->xpath('//item[quantity > 1]/desc') as $desc) {
            echo "<li>$desc</li>";
        }
        ?>

 </ul>