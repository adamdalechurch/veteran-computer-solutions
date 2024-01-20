<?php
function infoBox($title, $content, $isSecondary = false) {
    $infoBoxClass = $isSecondary ? "info-box-alt" : "info-box";
    echo '<div class="col-md-4 col-sm-12">';
    echo '    <div class="'.$infoBoxClass.'">';
    echo '        <h2 class="info-box-title">'.$title.'</h2>';
    echo '        <p class="info-box-text">'.$content.'</p>';
    echo '    </div>';
    echo '</div>';
}
?>
