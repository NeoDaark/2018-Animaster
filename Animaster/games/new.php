<!-- New Game - Header content box -->
<?php
require_once '../System/config.php';
$title='New Game';
$dir = 'games-new';
$depth = '1';
include "../Public/layouts/head.php";
?>
<script>
    $( document ).ready(function() {
			$('#createinput').click(function(){
				var game = {
					game_name : $('#ign').val(),
					game_dess : $('#igd').val()
				};
				if ($('#ign').val()== ""){
					anotify('Game name is empty!', 'red');
				}else{
          if (!$('#createinput').hasClass("isactive")){
            $('#createinput').addClass('isactive');
            $.ajax({
  						type: "POST",
  						url: "<?php echo $directory?>System/Protocols/Games_New.php",
  						data: game,
  						success: function (response) {
  							console.log(response);
  							if(response == 'fail'){
  								anotify('Try again in a few minutes!', 'red');
                  $('#createinput').removeClass('isactive');
  							}else if(response == 'succes'){
  								anotify('Game created!', 'green');
  								setInterval(function() {
  									var url = "<?php echo $directory?>games/";
  									location.href=url;
  								}, 1000);
  							}
  						}
  					});


          }
				}
			});
    });
</script>

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
          <input type="text" class="form-control" placeholder="Name.." id="ign" readonly onclick="focusMethod('ign')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
          <i class="form-group__bar"></i>
        </div>
        <div class="form-group">
            <textarea class="form-control textarea-autosize text-counter" data-max-length="500" placeholder="Description... (Max set to 500)" id="igd"></textarea>
            <i class="form-group__bar"></i>
        </div>
			</div>
		</div>

		<div class="card">
				<button type="button" class="btn btn-primary btn-block btn-lg" id="createinput">Create Game</button>
		</div>



	</div>

</section>
<?php include "../Public/layouts/footer.php";?>
