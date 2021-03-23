<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper</title>

    <link rel="stylesheet" href="openpapercss.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="middle">
        <aside class="left">
            <div class="middle_right" align="left">
                <form method="POST" action="openpaper.php?action=ok">
                <textarea class="form-control" rows="10" name="inserttxt">
                    <?php
                        if(isset($_POST["inserttxt"])){
                            echo $_POST["inserttxt"];
                        } else {
                            echo " ";
                        }
                    ?>
                </textarea>
                </form>
                
            </div>
        </aside>
        
        <aside class="right">
        <div class="input-note">
            <form method="POST" action="openpaper.php?action=ok">
            <!-- <input class="w3-input"> -->
                <textarea class="form-control" rows="10" name="inserttxt">
                    <?php
                        if(isset($_POST["inserttxt"])){
                            echo $_POST["inserttxt"];
                        } else {
                            echo " ";
                        }
                    ?>
                </textarea>

                <input class="sentence" type="submit" name="buttonPastofSentence" id="buttonPastofSentence" value="Simple Sentence">
                <input class="translate" type="submit" name="buttonTranslate" id="buttonTranslate" value="Translate">
                

                <textarea class="form-control" name='showtext' rows='10' cols='72'>
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
               
                <!-- <iframe src="translate" height="200" width="520" title="Iframe Example"></iframe> --> -->
            </from>
        </aside>
    </body>

</html>