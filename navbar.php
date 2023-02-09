
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-1 mb-3 sticky-sm-top rounded">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php"><img src="img/depremus.png" alt=""></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="haberakisi.php">Haber Akışı</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="linkler.php">Faydalı Linkler</a>
          </li>

        </ul>
        <button type="button" class="btn btn-danger" onclick="link()">Deprem.io</button>
      </div>
    </div>
  </nav>
  <script>
    function link() {window.open("http://deprem.io", "_self");


    }
  </script>
