<?php
session_start();
if($_SESSION['auth']->levelUser <= 1){
    require 'error404.html';
}
else {

require '../includes/config.inc.php';
spl_autoload_register(function($class){
    require '../lib/'.$class.'.php';
});

$_GET['page'] = $_GET['page'] ?? 'home';
$_GET['forms'] = $_GET['forms'] ?? 'forms';
$_GET['actions'] = $_GET['actions'] ?? 'actions';
$cuttext = new Helper();
$dbh = DB::getInstance();

require 'includes/header.inc.php';
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Administration de E2P
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>New Comments!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>New Tasks!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>New Orders!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support Tickets!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-xs-12">
                        <?php
                           if ($_GET['page'] == 'insertPage') {
                               require 'forms/pageinsert.php';
                           }
                           elseif ($_GET['page'] == 'pages') {
                                require 'forms/pageupdate.php';
                           }
                           elseif ($_GET['page'] == 'news'){
                               require 'includes/listnews.php';
                           }
                           elseif ($_GET['forms'] == 'newsInsert') {
                               require 'forms/newsInsert.php';
                           }
                           elseif ($_GET['forms'] == 'newsupdate') {
                               require 'forms/newsupdate.php';
                           }
                           elseif ($_GET['actions'] == 'newsdelete') {
                               require 'actions/delnews.php';
                           }
                           elseif ($_GET['page'] == 'jeux') {
                               require 'includes/listjeux.php';
                           }
                           elseif ($_GET['forms'] == 'jeuxinsert') {
                                require 'forms/jeuxinsert.php';
                           }
                           elseif ($_GET['forms'] == 'jeuxupdate') {
                               require 'forms/jeuxupdate.php';
                           }
                           elseif ($_GET['actions'] == 'deljeux') {
                               require 'actions/deljeux.php';
                           }
                           elseif ($_GET['page'] == 'user') {
                               require 'includes/listuser.php';
                           }
                           elseif ($_GET['forms'] == 'userinsert') {
                               require 'forms/userinsert.php';
                           }
                           elseif ($_GET['forms'] == 'userupdate') {
                               require 'forms/userupdate.php';
                           }
                           elseif ($_GET['actions'] == 'deluser') {
                               require 'actions/deluser.php';
                           }
                        ?>
                    </div>
                </div>

                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

<?php } ?>