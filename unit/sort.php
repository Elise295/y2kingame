
    <?php
    function sort_by_price($my_array)
    {
        for ($i = 0; $i < count($my_array); $i++) {
            $node = $my_array[$i];
            $val = $my_array[$i]->getPrice();
            $j = $i - 1;
            while ($j >= 0 && $my_array[$j]->getPrice() > $val) {
                $my_array[$j + 1] = $my_array[$j];
                $j--;
            }
            $my_array[$j + 1] = $node;
        }
        return $my_array;
    }
    function sort_by_price_reverse($my_array)
    {
        for ($i = 0; $i < count($my_array); $i++) {
            $node = $my_array[$i];
            $val = $my_array[$i]->getPrice();
            $j = $i - 1;
            while ($j >= 0 && $my_array[$j]->getPrice() < $val) {
                $my_array[$j + 1] = $my_array[$j];
                $j--;
            }
            $my_array[$j + 1] = $node;
        }
        return $my_array;
    }
    function sort_by_date($my_array)
    {
        for ($i = 0; $i < count($my_array); $i++) {
            $node = $my_array[$i];
            $val = $my_array[$i]->getReleaseDate();
            $j = $i - 1;
            while ($j >= 0 && $my_array[$j]->getReleaseDate() > $val) {
                $my_array[$j + 1] = $my_array[$j];
                $j--;
            }
            $my_array[$j + 1] = $node;
        }
        return $my_array;
    }
    function sort_by_date_reverse($my_array)
    {
        for ($i = 0; $i < count($my_array); $i++) {
            $node = $my_array[$i];
            $val = $my_array[$i]->getReleaseDate();
            $j = $i - 1;
            while ($j >= 0 && $my_array[$j]->getReleaseDate() < $val) {
                $my_array[$j + 1] = $my_array[$j];
                $j--;
            }
            $my_array[$j + 1] = $node;
        }
        return $my_array;
    }

    
    ?>
