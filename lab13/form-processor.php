<?php
// NOTICE: this part of this HTML document is just one PHP tag
//  This script doesn't output anything to the user's browser
//  so there is no DOCTYPE or any of the usual HTML things
//  in this part

// **********************************
// SECTION ONE: set all the variables
// **********************************

// set some variables
$emailFrom = "dtalawa@u.rochester.edu"; // use YOUR email for both lines 12 and 13
$emailTo = "dtalawa@u.rochester.edu";
$subject = "Lab 13 - HTML Forms";

// the following lines of code will grab the data being passed 
//   from the method="post" in the HTML form and hold it in a variable

// the words inside each $_POST[] must match a name="" attribute from the 
//   HTML form EXACTLY; then create a variable on the left side that
//   makes sense for the data it will hold

// these are from the text INPUT fields...
$name = Trim(stripslashes($_POST['name'])); 
$email = Trim(stripslashes($_POST['email'])); 
$number = Trim(stripslashes($_POST['number'])); 
// ...used more input fields? Then copy these lines (above)
//   and make more

// these are from the INPUT type="checkbox" fields...
$local = $_POST['local']; 
$london = $_POST['london']; 
$any = $_POST['any']; 
// ...used more checkboxes? Then copy these lines (above)
//   and make more

// this is from all the INPUT type="radio" fields...
$visit = $_POST['visit']; 
// notice: no matter how many radio buttons, there's only one answer

// this is from the TEXTAREA field...
$comments = Trim(stripslashes($_POST['comments'])); 

// **********************************
// SECTION TWO: build the email body
// **********************************

$body = ""; // initialize the variable, then start concatenating
            // backslash-n means new-line in emails

$body .= "Your Name: \n"; //...a label
$body .= $name;      //...a variable
$body .= "\n\n";              //...a new line

$body .= "Your Email: \n"; //...a label
$body .= $email;      //...a variable
$body .= "\n\n";              //...a new line

$body .= "Your phone number: \n"; //...a label
$body .= $number;      //...a variable
$body .= "\n\n";              //...a new line
// ...used more input fields? Then copy these lines (above)
//   and make more

// Do your checkboxes this way...
$body .= "Where are you from?: \n";       // a heading for your checkbox section

if (isset($local)) {        // a checkbox variable
    $body .= $local . "\n"; // the same checkbox variable
}
if (isset($london)) {        // a checkbox variable
    $body .= $london . "\n"; // the same checkbox variable
}
if (isset($any)) {        // a checkbox variable
    $body .= $any . "\n"; // the same checkbox variable
}
$body .= "\n";
// ...used more checkbox fields? Then copy these lines (above)
//   and make more

// This is for your radio buttons (always just one answer)...
$body .= "When will you visit S. Ayshire?: \n";       // a heading for your radio button section
$body .= $visit;            // the (one) radio button variable
$body .= "\n\n";

// This is for your TEXTAREA
$body .= "Tell us about any questions you may have about our lovely city:: \n";       // a heading for your text area
$body .= $comments;            // the variable for your text area
$body .= "\n";

// **********************************
// SECTION THREE: send the email
// **********************************
// You won't need to edit anything here...

// send email 
mail($emailTo, $subject, $body, "From: <$emailFrom>");


//end the PHP block here...
?>

<!-- **********************************
     SECTION FOUR: thank the user in HTML;
     Below, there needs to be an HTML 
     webpage with a customized message 
     for the user
     ********************************** -->


<?php include "inc/html-top.php";?>

<body>
    <div class="container">
        
        <header>
            <h1> South Ayrshire </h1>
            <div class="div">Home to the infamous Dunure Castle ruins</div>
        </header>

        <?php include "inc/nav.php";?>

        <main class="full-width">
            <h2>Thank You <?php echo $name; ?></h2>
            <p>Go back to <a href="start.php">the home page</a>.</
        </main>

    </div><!--.container-->

</body>
</html>