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

  </head>
  <body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <section class="container u-full-width">
      <h1>Let the journey start…</h1>

      <h2>…right now</h2>
    </section>

    <div class="container">

      <h3>Grid</h3>
      <section class="row">
        <div class="one-third column">
          one-third column
        </div>
        <div class="two-thirds column">
          two-thirds column
        </div>
      </section>

      <hr />

      <h3>Some typography</h3>
      <p>
        Lorem <a href="http://www.rubenphilipp.com" title="Ruben Philipp">ipsum</a> dolor sit <b>amet</b>, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et <i>dolore Magna</i> aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>

      <hr />

      <h3>Form elements</h3>

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

      <h3>Lists</h3>

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

      <h3>Some code</h3>

      <pre><code>.some-class {
        background-color: red;
      }</code></pre>

      <hr />

      <h3>Tables</h3>

      <table class="u-full-width">
        <thead>
          <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Sex</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dave Gamache</td>
            <td>26</td>
            <td>Male</td>
            <td>San Francisco</td>
          </tr>
          <tr>
            <td>Dwayne Johnson</td>
            <td>42</td>
            <td>Male</td>
            <td>Hayward</td>
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
  </body>
</html>
