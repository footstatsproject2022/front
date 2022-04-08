<div class="inner-box">
    <div class="d-flex justify-content-between">
        <h4>Player Data</h4>
        <a href="javascript:void(0)" class="btn btn-danger rounded-pill">Compare</a>
    </div>
    <div class="card mt-4 mb-b">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="player-image">
                        <img src="<?php echo $player['imageDataURL']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <div class="col-md-8">
                    <h5 class="mb-0"><?php echo $player['shortName'] ?></h5>
                    <p class="card-text mb-0">
                        <small>Footballer, <?php echo $player['passportArea']['name'] ?></small>
                    </p>

                    <table class="table table-borderless table-sm">
                        <tr>
                            <th>Age</th>
                            <td>
                                <?php 
                                    $player_birthDate = $player['birthDate'];
                                    $diff = (date('Y') - date('Y',strtotime($player_birthDate)));
                                    echo $diff;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Foot</th>
                            <td><?php echo $player['foot']; ?></td>
                        </tr>
                        <tr>
                            <th>Current Club</th>
                            <td><?php echo @$player['currentTeam']['name'] ?></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td><?php echo $player['passportArea']['name'] ?></td>
                        </tr>
                    </table>
                </div>

                <div class="col-md-12">
                    <table class="mb-0">
                        <tr>
                            <th>Positions:</th>
                            <td class="ps-2"><?php echo $player['role']['name']; ?></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>