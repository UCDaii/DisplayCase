<? include "_lib/scripts/profile.php"; ?>
<? include "head.php"; ?>
<?
if(isset($_GET["UserId"])){
    $UserId = $_GET["UserId"];
    if($CookiesValidated == 1){
        if($UserId == $Id){
            $CurrentUser = true;
        }
    }
}
?>
<div class=" profileHead">
  	<div class="row" style=" position:relative; height:100%;">
        <div class="profileAvatar columns" style="background-image:url('<? echo $Avatar; ?>');"><? if($CurrentUser){ ?><a style="display:none;" href="editAvatar.php?UserId=<? echo $UserId; ?>" class="profileAvatar-edit button">Edit Avatar</a><? } ?></div> <!-- Display Profile Avatar -->
        <div class="profileDesc columns">
      		<h1><? echo $FirstName . " " . $LastName; ?></h1>
      		<h3><? echo $Major; ?></h3>
      	</div>
    </div>
</div>

<div class="small-6 medium-4 columns">
</div>

<div class="row  thumbnails">
	<div class="bio medium-3 columns">
        <?
        if($CurrentUser){
            echo "<div>";
            echo "<a href='editProfile.php?UserId=" . $UserId . "' class='button'>Edit Profile</a>";
            echo "</div>";
        }
        ?>
        <ul class="accordion profile_acc" data-accordion role="tablist">
            <li class="accordion-navigation">
                <a href="#panel1d" role="tab" id="panel1d-heading" aria-controls="panel1d">Contact Info</a>
                <div id="panel1d" class="content active" role="tabpanel" aria-labelledby="panel1d-heading">
                    <a href="mailto:<? echo $Email;?> "><? echo $Email; ?></a>
                    <p><? echo $City . ", " . $State; ?></p>
                </div>
            </li>
            <li class="accordion-navigation">
                <a href="#panel2d"  role="tab" id="panel2d-heading" aria-controls="panel2d">Education</a>
                <div id="panel2d" class="content" role="tabpanel" aria-labelledby="panel2d-heading">
                    <p><? echo $College; ?></p>
                </div>
            </li>
            <li class="accordion-navigation">
                <a href="#panel3d" role="tab" id="panel3d-heading" aria-controls="panel3d">Details</a>
                <div id="panel3d" class="content" role="tabpanel" aria-labelledby="panel3d-heading">
                    <p>Description</p>
                    <p><? echo $Description; ?></p>
                </div>
            </li>
            <li class="accordion-navigation">
                <a href="#panel4d" role="tab" id="panel4d-heading" aria-controls="panel4d">Resume</a>
                <div id="panel4d" class="content" role="tabpanel" aria-labelledby="panel4d-heading">
                    <a href="#">Download My Resume</a> <!-- Link to Download Resume -->
                </div>
            </li>
        </ul>
    </div>
		<div class="profileProjects medium-9 columns">
			<h3>MOST RECENT</h3>
        <ul class="small-block-grid-2 medium-block-grid-2">
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/redskins_5.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/booktower.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/digital1.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/final_owl.png);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/jones_beats.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/tiger.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/redskins3.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
            <li><a class="box" href="#" style="background-image:url(_lib/images/projects/digital2.jpg);"> <span></span></a>
                <h4>Book Tower</h4>
            </li>
        </ul>
    </div>
</div>

<? if($CurrentUser){ ?>
<script>
    $(document).ready(function(){
        if(<? echo $CurrentUser; ?>){
            $(".profileAvatar").hover(
                function(){
                    $(".profileAvatar-edit").show(); 
                }, function(){
                    $(".profileAvatar-edit").hide();
                }
            );
        }
    });
</script>
<? } ?>

<? include "footer.php"; ?>