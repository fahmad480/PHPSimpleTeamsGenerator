<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .center-screen {
            width: 100%;
            max-width: 600px;
            padding: 15px;
            margin: auto;
        }

        .center-screen .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
    </style>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("document ready");
            $("#generate").click(function() {
                console.log("generating");
                $.ajax({
                    type: 'post',
                    url: 'http://localhost/teamgenerator/api.php',
                    cache: false,
                    data: {
                        persons: $("#persons").val(),
                        teams: $("#teams").val()
                    },
                    success: function(data) {
                        $('#persons').val(data);
                    }
                });
            });
            $('#persons').attr('placeholder', 'Player1\nPlayer2\nPlayer3');
        });
    </script>
</body>

</html>