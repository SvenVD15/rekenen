<?php
include ('inc/header.php');
?>

<div class="row">
  <div class="col-4">
  </div>
  <div class="col-4">

    <form class="row g-3 mb-3">
      <div class="col-md-5">
        <label for="inputTafelvan" class="form-label">Table of</label>
        <input type="number" class="form-control" id="inputTafelvan">
      </div>
      <div class="col-md-5">
        <label for="inputTafeltot" class="form-label">Table until</label>
        <input type="number" class="form-control" id="inputTafeltot" value="10">
      </div>
      <div class="col-md-2 mt-5">
        <button type="button" class="btn btn-primary" onclick="showSom()">GO</button>
      </div>
    </form>

    <div class="card text-center">
      <div id="tafelheader" class="card-header">
        Practice Times Tables
      </div>
      <div class="card-body">
        <form class="row g-3 mb-3">
          <div class="input-group mb-3">
            <input type="text" id="inputSom" class="form-control" placeholder="Problem" disabled>
            <span class="input-group-text">=</span>
            <input type="text" id="inputAntwoord" class="form-control" placeholder="Answer">
          </div>
        </form>
        <div class="d-grid gap-2">
          <button class="btn btn-success" onclick="checkAntwoord()">CHECK ANSWER</button>
        </div>
      </div>
      <div class="card-footer text-body-secondary">
        Made by
        <a href="https://svenvdijk.com" target="_blank">Sven V Dijk</a>
      </div>
    </div>
  </div>
  <div class="col-4">
  </div>

  <script>
    let antwberekend = 0

    function showSom() {

      let tafelvan = document.getElementById("inputTafelvan").value
      let tafeltot = document.getElementById("inputTafeltot").value
      let vermfactor = Math.floor(Math.random() * tafeltot) + 1
      let som = vermfactor + " x " + tafelvan
      document.getElementById("inputSom").value = som
      antwberekend = vermfactor * tafelvan
    }

    function checkAntwoord() {
      let antwgebr = document.getElementById("inputAntwoord").value
      if (antwgebr == antwberekend)

        document.getElementById("inputAntwoord").classList.add("is-valid")
      else

        document.getElementById("inputAntwoord").classList.add("is-invalid")

    }
  </script>

  </body>

  </html>