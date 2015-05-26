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
    <h2><u>Week 9 Announcements</u></h2>
    </section>
    <ol>
      <li>
        <a href="https://www.facebook.com/groups/tbp.ucsd/">For all members, please join our FB page!</a><br />
      </li>
      <br>
      <li>
        <b><a href="images/officers/officers_1516.png">Congratulations to our new Officers!</a></b> <br />
      </li>
      <br>
      <li>
      <b> Faculty of the Year </b> <br />
Each year Tau Beta Pi identifies Faculty of the Year who has positively influenced and developed the lives of young engineers. The votes are in, and this year Tau Beta Pi recognizes <b>Professor Voelker</b>, <b>Dr. Silva</b>, and <b>Dr. Pasquale</b> as outstanding faculty at UC San Diego. Awards will be presented at the End-of-the-Year Banquet.
      </li>
      <br>
      <li> <b> Stoles and Cords </b> <br />
        Stoles and Cords have been ordered and will be distributed at the End-of-the-Year Banquet, so keep an eye out for an email invitation soon!
      </li>

<br>
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
        <h3><b>Week 9</b></h3>
        <h3>IM Dodgeball</h3>
        <p>
        Event Type: Social<br>
        Wed May 27 | 6:00PM <br>
        Location: RIMAC
        </p>
        <hr />
        <h3><a href="https://www.facebook.com/events/1442925869336679/">End-of-Year Banquet</a></h3>
        <p>
        Event Type: Social<br>
        Fri May 29 | 6:00PM - 9:00PM <br>
        Location: CSE 1202
        </p>
        <hr />
        <h3><a href="https://www.facebook.com/events/371437869717114/">TBP Bonfire</a></h3>
        <p>
        Event Type: Social<br>
        Sat May 30 | 5:00PM - 9:00PM <br>
        Location: La Jolla Shores (Meet at Peterson Loop for rides)
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
