<?php
session_start();
if(!isset($_SESSION['u_id']))
{
    header("Location: index.php");
}
?>
<html>
<head>
<title>Dashboard</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<style>
body{
    margin-top:20px;
    background:#eee;
}

.nav.nav-pills > li > a {
    color: #777;
    border-radius: 0!important;
    margin-right: 10px;
    margin-left: 10px;
}

.nav.nav-pills > li.active > a, 
.nav.nav-pills > li.active > a:hover,
.nav.nav-pills > li.active > a:focus {
    color: #fff !important;
    background-color: #2ECC71 !important;

}

.page-people-directory .nav-contacts {
    margin-bottom: 20px;
}

.page-people-directory .nav-contacts li a {
    color: #666;
    font-weight: 400;
    font-size: 13px;
}

.page-people-directory .nav-contacts li .badge {
    background: none;
    font-weight: 500;
    color: #333;
}

.page-people-directory .nav-contacts li.active .badge {
    color: #fff;
    background: none;
}

.page-people-directory .people-group .media img {
    width: 45px;
}

.page-people-directory .people-group .list-group-item {
    -moz-transition: all 0.2s ease-out 0s;
    -webkit-transition: all 0.2s ease-out 0s;
    transition: all 0.2s ease-out 0s;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    margin: 0;
    border-width: 0;
}

.page-people-directory .people-group .media-heading {
    margin-top: 5px;
}

.page-people-directory .people-group .media-heading,
.page-people-directory .people-group .media-body {
    line-height: normal;
}

.page-people-directory .pagination-contact {
    margin-top: -3px;
}

.page-people-directory .contact-group {
    margin-top: 20px;
}

.page-people-directory .contact-group .media img {
    width: 80px;
}

.page-people-directory .contact-group .list-group-item {

}

.page-people-directory .contact-group .media-heading {
    font-size: 16px;
    font-weight: 500;
}

.page-people-directory .contact-group .media-heading small {
    margin-left: 5px;
    font-size: 13px;
    font-weight: 400;
    color: #999;
}

.page-people-directory .contact-group .list-group-item {
    border: none;
    margin-top: 10px;
}

.page-people-directory .contact-group .list-group-item:hover {
    background-color: #fcfcfc;
}

.page-people-directory .contact-group .media-content {
    margin-top: 5px;
}

.page-people-directory .contact-group .fa:before {
    font-size: 20px;
    color:gray;
}

.page-people-directory .contact-group .media-content ul {
    margin-top: 15px;
    margin-bottom: 0;
}

.page-people-directory .contact-group .media-content ul > li {
    display: inline-block;
    min-width: 200px;
    margin-bottom: 5px;
}

.page-people-directory .well {
    border-radius: 0px;
    border: none;
}

.page-people-directory .list-group-item:first-child {
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}

.page-people-directory .page-title {
    text-transform: uppercase;
}

.page-people-directory .btn-add-new-contact {
    float: right;
}

@media (max-width: 992px) { 
    .page-people-directory .btn-add-new-contact {
        float: left;
    }
}



