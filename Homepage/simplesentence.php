<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Sentence & Translate</title>


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
<body>
    <div class="containerBody">
        <div class="leftBody" >
            <form method="POST" action="simplesentence.php?action=ok">
                <textarea class="form-control textbox-r"  name="inserttxt">
                    <?php
                        if(isset($_POST["inserttxt"])){
                            echo $_POST["inserttxt"];
                        } else {
                            echo " ";
                        }
                    ?>
                </textarea>
        <input class="sentence" type="submit" name="buttonPastofSentence" id="buttonPastofSentence" value="Simple Sentence">

        </div>

        <input class="translate" type="submit" name="buttonTranslate" id="buttonTranslate" value="Translate">

        <div class="rightBody">
            <textarea class="form-control textbox-l" name='showtext' rows='10' cols='72'>
                <?php
                    if (isset($_POST["buttonTranslate"])){
                        include("translate.php");
                    } else if(isset($_POST["buttonPastofSentence"])){
                        include("runpython.php");
                    } else {
                        echo " ";
                    }
                ?>
            </textarea>
            </form>
        </div>
    </div>

    <style>
        .sentence {
            padding: 8px 15px;
            font-size: 16px;
            color: white;
            background: #5bc0de;
            border: none;
            border-radius: 2px;
            position:absolute;
            margin-top:400px;
            margin-left:480px;
            
        }

        .translate {
            padding: 8px 35px;
            font-size: 16px;
            color: white;
            background: #5bc0de;
            border: none;
            border-radius: 2px;
            margin-top:400px;
            position:absolute;
            margin-left:10px;
        }

      .textbox-r {
        height:250px;
        width:600px;
        float:right;
        align:center;
        margin-top:100px;
      }
      .textbox-l {
        height:250px;
        width:600px;
        float:left;
        align:center;
        margin-top:100px;
      }
      .my-custom-scrollbar {
        position: relative;
        height: 200px;
        overflow: auto;
      }
      .table-wrapper-scroll-y {
        display: block;
      }
      .containerBody {
        background-color: rgb(249, 249, 249);
        height: 100%;
        width: auto;
      }
      .leftBody {
        background-color: white;
        float: left;
        width: 50%;
        height: 541px;
        text-align: center;
      }
      .rightBody {
        background-color: white;
        float: right;
        width: 50%;
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
      /* .fixed {
        max-height: 360px;
        max-width:98%;
        position: center;
      } */
    </style>
</body>
</html>