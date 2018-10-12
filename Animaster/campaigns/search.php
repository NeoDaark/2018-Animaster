<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='SignUp';
$migas='#SignUp|signup.php';
$dir = 'account';
$depth = '1';
include "../Public/layouts/head.php";?>

<script>
    $(document).ready(function(){

    });
</script>
<!-- Body box -->
<div class="container">
	<div class="clearfix m-t-20"></div>
  <div class="row">
    <div class="col-md-9">
      <h2 class="c-white" style="margin-top: 20px; margin-bottom: 20px;">My Games</h2>
      <div id="campaignsearch" class="cont_search_bar">
        <span class="search_icon" ><i class="zmdi zmdi-search m-l-10"></i></span>
        <input class="search_bar" id="search_bar" placeholder="Search: enter a keyword or tag, press Return......" type="text">
      </div>
      <div class="campaigns">
        <table class="table striped campaignlisting" width="100%">
          <tbody>
            <tr class="campaign" data-campaignid="3813776">
              <td>
                <div class="campaignthumb">
                  <a href="/campaigns/details/3813776">
                    <img src="../Public/img/cplaceholder.png?v=2" style="opacity:0.8;">
                  </a>
                </div>
                <div class="campaigninfo">
                  <h3 class="campaignname">
                    <a href="/campaigns/details/3813776">
                      neepii
                    </a>
                  </h3>
                  <div class="controls">
                    <a class="calltoaction" href="/editor/setcampaign/3813776">
                      <span class="pictos">9</span>
                      <strong>Launch Game</strong>
                      <div class="badge creatorbadge">Creator</div>
                    </a>
                  </div>
                  <div class="shorthr"></div>
                  <div class="campaignpeeps" style="margin-bottom: 10px;">
                    <a href="/users/3312562">
                      <img class="campaignplayer circleavatar" src="https://secure.gravatar.com/avatar/21ddfd7da3e579a5e16d20f3702da4f9?d=identicon" title="David b.">
                    </a>
                  </div>
                  <p class="lastupdated">
                    Last Played On 10/08/18
                  </p>
                  <div class="campaigntags" data-campaignid="3813776" data-editable="true"><div class="tags tagset"><div class="tagslabel"><span class="pictos">z</span>Tags:</div><input style="display: none;" autocomplete="off"><div class="textboxlist noedit"><ul class="textboxlist-bits"><li class="textboxlist-bit textboxlist-bit-editable"><input type="text" class="textboxlist-bit-editable-input" autocomplete="off" style="width: 30px; display: none;"><span style="float: left; display: inline-block; position: absolute; left: -1000px; font-size: 11px; font-family: &quot;Lucida Grande&quot;, Verdana; padding: 0px; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-transform: none;"></span></li></ul><div class="textboxlist-autocomplete" style="width: 100%;"><div class="textboxlist-autocomplete-placeholder">Type to receive suggestions</div><ul class="textboxlist-autocomplete-results"></ul></div></div><div class="add"><em><span class="pictos">p</span> Edit Tags</em></div></div><div class="clear"></div></div>
                </div>
                <div class="clear"></div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div style="clear: both;"></div>
    </div>
    <div class="col-md-3">
    <div class="sidebar">
      <div id="newboard">
        <a class="btn btn-block btn-primary waves-effect waves-green waves-ripple" href="/campaigns/new" id="new_board">
          <i class="zmdi zmdi-gamepad"></i> Create New Game
        </a>
        <hr style="margin-top: 14px; margin-bottom: 5px;">
        <a class="btn btn-block btn-sm bgm-white" href="/lfg/search/" style="margin-top: 5px;">
          <i class="zmdi zmdi-account"></i> Join a Game
        </a>
      </div>
      <div id="mytags">
        <h3 style="margin-bottom: 10px;">My Tags</h3>
        <p>
          <em>You haven't tagged any games yet!</em>
        </p>
        <p style="font-size: 0.90em;">
          Tagging is a great way to organize your games, making them easy to find later.
        </p>
      </div>
    </div>
  </div>
  </div>
</div>
<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?>
