<?php 
$array_contact_us = array(
    'label' => array(
        "Call Us:",
        "Hours:",
        "Our Location:"
    ),
    'content' => array(
        "+1-234-567-8900",
        "Mon-Fri: 11am - 8pm Sat, Sun: 9am - 10pm",
        "123 Bridge Street Nowhere Land, LA 12345 United States"
    )
);

function generateContactUs($label,$content,$class){
    echo "
        <div class='container'>
            <label class='form-label custom-label css-label'>$label</label>
            <p class='$class'>$content</p>
        </div>
    ";
}


?>
<style>
    .custom-class {
    color: #AD343E;
    font-family: 'DM Sans', sans-serif;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: 30px;
    letter-spacing: -0.72px;
}
.css-label{
    color: var(--Neutral-07, #2C2F24);
    /* Body/20px/Bold */
    font-family: DM Sans;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: 26px; /* 130% */
}
.hour-location{
    color: var(--Neutral-07, #2C2F24);
    /* Body/18px/Regular */
    font-family: DM Sans;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 28px; /* 155.556% */
    display: flex;
    flex-wrap:wrap;
    width: 190px;
}

</style>