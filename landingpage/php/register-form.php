<?php
    require_once(__DIR__ . "/../model/config.php");

 ?>
 <div>
<h1>Contact Me!</h1>
<form method="post" action="<?php echo $path . "php/create-user.php"; ?>">
	<div id="email">
		<input type="text" id="email" name="email" placeholder="Type In Your Email..." />
	</div>

	<div id="subject">
		<center><input type="text" id="subject" name="subject" placeholder="Type In Your Subject..." /></center>
	</div>

	<div id="info">
		<input type="text" id="info" name="info" placeholder="What You Would Like To Tell Me!..."/>
	</div>

	<div id="sub">
		<button type="submit">Submit:</button>
	</div>
</form>

</div>

<!-- <h1>Contact me!</h1>
<input type="text" name="email" placeholder="Type In Your Email..."/> </br>
    <input type="text" id="subject" name="subject" placeholder="Type In Your Subject..."/> </br>
    <input type="text" id="info" name="info" placeholder="What You Would Like To Tell Me!..."/> </br> -->