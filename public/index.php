<?php
    require_once dirname(__FILE__) . "/../templates/cabecera.php";
?>
<main role="main">
   <div class="album py-5 bg-light">
    <div class="container">
        <!--
            Calcul mitjana
        -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Resultat</text>
            </svg>
            <div class="card-body">
                <p class="card-text"><strong>Calcul mitjana</strong>.Per acabar introdueixca numero negatiu</p>
              <div class="d-flex justify-content-between align-items-center">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                  <div class="form-group row">
                      <input type="text" class="form-control" id="numero" name="numero" aria-describedby="numero">
                  </div>
                    <div class="btn-group">
                      <button type="submit" name="submitMitjana" class="btn btn-sm btn-outline-secondary">Submit</button>
                        <button type="submit" name="resetMitjana" class="btn btn-sm btn-outline-secondary">Reset</button>
                    </div>
                </form>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

          <!--
           Joc diccionari
            -->
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Has encertat </text>
            </svg>
            <div class="card-body">
              <p class="card-text">Traducció. Com es diuen en anglès les següents paraules.</p>

              <div class="d-flex justify-content-between align-items-center">
                  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                  <div class="form-group">
                      <label for="question">Paraula en valencià 1</label>
                      <input type="text" class="form-control" id="question" name="question">
                  </div>
                <div class="btn-group">
                  <button type="submit" name="submitJoc" class="btn btn-sm btn-outline-secondary">Submit</button>
                  <button type="submit" name="resetJoc" class="btn btn-sm btn-outline-secondary">Reset</button>
                </div>
                  </form>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
          <!--
            Afegir paraules al diccionari
             -->

          <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                  <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" ><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>
                      <text x="50%" y="50%" fill="#eceeef" dy=".3em">La paraula _____ ha estat afegida</text>
                  </svg>
                  <div class="card-body">
                      <p class="card-text"><strong>Afegir paraules</strong> al diccionari</p>
                      <div class="d-flex justify-content-between align-items-center">
                          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
                          <div class="row">
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="Anglès" name="angles">
                              </div>
                              <div class="col">
                                  <input type="text" class="form-control" placeholder="Valencià" name="valencia">
                              </div>
                          </div>
                          <div class="btn-group">
                              <button type="submit" name="submitAfegir" class="btn btn-sm btn-outline-secondary">Submit</button>
                              <button type="submit" name="resetAfegir" class="btn btn-sm btn-outline-secondary">Reset</button>
                          </div>
                          </form>
                          <small class="text-muted">9 mins</small>
                      </div>
                  </div>
              </div>
          </div>
    </div>
  </div>
</main>

</html>
