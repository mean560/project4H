<?php 
include "config_s.php";
?>
<!DOCTYPE html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bibliographys</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    

  </head>

  <body data-new-gr-c-s-check-loaded="14.990.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.990.0">

    <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top" id="top-navigation" style="height: 83px;">
      <div class="container">
        <h1><span style="font-weight: normal; font-size: 32px;"><i class="fas fa-book" ></i>&nbsp&nbspMy Bibliographys</span></h1>
        <a class="navbar-brand" href="#">Username</a>
      </div>
    </nav>
    
    <!-- เส้นขีดบน -->
    <hr style="border-color: rgb(219, 219, 219); width: auto; margin-top:0px; margin-bottom: 0px;"></hr>

    <!--Body-->
    <div class="containerBody">
      <div class="leftBody">
        <button type="button" class="btn" data-toggle="modal" data-target="#myModal" style="margin-top: 25px; margin-left: 25px; width: 150px; font-family: Arial, Helvetica, sans-serif; letter-spacing: 0px; 
            background-color: rgb(249, 249, 249); font-family: Arial, Helvetica, sans-serif; border-width: 1px; text-decoration-color: rgb(249, 204, 204); border-color: rgb(212, 212, 212);
            border-style: solid; text-decoration-style: solid;">Create Source</button>
        <ul class="list-group" style="padding-top: 16px; border-width: 0px;">
          <!-- list button -->
          <div class="btn-group-vertical" style="opacity: 1;"> 
            <a href="index.php" class="list-group-item" style="color: black; border-width: 0px; background-color: rgb(249, 249, 249); float: left; text-align: left; font-size: 14px;"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQ4MC4wMDk1OCA0ODAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiIGNsYXNzPSIiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTEyOCAxMDQuMDAzOTA2di0zMmMwLTQuNDE3OTY4LTMuNTgyMDMxLTgtOC04aC0xMTJjLTQuNDE3OTY5IDAtOCAzLjU4MjAzMi04IDh2MzJ6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTAgMTIwLjAwMzkwNnYyNjRoMTI4di0yNjR6bTk2IDEwNGgtNjRjLTQuNDE3OTY5IDAtOC0zLjU4MjAzMS04LTh2LTY0YzAtNC40MTc5NjggMy41ODIwMzEtOCA4LThoNjRjNC40MTc5NjkgMCA4IDMuNTgyMDMyIDggOHY2NGMwIDQuNDE3OTY5LTMuNTgyMDMxIDgtOCA4em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0wIDQzMi4wMDM5MDZ2NDBjMCA0LjQxNzk2OSAzLjU4MjAzMSA4IDggOGgxMTJjNC40MTc5NjkgMCA4LTMuNTgyMDMxIDgtOHYtNDB6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTAgNDAwLjAwMzkwNmgxMjh2MTZoLTEyOHptMCAwIiBmaWxsPSIjYjFiOWM0IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTQ0IDQwMC4wMDM5MDZoMTA0djE2aC0xMDR6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTI0OCAzMi4wMDM5MDZ2LTI0YzAtNC40MTc5NjgtMy41ODIwMzEtNy45OTk5OTk3NS04LTcuOTk5OTk5NzVoLTg4Yy00LjQxNzk2OSAwLTggMy41ODIwMzE3NS04IDcuOTk5OTk5NzV2MjR6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTE0NCA4OC4wMDM5MDZoMTA0djI5NmgtMTA0em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNDQgNDMyLjAwMzkwNnY0MGMwIDQuNDE3OTY5IDMuNTgyMDMxIDggOCA4aDg4YzQuNDE3OTY5IDAgOC0zLjU4MjAzMSA4LTh2LTQwem0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNDQgNDguMDAzOTA2aDEwNHYyNGgtMTA0em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNjMuODA4NTk0IDE2NS42Njc5NjkgNC4yODEyNSAxNi40MzM1OTMgMTM1LjQ4NDM3NS0zNi4xMjg5MDYtNC4yODUxNTctMTYuNDMzNTk0em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0zMzAuNjY0MDYyIDQyMS45NDkyMTkgMTM1LjQ4MDQ2OS0zNi4xMjg5MDctOC41NzgxMjUtMzIuODg2NzE4LTEzNS40ODgyODEgMzYuMTI4OTA2em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im00NTMuNTI3MzQ0IDMzNy40NTMxMjUtNDUuOTEwMTU2LTE3Ni0xMzUuNDg4MjgyIDM2LjEyODkwNiA0NS45MTAxNTYgMTc2em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiIGNsYXNzPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yNTkuNzY5NTMxIDE1MC4xODc1IDEzNS40NzY1NjMtMzYuMTI1LTExLjQ4NDM3NS00NC4wNTg1OTRjLTEuMTgzNTk0LTQuMjY1NjI1LTUuNTQyOTY5LTYuODE2NDA2LTkuODM5ODQ0LTUuNzU3ODEybC0xMjAgMzJjLTQuMjM4MjgxIDEuMTYwMTU2LTYuNzY1NjI1IDUuNS01LjY4MzU5NCA5Ljc1NzgxMnptMCAwIiBmaWxsPSIjYjFiOWM0IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIiBjbGFzcz0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtNDcwLjE4MzU5NCA0MDEuMzAwNzgxLTEzNS40ODgyODIgMzYuMTI4OTA3IDkuNTQyOTY5IDM2LjU3NDIxOGMuNTU0Njg4IDIuMDYyNSAxLjkwNjI1IDMuODIwMzEzIDMuNzYxNzE5IDQuODgyODEzIDEuMjA3MDMxLjczMDQ2OSAyLjU4OTg0NCAxLjExNzE4NyA0IDEuMTE3MTg3LjY5OTIxOSAwIDEuMzk4NDM4LS4wODIwMzEgMi4wNzgxMjUtLjIzODI4MWwxMjAtMzJjNC4yMzgyODEtMS4xNjAxNTYgNi43NjU2MjUtNS41MDM5MDYgNS42ODM1OTQtOS43NjE3MTl6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiIgY2xhc3M9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" style="width: 15px; height: 15px;"/> All Bibliographys</a>
            <a href="fav.php" class="list-group-item" style="color: black; border-width: 0px; background-color: rgb(249, 249, 249); float: left; text-align: left; font-size: 14px;"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDUxMS45ODY4NSA1MTEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTExNC41OTM3NSA0OTEuMTQwNjI1Yy01LjYwOTM3NSAwLTExLjE3OTY4OC0xLjc1LTE1LjkzMzU5NC01LjE4NzUtOC44NTU0NjgtNi40MTc5NjktMTIuOTkyMTg3LTE3LjQ0OTIxOS0xMC41ODIwMzEtMjguMDkzNzVsMzIuOTM3NS0xNDUuMDg5ODQ0LTExMS43MDMxMjUtOTcuOTYwOTM3Yy04LjIxMDkzOC03LjE2Nzk2OS0xMS4zNDc2NTYtMTguNTE5NTMyLTcuOTc2NTYyLTI4LjkwNjI1IDMuMzcxMDkzLTEwLjM2NzE4OCAxMi41NDI5NjgtMTcuNzA3MDMyIDIzLjQwMjM0My0xOC43MTA5MzhsMTQ3Ljc5Njg3NS0xMy40MTc5NjggNTguNDMzNTk0LTEzNi43NDYwOTRjNC4zMDg1OTQtMTAuMDQ2ODc1IDE0LjEyMTA5NC0xNi41MzUxNTYgMjUuMDIzNDM4LTE2LjUzNTE1NiAxMC45MDIzNDMgMCAyMC43MTQ4NDMgNi40ODgyODEgMjUuMDIzNDM3IDE2LjUxMTcxOGw1OC40MzM1OTQgMTM2Ljc2OTUzMiAxNDcuNzczNDM3IDEzLjQxNzk2OGMxMC44ODI4MTMuOTgwNDY5IDIwLjA1NDY4OCA4LjM0Mzc1IDIzLjQyNTc4MiAxOC43MTA5MzggMy4zNzEwOTMgMTAuMzY3MTg3LjI1MzkwNiAyMS43MzgyODEtNy45NTcwMzIgMjguOTA2MjVsLTExMS43MDMxMjUgOTcuOTQxNDA2IDMyLjkzNzUgMTQ1LjA4NTkzOGMyLjQxNDA2MyAxMC42Njc5NjgtMS43MjY1NjIgMjEuNjk5MjE4LTEwLjU3ODEyNSAyOC4wOTc2NTYtOC44MzIwMzEgNi4zOTg0MzctMjAuNjA5Mzc1IDYuODkwNjI1LTI5LjkxMDE1NiAxLjMwMDc4MWwtMTI3LjQ0NTMxMi03Ni4xNjAxNTYtMTI3LjQ0NTMxMyA3Ni4yMDMxMjVjLTQuMzA4NTk0IDIuNTU4NTk0LTkuMTA5Mzc1IDMuODYzMjgxLTEzLjk1MzEyNSAzLjg2MzI4MXptMTQxLjM5ODQzOC0xMTIuODc1YzQuODQzNzUgMCA5LjY0MDYyNCAxLjMwMDc4MSAxMy45NTMxMjQgMy44NTkzNzVsMTIwLjI3NzM0NCA3MS45Mzc1LTMxLjA4NTkzNy0xMzYuOTQxNDA2Yy0yLjIxODc1LTkuNzQ2MDk0IDEuMDg5ODQzLTE5LjkyMTg3NSA4LjYyMTA5My0yNi41MTU2MjVsMTA1LjQ3MjY1Ny05Mi41LTEzOS41NDI5NjktMTIuNjcxODc1Yy0xMC4wNDY4NzUtLjkxNzk2OS0xOC42ODc1LTcuMjM0Mzc1LTIyLjYxMzI4MS0xNi40OTIxODhsLTU1LjA4MjAzMS0xMjkuMDQ2ODc1LTU1LjE0ODQzOCAxMjkuMDY2NDA3Yy0zLjg4MjgxMiA5LjE5NTMxMi0xMi41MjM0MzggMTUuNTExNzE4LTIyLjU0Njg3NSAxNi40Mjk2ODdsLTEzOS41NjI1IDEyLjY3MTg3NSAxMDUuNDY4NzUgOTIuNWM3LjU1NDY4NyA2LjYxMzI4MSAxMC44NTkzNzUgMTYuNzY5NTMxIDguNjIxMDk0IDI2LjUzOTA2MmwtMzEuMDYyNSAxMzYuOTM3NSAxMjAuMjc3MzQzLTcxLjkxNDA2MmM0LjMwODU5NC0yLjU1ODU5NCA5LjEwOTM3Ni0zLjg1OTM3NSAxMy45NTMxMjYtMy44NTkzNzV6bS04NC41ODU5MzgtMjIxLjg0NzY1NnMwIC4wMjM0MzctLjAyMzQzOC4wNDI5Njl6bTE2OS4xMjg5MDYtLjA2MjUuMDIzNDM4LjA0Mjk2OWMwLS4wMjM0MzggMC0uMDIzNDM4LS4wMjM0MzgtLjA0Mjk2OXptMCAwIiBmaWxsPSIjYjFiOWM0IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PC9nPjwvc3ZnPg==" style="width: 15px; height: 15px;"/> Favorites</a>
            <a href="tash.php" class="list-group-item" style="color: black; border-width: 0px; background-color: rgb(249, 249, 249); float: left; text-align: left; font-size: 14px;"><img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnN2Z2pzPSJodHRwOi8vc3ZnanMuY29tL3N2Z2pzIiB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgeD0iMCIgeT0iMCIgdmlld0JveD0iMCAwIDQyNyA0MjcuMDAxMzEiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDUxMiA1MTIiIHhtbDpzcGFjZT0icHJlc2VydmUiPjxnPjxwYXRoIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgZD0ibTIzMi4zOTg0MzggMTU0LjcwMzEyNWMtNS41MjM0MzggMC0xMCA0LjQ3NjU2My0xMCAxMHYxODljMCA1LjUxOTUzMSA0LjQ3NjU2MiAxMCAxMCAxMCA1LjUyMzQzNyAwIDEwLTQuNDgwNDY5IDEwLTEwdi0xODljMC01LjUyMzQzNy00LjQ3NjU2My0xMC0xMC0xMHptMCAwIiBmaWxsPSIjYjFiOWM0IiBkYXRhLW9yaWdpbmFsPSIjMDAwMDAwIiBzdHlsZT0iIj48L3BhdGg+PHBhdGggeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBkPSJtMTE0LjM5ODQzOCAxNTQuNzAzMTI1Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYzLTEwIDEwdjE4OWMwIDUuNTE5NTMxIDQuNDc2NTYyIDEwIDEwIDEwIDUuNTIzNDM3IDAgMTAtNC40ODA0NjkgMTAtMTB2LTE4OWMwLTUuNTIzNDM3LTQuNDc2NTYzLTEwLTEwLTEwem0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0yOC4zOTg0MzggMTI3LjEyMTA5NHYyNDYuMzc4OTA2YzAgMTQuNTYyNSA1LjMzOTg0MyAyOC4yMzgyODEgMTQuNjY3OTY4IDM4LjA1MDc4MSA5LjI4NTE1NiA5LjgzOTg0NCAyMi4yMDcwMzIgMTUuNDI1NzgxIDM1LjczMDQ2OSAxNS40NDkyMTloMTg5LjIwMzEyNWMxMy41MjczNDQtLjAyMzQzOCAyNi40NDkyMTktNS42MDkzNzUgMzUuNzMwNDY5LTE1LjQ0OTIxOSA5LjMyODEyNS05LjgxMjUgMTQuNjY3OTY5LTIzLjQ4ODI4MSAxNC42Njc5NjktMzguMDUwNzgxdi0yNDYuMzc4OTA2YzE4LjU0Mjk2OC00LjkyMTg3NSAzMC41NTg1OTMtMjIuODM1OTM4IDI4LjA3ODEyNC00MS44NjMyODItMi40ODQzNzQtMTkuMDIzNDM3LTE4LjY5MTQwNi0zMy4yNTM5MDYtMzcuODc4OTA2LTMzLjI1NzgxMmgtNTEuMTk5MjE4di0xMi41Yy4wNTg1OTMtMTAuNTExNzE5LTQuMDk3NjU3LTIwLjYwNTQ2OS0xMS41MzkwNjMtMjguMDMxMjUtNy40NDE0MDYtNy40MjE4NzUtMTcuNTUwNzgxLTExLjU1NDY4NzUtMjguMDYyNS0xMS40Njg3NWgtODguNzk2ODc1Yy0xMC41MTE3MTktLjA4NTkzNzUtMjAuNjIxMDk0IDQuMDQ2ODc1LTI4LjA2MjUgMTEuNDY4NzUtNy40NDE0MDYgNy40MjU3ODEtMTEuNTk3NjU2IDE3LjUxOTUzMS0xMS41MzkwNjIgMjguMDMxMjV2MTIuNWgtNTEuMTk5MjE5Yy0xOS4xODc1LjAwMzkwNi0zNS4zOTQ1MzEgMTQuMjM0Mzc1LTM3Ljg3ODkwNyAzMy4yNTc4MTItMi40ODA0NjggMTkuMDI3MzQ0IDkuNTM1MTU3IDM2Ljk0MTQwNyAyOC4wNzgxMjYgNDEuODYzMjgyem0yMzkuNjAxNTYyIDI3OS44Nzg5MDZoLTE4OS4yMDMxMjVjLTE3LjA5NzY1NiAwLTMwLjM5ODQzNy0xNC42ODc1LTMwLjM5ODQzNy0zMy41di0yNDUuNWgyNTB2MjQ1LjVjMCAxOC44MTI1LTEzLjMwMDc4MiAzMy41LTMwLjM5ODQzOCAzMy41em0tMTU4LjYwMTU2Mi0zNjcuNWMtLjA2NjQwNy01LjIwNzAzMSAxLjk4MDQ2OC0xMC4yMTg3NSA1LjY3NTc4MS0xMy44OTQ1MzEgMy42OTE0MDYtMy42NzU3ODEgOC43MTQ4NDMtNS42OTUzMTMgMTMuOTI1NzgxLTUuNjA1NDY5aDg4Ljc5Njg3NWM1LjIxMDkzNy0uMDg5ODQ0IDEwLjIzNDM3NSAxLjkyOTY4OCAxMy45MjU3ODEgNS42MDU0NjkgMy42OTUzMTMgMy42NzE4NzUgNS43NDIxODggOC42ODc1IDUuNjc1NzgyIDEzLjg5NDUzMXYxMi41aC0xMjh6bS03MS4xOTkyMTkgMzIuNWgyNzAuMzk4NDM3YzkuOTQxNDA2IDAgMTggOC4wNTg1OTQgMTggMThzLTguMDU4NTk0IDE4LTE4IDE4aC0yNzAuMzk4NDM3Yy05Ljk0MTQwNyAwLTE4LTguMDU4NTk0LTE4LTE4czguMDU4NTkzLTE4IDE4LTE4em0wIDAiIGZpbGw9IiNiMWI5YzQiIGRhdGEtb3JpZ2luYWw9IiMwMDAwMDAiIHN0eWxlPSIiPjwvcGF0aD48cGF0aCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGQ9Im0xNzMuMzk4NDM4IDE1NC43MDMxMjVjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjMtMTAgMTB2MTg5YzAgNS41MTk1MzEgNC40NzY1NjIgMTAgMTAgMTAgNS41MjM0MzcgMCAxMC00LjQ4MDQ2OSAxMC0xMHYtMTg5YzAtNS41MjM0MzctNC40NzY1NjMtMTAtMTAtMTB6bTAgMCIgZmlsbD0iI2IxYjljNCIgZGF0YS1vcmlnaW5hbD0iIzAwMDAwMCIgc3R5bGU9IiI+PC9wYXRoPjwvZz48L3N2Zz4=" style="width: 15px; height: 15px;"/> Trash</a>
          </div>
        </ul>
      </div>

      <div class="rightBody">
        <p class="text" style="display: inline-block; margin-left: 15px; margin-top:15px;">All Bibliographys</p>
        <input type="text" class="form-control" placeholder="Search" style="width: 200px; display: inline-block; margin-left: 10px;"></p>
        <div class="container" style="height: 360px; background-color: white;">
        
          <table class="table table-striped" id="userTable" style='border-collapse: collapse;'>
            <tr>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
              <th>AUTHORS</th>
              <th>TITLE</th>
              <th>SOURCE</th>
              <th>YEAR</th>
              <th>&nbsp;</th>
              <th>&nbsp;</th>
            </tr>
          </table>
        </div>

        <div class="bottomBody">
          <button type="button" class="btn" style="display: inline-block; position: static; margin-top: 35px; margin-left: 380px;
          background-color: rgb(249, 249, 249); font-family: Arial, Helvetica, sans-serif; border-width: 1px; margin-right: 5px;
          text-decoration-color: rgb(249, 204, 204); border-color: rgb(212, 212, 212); border-style: solid; 
          text-decoration-style: solid;">Download Bibliography</button>
          <div class="form-group" style="display: inline-block; position: absolute; border-width: 1px; margin-top: 35px;">
            <select class="form-control" style="width: 180px; height: 38px; background-color: rgb(249, 249, 249); font-family: Arial, Helvetica, sans-serif;">
              <option value="value1">APA</option>
              <option value="value2">AMA</option>
              <option value="value3">Chicago</option>
              <option value="value4">IEEE</option>
              <option value="value5">MLA</option>
              <option value="value6">Turabian</option>
              <option value="value7">Vancouver</option>
            </select>
          </div>

        </div>
      </div>
    </div>

    <style>
      .containerBody {
        background-color: rgb(249, 249, 249);
        height: 100%;
        width: auto;
      }
      .leftBody {
        background-color: rgb(249, 249, 249);
        float: left;
        width: 15%;
        height: 541px;
      }
      .rightBody {
        background-color: white;
        float: right;
        width: 85%;
        height: 541px;
      }

      .bottomBody {
        background-color:rgb(249, 249, 249);
        position: fixed;
        bottom: 0px;
        float: right;
        width: 100%;
        height: 110px;
        text-align: left;
      }
    </style>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>
