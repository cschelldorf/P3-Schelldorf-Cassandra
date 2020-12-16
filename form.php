<!-- HTML top code goes here -->

<?

// From processing takes place here. message displayed here too
require('form/form.class.php');
$form = new Form();
$form->processForm(

	'cassandraschelldorf.com' // Put your mail domain here
	,
	'Cassandra Schelldorf Portfolio' // Put your site name / form name here
	,
	'cassie7@ufl.edu' // Where will the form notification be sent?
	,
	'noreply@cassandraschelldorf.com' // This what the form FROM: address will be, if the form submissions doesn't contain an email field

);


?>

<!-- HTML bottom code goes here -->
