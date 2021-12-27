

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color: #FF0000;}
        div {margin: 5px 0px 5px 10px;}
    </style>
</head>
<body>

<form action='thanks.php' method="post">

<div>
    <label for="name">Last Name:</label>
    <input type="text" id="name" name="user-name" required>
    <span class="error">* </span>
</div>

<div>
    <label for="firstName">First Name:</label>
    <input type="text" id="firstName" name="user-firstName" required>
    <span class="error">* </span>
</div>

<div>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="user-email" required>
    <span class="error">* </span>
</div>

<div>
    <label for="phone">Phone No.:</label>
    <input type="number" id="phone" name="user-phone" required>
    <span class="error">* </span>
</div>  

<div>
    <label for="labaratory">Subject:</label>
    <input list="labaratory"  name="user-subject" required>
    <datalist id="labaratory" >
        <option value="Vaccine Covid-19">Vaccine Covid-19</option>
        <option value="Covid-19 test">Covid-19 test</option>
        <option value="Tests children <10">Tests children <10</option>
        <option value="All tests">All tests</option></option>
    </datalist>
    <span class="error">* </span>
</div>

<div>
    <label for="message">Your message:</label>
    <textarea name="user-message" id="message" cols="30" rows="10" required></textarea>
    <span class="error">* </span>
</div>

<div>
    <input type="submit" value="Submit">
</div>



</form>

</body>
</html>





