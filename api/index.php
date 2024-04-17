<?php
  include('inc/header.php');
?>
  <div class="row">
    <div class="col-4">
    </div>
    <div class="col-4">

<form class="row g-3 mb-3">
      <div class="col-md-5">
        <label for="inputTafelvan" class="form-label">Times Table of</label>
        <input type="number" class="form-control" id="inputTafelvan">
      </div>
      <div class="col-md-5">
        <label for="inputTafeltot" class="form-label">Times Table until</label>
        <input type="number" class="form-control" id="inputTafeltot">
      </div>
      <div class="col-md-2 mt-5">
        <buttonn class="btn btn-success" onclick="showTafel()">GO</button>
      </div>
</form>
<div class="card-footer text-body-secondary">
          Made by
          <a href="https://svenvdijk.com" target="_blank">Sven V Dijk</a>
        </div>

<script src="script.js"></script>  
</body>
</html>

