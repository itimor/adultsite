<?php
    echo '
    <div class="row1 z-depth-3">
        <a href="/?id=' . $info_array['id'] . '">
            <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                    <img src="' . $info_array['pre'] . '" alt="'.$info_array['title'] .'">
                </div>
            </div>
        </a>
        <div class="card-content center">
        <span class="card-title">' . $info_array['title'] . '</span>
    </div>
                <div class="sinfo">
                    <div class="sviews inline-block"><i class="tiny material-icons">visibility</i><div class="itext inline-block">' . $info_array['views'] . '</div></div>
                    <div class="stime inline-block"><i class="tiny material-icons">access_time</i><div class="itext inline-block">' . $info_array['time'] . '</div></div>
                    <div class="inline-block right">';

    if ($_COOKIE['logining'] == 2) {
        if (in_array($info_array['id'], $like_array)) {
            echo '<a href="/engine/like.php?id=' . $info_array['id'] . '&iduser=' . $id . '&like=1"><i class="tiny material-icons">favorite</i></a>';
        } else {
            echo '<a href="/engine/like.php?id=' . $info_array['id'] . '&iduser=' . $id . '&like=2"><i class="tiny material-icons">favorite_border</i></a>';
        }
    } elseif ($_COOKIE['logining'] !== 2) {
        echo '<a href="#modal2" class="modal-trigger modal-close modal-action" ><img src="../templete/images/un_like.png" alt="likes" class="infopngr"></a>';
    }

    echo '<div class="itext inline-block">' . $info_array['likes'] . '</div></div>
                </div>
            </div>
    ';
?>