</div>
</div>
</div>
</div>

  <footer>
  <div class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="single-widget">
                    <h2>Tasks</h2>
                    <ul class="navbar-nav l">
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="ex1.php">Exercise 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active footer-link" aria-current="page" href="exercise2.php">Exercise 2</a>
            </li>
          </ul>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="single-widget">
                    <h2>About Cecile</h2>
                    <ul class="navbar-nav l">
            <li class="nav-item">
              <a class="nav-link active footer-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active footer-link" href="#">Work with us</a>
            </li>
          </ul>
            </div>
            </div>
            <div class="col-sm-3">
                <div class="single-widget">
                    <h2>Information</h2>
                    <ul class="navbar-nav l">
            <li class="nav-item">
              <a class="nav-link active footer-link" href="#">Help</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active footer-link" href="#">Track order</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active footer-link" href="#">Delivery and Returns</a>
            </li>
          </ul>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="container">
        <p class="pull-left">Copyright © 2023 Cecile. All rights reserved.</p>
        <?php
            $file = $_SERVER["SCRIPT_NAME"];
            $break = Explode('/', $file);
            $pfile = $break[count($break) - 1];
            echo "This page was last modified on " . date("F d Y H:i:s", filemtime($pfile));
            ?>
    </div>
</div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>