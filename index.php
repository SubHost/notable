<?php
require('physician.class.php');
$physician = new Physician();

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>notable</title>
  </head>
  <body>

    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="p-3">
            <div class="sidebar-header">
                <h3 class="text-primary">notable</h3>
                <br>
            </div>

            <ul class="list-unstyled components">
                <p class="font-weight-bold text-dark">PHYSICIANS</p>
                <!-- the made up url is to show the GET request. The request.php file would be where the GEt request is called from another server-->
                <!-- <?php file_get_contents('https://www.apihit.com/remoterequest.php?request=physicians'); ?>  -->
                <?= $physician->getNameList(); ?>
            </ul>
            <button class="btn btn-primary">Logout</button>
        </nav>
        <!-- Page Content -->
        <div id="content">

          <?php
           ?>

      <?php
      if(isset($_GET['request'], $_GET['id']) && $_GET['request'] === 'clients'){

        // display physician content header
        $physician->physicianHeader($_GET['id']);

       ?>
          <table class="table">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Time</th>
                <th scope="col">Kind</th>
              </tr>
            </thead>
            <tbody>
              <?php
                  require('client.class.php');
                  $clients = new Client();
                  $clients->getClient($_GET['id']);
               ?>
            </tbody>
          </table>

          <?php
        }else{
          print 'Click Physician name to view scheduled clients.';
        } ?>

        </div>
    </div>

    <style>

      #content{
        margin-left: 300px;
        margin-top: 50px
      }

      .wrapper {
          display: flex;
          width: 100%;
      }

      #sidebar {
          width: 250px;
          position: fixed;
          top: 0;
          left: 0;
          height: 100vh;
          z-index: 999;
          background: #efefef;
          color: blue;
          transition: all 0.3s;
      }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </body>
</html>
