<?php $siteroot = '/introducingphp/ch07/07_06/end'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">
<title>Roux Conference: Venue</title>
<meta name="author" content="Designed by Ray Villalobos for Lynda.com">
<meta name="Copyright" content="Copyright Lynda.com 2012. All Rights Reserved.">
</head>
<body id="page_venue">
<div class="wrapper">
  <?php require './includes/header.php'; ?>
  <!-- Rotator -->
  <section id="main">
    <article id="thevenue">
      <h2>The Venue</h2>
      <p><img src="images/hotel_contempo.jpg" alt="Hotel bedroom">Hotel Contempo is the perfect spot for a gathering of modern artists. Not only are the conference rooms and halls decked with breathtaking contemporary art and sculptures, but the individual rooms are as unique as the renowned artists who were commissioned to decorate them. From the Ross Monroe Purple suite filled  wall to wall with paintings in his palette of violet and lavender to the Tess Lessinger Sculpted Universe suite, with dozens of original sculptures, including the bronze-casted toilet, visitors are sure to be intrigued and comforted during their stay at Hotel Contempo.  For those who opt to stay at another location, there is no shortage of hotels in Downtown Seattle. Ranging from shabby chic to the ultimate in sophistication.</p>
    </article>
    <!-- The Venue -->
    <article id="hotellist">
      <ul>
        <li> <img src="images/hotel_phillips.jpg" alt="Hotel Phillips of Belltown">
          <div class="textgroup">
            <h3>Phillips of Bell town</h3>
            <p>Situated amongt the hip, youthful culture of Downtown Seattle, Phillips of Belltown is the place to be any time of the day or night. Choose from Jazz and Rock music at the various music venues, and shop until you drop at an assortment of thrift stores and upscale boutiques. The hotel itself is a historical gem, with architectural achievements in every beam, brick, and support.</p>
            <p><a class="link" href="#">Get Directions</a></p>
          </div>
        </li>
        <li> <img src="images/hotel_otter.jpg" alt="The Otter Renaissance Hotel">
          <div class="textgroup">
            <h3>The Otter Renaissance Hotel</h3>
            <p>Hotel founder, Henry Chasings, had a love of otters, having been raised in an Alaskan village where otters played out his back door. As his tribute to the sea creatures of his early days, Henry was insistent upon having an otter in every hall, wall, and room inside the Otter Renaissance Hotel.</p>
            <p><a class="link" href="#">Get Directions</a></p>
          </div>
        </li>
        <li> <img src="images/hotel_rage.jpg" alt="The Rage Hotel">
          <div class="textgroup">
            <h3>The Rage Hotel</h3>
            <p>Seattle’s South Lake Union district plays home to the ultra modern Rage Hotel, that is outfitted with a state-of-the-art computer and printing facility in the penthouse, and draws tech professionals from all over the world for business conferences and vacations, alike.</p>
            <p><a class="link" href="#">Get Directions</a></p>
          </div>
        </li>
        <li> <img src="images/hotel_gwendoline.jpg" alt="Hotel Gwendoline’s Fancy">
          <div class="textgroup">
            <h3>Gwendoline’s Fancy</h3>
            <p>In the heart of the West Edge district in Seattle, Gwendoline’s Fancy, named after a Navy submarine that got lost at sea in 1910, is a central landing place for history buffs who can immerse themselves in the Museum of History located in the hotel mezzanine. For those travelers who aren’t into history, there are plenty of other nearby sights to keep them entertained, including Pike Place Market and the Seattle Art Museum.</p>
            <p><a class="link" href="#">Get Directions</a></p>
          </div>
        </li>
      </ul>
    </article>
    <!-- Hotel List --> 
  </section>
  <!-- maincontent -->
  
  <aside id="sidebar">
      <article id="artistlist">
          <h2>Featured Artists</h2>
          <p>Each year, nine individuals are honored as Featured Artists - each being granted his or her own exhibit hall to display entire collections or themed pieces. Each Featured Artist has an opportunity to speak at the conference to share his or her vision, perspective, and techniques with conference attendees.</p>
          <div class="pixgrid">
              <ul>
                  <?php include './includes/artistpix.php'; ?>
              </ul>
              <p><a class="link" href="#">View Artist Info</a></p>
          </div>
      </article>
    <!-- Featured Artists -->
    <?php include './includes/coming.php'; ?>
    <!-- Coming to event --> 
  </aside>
  <!-- Sidebar -->
  <?php include './includes/footer.php'; ?>
  </footer>
</div>
</body>
</html>