</html>

<script>
  $(document).ready(function(){

// DataTable
var userDataTable = $('#userTable').DataTable({
   'processing': true,
   'serverSide': true,
   'serverMethod': 'post',
   'ajax': {
      'url':'ajaxfile.php'
   },
   'columns': [
      { data: 'author' },
      { data: 'title' },
      { data: 'year' },
      { data: 'action' },
   ]
});

// Update record
$('#userTable').on('click','.updateUser',function(){
   var id = $(this).data('id');

   $('#txt_userid').val(id);

   // AJAX request
   $.ajax({
      url: 'ajaxfile.php',
      type: 'post',
      data: {request: 2, id: id},
      dataType: 'json',
      success: function(response){
         if(response.status == 1){

           $('#name').val(response.data.name);
           $('#email').val(response.data.email);
           $('#gender').val(response.data.gender);
           $('#city').val(response.data.city);

           userDataTable.ajax.reload();
         }else{
           alert("Invalid ID.");
         }
      }
   });

});

// Save user 
$('#btn_save').click(function(){
   var id = $('#txt_userid').val();

   var name = $('#name').val().trim();
   var email = $('#email').val().trim();
   var gender = $('#gender').val().trim();
   var city = $('#city').val().trim();

   if(name !='' && email != '' && city != ''){

     // AJAX request
     $.ajax({
       url: 'ajaxfile.php',
       type: 'post',
       data: {request: 3, id: id,name: name, email: email, gender: gender, city: city},
       dataType: 'json',
       success: function(response){
          if(response.status == 1){
             alert(response.message);

             // Empty and reset the values
             $('#name','#email','#city').val('');
             $('#gender').val('male');
             $('#txt_userid').val(0);

             // Reload DataTable
             userDataTable.ajax.reload();

             // Close modal
             $('#updateModal').modal('toggle');
          }else{
             alert(response.message);
          }
       }
    });

  }else{
     alert('Please fill all fields.');
  }
});

// Delete record
$('#userTable').on('click','.deleteUser',function(){
   var id = $(this).data('id');

   var deleteConfirm = confirm("Are you sure?");
   if (deleteConfirm == true) {
      // AJAX request
      $.ajax({
        url: 'ajaxfile.php',
        type: 'post',
        data: {request: 4, id: id},
        success: function(response){
           if(response == 1){
              alert("Record deleted.");

              // Reload DataTable
              userDataTable.ajax.reload();
           }else{
              alert("Invalid ID.");
           }
        }
      });
   } 

});
});
</script>