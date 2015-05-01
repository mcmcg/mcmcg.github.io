<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
    {
    ?>
    <form action="form_process.php" method="post" class="dark-matter">
    <h1>Contact Form 
        <span>Please fill all the texts in the fields.</span>
    </h1>
    <label>
        <span>Your Name :</span>
        <input id="name" type="text" name="name" placeholder="Your Full Name" />
    </label>
    
    <label>
        <span>Your Email :</span>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" />
    </label>
    
    <label>
        <span>Message :</span>
        <textarea id="message" name="message" placeholder="Your Message to Me"></textarea>
    </label> 
     <label>
        <span>Subject :</span><select name="selection">
        <option value="Contract Quote">Contract Quote</option>
        <option value="General Question">General Question</option>
        </select>
    </label>    
     <label>
        <span>&nbsp;</span> 
        <input type="button" class="button" value="Send" /> 
    </label>    
</form>
    <?php
    } 
else                /* send the submitted data */
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
        }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("kokomomc@gmail.com", $subject, $message, $from);
        header("Location:http://www.mcmdigitaldesign.com/");
        echo "Email sent!";
        }
    }  
?>