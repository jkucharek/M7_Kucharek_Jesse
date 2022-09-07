<!--  PHP must be installed for this to work properly -->

<?php if($_POST["message"]) { mail("michelle.stallings@cerrocoso.edu", "New message from" + document.getElementById('name'), $_POST[document.getElementbyId('comments')]. "From: " + document.getElementById('email')); } ?>

