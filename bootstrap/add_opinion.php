<?php
function add_opinion($userid)
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    if (isset($_POST['title']) && isset($_POST['argument']))
        $toopinion = "INSERT INTO opinions (userid, pc, likes, olikes, title, opinion, issueid) VALUES('{$userid}', '{$_POST['pc']}', 0, 0, '{$_POST['title']}', '{$_POST['argument']}', '{$_POST['issueid']}')";
    else
        $toopinion = "INSERT INTO opinions (userid, pc, title, opinion, issueid) VALUES('{$userid}', '{$_POST['pc']}', '{$_POST['title']}', '{$_POST['argument']}', '{$_POST['issueid']}')";
    mysqli_query($conn, $toopinion);
}

add_opinion($userid);
?>