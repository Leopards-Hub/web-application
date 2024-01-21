<?php
    include 'root/CSS/component/blogger-items.css.php';
?>
<?php
$apiUrl = 'https://free-api.cunguyen.com/api/food-blogs';
$response = file_get_contents($apiUrl);
if ($response === FALSE) {
    die('Error fetching data from the API');
}
$data = json_decode($response, true);
if ($data === NULL) {
    die('Error decoding JSON data');
}
?>

<?php
function createBlogger($params, $class) {
    $src = isset($params['image']) ? $params['image'] : '';
    $label = isset($params['label']) ? $params['label'] : '';
    $p = isset($params['title']) ? $params['title'] : '';
    $infor = isset($params['summary']) ? $params['summary'] : '';
    $link = isset($params['externalLink']) ? $params['externalLink'] : '';

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
    echo $html;
}
$class = 'card-larger';

function createBlog( $data ) {
    $i =0;
    while($i <count($data)-1) {
        createBlogger($data[$i],"card-blog");
        $i ++;
    }
}
?>
