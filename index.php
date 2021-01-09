<?php
include("config/config.php");
include("inc/functions.php");
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon" />
    <link defer rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> <!-- SWEETALERT2 -->
    <!-- Latest compiled and minified JavaScript -->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ezPass - Secure Your Passwords</title>
</head>
<body>

<?php include("header.php"); ?>

<div style="margin-top: 3em;" class="container">
    <div class="alert alert-warning">
        To copy any credentials, simply click on the relevant input.
    </div>
    <div class="row">

        <?php
        $query = $db->query("SELECT * FROM credentials", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
            foreach( $query as $row ){ ?>

                <div class="col-md-4">

                    <div class="card">


                        <div class="card-body">
                        <form action="" name="credentials" method="post">

                            <h4 style="text-align: center" class="card-title"><a>
                                    <?php
                                    switch ($row['platform']) {
                                        case "facebook":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174848.svg' width='48' height='48'> Facebook";
                                            break;
                                        case "instagram":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174855.svg' width='48' height='48'> Instagram";
                                            break;
                                        case "youtube":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174883.svg' width='48' height='48'> YouTube";
                                            break;
                                        case "twitter":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174876.svg' width='48' height='48'> Twitter";
                                            break;
                                        case "whatsapp":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174879.svg' width='48' height='48'> WhatsApp";
                                            break;
                                        case "linkedin":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174857.svg' width='48' height='48'> LinkedIn";
                                            break;
                                        case "google plus":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174851.svg' width='48' height='48'> Google Plus";
                                            break;
                                        case "snapchat":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174870.svg' width='48' height='48'> Snapchat";
                                            break;
                                        case "skype":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174869.svg' width='48' height='48'> Skype";
                                            break;
                                        case "spotify":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174872.svg' width='48' height='48'> Spotify";
                                            break;
                                        case "wordpress":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174881.svg' width='48' height='48'> WordPress";
                                            break;
                                        case "pinterest":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174863.svg' width='48' height='48'> Pinterest";
                                            break;
                                        case "paypal":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174861.svg' width='48' height='48'> PayPal";
                                            break;
                                        case "dropbox":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174845.svg' width='48' height='48'> Dropbox";
                                            break;
                                        case "vimeo":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174877.svg' width='48' height='48'> Vimeo";
                                            break;
                                        case "behance":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174837.svg' width='48' height='48'> Behance";
                                            break;
                                        case "soundcloud":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174871.svg' width='48' height='48'> SoundCloud";
                                            break;
                                        case "tumblr":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174875.svg' width='48' height='48'> Tumblr";
                                            break;
                                        case "periscope":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174862.svg' width='48' height='48'> Periscope";
                                            break;
                                        case "medium":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174858.svg' width='48' height='48'> Medium";
                                            break;
                                        case "buffer":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174840.svg' width='48' height='48'> Buffer";
                                            break;
                                        case "flickr":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174849.svg' width='48' height='48'> Flickr";
                                            break;
                                        case "reddit":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174866.svg' width='48' height='48'> Reddit";
                                            break;
                                        case "myspace":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174859.svg' width='48' height='48'> MySpace";
                                            break;
                                        case "dribbble":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174844.svg' width='48' height='48'> Dribbble";
                                            break;
                                        case "bing":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174838.svg' width='48' height='48'> Bing";
                                            break;
                                        case "wikipedia":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174880.svg' width='48' height='48'> Wikipedia";
                                            break;
                                        case "vikipedi":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174880.svg' width='48' height='48'> Vikipedi";
                                            break;
                                        case "etsy":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174847.svg' width='48' height='48'> Etsy";
                                            break;
                                        case "trello":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174874.svg' width='48' height='48'> Trello";
                                            break;
                                        case "box":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174839.svg' width='48' height='48'> Box";
                                            break;
                                        case "foursquare":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174850.svg' width='48' height='48'> Foursquare";
                                            break;
                                        case "vine":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174878.svg' width='48' height='48'> Vine";
                                            break;
                                        case "quora":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174865.svg' width='48' height='48'> Quora";
                                            break;
                                        case "shutterstock":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174868.svg' width='48' height='48'> Shutterstock";
                                            break;
                                        case "deviantart":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174843.svg' width='48' height='48'> Deviantart";
                                            break;
                                        case "kickstarter":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174856.svg' width='48' height='48'> Kickstarter";
                                            break;
                                        case "envato":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/174/174846.svg' width='48' height='48'> Envato";
                                            break;
                                        case "hangouts":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/889/889116.svg' width='48' height='48'> Hangouts";
                                            break;
                                        case "steam":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/254/254392.svg' width='48' height='48'> Steam";
                                            break;
                                        case "netflix":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/732/732228.svg' width='48' height='48'> Netflix";
                                            break;
                                        case "apple":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/731/731985.svg' width='48' height='48'> Apple";
                                            break;
                                        case "windows":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/888/888932.svg' width='48' height='48'> Windows";
                                            break;
                                        case "firefox":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/888/888852.svg' width='48' height='48'> Firefox";
                                            break;
                                        case "adobe":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/732/732171.svg' width='48' height='48'> Adobe";
                                            break;
                                        case "google":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/300/300221.svg' width='48' height='48'> Google";
                                            break;
                                        case "outlook":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/732/732223.svg' width='48' height='48'> Outlook";
                                            break;
                                        case "hotmail":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/732/732223.svg' width='48' height='48'> Hotmail";
                                            break;
                                        case "gmail":
                                            echo "<img src='https://www.flaticon.com/svg/static/icons/svg/732/732200.svg' width='48' height='48'> Gmail";
                                            break;

                                    }
                                    ?>

                                </a></h4>
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group pass_show">
                                <input onclick="copythis(this.id)" name="user" id="user-<?php echo strtolower($row['platform']); ?>" type="password" value="<?php echo encrypt_decrypt('decrypt',$row['user']); ?>" class="form-control" placeholder="Username or Email">
                            </div>

                            <div class="form-group pass_show">
                                <input onclick="copythis(this.id)" name="password" id="password-<?php echo strtolower($row['platform']); ?>" type="password" value="<?php echo encrypt_decrypt('decrypt',$row['password']); ?>" class="form-control" placeholder="Password">
                            </div>

                            <div style="text-align:center">

                                <button type="submit" name="update" class="btn btn-success">Update</button>

                                <a class="btn btn-danger" href="index.php?do=delete&id=<?php echo $row['id']; ?>">Delete</a>
                        </form>
                            </div>
                        </div>

                    </div>

                    <br>
                </div>

            <?php }
        } else {
            echo "No credentials found in database.";
            }
        ?>

    </div>
