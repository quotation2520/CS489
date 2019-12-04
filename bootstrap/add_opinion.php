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
    $toopinion = "INSERT INTO opinions (userid, pc, title, opinion, issueid) VALUES('{$userid}', '{$_POST['pc']}', '{$_POST['title']}', '{$_POST['argument']}', '{$_POST['opinion_num']}')";
    mysqli_query($conn, $toopinion);
}

function load_opinion($userid, $num)
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    $query = "SELECT * FROM opinions WHERE userid = '{$userid}' AND issueid = '{$num}'";
    return mysqli_fetch_array(mysqli_query($conn, $query));
}

add_opinion($login);

$opinion1 = load_opinion($login, 1);
$opinion2 = load_opinion($login, 2);
$opinion3 = load_opinion($login, 3);