/* ============================================================
CONTACT MODAL VIEW
============================================================ */
.page-people-directory .modal-pull-right .modal-dialog {
    max-width: 60%;
    height:50%;

.page-people-directory .modal-pull-right .modal-dialog .modal-body {
    width: 100%;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .modal-close h4 {
    padding-left: 15px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .col-md-12 {
    padding: 0px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header {
    width: 100%;
    height: 280px;
    text-align: center;
    overflow: inherit;
    background-repeat:no-repeat;
    background-size:cover;
    background-position:center;
    border-bottom: 5px solid gray;
    filter:grayscale(100%);
    -webkit-filter:grayscale(100%);
    -moz-filter:grayscale(100%);
    -webkit-transition:all 0.3s ease;
    -moz-transition:all 0.3s ease;
    -o-transition:all 0.3s ease;
    -ms-transition:all 0.3s ease;
    transition:all 0.3s ease;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header:hover {
    filter:grayscale(0%);
    -webkit-filter:grayscale(0%);
    -moz-filter:grayscale(0%);
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .profile-image-container {
    margin-top: 211px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .profile-image-container img {
    border:5px solid gray;
    border-radius: 60%;
    -moz-border-radius: 60%;
    -webkit-border-radius: 60%;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .contact-info {
    width: 100%;
    position: absolute;
    margin-top: 120px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .contact-info .contact-name {
    font-weight: bold;
    color: #fff;
    font-size: 30px;
    text-align:center;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .contact-info .contact-skills ul {
    list-style: none;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .contact-info .contact-skills ul li {
    display: block;
    width: 60px;
}

.page-people-directory .modal-pull-right .modal-dialog .dialog-close {
    width: 100%;
    position: absolute;
    margin-top: 20px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .dialog-close li {
    cursor: pointer;
    color: white;
    text-align: right;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .dialog-close li span.fa {
    font-size: 35px;
    font-weight: bold;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-header .dialog-close li span.fa:hover {
    color: gray;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-view-content .contact-view-action {
    margin-right: 15px;
    margin-top: 15px;
}

.page-people-directory .modal-pull-right .modal-dialog .modal-body .contact-view-content .contact-view-info {
    margin-top: 15px;
}

.page-people-directory .contact-info-container {
    height: 250px;
    margin-top: 80px;
    position: absolute;
    width: 100%;
}   

.page-people-directory .contact-add-content {
    padding: 40px;
}

.page-people-directory .close-right-modal {
    cursor: pointer;
}

.page-people-directory .close-right-modal:hover {
    opacity: .8;
}

.page-people-directory .basic-info-scroll {
    height: 425px;
    overflow-x: hidden;
}


@media (max-width: 800px) {
    .page-people-directory .contact-top-bar {
        text-align: left;
        width: 100%;
    }

    .page-people-directory .contact-top-bar .btn-add-new-contact {
        margin-bottom: 10px;
        display: block;
    }

    .page-people-directory .contact-top-bar .txt-search-contact {
        margin-bottom: -5px;
    }
}
#fb{
  width:500px;
  border:1px solid gray;
  border-radius:5px;
  position:relative;
  height:175px;
}
#fb p{
  font-family:sans-serif;
  margin: 0 0 0 10px;
  line-height:30px;
}

#fb-top span{
  color:#4267B2;
  float:right;
  margin-right:10px;
}
#fb-top{
  background-color:#efefef;
  height:30px;
  width:500px;
  border-radius:5px 5px 0 0;
  position:absolute;
  top:-1px;
  left:-1px;
  border:1px solid gray;
}
#fb img{
  position:absolute;
  left:10px;
  top:52.5px;
}

#info{
  position:absolute;
  left:120px;
  top:75px;
}

#info {
  color:#4267B2;
  line-height:25px;
  font-size:18px;
}

#info span{
  color:#777;
  font-size:14px;
}

#button-block{
  position:absolute;
  right:10px;
  top:85px;
}

#button-block div{
  display:inline-block;
}

#confirm{
  background-color:#4267B2;
  color:white;
  padding:7px;
  border-radius:2px;
  margin-right:10px;
  font-family:sans-serif;
}

#delete{
  color:#222;
  background-color:#bbb;
  border:1px solid #999;
  padding:6px;
  margin-right:0;
}

#button-block div:hover{
  opacity:.8;
  cursor:pointer;
}
.confirm-button {
    background-color:#24a0ed;
    border-radius:5px;
}
img {
  border-radius: 50%;
}
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background: red;
  color: white;
}
</style>
</head>
<body>

<div class="col-md-12">
    <div class="page-people-directory">
        <div class="row">
            <div class="col-md-3">
                <h5 class="page-title"><b>Contacts</b></h5>
                <ul class="nav nav-pills nav-stacked nav-contacts">
                    <li class="active">
                        <a href="#">
                            All Contacts
                            <span class="badge pull-right" id="all-contacts">
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            My Contacts
                            <span class="badge pull-right" id="my-contact-friends"></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Request Sent
                            <span class="badge pull-right" id="request-sent"></span>
                        </a>
                    </li>
                </ul>
                
                <br>
                
                <h5><b>My Friends</b></h5>
                <div class="list-group people-group">
                    
                <div id="fetch-my-friends"></div>
                    
                </div>
                <h5><b>Recent</b></h5>
                <div class="list-group people-group">
                    
                <div id="fetch-my-recent-chats"></div>
                    
                </div>
                
            </div>
            <div class="col-md-9">
                <div class="well">
                    <div class="row">
                        <div class="col-md-9">
                            <input type="text" placeholder="Search people" class="form-control" id="search">
                        </div>
                         <div class="col-md-3">
                            <div class="btn-group" style="display:block">
                              <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" style="width: 100%; border-radius: 0px; background: white;  color: gray; border-color: #ddd;"><?php echo "<img src='Avatar/{$_SESSION['u_avt']}' alt='icon' width='30px' height='30px'>";?>My Profile<span class="caret"></span></button>
                              <ul class="dropdown-menu bullet pull-right animated pulse margin-top-45">
                                <li>
                                  <div style="margin:0 20px"><label for="ex1_1"><a><i class="fa fa-cog" aria-hidden="true"></i>Settings</a></label></div>
                                </li>
                                <li>
                                  <div style="margin:0 20px"><label for="ex1_2"><a href="change_password.php"><i class="fa fa-lock" aria-hidden="true" style="justify-content:center"></i>Change Password</a></label></div>
                                </li>
                                <li>
                                  <div style="margin:0 20px"><label for="ex1_3"><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></label></div>
                                </li>
                              </ul>
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h3>All Users</h3>
                    </div>
                    <div class="col-md-6">
                         <button type="button" class="btn btn-green btn-raised btn-add-new-contact"><span class="icon-plus" data-toggle="modal" data-target="#modal-pull-right-add">
  <span class="badge" id="fetch-requests-count"></span><span>Friend Requests</span>
  </button>
                    </div>
                </div>
                
                <div class="list-group contact-group">
                <div id="fetch-all-users"></div>
                </div>
               
            </div>
        </div>
         <div class="modal modal-pull-right" data-easein="fadeInRight" data-easeout="fadeOutRight" id="modal-pull-right-add" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content animated fadeOutRight">
                    <div class="modal-body">
                        <div class="row modal-close">
                            <div class="col-md-12 padding-bottom-8 padding-top-8 bg-silver">
                                <h4 class="pull-left"><b>New Friend Requests</b></h4>
                                <ul class="list-unstyled list-inline text-right">
                                    <li class="close-right-modal"><span class="fa fa-times fa-2x" data-dismiss="modal"></span></li>
                                </ul>
                            </div>
                        </div>
                        
                                            <div id="fb">
                                            <div id="fb-top">
                                            <div id="friend-request"></div>
                                            </div>
                                            </div>
                                    </form>

                        </div>
                    </div>
                </div>
            </div>
                        
        
        </div>
    </div>
</div>
</body>
<script src="Script/main.js">
</script>
</html>