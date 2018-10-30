<!-- New Game - Header content box -->
<?php
require_once '../System/config.php';
$title='New Game';
$dir = 'games-new';
$depth = '1';
include "../Public/layouts/head.php";
?>
<!-- Body content box -->

<section class="content">

	<div class="content__inner">

    <div class="card">
			<div class="card-header">
				<h2 class="card-title">Start New Game</h2>
				<small class="card-subtitle">
          To create a new game, just give it a name,
          enter some tags for organization, and (optionally) choose from the
          additional settings below. Then click the "Create Game" button.
        </small>
			</div>
		</div>

		<div class="card">
			<div class="card-header">
        <h2 class="card-title">Name & Description</h2>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name..">
          <i class="form-group__bar"></i>
        </div>
        <div class="form-group">
            <textarea class="form-control textarea-autosize text-counter" data-max-length="500" placeholder="Description... (Max set to 500)"></textarea>
            <i class="form-group__bar"></i>
        </div>
			</div>
		</div>

	</div>

</section>
<?php include "../Public/layouts/footer.php";?>
