<?php
  include('inc/header.php');
?>
    <main class="container">
    

    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card text-center mt-5">
                <div class="card-header">
                    Magic Math Part 1
                </div>
                <div class="card-body">
          
                    <div class="row">
                        <div class="col"><input id="inp_A1" type="text" class="form-control text-center" value="12"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"><input id="inp_D1" type="text" class="form-control text-center" value="8"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="opl_B2" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="opl_C2" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="inp_D2" type="text" class="form-control" value="14"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="opl_B3" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="opl_C3" type="text" class="form-control text-center" disabled value="?"></div>
                        <div class="col"><input id="inp_D3" type="text" class="form-control text-center" value="6"></div>
                    </div>
                    <div class="row mt-2">
                        <div class="col"></div>
                        <div class="col"><input id="inp_B4" type="text" class="form-control text-center" value="10"></div>
                        <div class="col"><input id="inp_C4" type="text" class="form-control text-center" value="10"></div>
                        <div class="col"></div>
                    </div>
               
                  <a href="#" class="btn btn-primary mt-3 d-grid" onclick="solveProblem()">Solve</a>
                </div>
                <div class="card-footer text-body-secondary">
                  Made by
                  <a href="https://svenvdijk.com" target="_blank">Sven V Dijk</a>
                </div>
              </div>

        </div>
        <div class="col"></div>
    </div>


</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script4.js"></script>
  </body>
</html>
