<?php
    if (isset($_SESSION['us_firstname']) && $_SESSION['us_firstname'] != "")
    {
?> 

<li class="nav-item me-3 me-lg-0">
    <a class="nav-link" href="/user/profile">Welcome back "<?php echo $_SESSION['us_firstname'] ?>"</a>
    <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="/User/logout">
        <i class="fas fa-sign-out-alt"></i>
        </a>
    </li>
</li>

<?php 
    }
    else
    {
?> 

<li class="nav-item me-3 me-lg-0">
    <a class="nav-link" href="/user/login">Login</a>
</li>
<li class="nav-item me-3 me-lg-0">
    <a class="nav-link" href="/user/signup">Register</a>
</li>


<?php 
    }
?> 