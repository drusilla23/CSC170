<?php include "inc/html-top.php";?>

<body>
    <div class="container">

        <header>
            <h1> South Ayrshire </h1>
            <div class="div">Home to the infamous Dunure Castle ruins</div>
        </header>
    
        <?php include "inc/nav.php";?>

        <form class= "full-width" action="form-processor.php" method="post">
            <br>
            <label for="names">Enter your full name:</label>
            <input type="text" id="names" name="name">
            <br>
            <br>
            <label for="emails">Enter your email:</label>
            <input type="email" id="emails" name="email">
            <br>
            <br>
            <label for="numbers">Would you like to recieve local updates & news? If yes, please enter your phone number:</label>
            <input type="text" id="numbers" name="number">
            <br>
            <br>

            <fieldset>
            <legend style="float: top"> Visiting South Ayshire</legend>
            <h2>Where are you from?</h2>
            <input type="checkbox" id="locals" name="local" value="Local">
            <label for="locals">I'm a local</label>
            <br>
            <input type="checkbox" id="londons" name="london" value="London">
            <label for="londons">London city resident</label>
            <br>
            <input type="checkbox" id="anys" name="any" value="Any">
            <label for="anys"> Somewhere else</label>
            <br>
            <br>
            <h2>When will you visit S. Ayshire?</h2>
            <input type="radio" id="residents" name="visit" value="resident">
            <label for="residents">N/A I'm a resident</label>
            <br>
            <input type="radio" id="winters" name="visit" value="winter">
            <label for="winters">December-January(Winter)</label>
            <br>
            <input type="radio" id="springs" name="visit" value="spring">
            <label for="springs">February-May(Spring)</label>
            <br>
            <input type="radio" id="summers" name="visit" value="summer">
            <label for="summers">May-September(Summer)</label>
            <br>
            <input type="radio" id="autumns" name="visit" value="autumn">
            <label for="autumns">September-November(Autumn)</label>
            <br>
            <br>
            </fieldset>
            <br>
            <br>

            <label for="comments_">Tell us about any questions you may have about our lovely city:</label>
            <br>
            <textarea id="comments_" name="comments" rows="4" cols="50"></textarea>
            <br>
            <br>
            <input type="submit" id="submits" name="submit" value="Cheers, mate!">
            <br>
            <br>
            <br>
        </form>

    </div><!--.container-->

</body>
</html>