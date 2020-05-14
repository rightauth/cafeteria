<!DOCTYPE html>
<html>
    <?php
    //URL_FILE
        include('urlfile.php');
        include('function.php');
    ?>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WEB BAR OF KU</title>
    </head>
    <body>
	        <style>
            * {
            box-sizing: border-box;
            }
            body{
                margin: 0px;
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #f8f8f8;
            }
            .borderweb{
                border: grey 1px solid;
                border-radius: 20px;
                box-shadow: 5px 10px 8px #888888;
                margin: 20px;
                width: 720px;
                word-break: break-word;
            }
            .headerimg{
                width: 720px;
                height: auto;
                border-radius: 20px 20px 0px 0px;
            }
            .imgbar{
                border-radius: 10px;
                border: black 1px solid;
            }
            .menu{
                overflow: hidden;
                border-radius: 0px 0px 20px 20px;
            }
            .menu div{
                float: left;
                width: 25%;
                text-align: center;
                padding: 5px;
                background: rgb(245, 245, 245);
            }
            .menu div:hover{
                float: left;
                width: 25%;
                text-align: center;
                padding: 5px;
                background: rgb(221, 221, 221);
            }
            @media screen and (max-width: 800px) {
                .headerimg {
                    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
                    border-radius: 0px 0px 0px 0px;
                }
                .borderweb{
                    border-radius: 0px;
                    box-shadow: 0px 0px 0px #FFF;
                    margin: 0px;
                    width: 100%;
                }
/*                .menu div{
                    width: 100%;
                }
                .menu div:hover{
                    width: 100%;
                } */
                .imgnor{
                    width: 100%;
                }
            }
            a:link {
                text-decoration: none;
            }
            /* visited link */
            a:visited {
                text-decoration: none;
            }
            /* mouse over link */
            a:hover {
                text-decoration: none;
            }
            /* selected link */
            a:active {
                text-decoration: none;
            }
            .imgnor{
                width: 100%;
                height: auto;
            }
            .title{
                background: rgb(211, 211, 211);
                margin: 25px;
                padding: 10px;
                border-radius: 20px 20px 0px 0px;
                font-weight: bold;
                text-align: center;
                font-size: 20px;
            }
            .info{
                margin: 25px;
                border-radius: 0px 0px 20px 20px;
                font-size: 20px;
            }
        </style>
        <div class="borderweb">
            <header>
                <img class="headerimg" src="pichead2.png" />
            </header>
            <div class="menu">
                <div><a href="?p=sci&type=link">บาร์วิทย์</a></div>
                <div><a href="?p=en&type=link">บาร์วิศวะ</a></div>
                <div><a href="?p=new&type=link">บาร์ใหม่</a></div>
                <div><a href="?p=new2&type=link">บาร์ใหม่กว่า</a></div>
            </div>
        <?php
         if($_GET[p]=='admin'){
             include('admin.php');
         }else if($_GET[p]=='sci'){
             goCountVisitor($urlfile_sci);
			 include('view/sci.html');
		 }else if($_GET[p]=='new'){
            goCountVisitor($urlfile_new);
            include('view/new.html');
        }else if($_GET[p]=='new2'){
            goCountVisitor($urlfile_new2);
            include('view/new2.html');
        }else if($_GET[p]=='en'){
            goCountVisitor($urlfile_en);
            include('view/en.html');
        }else{
            include('view/home.html');
            goCountVisitor($urlfile_index);
        }

        //Store Data From LINK
        if($_GET['type']=='link'){
            goCountVisitor($urlfile_linkclick);
        }else if($_GET['type']=='img'){
            goCountVisitor($urlfile_linkimg);
        }else if($_GET['type']=='en'){
            goCountVisitor($urlfile_mapen);
        }else if($_GET['type']=='sci'){
            goCountVisitor($urlfile_mapsci);
        }else if($_GET['type']=='new'){
            goCountVisitor($urlfile_mapnew);
        }else if($_GET['type']=='new2'){
            goCountVisitor($urlfile_mapnew2);
        }

        ?>
        </div>
        <a href="?p=admin">adminpage</a>
    </body>
</html>