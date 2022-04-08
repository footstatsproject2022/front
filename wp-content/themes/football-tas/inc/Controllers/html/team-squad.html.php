<ul class="team team-players-list">
    <?php foreach($squad as $player): ?>
    <li class="team-player">
        <a href="javascript:void(0)" class="team-player-item" data-playerid="<?php echo $player['wyId']; ?>">
            <div class="d-flex align-items-center">
                <img src="<?php echo $player['imageDataURL'] ?>" alt="" />
                <div class="details">
                    <span class="name"><?php echo $player['shortName'] ?></span>
                    <span class="description">Footballer, <?php echo $player['passportArea']['name']; ?></span>
                </div>
            </div>
        </a>
    </li>
    <?php endforeach; ?>
</ul>