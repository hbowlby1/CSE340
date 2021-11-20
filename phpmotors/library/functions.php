<?php
function checkEmail($clientEmail)
{
    $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

// Check the password for a minimum of 8 characters,
// at least one 1 capital letter, at least 1 number and
// at least 1 special character
function checkPassword($clientPassword)
{
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]\s])(?=.*[A-Z])(?=.*[a-z])(?:.{8,})$/';
    return preg_match($pattern, $clientPassword);
}


// checks for charater limit on classification

function checkClassificationName($classificationName)
{
    $pattern = '/^.{1,30}$/';
    return preg_match($pattern, $classificationName);
}

// builds the navigation list for all pages
function buildNav($classifications)
{
    $navList = '<ul>';
    $navList .= "<li><a href='/phpmotors/index.php' title='View the PHP Motors home page'>Home</a></li>";
    foreach ($classifications as $classification) {
        $navList .= "<li><a href='/phpmotors/vehicles/index.php?action=classification&classificationName=" . urlencode($classification['classificationName']) . "' 
            title='View our $classification[classificationName] product line'>$classification[classificationName]</a></li>";
    }
    $navList .= '</ul>';
    return $navList;
}


// Build the classifications select list 
function buildClassificationList($classifications)
{
    $classificationList = '<select name="classificationId" id="classificationList">';
    $classificationList .= "<option>Choose a Classification</option>";
    foreach ($classifications as $classification) {
        $classificationList .= "<option value='$classification[classificationId]'>$classification[classificationName]</option>";
    }
    $classificationList .= '</select>';
    return $classificationList;
}

// this function will display the vehicles in an unordered list.
function buildVehiclesDisplay($vehicles)
{
    $dv = '<ul id="inv-display">';
    foreach ($vehicles as $vehicle) {
        $dv .= '<li>';
        $dv .= "<a href='/phpmotors/vehicles/index.php?action=getVehicleInfo&invId=$vehicle[invId]'><img src='$vehicle[invThumbnail]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'></a>";
        $dv .= '<hr>';
        $dv .= "<a href='/phpmotors/vehicles/index.php?action=getVehicleInfo&invId=$vehicle[invId]'><h2>$vehicle[invMake] $vehicle[invModel]</h2></a>";
        $dv .= "<span>$vehicle[invPrice]</span>";
        $dv .= '</li>';
    }
    $dv .= '</ul>';
    return $dv;
}

// builds the single vehicle page on the vehicle-display page
function showVehicleInfo($vehicle)
{
    $dv = '<div id="inv-details">';
        $dv .= "<img src='$vehicle[invImage]' alt='Image of $vehicle[invMake] $vehicle[invModel] on phpmotors.com'>";
        $dv .= "<div id='inv-text'>";
        $dv .= "<h2 class='detail-center'>$vehicle[invMake] $vehicle[invModel]</h2>";
        $invPrice = $vehicle['invPrice'];
        $invPrice = number_format($invPrice,2,'.',',');
        $dv .= "<p class='detail-center'>Price: &#36;$invPrice</p>";
        $dv .= "<p class='detail-center'>Color: $vehicle[invColor]</p>";
        $dv .= "<p class='detail-center'>Stock Available: $vehicle[invStock]</p>";
        $dv .= "<p id='vehicle-desc'>$vehicle[invDescription]</p>";
        $dv .= "</div>";
    $dv .= '</div>';
    return $dv;
}
