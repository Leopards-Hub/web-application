<?php
  include '../root/CSS/component/event.css.php';
$array_event = array(
    'image-event' => array(
        "https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSfxfaqudBsnvRtFB1UsqkK182uJRpkVSoQmox2Bu5A9EbqWqzB",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQG3ixnuIy2BMPadkdWp2s7saIVdOwWjxq-P_k6ooJIx78Kqm0n",
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-bV96gN8PPzRPYvNIfDxVHa3d94PW41DgQUoyxi-LgI1Am7Ef",
        "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTxfve72Y-zhzCWd7zizbPH6rVonTlZidVmhX5hc4GndWBQ68Mw",
    ),
    'title-event' => array(
        "Caterings",
        "Birthdays",
        "Weddings",
        "Events",
    ),
    'description-event' => array(
        "In the new era of technology we look in the future with certainty for life.",
        "In the new era of technology we look in the future with certainty for life.",
        "In the new era of technology we look in the future with certainty for life.",
        "In the new era of technology we look in the future with certainty for life.",
    ),
);

function createEvent($image, $title, $description) {
    echo '<div class="event-container">';
    echo '<div class="event">';
    echo '<div class="image-event"><img src="' . $image . '" alt=" Image"></div>';
    echo '<div class="content-event">';
        echo '<div class="title-event">' . $title . '</div>';
        echo '<div class="description-event">' . $description . '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}


for ($i = 0; $i < count($array_event['image-event']); $i++) {
    $image = $array_event['image-event'][$i];
    $title = $array_event['title-event'][$i];
    $description = $array_event['description-event'][$i];
    createEvent($image, $title, $description);
}
?>