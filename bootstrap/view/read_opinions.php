<?php
function load_pros($issueid){
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    
    $proquery = "SELECT * FROM opinions WHERE issueid = '{$issueid}' AND pc = 0 ORDER BY olikes DESC";
    return mysqli_query($conn, $proquery);
}

function load_cons($issueid){
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    
    $conquery = "SELECT * FROM opinions WHERE issueid = '{$issueid}' AND pc = 1 ORDER BY olikes DESC";
    return mysqli_query($conn, $conquery);
}

function read_neut($issueid)
{    
    $proq = load_pros($issueid);
    $conq = load_cons($issueid);
    for ($i = 0; $i < 5; $i ++)
    {
        $prorow = mysqli_fetch_array($proq);
        $conrow = mysqli_fetch_array($conq);
        $pro_ok = ($prorow['title'] && $prorow['opinion']);
        $con_ok = ($conrow['title'] && $conrow['opinion']);

            echo '
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#4472c4">';
                if ($pro_ok) {
                    echo '<p><strong style="font-size:x-large"> ' . $prorow['title'] . '</strong></p><br>
                    ' . $prorow['opinion'] . '
                    <p style="font-style:italic;text-align:end"> written by ' . load_userinfo($prorow['userid'])['username'] . '</p>';}

                echo '</div><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#ed7d31">';
                if ($con_ok) {
                    echo '<p><strong style="font-size:x-large"> ' . $conrow['title'] . '</strong></p><br>
                    ' . $conrow['opinion'] . '
                    <p style="font-style:italic;text-align:end"> written by ' . load_userinfo($conrow['userid'])['username'] . '</p>';}
                echo '
                </div>
            </div>
            <br>';
    }
}

function read_cons($issueid)
{    
    $conq = load_cons($issueid);
    for ($i = 0; $i < 5; $i ++)
    {
        $conrow = mysqli_fetch_array($conq);
        $con_ok = ($conrow['title'] && $conrow['opinion']);
        if ($con_ok){
            echo '<div class="panel-footer" style="height:150px; overflow:auto;background-color:#f8cbad;">';
            echo '<p><strong style="font-size:x-large"> ' . $conrow['title'] . '</strong></p><br>
            ' . $conrow['opinion'] . '
            <p style="font-style:italic;text-align:end"> written by ' . load_userinfo($conrow['userid'])['username'] . '</p></div>';
        }
    }
}

function read_pros($issueid)
{    
    $proq = load_pros($issueid);
    for ($i = 0; $i < 5; $i ++)
    {
        $prorow = mysqli_fetch_array($proq);
        $pro_ok = ($prorow['title'] && $prorow['opinion']);
        if ($pro_ok){
            echo '<div class="panel-footer" style="height:150px; overflow:auto;background-color:#b4c7e7;">';
            echo '<p><strong style="font-size:x-large"> ' . $prorow['title'] . '</strong></p><br>
            ' . $prorow['opinion'] . '
            <p style="font-style:italic;text-align:end"> written by ' . load_userinfo($prorow['userid'])['username'] . '</p></div>';
        }
    }
}
?>