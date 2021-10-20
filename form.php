<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <center>
        <img src="img/1633109224435.png" width="19%" id="profile">
    </center>
    <form action="index2.php" method="POST">
        <center>
            <table>
                <tr>
                    <td><br><br></td>
                </tr>
                <tr>
                    <td>
                        <label for="username">username</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="username" placeholder="username" name="username" required>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleInputEmail1">Email address</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="email" id="exampleInputEmail1" placeholder="email" required>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="exampleInputPassword1">Password</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" id="exampleInputPassword1" type="password" placeholder="password"
                            required>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
            </table>
        </center>
    </form>
    <footer>We'll never share your email with anyone else.</footer>
</body>

</html>