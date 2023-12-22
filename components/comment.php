<?php
include '../root/CSS/component/comment.css.php';

$array_menu = array(
    'profile' => array(
        "https://i.imgur.com/k05L1oA.jpg",
        "data:image/jpeg;base64,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",
        "https://matkinhtitan.com/wp-content/uploads/2020/06/kinh-can-mat-tron-nam-ha-noi.jpeg",

    ),
    'user-comment' => array(
        "Sophire Robson",
        "Matt Cannon",
        "Andy Smith",

    ),
    'address-comment' => array(
        "Los Angeles, CA",
        "San Diego, CA",
        "San Francisco, CA",

    ),

    'title-comment' => array(
        "“The best restaurant”",
        "“Simply delicious”",
        "“One of a kind restaurant”",
    ),
    'content-comment' => array(
        "Last night, we dined at place and were simply blown away. From the moment we stepped in, we were enveloped in an inviting atmosphere and greeted with warm smiles.",
        "Place exceeded my expectations on all fronts. The ambiance was cozy and relaxed, making it a perfect venue for our anniversary dinner. Each dish was prepared and beautifully presented.",
        "The culinary experience at place is first to none. The atmosphere is vibrant, the food - nothing short of extraordinary. The food was the highlight of our evening. Highly recommended."

    ),

);
?>
<?php
function createComment($image, $userName, $address, $title, $content)
{

    echo '<div class="comment-container">';
    echo '<div class="comment">';
    echo '<div class="title-comment">' . $title . '</div>';
    echo '<div class="content-comment">' . $content . '</div>';
    echo '<hr class="hr-comment">';
    echo '<div class="profile-comment">';
    echo '<div class="profile"><img src="' . $image . '" alt="Profile Image"></div>';
    echo '<div class="user-address">';
    echo '<div class="user-comment">' . $userName . '</div>';
    echo '<div class="address-comment">' . $address . '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}

// Sử dụng hàm createComment() để tạo các comment


?>
<h2 class="p-5">What Our Customers Say</h2>
<div class="container-fluid d-flex flex-row justify-content-center align-items-center ">
    <?php 
    for ($i = 0; $i < count($array_menu['profile']); $i++) {
        $image = $array_menu['profile'][$i];
        $userName = $array_menu['user-comment'][$i];
        $address = $array_menu['address-comment'][$i];
        $title = $array_menu['title-comment'][$i];
        $content = $array_menu['content-comment'][$i];

        createComment($image, $userName, $address, $title, $content);
    } ?>

</div>