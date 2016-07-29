<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css">
<title>Roux Conference: Register</title>
<meta name="author" content="Designed by Ray Villalobos for Lynda.com">
<meta name="Copyright" content="Copyright Lynda.com 2012. All Rights Reserved.">
</head>
<body id="page_register">
<div class="wrapper">
  <header>
    <div class="branding"> <img src="../images/ralogo_monogram.png" alt="Logo">
      <p>Roux Academy<br>
        Art • Media • Design</p>
    </div>
    <div class="description">
      <h1>Roux Academy 2016 Art Conference</h1>
      <p>Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for five days of lectures by world-renowned art scholars and artists, and seven days and nights of gallery exhibits featuring the best in contemporary art, including painting, sculpture, and more, in the beautiful halls of Hotel Contempo in the heart of Seattle.</p>
    </div>
    <nav>
      <ol>
        <li><a href="../index.php">HOME</a></li>
        <li><a href="../artists.php">ARTISTS</a></li>
        <li><a href="../schedule/index.php">SCHEDULE</a></li>
        <li><a href="../venue.php">VENUE/TRAVEL</a></li>
        <li><a href="index.php">REGISTER</a></li>
      </ol>
    </nav>
  </header>
  <div id="rotator"> <img src="../images/art01.jpg" alt="Artwork from show"> </div>
  <!-- Rotator -->
  <section id="main">
    <article>
      <h2>Register</h2>
      <p>To attend the Roux Academy 2016 Contemporary Art Conference, please complete the information below. </p>
    </article>
    <!-- About the event -->
    
    <article id="registrationform">
      <form method="POST" enctype="text/plain">
        <fieldset>
          <legend>Personal Info</legend>
          <ol>
            <li>
              <label for="myname">Name *</label>
              <input type="text" name="myname" id="myname" autofocus placeholder="Last, First" required>
            </li>
            <li>
              <label for="companyname">Company Name</label>
              <input type="text" name="companyname" id="companyname">
            </li>
            <li>
              <label for="myemail">Email *</label>
              <input type="email" name="myemail" id="myemail" required autocomplete="off">
            </li>
            <li>
              <div class="grouphead">Request Type</div>
              <ol>
                <li>
                  <input type="radio" name="requesttype" value="question" id="question">
                  <label for="question">Question</label>
                </li>
                <li>
                  <input type="radio" name="requesttype" value="comment" id="comment">
                  <label for="comment">Comment</label>
                </li>
              </ol>
            </li>
            <li>
              <label for="mycomments">Comment</label>
              <textarea name="mycomments" id="mycomments"></textarea>
            </li>
            <li class="singleline">
              <input type="checkbox" id="subscribe" name="subscribe" checked="" value="yes">
              <label for="subscribe">Subscribe to our mailing list?</label>
            </li>
            <li>
              <label for="reference">How did you hear about us?</label>
              <select name="reference" id="reference">
                <option>Choose...</option>
                <option value="friend">A friend</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
              </select>
            </li>
          </ol>
          <input type="submit" value="Send">
        </fieldset>
      </form>
    </article>
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
    <article id="artistlist">
      <h2>Featured Artists</h2>
      <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
      <div class="pixgrid">
        <ul>
          <li><img src="../images/artists/Barot_Bellingham_tn.jpg" alt="Barot Bellingham"></li>
          <li><img src="../images/artists/Constance_Smith_tn.jpg" alt="Constance Smith"></li>
          <li><img src="../images/artists/Hassum_Harrod_tn.jpg" alt="Hassum Harrod"></li>
          <li><img src="../images/artists/Hillary_Goldwynn_tn.jpg" alt="Hillary Goldwynn"></li>
          <li><img src="../images/artists/Jennifer_Jerome_tn.jpg" alt="Jennifer Jerome"></li>
          <li><img src="../images/artists/Jonathan_Ferrar_tn.jpg" alt="Jonathan Ferrar"></li>
          <li><img src="../images/artists/LaVonne_LaRue_tn.jpg" alt="LaVonne LaRue"></li>
          <li><img src="../images/artists/Riley_Rewington_tn.jpg" alt="Riley Rewington"></li>
          <li><img src="../images/artists/Xhou_Ta_tn.jpg" alt="Xhou Ta"></li>
        </ul>
        <p><a class="link" href="../artists.php">Artist Info</a></p>
      </div>
    </article>
    <!-- Featured Artists -->    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  <footer>
    <div class="branding"> <img src="../images/ralogo_monogram.png" alt="Logo"> </div>
    <div class="description">Join over 500 hundred of the most creative and brilliant minds of art colleges all around the world for three days of lectures by world-renowned art scholars and artists.</div>
    <nav>
      <ol>
        <li><a href="http://rouxacademy.com/about/about.htm">About the Roux Academy</a></li>
        <li><a href="http://rouxacademy.com/privacy.htm">Privacy Policy</a></li>
        <li><a href="http://rouxacademy.com/index.htm">Visit our website</a></li>
      </ol>
    </nav>
  </footer>
</div>
</body>
</html>