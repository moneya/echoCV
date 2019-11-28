<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Create Report</title>

      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
      <!-- Styles -->
      <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
      <link href="{{ asset('css/report.css') }}" rel="stylesheet">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <link ‎href="https://fonts.googleapis.com/css?family=europa:200,600" rel="stylesheet">

  </head>
  <body>


    <section class="onboard">
        <div class="rep">Reports</div>
        <div class="newrep">
          <img src="{{ asset('css/icons/group.png') }}" class="img-fluid" alt="Responsive image">
          <!-- <img src="{{ asset('css/icons/group.png') }}" /> -->
          <h3>Create a report</h3>
          <p>Create and send out custom reports to your contacts
            and portfolio companies</p>
          <!-- <input type="button" name="button" class="btn btn-primary" value="New Report" /> -->
          <a href="/new_report" class="btn btn-primary">New Report</a>
        </div>
      </section>


<!--
      <input type="checkbox" id="mobile-bars-check" />
      <label for="mobile-bars-check" id="mobile-bars">
          <div class="stix" id="stik1"></div>
          <div class="stix" id="stik2"></div>
          <div class="stix" id="stik3"></div>
      </label> -->
      <!-- <div class="wrapper"> -->

    @include('layouts.sidebar')
      <!-- </div> -->

    </body>
</html>
