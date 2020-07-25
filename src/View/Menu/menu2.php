<nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top">
    <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php?page=list-class">Home</a>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="navbar-nav ml-auto" method="post" action="index.php?page=search-student">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ml-auto  nav-item dropdown">

            <li>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><i class="material-icons icon">
                        person
                    </i><?php ob_start(); echo $_SESSION['userLogin']['username'] ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="src/View/login/checklogin.php">log out </a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php?page=list-class" class="nav-link px-2">
                        <i class="material-icons icon">
                            dashboard
                        </i>
                        <span class="text">Class Room</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=list-student" class="nav-link px-2">
                        <i class="material-icons icon">
                            person
                        </i>
                        <span class="text">Student</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=list-subject" class="nav-link px-2">
                        <i class="material-icons icon"> insert_chart </i
                        ><span class="text">Charts</span></a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=list-score" class="nav-link px-2">
                        <i class="material-icons icon">
                            settings
                        </i>
                        <span class="text">Settings</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?page=view-score" class="nav-link px-2">
                        <i class="material-icons icon">
                            pages
                        </i>
                        <span class="text">Pages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2">
                        <i class="material-icons icon">
                            computer
                        </i>
                        <span class="text">Demo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link px-2 sideMenuToggler">
                        <i class="material-icons icon expandView ">
                            view_list
                        </i>
                        <span class="text">Resize</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


