    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
            "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <title>Result View</title>
    </head>
    <style>
        input[type=text] {
            width: 15%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type=text], select {
            width: 40%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=number]
        {
            width: 40%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=password] {
            width: 40%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 40%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type=email] {
            width: 40%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
        /* Set a style for all buttons */
        button {
            background-color: deeppink;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            text-transform: uppercase;

        }

        button:hover {
            opacity: 0.8;
        }
        a {
            text-decoration: none;
            background-color: deeppink;
            color: white;
            padding: 2px 10px;
            margin: 4px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            text-transform: uppercase;

        }

        a:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: 20s%;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .back{
            background-repeat: no-repeat;
            width:100%;

            background-size: cover;
            height: 75%;
        }
        h1{
            text-align: center;
            text-transform: uppercase;
            color: mediumvioletred;
        }
        p{
            text-align: center;

            letter-spacing: 3px;}
        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 40%;

            }
        }

    </style>
    <body>
    <?php
    if(isset($_GET['id']) && !empty($_GET['id'])) {

        include 'connection.php';
        $stu = mysqli_query($conn, "SELECT * FROM result WHERE st_id=".$_GET['id']);
        $stu_result = mysqli_fetch_array($stu);
        $psy = mysqli_query($conn, "SELECT * FROM psychiatrist WHERE logid=".$stu_result['pid']);
        $psy_result = mysqli_fetch_array($psy);
    ?>
    <form id="form1" name="form1" method="post" action="">
        <table align="center" width="500" border="0">
           <tr>
               <td align="right">Psycatrist Name:</td>
               <td align="left"><input type="text" value="<?php echo $psy_result['pname'] ?>"></td>
           </tr>
            <tr>
                <td align="right">Psycatrist Phone:</td>
                <td align="left"><input type="text" value="<?php echo $psy_result['pph'] ?>"></td>
            </tr>
            <tr>
                <td align="right">Psycatrist Mail:</td>
                <td align="left"><input type="text" value="<?php echo $psy_result['pemail'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    Teacher Comment<br>
                    <textarea rows="5" cols="50" ><?php echo $stu_result['tcomm'] ?></textarea>
                </td>
            </tr>
                    <tr>
                        <td colspan="2" align="center">
                            Psychatrist Comment<br>
                            <textarea rows="5" cols="50"><?php echo $stu_result['pcomm'] ?></textarea>
                        </td>
                    </tr>

            <tr>
                <td colspan="2" align="center">
                    <a href="result_view.php">Click to Go Back</a>
                </td>
            </tr>
        </table>
    </form>
        <?php
    }else{
        echo "<script>alert('invalid student id');location.href='result_view.php';</script>";
    }
    ?>
    </body>
    </html>
