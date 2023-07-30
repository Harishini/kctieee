

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<section id="admission">
    <br>
<h1 class="adm" style="text-align: center;">Registration Form</h1>
<div style="text-align:center;" class="admission_form">
<form action="data_check.php" method="POST"> 

    <div class="adm_int">
        <label class="label_text">Name</label>
        <input class="input_deg" type="text"  name="name">
    </div>

    <div class="adm_int">
        <label class="label_text">RollNo</label>
        <input class="input_deg" type="text"  name="rollno">
    </div>

    <div class="adm_int">
        <label class="label_text">Department</label>
        <input class="input_deg" type="text"  name="dept">
    </div>

    <div class="adm_int">
        <label class="label_text">Email</label>
        <input class="input_deg" type="text"  name="email">
    </div>

    <div class="adm_int">
        <input class="btn btn-primary" type="submit" id="submit" value="Apply" name="apply">
    </div>
</form>
</div>
</section>
</body>
</html>