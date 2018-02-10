<?php header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Page Title</title>

    <meta name="description" content="">
    <meta name="author" content="humans.txt">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="dist/images/icons/favicon.png">
    <link rel="apple-touch-icon" href="dist/images/icons/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Tenor+Sans" rel="stylesheet">

    <link rel="stylesheet" href="dist/styles/main.css">

    <!-- Responsive Nav -->
    <link rel="stylesheet" href="node_modules/responsive-nav/responsive-nav.css">
    <script src="node_modules/responsive-nav/responsive-nav.js"></script>

  </head>
  <body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <section class="fs-container" style="background-color: rgb(240,240,240);">
      <header class="fs-header" style="text-align: right; padding-right: 20px;">
        <a href="http://github.com/rubenphilipp/basic-boilerplate" title="view source on GitHub">view source on GitHub</a>
      </header>
      <div class="fs-content u-aligner">
        <div class="u-aligner-item">
          <h1>Let the journey start…</h1>
          <h2>…right now</h2>
        </div>
      </div>
      <footer class="fs-footer" style="text-align: center;">
        <p>created by <i>Ruben Philipp</i></p>
      </footer>
    </section>

    <div class="container" style="margin-top: 30px;">

      <nav class="nav" id="mainNav">
        <ul>
          <li><a href="#grid">Grid</a></li>
          <li><a href="#typography">Typography</a></li>
          <li><a href="#forms">Forms</a></li>
          <li><a href="#lists">Lists</a></li>
          <li><a href="#code">Code</a></li>
          <li><a href="#tables">Tables</a></li>
        </ul>
      </nav>

      <hr />

      <h4 id="grid">Grid</h4>
      <section class="row">
        <div class="one-third column">
          one-third column
        </div>
        <div class="two-thirds column">
          two-thirds column
        </div>
      </section>

      <hr />

      <h4 id="typography">Some typography</h4>
      <p>
        Lorem <a href="http://www.rubenphilipp.com" title="Ruben Philipp">ipsum</a> dolor sit <b>amet</b>, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et <i>dolore Magna</i> aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <hr />

      <h4 id="forms">Form elements</h4>

      <form>
        <div class="row">
          <div class="six columns">
            <label for="exampleEmailInput">Your email</label>
            <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
          </div>
          <div class="six columns">
            <label for="exampleRecipientInput">Reason for contacting</label>
            <select class="u-full-width" id="exampleRecipientInput">
              <option value="Option 1">Questions</option>
              <option value="Option 2">Admiration</option>
              <option value="Option 3">Can I get your number?</option>
            </select>
          </div>
        </div>
        <label for="exampleMessage">Message</label>
        <textarea class="u-full-width" placeholder="Hi Dave …" id="exampleMessage"></textarea>
        <label class="example-send-yourself-copy">
          <input type="checkbox">
          <span class="label-body">Send a copy to yourself</span>
        </label>
        <input class="button-primary" type="submit" value="Submit">
      </form>

      <hr />

      <h4 id="lists">Lists</h4>

      <ul>
        <li>Item 1</li>
        <li>
          Item 2
          <ul>
            <li>Item 2.1</li>
            <li>Item 2.2</li>
          </ul>
        </li>
        <li>Item 3</li>
      </ul>

      <hr />

      <h4 id="code">Some code</h4>

      <pre><code>.some-class {
        background-color: red;
      }</code></pre>

      <hr />

      <h4 id="tables">Tables 7</h4>

      <table class="u-full-width">
        <thead>
          <tr>
            <th>Name</th>
            <th>Year of Birth</th>
            <th>Instrument</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ella Fitzgerald</td>
            <td>1917</td>
            <td>vocals</td>
            <td>Newport News, Virginia</td>
          </tr>
          <tr>
            <td>Thelonious Monk</td>
            <td>1917</td>
            <td>piano</td>
            <td>Rocky Mount, North Carolina</td>
          </tr>
        </tbody>
      </table>

    </div>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
        ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    
    <!-- enable Responsive Nav -->
    <script>
      var nav = responsiveNav("#mainNav", {
        animate: true,
        label: "Menu"
      });
    </script>

  </body>
</html>
