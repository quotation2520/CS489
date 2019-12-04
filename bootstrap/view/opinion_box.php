<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Add an argument</h4>
        </div>
        <div class="modal-body">
            <form  method="post">
                <input type="hidden" name="login" value="<?php echo $login?>">
                <input type="hidden" name="opinion_num" value="<?php echo $opinion_num?>">
                <input type="hidden" name="pc" value="<?php echo $pc?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <textarea class="autosize" style="width:100%" name="argument" onkeydown="resize(this)" onkeyup="resize(this)" placeholder="Write your opinion"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>