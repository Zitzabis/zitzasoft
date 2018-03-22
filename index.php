<!DOCTYPE html>
<html>
    <?php
        include_once("components/head.php");
        include_once("components/scripts.php");
    ?>
    <body>
        <?php include_once("components/navBarIcon.php"); ?>
        <main>
            <div class="pageContent centerContent"> 
                <?php include_once("components/nav.php"); ?>
                <div style="position:absolute">
                    <div style="position:relative">
                        <div class="text-center centerContent" style="position:absolute">
                            <img src="img/text.svg" onclick="logo()" class="circleSpin" style="width: 100%">
                        </div>
                        <div class="logo text-center">
                            <a href="#">
                                <img src="img/stephen.jpg" class="img-thumbnail rounded-circle logoImage" onclick="logo()" width="220">
                            </a>
                        </div>
                    </div>
                    <div class="logoCaption">
                        <h1 class="text-center">
                            <div>
                                Stephen Floyd
                            </div>
                        </h1>
                        <h3 class="text-center">
                            <div>
                                Web and Software Developer
                            </div>
                        </h3>
                        <div class="text-center">
                            <a href="https://github.com/Zitzabis"><img src="img/github.png" width="50" style="margin: 5px"></a>
                            <a href="https://www.linkedin.com/in/stephen-floyd-859666160/"><img src="img/linkedin.png" width="50" style="margin: 5px"></a>
                        </div>
                    </div>
                </div>
                <div class="text-center downArrow" style="position: fixed; bottom: 2rem;"><img src="img/down.svg" width="50"></div>
            </div>
            <?php include_once("components/granim.php"); ?>
            <div class="row regularContent">
                <div class="col" style="padding: 2rem">
                    <?php
                        if (isset($_GET["page"])) {
                            if ($_GET["page"] == "PHP" || $_GET["page"] == "java" || $_GET["page"] == "other") {
                    ?>
                                <a name="<?php echo $_GET["page"]; ?>"></a>
                    <?php
                                include_once("content/" . $_GET["page"] . ".php");
                            }
                            else {
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
                                <a href="index.php?page=PHP#PHP" class="btn btn-outline-light btn-lg btn-block">PHP</a>
                            </div>
                        </div>
                        <!-- <div class="row rowPad">
                            <div class="col">
                                <button type="button" class="btn btn-outline-light btn-lg btn-block">C++</button>
                            </div>
                        </div> -->
                        <div class="row rowPad">
                            <div class="col">
                                <a href="index.php?page=java#java" class="btn btn-outline-light btn-lg btn-block">Java</a>
                            </div>
                        </div>
                        <div class="row rowPad">
                            <div class="col">
                                <a href="index.php?page=other#other" class="btn btn-outline-light btn-lg btn-block">Other</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include_once("components/sidebar.php"); ?>
    </body>
</html>