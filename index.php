
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Date Timestamp Converter - Kalfian</title>
    <link rel="icon" href="https://www.kalfian.com/wp-content/uploads/2022/08/cropped-logo-kalfian-32x32.png" sizes="32x32"/>
    <link rel="icon" href="https://www.kalfian.com/wp-content/uploads/2022/08/cropped-logo-kalfian-192x192.png" sizes="192x192"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Timestamp Converter</h5>
    </div>

    <div class="container">
        <div class="card-deck-mb-3">
            <div class="alert alert-secondary" role="alert">
                <h4 class="alert-heading">Time Now</h4>
                <p style="margin-bottom:0">Epoch Timestamp: <span id="now-timestamp">-</span></p>
                <p style="margin-bottom:0">GMT: <span id="now-gmt">-</span></p>
                <p style="margin-bottom:0">Your Timezone: <span id="now-timezone">-</span></p>
                <p style="margin-bottom:0">Formatted Time: <span id="now-formatted">-</span></p>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="card-deck mb-3">
        <div class="card mb-6 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Timestamp to Date</h4>
          </div>
          <div class="card-body">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Timestamp" id="input-timestamp">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="btn-timestamp-convert" type="button">Convert</button>
                </div>
            </div>
            <table class="table table-hover">
                <tr>
                    <td>GMT</td>
                    <td>:</td>
                    <td><p id="gmt-timestamp">-</p></td>
                </tr>
                <tr>
                    <td>GMT Formatted</td>
                    <td>:</td>
                    <td><p id="gmt-formatted">-</p></td>
                </tr>
                <tr>
                    <td>Your timezone</td>
                    <td>:</td>
                    <td><p id="your-gmt-timestamp">-</p></td>
                </tr>
            </table>
          </div>
        </div>
        <div class="card mb-6 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Date to Timestamp</h4>
          </div>
          <div class="card-body">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="2023-01-02" id="input-date-utc">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" id="btn-date-utc-convert" type="button">Convert</button>
                </div>
            </div>
            <table class="table table-hover">
                <tr>
                    <td>Timestamp</td>
                    <td>:</td>
                    <td><p id="timestamp-utc">-</p></td>
                </tr>
                <tr>
                    <td>GMT</td>
                    <td>:</td>
                    <td><p id="gmt-epoch">-</p></td>
                </tr>
                <tr>
                    <td>Your timezone</td>
                    <td>:</td>
                    <td><p id="your-gmt-epoch">-</p></td>
                </tr>
            </table>
          </div>
        </div>
      </div>

      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; <?php echo date('Y'); ?> Kalfian</small>
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        var now = new Date();
        var formattedNow = now.getFullYear() + "-" +
                            ("0"+(now.getMonth()+1)).slice(-2) + "-" +
                            ("0" + now.getDate()).slice(-2) +  " " + 
                            ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2) + ":" + ("0" + now.getSeconds()).slice(-2);
        $('#input-date-utc').val(formattedNow);
        $("#input-timestamp").val(Math.floor(now.getTime() / 1000));

        setInterval(function() {
            var now = new Date();
            var timestamp = Math.floor(now.getTime() / 1000);
            var gmt = now.toUTCString();
            var timezone = now.toLocaleString();
            var formatted = ("0" + now.getDate()).slice(-2) + "-" + ("0"+(now.getMonth()+1)).slice(-2) + "-" + now.getFullYear() + " " + ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2) + ":" + ("0" + now.getSeconds()).slice(-2);

            $('#now-formatted').html(formatted);
            $('#now-timestamp').html(timestamp);
            $('#now-gmt').html(gmt);
            $('#now-timezone').html(timezone);
        }, 1000);

        $("#btn-timestamp-convert").on('click', function() {
            var timestamp = $('#input-timestamp').val();
            var date = new Date(timestamp * 1000);
            var gmt = date.toUTCString();
            var timezone = date.toString();

            var utcTime = new Date(date.getTime() + date.getTimezoneOffset() * 60000);
            var formatted = utcTime.getFullYear() + "-" +
                            ("0"+(utcTime.getMonth()+1)).slice(-2) + "-" +
                            ("0" + utcTime.getDate()).slice(-2) +  " " + 
                            ("0" + utcTime.getHours()).slice(-2) + ":" + ("0" + utcTime.getMinutes()).slice(-2) + ":" + ("0" + utcTime.getSeconds()).slice(-2);;

            $('#gmt-timestamp').html(gmt);
            $('#gmt-formatted').html(formatted);
            $('#your-gmt-timestamp').html(timezone);
        });

        $("#btn-date-utc-convert").on('click', function() {

            var dateInput = $('#input-date-utc').val();
            dateStr = dateInput.split(' ').join('T')+'Z';
            var date = new Date(dateStr);
            var gmt = date.toUTCString();
            var timezone = date.toString();
            var timestamp = Math.floor(date.getTime() / 1000);
            $('#timestamp-utc').html(timestamp);
            $('#gmt-epoch').html(gmt);
            $('#your-gmt-epoch').html(timezone);
        });

    </script>
  </body>
</html>
