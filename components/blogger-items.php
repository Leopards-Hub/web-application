<?php
    // include 'linkbootstrap5.php';
    include 'root/CSS/component/blogger-items.css.php';
?>

<?php

// URL của API bạn muốn fetch
$apiUrl = 'https://free-api.cunguyen.com/api/food-blogs';

// Lấy nội dung từ API
$response = file_get_contents($apiUrl);

// Kiểm tra nếu có lỗi khi lấy dữ liệu từ API
if ($response === FALSE) {
    die('Error fetching data from the API');
}

// Chuyển đổi dữ liệu JSON thành mảng PHP
$data = json_decode($response, true);

// Kiểm tra nếu chuyển đổi không thành công
if ($data === NULL) {
    die('Error decoding JSON data');
}

// Dữ liệu từ API sẽ ở trong biến $data, bạn có thể xử lý dữ liệu dựa trên nhu cầu của mình
// var_dump($data);
// echo '<pre>'; print_r($data); print '</pre>';
?>

<?php



function createBlogger($params, $class) {
    // Extract parameters from the array or set default values
    $src = isset($params['image']) ? $params['image'] : '';
    $label = isset($params['label']) ? $params['label'] : '';
    $p = isset($params['title']) ? $params['title'] : '';
    $infor = isset($params['summary']) ? $params['summary'] : '';
    $link = isset($params['externalLink']) ? $params['externalLink'] : '';

    // Generate HTML code for the card
    $html = '<div class="card '.$class.'">';
    $html .= '<a target="_blank"  href="'.$link.'"   alt="">';
    $html .= '<img src="' . $src . '" class="card-img-top" alt="images">';
    $html .= '<div class="card-body">';
    $html .= '<label class="card-title fs-6">' . $label . '</label>';
    $html .= '<p class="card-text"><strong>' . $p . '</strong></p>';
    if($class === 'card-larger') {
        $html .= '<p class="card-text">' . $infor . '</p>';
    }
    $html .= '</div>';
    $html .= '</a>';
    $html .= '</div>';
    // Display the result using echo
    echo $html;
}

$class = 'card-larger';

// Example usage
$params = array(
    ['src'   => URL_ROOT . URL_SUBFLODER .'/root/assets/images-blogger/photo-bg1.png',
    'label' => 'January 12, 2023',
    'p'     => 'How to prepare the perfect french fries in an air frye'
    ],
    ['src'   => URL_ROOT . URL_SUBFLODER .'/root/assets/images-blogger/photo-bg2.png',
    'label' => 'January 12, 2023',
    'p'     => 'How to prepare delicious chicken tenders'
    ],
    ['src'   => URL_ROOT . URL_SUBFLODER .'/root/assets/images-blogger/photo-bg3.png',
    'label' => 'January 12, 2023',
    'p'     => '7 delicious cheesecake recipes you can prepare'
    ],
    ['src'   => URL_ROOT . URL_SUBFLODER .'/root/assets/images-blogger/photo-bg4.png',
    'label' => 'January 12, 2023',
    'p'     => '5 great pizza restaurants you should visit this city'
    ],
    ['src'   => URL_ROOT . URL_SUBFLODER .'/root/assets/images-blogger/photo-biggest.png',
    'label' => 'January 12, 2023',
    'p'     => 'The secret tips & tricks to prepare a perfect burger & pizza for our customers',
    'infor' => 'Lorem ipsum dolor sit amet consectetur of a adipiscing elitilmim semper adipiscing massa gravida nisi cras enim quis nibholm varius amet gravida ut facilisis neque egestas.'
    ],
);

// Call the function, and it will automatically echo the result
// createBlogger($params[4],$class);

function createBlog( $data ) {
    $i =0;
    while($i <count($data)-1) {
        createBlogger($data[$i],"card-blog");
        $i ++;
    }
}
?>
