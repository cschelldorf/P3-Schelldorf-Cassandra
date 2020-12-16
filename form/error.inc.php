<style>
  *{
    margin: 0;
    padding: 0;
    border: 0;
    font-family: 'Merriweather-Regular', sans-serif;
    color: #333333;
  }

  p{
    line-height: 25px;
  }

  html, body {
      max-width: 100%;
      overflow-x: hidden;
  }

  nav{
    font-size: 12px;
    position: fixed;
    padding: 5px;
    background: white;
    width: 100%;
    text-align: center;
  }

  nav a{
    text-decoration: none;
    padding: 5px;
  }

  nav ul li{
    display: inline;
  }

  ul {
    border-bottom: 1px solid #e7e7e7;
    width: 100%;
  }

  li a:hover {
    color: #F075AC;
  }

  body{
    background: white;
  }

  .container{
    text-align: left;
    padding: 5px;
  }
  .container h1 {
      padding-top: 50px;
      padding-left: 10px;
  }

  .container p{
    color: #797979;
    padding-left: 10px;
  }
</style>

<header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="aboutme.html">About Me</a></li>
      <li><a href="work.html">Work</a></li>
      <li><a href="contact.html">Contact Me</a></li>
    </ul>
</header>

<div class="container">
	<h1>Missing fields</h1>
	<p>Sorry, something went wrong with your submission.</p>
	<p>Please try again.</p>
</div>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

<footer>
  <p>Let's Connect:</p>
  <container class="social">
    <a href="mailto:cassie7@ufl.edu" target=_blank> <img src="images/envelope-regular.svg" alt="Envelope" title="Envelope"
    <a href="https://www.facebook.com/caschelldorf/" target=_blank ><img src="images/facebook-square-brands.svg" alt="Facebook" title="Facebook"/>
    <a href="https://www.instagram.com/withwingsandroots/?hl=en" target=_blank> <img src="images/instagram-brands.svg" alt="Instagram" title="Instagram"/>
    <a href="https://twitter.com/cschelldorf" target_blank><img src="images/twitter-brands.svg" alt="Twitter" title="Twitter"/>
    <a href="https://www.linkedin.com/in/cassandraanneschelldorf/" target_blank><img src="images/linkedin-brands.svg" alt="LinkedIn" title="LinkedIn"/>
  </container>
</footer>
