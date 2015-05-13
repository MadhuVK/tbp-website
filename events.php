<!DOCTYPE HTML>
<html>
<head>
    <?php include('common/head.php') ?>
</head>

<body>

  <!-- Header -->
  <header id="header">
    <?php include('common/header.php') ?>
  </header>


    <!-- Main -->
    <section id="main" class="container">
    <header>
    <h2>Events and Announcements</h2>
    <p>"What events does TBP have planned for me?"</p>
    </header>
    <section class="box">
    <section class="major special">
    <h2><u>Week 7 Announcements</u></h2>
    </section>
    <ol>
      <li>
        <b><a href="images/officers/officers_1516.png">Congratulations to our new Officers!</a></b> <br />
      </li>
      <br />
      <li>
      <b> Stoles and Cords Order Form </b> <br />
Graduating in Spring 2015 and would like some TBP swag to spruce up your boring gown?
Look no further! Distinguish yourself when you walk the stage with an official Tau Beta Pi stole and cords! 
<br />
<a href="http://goo.gl/forms/Qd0Lc86VDj">Order Form</a><br/>
<a href="http://tbp.org/Images/GeneralStore/Full/Stole1.gif">Image of the stole</a> <br />
<a href="http://tbp.org/Images/GeneralStore/Full/X.gif">Image of the cords</a> <br/>
      </li>
      <br />
      <li>
        <b>Non-TBP Hosted Events for Points</b> <br />
        Events not hosted by Tau Beta Pi or not listed on our calendar, 
        may still be eligible for points. In order to receive points for these events, 
        members and/or initiates must write a one-page write up of the event, 
        including an event description as well as why you believe it should count 
        as an event and how it follows TBP's goals. A picture must also be shown as 
        proof of event attendance. You will then need to email the write-up to an officer 
        for approval before getting the points signed off and just include the picture with that. 
        And then once you've written that and after the officers have approved it, you can bring your
        point sheet to the next event you attend and have an officer sign your form then.
      </li>
    </ol>

    </section>
    <div class="row">
      <div class="4u">
        <section class="box align-center" id="upcoming">
        <h3><b>Week 7</b></h3>
        <h3>Intramural Dodgeball</h3>
        <p>
        Event Type: Social<br>
        Tue May 12 | 6:00PM - 7:00PM <br>
        Location: RIMAC</a>
        </p>
        <hr />
        <h3>Florence Elementary</h3>
        <p>
        Event Type: Outreach<br>
        Fri May 15 | 8:30AM - 10:30AM <br>
        Location: Contact <a href="mailto:catrinh@ucsd.edu">Cindy Trinh</a>
        </p>
        <hr />
        <h3>Weekly Pool</h3>
        <p>
        Event Type: Social<br>
        Fri May 8 | 4:00PM - 5:00PM <br>
        Location: Price Center Game Room
        </p>
        <hr />
        <h3>Officer Retreat</h3>
        <p>
        Event Type: Social <br>
        Fri May 15 - Sun May 17  <br>
        Lake Gregory
        <hr />
        <h3><a href="https://docs.google.com/spreadsheets/d/1dSAtaa_xJRLJbOFhcin4cr7EumNL1XjfAjvn7qQf9lg/edit#gid=0">Triton 3D Make-A-Thon Volunteering</a></h3>
        <p>
        Event Type: Community Service 
        Sat May 16 - Sun May 17 <br> 
        Location: Contact <a href="mailto:c1yan@ucsd.edu">Crystal</a>
        </p>
        </section>
    </div>
    <div class="8u">
      <div class="box">
        <iframe id="calendar" style="border-width: 0;" src="https://www.google.com/calendar/embed?height=450&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=tbp.ucsd%40gmail.com&amp;color=%232952A3&amp;ctz=America%2FLos_Angeles" width="100%" height="900" frameborder="0" scrolling="no"></iframe>
      </div>
    </div>
  </div>

  </section>

  <footer>
    <?php include('common/footer.php') ?>
  </footer>
</body>

<script type="text/javascript">
  $(window).load(function() {
      $("#calendar").height($("#upcoming").height())
      });
  </script>

</html>
