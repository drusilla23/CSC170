<?php include "inc/html-top.php";?>

<body>

    <div class="container">

        <header>
            <h1> South Ayrshire </h1>
            <div class="div">Home to the infamous Dunure Castle ruins</div>
        </header>

        <?php include "inc/nav.php";?>

        <section class="lead">

        <h2>South Ayrshire Welcomes You!</h2>

        <div class="slider">

            <img height=210 width=280 src="images/bridge.png" alt="The New Bridge" >
            <img height=210 width=280 src="images/small-castle.png" alt="The New Bridge">

        </div>

        <div id="accordion">

            <h3>About South Ayrshire</h3>
            <p>South Ayrshire (Scots: Sooth Ayrshire; Scottish Gaelic: Siorrachd Inbhir Àir a Deas, pronounced [ˈʃirˠəxk iɲiˈɾʲaːɾʲ ə tʲes̪]) is one of thirty-two council areas of Scotland, covering the southern part of Ayrshire. It borders onto Dumfries and Galloway, East Ayrshire and North Ayrshire.</p>
                

            <h3>More about South Ayrshire</h3>
            <p>Geographically, South Ayrshire is located on the western coast of Scotland, sharing borders with neighbouring local authorities East Ayrshire, Dumfries and Galloway and North Ayrshire. The climate in South Ayrshire, typical of that in Western Scotland, is milder than that of Eastern Scotland due to the stronger maritime influence, as the prevailing winds blow from into South Ayrshire, which is located primarily on the western coast of Scotland.</p>

        </section> <!--.lead-->

        </div>

    </div>
        
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

    <script src="sss/sss.js"></script>

    <script>
    $('.slider').sss();
    </script>

    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
    $( "#accordion" ).accordion();
    </script>

</body>
        