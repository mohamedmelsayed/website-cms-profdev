

    <?php
    $string = file_get_contents("files/videos.json");
    // echo $string;
    $json_a = json_decode($string, true);
    for ($i = 0; $i < sizeof($json_a); $i++) {
        echo "<h1>" . $json_a[$i]['groupname'] . "</h1>";
        echo "<p>" . $json_a[$i]['description'] . "</p>";
        for ($j = 0; $j < sizeof($json_a[$i]['videos']); $j++) {


            if ($j == 0) {
                echo '<div class="row mb50">';

                display($json_a[$i]['videos'][$j]['link'], $json_a[$i]['videos'][$j]['text']);
            } else {
                if ($j % 4 == 0) {
                    echo '</div>';
                    echo '<div class="row mb50">';
                    display($json_a[$i]['videos'][$j]['link'], $json_a[$i]['videos'][$j]['text']);
                } else {

                    display($json_a[$i]['videos'][$j]['link'], $json_a[$i]['videos'][$j]['text']);
                }
            }

            if ($j + 1 == sizeof($json_a[$i]['videos'])) {
                echo '</div>';
            }
        }
    }

    function display($vid, $desc)
    {
        echo '<div class="col-xl-3 col-lg-3 col-md-4 col-sm-12">';
        echo ' <div class="embed-responsive embed-responsive-4by3">';
        echo "<iframe class=\"embed-responsive-item\" src=" . $vid . " autoplay></iframe></div>";
        echo '<div> <p style="font-size: 18px;text-align:center;">' . $desc . '  </p style="color:#d85600;text-align:center;">
 </div>';
        echo '</div>';
    }
