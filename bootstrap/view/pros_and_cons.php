<div style="font-size:large; text-align:right">

    <button style="color:#4472c4;background:none;border:none" data-toggle="modal" data-target="#agreeModal<?php echo $issueid?>">
        <!--#b4c7e7-->
        <span class="glyphicon glyphicon-ok"></span> Agree 
    </button>
    /
    <button style=" color:#ed7d31;background:none;border:none" data-toggle="modal" data-target="#disagreeModal<?php echo $issueid?>">
        <!--#f8cbad-->
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Disagree
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="agreeModal<?php echo $issueid?>" tabindex="-1" role="dialog">
    <?php
        if($userid > 0){
            $pc = 0;  //0 : pro
            require('view/opinion_box.php');
        } else
        echo "LOG IN FIRST"
    ?>
</div>

<!-- Modal -->
<div class="modal fade" id="disagreeModal<?php echo $issueid?>" tabindex="-1" role="dialog">
    <?php
        if($userid > 0){
            $pc = 1;  //1 : con
            require('view/opinion_box.php');
        } else
        echo "LOG IN FIRST"
    ?>
</div>