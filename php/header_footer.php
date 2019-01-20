<?php
/**
 * Created by PhpStorm.
 * User: abdul basit
 * Date: 20/01/2019
 * Time: 6:34 PM
 */

function getHeader(){
    echo '
<header class="container col-12">
    <div class="text-center">
        <a href="../index.php">
            <img src="../images/logo2.png" height="100" alt="Company logo" class="nav-link" id="companyName">
        </a>
    </div>
</header>

<nav class="navbar navbar-expand-sm col-12">
    <ul class="navbar-nav col-12">

        <a class="nav-item col-2 text-center" href="../index.php">
            <li>
                <div class="block">
                    <i class="fas fa-home d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">Home</p>
                </div>
            </li>
        </a>

        <a href="#" class="nav-item" data-toggle="dropdown">
            <li class="dropdown col-2 text-center">
                <div class="block">
                    <i class="fas fa-list-ul d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">Category</p>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="electronics.php">
                            <div class="inlineBlock"><i class="fas fa-plug"></i></div>
                            <div class="inlineBlock dItem">Electronics</div>
                        </a>
                        <a class="dropdown-item" href="mobile.php">
                            <div class="inlineBlock"><i class="fas fa-mobile-alt"></i></div>
                            <div class="inlineBlock dItem">Mobiles</div>
                        </a>
                        <a class="dropdown-item" href="furniture.php">
                            <div class="inlineBlock"><i class="fas fa-chair"></i></div>
                            <div class="inlineBlock dItem">Furniture</div>
                        </a>
                    </div>
                </div>
            </li>
        </a>

        <a class="nav-item col-2 text-center" href="about.php">
            <li>
                <div class="block">
                    <i class="fas fa-users d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">About</p>
                </div>
            </li>
        </a>

        <a class="nav-item col-2 text-center" href="contact.php">
            <li>
                <div class="block">
                    <i class="fas fa-phone d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">Contact</p>
                </div>
            </li>
        </a>

        <a class="nav-item col-2  text-center" href="login.php">
            <li>
                <div class="block">
                    <i class="fas fa-sign-in-alt d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">Login</p>
                </div>
            </li>
        </a>

        <a class="nav-item col-2  text-center" href="register.php">
            <li>
                <div class="block">
                    <i class="fas fa-user-plus d-none d-sm-inline-block"></i>
                </div>
                <div class="block">
                    <p class="nav-link">Register</p>
                </div>
            </li>
        </a>
    </ul>
</nav>';
}

function getFooter(){
    echo'
<footer id="foot" class="col-12">
    <div class="d-block d-sm-inline-block col-4">
        <p>Top Categories</p>
        <ul>
            <li>
                <div class="inlineBlock"><i class="fas fa-chair d-none d-sm-inline-block"></i></div>
                <div class="inlineBlock"><a href="#">Furniture</a></div>
            </li>
            <li>
                <div class="inlineBlock"><i class="fas fa-plug d-none d-sm-inline-block"></i></div>
                <div class="inlineBlock"><a href="#">Electronics</a></div>
            </li>
            <li>
                <div class="inlineBlock"><i class="fas fa-mobile-alt d-none d-sm-inline-block"></i></div>
                <div class="inlineBlock"><a href="#">Mobiles</a></div>
            </li>
        </ul>
    </div>

    <div class="d-block d-sm-inline-block col-5">
        <p>Contact</p>
        <ul>
            <li>
                1 - Khayaban-e-Jinnah Road,<br> Johar Town, Lahore.
            </li>
            <li>
                <div class="inlineBlock"><i class="fas fa-phone d-none d-sm-inline-block"></i></div>
                <div class="inlineBlock">0324-4428329</div>
            </li>
            <li>
                <div class="inlineBlock"><i class="fas fa-envelope-square d-none d-sm-inline-block"></i></div>
                <div class="inlineBlock">devilHub@hotmail.com</div>
            </li>
        </ul>
    </div>
    <div id="rights">
        <p style="text-align: center">Copyright © 2019. Devil Hub.com. All Rights Reserved</p>
    </div>
</footer>';
}

?>