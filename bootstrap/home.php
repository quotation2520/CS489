<?php
require('view/top.php')
?>

<?php
require('login.php')
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

<div class="panel panel-default">
    <div class="panel-heading">
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
            require('view/add_opinion.php')
            ?>
        </div>
    </div>

    <div class="panel-body" style="height:300px; overflow:auto">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#4472c4">
                <p><strong style="font-size:x-large"> Argument Title</strong></p>

                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                <p style="font-style:italic;text-align:end"> written by Author</p>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#ed7d31">
                <p><strong style="font-size:x-large"> Argument Title</strong> 21 Approves</p>

                This is where a idea comes <br>
                This is where a idea comes <br>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#4472c4">
                <p><strong style="font-size:x-large"> Argument Title</strong> 42 Approves</p>

                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                This is where a idea comes <br>
                <p style="font-style:italic;text-align:end"> written by Author</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;color:#ed7d31">
                <p><strong style="font-size:x-large"> Argument Title</strong> 21 Approves</p>

                This is where a idea comes <br>
                This is where a idea comes <br>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>