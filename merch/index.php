<?php

$type = filter_input(INPUT_GET, 'type');
$active = filter_input(INPUT_GET, 'active');
$gender = filter_input(INPUT_GET, 'gender', FILTER_VALIDATE_INT);

if ($type !== null && $active !== null) {
    
    switch ($type) {
        case 'sw':
            if($gender == 1) {
                $gender_img = "/tibetanGiftCorner/images/womensClothing.png";
            } else {
                $gender_img = "/tibetanGiftCorner/images/mensClothing.png";
            }
            $category = array('Tops','Jackets','Pants','Shorts');
            $type_img = "/tibetanGiftCorner/images/" . $type . '.png';
            $temp_array = array_fill(0,6,"/tibetanGiftCorner/images/Untitled.png");
            include('views/merchandise.php');
            break;
        default:
            include('../');
            break;
    }
    
}