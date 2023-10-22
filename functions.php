<?php
/////////////////// タイトルを変える
function titles() {
    $title = wp_title(' | ', true, 'right');
    if(is_home()) {
        //トップページ
        echo bloginfo('name').' | '.bloginfo( 'description' );
    } else {
        //トップページ以外
        echo $title . bloginfo('name');
    }
}

