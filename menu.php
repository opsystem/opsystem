<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">OUTPATIENT SYSTEM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="staff.php">Administrator</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="formpat.php">Receptionist</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="histryform.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Doctor
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="lab form.php">To Labolatory</a>
                    <a class="dropdown-item" href="pharmac.php">To Pharmacy</a>
                    <a class="dropdown-item" href="burser.php">To Burser</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="burser.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Burser
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">To Doctor</a>
                    <a class="dropdown-item" href="pharmac.php">To Pharmacy</a>
                    <a class="dropdown-item" href="lab form.php">To Laboratory</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lab%20form.php">Lab technician</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="pharmac.php">Pharmacist</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</a>
        </form>
    </div>
</nav>
    </header>
