<div class="competitions" style="">
    <div id="all-available-competitions" class="row ">
       <?php foreach($competitions as $competition): ?>
        <div class="col-lg-3">
            <label class="btn-competition">
                <input type="radio" name="select_competition" value="<?php echo $competition['wyId'] ?>" data-area='<?php echo json_encode($competition["area"]) ?>'>
                <span class="name">
                    <?php echo $competition['name'] ?>
                    <br>
                    <small class="format"><?php echo $competition['format'] ?></small>
                </span>
            </label>
        </div>
       <?php endforeach; ?>
       <div class="col-lg-3">
            <label class="btn-competition">
                <input type="radio" name="select_competition" value="" data-area=''>
                    <span class="name">Serie B<br>
                    <small class="format">Domestic league</small>
                </span>
            </label>
        </div>
        <div class="col-lg-3">
            <label class="btn-competition">
                <input type="radio" name="select_competition" value="" data-area=''>
                    <span class="name">Serie C<br>
                    <small class="format">Domestic league</small> 
                </span>
            </label>
        </div>
    </div>
</div>