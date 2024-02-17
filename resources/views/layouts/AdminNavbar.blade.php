<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" style="font-family:monospace; font-size:30px">CivicConnect</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;AboutUs<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;ContactUs</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link btn btn-link" data-toggle="modal" data-target="#myModal"
                        style="font-family: monospace; font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;Complain</button>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#" style="font-family:monospace; font-size:20px;">&nbsp;&nbsp;&nbsp;&nbsp;Blog</a>
                </li>
            </ul>
            @if(request()->is('civiconnect/homepage'))
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-sm" type="submit">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </form>
            @endif
            <img src="" class="rounded-circle" height="40" width="40" id="modalTrigger" onclick="openModal()">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </nav>
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="photoModalLabel">User's Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul>
                   <li> <a href="" class="btn btn-info m-2">Register As Employee</a></li>
                   <li> <a href="" class="btn btn-success m-2">Login As Employee</a></li>
                   <li> <a href="" class="btn btn-danger m-2">LogOut</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal() {
            $('#photoModal').modal('show');
            
        }
    </script>