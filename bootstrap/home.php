<?php
require('view/top.php');
?>

<?php
function load_userinfo($userid)
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    $query = "SELECT * FROM userinfo WHERE id = '{$userid}'";
    $data = mysqli_fetch_array(mysqli_query($conn, $query));
    return $data;
}

function load_opinion($userid, $issueid)
{
    $conn = mysqli_connect(
        '110.76.74.76',
        'remote',
        'quotation2520',
        'forus',
        '3306'
    );
    $query = "SELECT * FROM opinions WHERE userid = '{$userid}' AND issueid = '{$issueid}'";
    return mysqli_fetch_array(mysqli_query($conn, $query));
}

$userid = 0;
require('login.php');

if (isset($_POST['issueid']))
    require('add_opinion.php');
$issueid = 0;
?>

<div role="tabpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="home.php">Home</a></li>
        <li role="presentation"><a href="about.php">About</a></li>
        <li role="presentation"><a href="feedback.php">Feedback</a></li>
    </ul>
</div>
<p></p>

<?php
function color_pros_cons($opinion)
{
    if ($opinion == null)
        return;
    if ($opinion['pc'] == 0)
        echo 'style="background-color:#b4c7e7"';
    if ($opinion['pc'] == 1)
        echo 'style="background-color:#f8cbad"';
}
require('view/read_opinions.php');
require('view/pros_and_cons.php');
?>

<?php
$issueid = 1;
$opinion1 = load_opinion($userid, $issueid);
?>
<div class="panel panel-default">
    <div class="panel-heading" <?php color_pros_cons($opinion1) ?>>
        <div class="container-fluid">

            <div style="font-size:large">
                <span class="label label-primary">CS489</span>
                <span class="label label-success">Ethics</span>
            </div>
            <div>
                <h2> Training AI using inmates as part of prison labor is an ethical practice.</h2>

                A Finnish startup called Vainu started a practice of training AI algorithms as part of prison labor.
                See article <a href="https://www.theverge.com/2019/3/28/18285572/prison-labor-finland-artificial-intelligence-data-tagging-vainu">Inmates in Finland are training AI as part of prison labor</a> for more information.
                Do you agree with this practice?
            </div>
            <?php
            if ($opinion1 == null) {
                participate($userid, $issueid);
            } else if ($opinion1['pc'] == 0)  // pro
                echo '<p style="font-size:large; text-align:right"> I Agree </p>';
            else
                echo '<p style="font-size:large; text-align:right"> I Disagree </p>';
            ?>
        </div>
    </div>

    <?php
    if ($opinion1 == null) {
        echo '<div class="panel-body" style="height:300px; overflow:auto;">';
        read_neut($issueid);
        echo '</div>';
    } else {

        echo '<div class="panel-body" style="height:100%; overflow:auto;background-color:#e2f0d9">';
        if ($opinion1['olikes'] == -1) {
            echo '<h3> No Argument Written </h3>';
            echo 'No Argument Written</div>';
        } else {
            if ($opinion1['title'] != null)
                echo '<h3>' . $opinion1['title'] . '</h3>';
            if ($opinion1['opinion'] != null)
                echo $opinion1['opinion'] . '</div>';
        }
    }
    ?>
    <?php
    if ($opinion1 == null);
    else if ($opinion1['pc'] == 0) {
        read_cons($issueid);
    } else if ($opinion1['pc'] == 1) {
        read_pros($issueid);
    }
    ?>
</div>


<?php
$issueid = 2;
$opinion2 = load_opinion($userid, $issueid);
?>
<div class="panel panel-default">
    <div class="panel-heading" <?php color_pros_cons($opinion2) ?>>
        <div class="container-fluid">

            <div style="font-size:large">
                <span class="label label-primary">CS489</span>
                <span class="label label-success">Ethics</span>
            </div>
            <div>
                <h2> Social networking and automated contents recommendation are making people more radical.</h2>

                There are claims that SNS services (like Twitter and Facebook) and media platforms (like YouTube and Netflix) makes people more radical. Do you agree?
            </div>
            <?php
            if ($opinion2 == null) {
                participate($userid, $issueid);
            } else if ($opinion2['pc'] == 0)  // pro
                echo '<p style="font-size:large; text-align:right"> I Agree </p>';
            else
                echo '<p style="font-size:large; text-align:right"> I Disagree </p>';
            ?>
        </div>
    </div>

    <?php
    if ($opinion2 == null) {
        echo '<div class="panel-body" style="height:300px; overflow:auto;">';
        read_neut($issueid);
        echo '</div>';
    } else {

        echo '<div class="panel-body" style="height:100%; overflow:auto;background-color:#e2f0d9">';
        if ($opinion2['title'] != null)
            echo '<h3>' . $opinion2['title'] . '</h3>';
        else echo '<h3> No Argument Written </h3>';
        if ($opinion2['opinion'] != null)
            echo $opinion2['opinion'] . '</div>';
        else echo 'No Argument Written</div>';
    }
    ?>
    <?php
    if ($opinion2 == null);
    else if ($opinion2['pc'] == 0) {
        read_cons($issueid);
    } else if ($opinion2['pc'] == 1) {
        read_pros($issueid);
    }
    ?>
</div>

<?php
$issueid = 3;
$opinion3 = load_opinion($userid, $issueid);
?>
<div class="panel panel-default">
    <div class="panel-heading" <?php color_pros_cons($opinion3) ?>>
        <div class="container-fluid">

            <div style="font-size:large">
                <span class="label label-primary">CS489</span>
                <span class="label label-warning">Economics</span>
            </div>
            <div>
                <h2> Universal Basic Income is a good policy.</h2>

                <a href="https://en.wikipedia.org/wiki/Basic_income">Universal Basic Income (UBI)</a> is perhaps the most discussed form of social security there is. Do you think UBI should be enforced?
            </div>
            <?php
            if ($opinion3 == null) {
                participate($userid, $issueid);
            } else if ($opinion3['pc'] == 0)  // pro
                echo '<p style="font-size:large; text-align:right"> I Agree </p>';
            else
                echo '<p style="font-size:large; text-align:right"> I Disagree </p>';
            ?>
        </div>
    </div>

    <?php
    if ($opinion3 == null) {
        echo '<div class="panel-body" style="height:300px; overflow:auto;">';
        read_neut($issueid);
        echo '</div>';
    } else {

        echo '<div class="panel-body" style="height:100%; overflow:auto;background-color:#e2f0d9">';
        if ($opinion3['title'] != null)
            echo '<h3>' . $opinion3['title'] . '</h3>';
        else echo '<h3> No Argument Written </h3>';
        if ($opinion3['opinion'] != null)
            echo $opinion3['opinion'] . '</div>';
        else echo 'No Argument Written</div>';
    }
    ?>
    <?php
    if ($opinion3 == null);
    else if ($opinion3['pc'] == 0) {
        read_cons($issueid);
    } else if ($opinion3['pc'] == 1) {
        read_pros($issueid);
    }
    ?>
</div>

</div>
</div>
</div>