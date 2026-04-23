 <?php
        $tablin = $_GET['linha'];
        $tabcolu = $_GET['coluna'];
        $i = 1;


        echo "<table border = '1px'>";

        while ($i <= $tablin) {
            echo "<tr>";

            $j = 1;

            while ($j <= $tabcolu) {
                echo "<td> linha $i coluna $j </td>";
                $j++;
            }

            echo "</tr>";
            $i++;  
        }

        
        echo "</table>";

    ?>

