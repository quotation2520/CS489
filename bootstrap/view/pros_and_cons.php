<div style="font-size:large; text-align:right">

    <button style="color:#4472c4;background:none;border:none" data-toggle="modal" data-target="#agreeModal">
        <!--#b4c7e7-->
        <span class="glyphicon glyphicon-ok"></span> Agree 
    </button>
    /
    <button style=" color:#ed7d31;background:none;border:none" data-toggle="modal" data-target="#disagreeModal">
        <!--#f8cbad-->
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Disagree
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="agreeModal" tabindex="-1" role="dialog">
    <?php
        $pc = 0;  //0 : pro
        require('view/opinion_box.php');
    ?>
</div>

<!-- Modal -->
<div class="modal fade" id="disagreeModal" tabindex="-1" role="dialog">
    <?php
        $pc = 1;  //1 : con
        require('view/opinion_box.php')
    ?>
</div>