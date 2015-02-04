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
    <h2><u>Announcements</u></h2>
    </section>
    <ol>
        <li>Congratulations to our new Tau Beta Pi members, and to Blue House for winning the All House Competition! 
            Please visit our <a href="benefits"> Tau Beta Pi benefits</a> page to find links to official networking groups, 
            as well as review the benefits of your membership.</li>
            <hr />
        <li>The Spring 2015 cycle is about to start. If any of our current mbmers would like to help out by becoming involved in
            a committee or speaking at a Tau Beta Pi Initiate Informational Session, please email one of our <a href="officers">officers</a>.</li>
            <hr />
        <li>Weekly Pool has moved to 5:00-6:00PM in order to accomodate more people.</li>
            <hr />
    </ol>

    </section>
    <div class="row">
      <div class="4u">
        <section class="box align-center" id="upcoming">
        <h3><b>Week 5</b></h3>
        <hr />
        <h3>Florence Elementary </a></h3>
        <p>
        Event Type: Professional<br>
        Fri Feb. 06 | 8:30AM - 10:30AM <br>
        Location: Contact <a href="mailto:catrinh@ucsd.edu">Cindy Trinh</a><br>
        </p>
        <hr />
        <h3>Weekly Pool</h3>
        <p>
        Event Type: Social<br>
        Fri Feb. 06 | 5:00PM - 6:00PM <br>
        Location: Price Center Game Room<br>
        </p>
        <hr />
        <h3>IM Soccer</h3>
        <p>
        Event Type: Social<br>
        Sat Feb. 07 | 3:00PM - 4:00PM <br>
        Location: North Campus Rec Field 1<br>
        </p>
        <hr />
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
