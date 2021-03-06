<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Metrics</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- Styles -->
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/report.css') }}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link ‎href="https://fonts.googleapis.com/css?family=europa:200600" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <style>

      .btn-excel {
        margin-top: -0.5rem;
        font-size: 0.9rem;
        color: #666;
      }

      .btn-excel:focus, .btn-default:focus {
        box-shadow: 0 0 0 0 rgba(0,0,0,0)!important;
      }

      thead {
        background: #fff;
      }

      td {
        padding: 0;
        border: 1px solid #dee2e6!important;
      }

      input {
        border: 0;
      }

      tr {
        line-height: 1rem;
      }
    </style>
  </head>
  <body>

      <main class="wholeContent">
        <div class="">
          @include('inc.messages')
        </div>
        <section class="header">
          <div class="rep">Metrics</div>
        </section>
        <form class="searchReport" action="" method="post">
          @csrf
          <input type="text" class="form-control form-group" placeholder="Search for metric">
          <button type="button" name="button" style="border:none"><img src="{{ asset('css/icons/grsearch.svg') }}" /></button>
        </form>
        <section class="newMetr">
          <!-- <ul class="nav nav-tabs nav-lg newData" role="tablist">
            <li class="active" role="presentation">
              <a href="/add_metrics" class="">+ New data source</a>
            </li>
          </ul> -->
          <div class="newData">
            <a href="/add_metrics" class="">+ New data source</a>
            <!-- <button type="button" class="btn btn-excel" data-toggle="modal" data-target="#excelModal" id="open">+ Import Excel</button> -->
          </div><hr>
          <label for="">Custom</label>
          <div class="formMett custom">
              User provided metric
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" id="open">Create</button>
          </div>
          <label for="">Link</label>
          <div class="formG">
            <div class="formMett ">
              <img src="{{ asset('css/icons/sheet.svg') }}" />
              Google Sheets
              <a href="https://docs.google.com/spreadsheets/d/16u3yZw1eoOy9COCwcOmXm0536liRLjTj1Fbw_eXdjj0/"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/xero.svg') }}" />
              Xero
              <a href="https://login.xero.com/identity/user/login"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/airtable.svg') }}" />
              Airtable
              <a href="https://airtable.com/login"class="btn btn-default">Link</a>
            </div>
            <div class="formMett ">
              <img src="{{ asset('css/icons/trello.svg') }}" />
              Trello
              <a href="https://trello.com/en/login"class="btn btn-default">Link</a>
            </div>
          </div>
        </section>

      </main>

      <!-- Modal to create new metrics -->
          <div class="modal" tabindex="-1" role="dialog" id="myModal" aria-labelledby="details-l" aria-hidden="true">
            <div class="modal-dialog" role="document">

              <form method="post" action="{{ route('import') }}" name="importform" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                  <div class="modal-header modalHeader">
                    <h5 class="modal-title">Create Metric</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row mr-2">
                        <div class="form-group col-md-12 ml-2">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" name="name" required>
                        </div>
                      </div>
                      <div class="row mr-2">
                        <div class="form-group col-md-12 ml-2">
                          <label for="desc">Description</label>
                          <!-- <input type="text" class="form-control" name="desc" required> -->
                          <textarea class="form-control" name="desc" rows="3" cols="60" required></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 ml-2 mb-2 d-flex btnModalme">
                          <label for="">Upload Source:</label>
                          <!-- <input type="file" class="ml-4" name="tags"> -->
                          <input type="file" name="file" id="myFile" class="ml-4" style="width: 85px;" onchange="this.style.width = '100%';" required/>
                        </div>
                      </div>
                      <div class="row mt-1">
                        <div class="d-flex col-md-12 mr-2 ml-2 mt-3 btnModalme">
                          <div class="mt-2 mr-4">Unit:</div>
                          <p class="mt-2">Percent</p> <input type="radio" name="percent" value="%" class="btn btnModalmetr mt-3 ml-2" />
                          <p class="mt-2 ml-3">Number</p> <input type="radio" name="numb" value="Number" class="btn btnModalmetr mt-3 ml-2" />
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="modal-footer modalFooter">
                    <button type="submit" class="btn btn-save" style="background:#ddd; float:left!important">Save</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>


      <div class="wrapper">
        @include('layouts.sidebar')
      </div>

      <script type="text/javascript">
          // $("#contain").on('click-row.bs.table', function (e, row, $element) {
          //   window.location = $element.data('href');
          // });
          jQuery(document).ready(function($) {
              $('*[data-href]').on('click', function() {
                  window.location = $(this).data("href");
              });
          });
      </script>
  </body>
</html>
