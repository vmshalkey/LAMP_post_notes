<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Post it!</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
        <script src="assets/javascript/jquery-1.11.3.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            	console.log("READY!!!");

            });
        </script>
    </head>
    <body>
        <h2>My Posts:</h2>
        <div id="stickies">
        	<?php foreach($postits as $postit) { ?>
        		<div class="sticky"><?= $postit['description'] ?></div>
        	<?php } ?>
        </div>
        <h4>Add a note:</h4>
        <form action="/posts/add_post" method="post">
        	<textarea name="description"></textarea>
        	<input type="submit" value="Post it!">
        </form>
    </body>
</html>