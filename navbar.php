<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="index.php">DEPREM.US </a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="binabildir.php">Bina Bildir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="kayipbildir.php">Kayıp Bildir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="yardimtalebi.php">Yardım Talebi</a>
          </li>
        </ul>
        <button type="button" class="btn btn-danger" onclick="link()">Ekibe katıl</button>
      </div>
    </div>
  </nav>
  <script>
    function link() {window.open("ekibekatil.php", "_self");


    }
  </script>
