<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Area of Trapezoid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Area of Trapezoid, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Area of Trapezoid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/trapezoid (2).svg" alt="trapezoid images" />
      </div>
      <br />
      <div class="name">Formula</div>
      <div class="formula">A = [ ( a + b ) / 2] x h</div>
      <div class="page-content">Please enter your employement information.</div>
      <div class="page-content-answer"></div>
      <form action="answer.php" method="GET">
        <label>a base: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="a-base-of-trapezoid" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="b-base-of-trapezoid">a base here.. (mm)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <label>b base: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="b-base-of-trapezoid" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="b-base-of-trapezoid">b base here.. (mm)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <label>height: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-trapezoid" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="height-of-trapezoid">height here.. </label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
  </div>
  </main>
  </div>
</body>

</html>