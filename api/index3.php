<?php
  include('inc/header.php');
?>

  <div class="container">
    <div class="row mt-5">
      <div class="col-3"></div>
      <div class="col-6">
        <div class="card text-center">
          <div class="card-header">
            Unit Conversion Practice
          </div>
          <div class="card-body">
            <select id="inp_dim" class="form-select">
              <option value="1">1D (length)</option>
              <option value="2">2D (area)</option>
              <option value="3">3D (volume)</option>
            </select>
        
            <div class="row mt-2">
              <div class="col-5">
                <div class="input-group mb-3">
                  <input id="inp_left" type="text" class="form-control" placeholder="Problem" disabled>
                  <span id="eenh_left" class="input-group-text">mm</span>
                </div>
              </div>
              <div class="col-1">=</div>
              <div class="col-6">
                <div class="input-group mb-3">
                  <input id="inp_right" type="text" class="form-control" placeholder="Answer">
                  <span id="eenh_right" class="input-group-text">km</span>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col text-start"><a href="#" class="btn btn-primary" onclick="generateProblem()">Generate</a></div>
              <div class="col text-end"><a href="#" class="btn btn-success" onclick="checkSolution()">Check</a></div>
            </div>
      
          </div>
          <div class="card-footer text-body-secondary">
            Made by
            <a href="https://svenvdijk.com" target="_blank">Sven V Dijk</a>
          </div>
        </div>
      </div>
      <div class="col-3"></div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
    <script src="script3.js"></script>
</body>
</html>