</div>

</body>

<?php

if(isset($_SERVER['HTTP_REFERER'])) {
if(isset($_GET['do']) and $_GET['do'] ==  'delete') {

    $query = $db->prepare("DELETE FROM credentials WHERE id= :id");
    $delete = $query->execute(array(
        'id' => $_GET['id']
    ));

if($delete){ ?>
    <script type="text/javascript">
    Swal.fire(
    'Success',
    'Credentials have been deleted.',
    'success',
    ).then(function(){
    window.location.href = "index.php";
    });
    </script>
<?php }

}
}

    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $user = encrypt_decrypt('encrypt',$_POST['user']);
        $password = encrypt_decrypt('encrypt',$_POST['password']);

        $query = $db->prepare("UPDATE credentials SET user=?, password=? WHERE id=?");
        $update = $query->execute(array( $user, $password, $id ));

        if($update){ ?>
            <script type="text/javascript">
                Swal.fire(
                    'Success',
                    'Credentials have been updated.',
                    'success',
                ).then(function(){
                    window.location.href = "index.php";
                });
            </script>
        <?php }


}

?>

<!-- Add Password Modal -->

<div class="modal fade" id="addPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Credentials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="save" id="save" method="post">
                <div class="form-group">
                    <input type="text" name="platform" id="platform" class="form-control" placeholder="Platform Name or URL" required />
                </div>

                <div class="form-group">
                    <input type="text" name="user" id="user" class="form-control" placeholder="Username or Email" required />
                </div>
                <!-- Text -->
                <div class="form-group pass_show">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required />
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button name="butsave" id="butsave" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Generate Password Modal -->

<div class="modal fade" id="generatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Password Generator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <center><iframe style="width: 100%; height: 700px; border: 0" src="generator/index.html" width="auto" height="auto" frameBorder="0"></iframe></center>
            </div>
        </div>
    </div>
</div>

<script src="js/ajax.js"></script>
<script src="js/showhide.js"></script>
<script src="https://use.fontawesome.com/197dfb8fc1.js"></script>

</html>