<?PHP

    // $name=$_POST['h1'];
    // $name1=$_POST['h2'];

    // if($name=='')
    // {
    //     echo "<h3>Welcome </h3> ".$name1;
    // }
    // else
    // {
    //     echo "<h3>Welcome </h3> ".$name;
    // }

    echo"<!DOCTYPE html>
    <html>
        <head>
            <title>Select Packages</title>
            <style>
                .link-btn {
                    background-color: #c9060f;
                    color: white;
                    padding: 54px 100px;
                    margin: 10px 10px;
                    border: none;
                    cursor: pointer;
                    width: 100%;
                    border-radius: 20px;
                    appearance: button;
                }
                .other {
                    display: flex;
                    justify-content: center;
                    flex-direction: column;
                    align-items: center;
                    background-color: white;
                }
                a{
                    text-decoration: none;
                    font-family: Arial;
                    display: inline-block;
                }
                a:hover {
                    color: red;
                    background-color: white;
                }
                a:active {
                    color: black;
                    background-color: white;
                }
            </style>
        </head>
        <body>
            <div>
                <br>
                <h1 style='text-align: center;'>Packages</h1><br>
                <hr>
            </div>
            <div>
                <br><br><br><br><br><br><br><br><br><br>
                <div style='text-align: center; font-size: 50px;'>
                    <a href='custom_pack.html' target='_top'><button class='link-btn'> Customize Package </button></a>
                </div>
                <br><br><br>
                <div style='text-align: center;'>
                    <a href='recommend_pack.html' target='_top'><button class='link-btn'> Select Recommended Package </button></a>
                </div>
            </div>
        </body>
    </html>
    ";
?>