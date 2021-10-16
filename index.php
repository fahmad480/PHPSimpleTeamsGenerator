<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/ajaxcall.js"></script>
    <title>Team Generator</title>
</head>
<body>
    <div class="container-fluid">
        <div class="center-screen">
            <h3 class="text-center">Teams Generator</h3>
            <p class="text-center">Created by <a href=" https://github.com/zFz0000/PHPSimpleTeamsGenerator/" target="_blank">Faraaz</a></p>
            <textarea name=" persons" id="persons" cols="30" rows="10" class="form-control mb-3"></textarea>
            <input type="number" class="form-control form-block mb-3" id="teams" name="teams" placeholder="number of teams? (ex: 2)">
            <button class="btn btn-lg btn-primary btn-block" id="generate">Generate Teams</button>
        </div>
    </div>
</body>

</html>
