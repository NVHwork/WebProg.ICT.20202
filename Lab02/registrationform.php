<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registration form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container">
        <form action="" method="POST" role="form">
            <legend>Registration Form </legend>

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter name" name="name">
            </div>

            <div class="form-group">
                <label for="">Year of birth</label>
                <select name="year" size="1" class="form-control" required="required">
                    <option>1996</option>
                    <option>1997</option>
                    <option>1998</option>
                    <option selected>1999</option>
                    <option>2000</option>
                    <option>2001</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="" placeholder="">
            </div>

            <div class="form-group">
                <label for="">Gender</label>
                <input type="radio" value="male" name="gender"> Male
                <input type="radio" value="female" name="gender"> Female
            </div>

            <div class="form-group">
                <label for="">Programming language</label>
                <input type="checkbox" value="C" name="pl"> C
                <input type="checkbox" value="Java" name="pl"> Java
                <input type="checkbox" value="PHP" name="pl"> PHP
                <input type="checkbox" value="Python" name="pl"> Python
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>