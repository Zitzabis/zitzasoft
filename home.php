<!DOCTYPE html>
<html>
    <?php
        include_once("components/head.php");
        include_once("components/scripts.php");
    ?>
    <body>
        <?php include_once("components/navBarIcon.php"); ?>
        <main>
            <div class="pageContent regularContent"> 
                    <?php include_once("components/nav.php"); ?>
                    <div class="row">
                        <div class="col" style="padding: 2rem">
                            <?php 
                                if (isset($_GET["page"])) {
                                    try {
                                        include_once("content/" . $_GET["page"] . ".php");
                                    }
                                    catch(Exception $e) {
                                        include_once("content/PHP.php");
                                    }
                                }
                                else {
                                    include_once("content/PHP.php");
                                }
                            ?>
                        </div>
                        <div class="col-lg-3" style="padding: 2rem">
                            <div class="panel">
                                <div class="row">
                                    <div class="col text-center">
                                        <h3>Languages</h3>
                                    </div>
                                </div>
                                <div class="row rowPad">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-light btn-lg btn-block">PHP</button>
                                    </div>
                                </div>
                                <div class="row rowPad">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-light btn-lg btn-block">C++</button>
                                    </div>
                                </div>
                                <div class="row rowPad">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-light btn-lg btn-block">Java</button>
                                    </div>
                                </div>
                                <div class="row rowPad">
                                    <div class="col">
                                        <button type="button" class="btn btn-outline-light btn-lg btn-block">Other</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once("components/sidebar.php"); ?>
    </body>
</html>