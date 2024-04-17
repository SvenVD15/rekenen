<?php
    include('inc/header.php');
?>

<style>
  body{
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16px;
  }
  li:nth-child(n):nth-child(-n+9) {
    border-top-width: 4px;
  }
  li:nth-child(n+73):nth-child(-n+81) {
    border-bottom-width: 4px;
  }
  li:nth-child(3n) {
    border-right-width: 4px;
  }
  li:nth-child(9n+1) {
    border-left-width: 4px;
  }
  li:nth-child(n+19):nth-child(-n+27) {
    border-bottom-width: 4px;
  }
  li:nth-child(n+46):nth-child(-n+54) {
    border-bottom-width: 4px;
  }
  
  
  .container ul {
    display: grid;
    grid-template-columns: repeat(9, 5vw);
    grid-template-rows: repeat(9, 5vw);
    justify-content: center;
    align-content: center;
    grid-gap: 0rem;
    list-style: none;
    margin: 0 0 2vw;
    padding: 0;
    font-size: calc(2vw + 10px);

  }
  .container li {
    margin: 0;
    padding: 0;
    text-align: center;
    border: 1px solid black;
    display: flex;
    align-items: center;
    justify-content: center;
    span {
      margin-top: 0.4rem;
    }  
  }
  
  .container .note {
    background: #ddd;
    font-family: monospace;
    padding: 2em 5em;
    font-size: 120%;
    order: -1;
  }
  @supports (display:grid) {
    .note {display:none;}
  }
  .container .form-control {
    font-size: 52px;
  }

  .discount-container {
    padding: 20px;
  }
  .arrow {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 24px;
  }

  .col{
    padding: 20px;
    outline: 1px solid rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    text-align: left;
  }

  .is-invalid {
    border-color: #dc3545; /* Bootstrap's default invalid border color */
    background-image: none;
  }
  
</style>
    <section class="container mt-5">
        <div class="row">
          <div class="col-10">
                <main id="sudoku">
                </main>  
            </div>
            <div class="col-2">
                <button class="btn btn-success" onclick="generateSudoku()">Generate Sudoku</button>
                <table class="table mt-5">
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(1)">1</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(2)">2</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(3)">3</button></td>
                  </tr>
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(4)">4</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(5)">5</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(6)">6</button></td>
                  </tr>
                  <tr>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(7)">7</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(8)">8</button></td>
                    <td><button class="btn btn-light" style="font-size: 42px" onclick="selectNumber(9)">9</button></td>
                  </tr>
                </table>
                <div id="0" style="color: white;"></div>
              </div>
        </div>
        
    </section>
    <div class="card-footer text-body-secondary">
                  Made by
                  <a href="https://svenvdijk.com" target="_blank">Sven V Dijk</a>
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="script5.js"></script>
  </body>
</html>
