<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    <link rel="stylesheet" href="css/history.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        :root {
            --1: #1B2E3C;
            --2: #0C0C1E;
            --3: #4B0000;
            --4: #F3E3E2;
        }

        body {
            background-color: var(--1);
            color: var(--4);
        }

        .card {
            background-color: var(--2);
            color: var(--4);
            height: 300px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top "
        style="background-color: rgba(245, 222, 179, 0.927);  ">
        <div class="container">
            <a class="navbar-brand text-success " href="#" style="color: ;"><span
                    style="color: var(--1);">Koper</span>Ase</a>
            <button style="background-color: white; border: 2px solid var(--3);" class="navbar-toggler btn"
                type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#team">Team</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end animate__animated animate__fadeIn"
                            style="background-color: rgba(245, 222, 179, 0.927); ">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="color: red;">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container card " style="margin: 80px; background-color: ;">
        <h2>History</h2>
        <table id="historyTable" class="table table-striped" style="background-color: red; margin: 10px; ">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Action</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>2022-01-01</td>
                    <td>Login</td>
                    <td>Success</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2022-01-02</td>
                    <td>Update Profile</td>
                    <td>Success</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2022-01-03</td>
                    <td>View History</td>
                    <td>Success</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#historyTable').DataTable();
        });
    </script>
</body>

</html>