<?php
function insertQnA(){
    $json = file_get_contents("data/datas.json");
    $data = json_decode($json, true);
    $otazky = $data["otazky"];
    $odpovede = $data["odpovede"];
    echo '<section class="container">';
        for ($i = 0; $i < count($otazky); $i++) {
            echo '<div class="accordion">
            <div class="question">' .
                $otazky[$i] . '
            </div>
            <div class="answer">' .
                $odpovede[$i] . '
            </div>
        </div>';
        }
    echo '</section>';
}
function generateSlides() {
    $jsonFile = 'data/datas.json';
    $jsonData = file_get_contents($jsonFile);
    $data = json_decode($jsonData, true);
    $portfolioItems = $data['portfolio'];

    echo '<section class="container">';
    echo '<div class="row">';

    $count = 0;
    foreach ($portfolioItems as $id => $text) {
        if ($count > 0 && $count % 4 == 0) {
            echo '</div><div class="row">';
        }


        echo '<div class="col-25 portfolio text-white text-center" id="' . htmlspecialchars($id) . '">';
        echo htmlspecialchars($text);
        echo '</div>';

        $count++;
    }

    echo '</div>';
    echo '</section>';
}
?>