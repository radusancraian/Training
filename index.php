<?php
include('functions.php');
?>
<!DOCTYPE html>
<html>
<head>

    <title>Atom.Tracker</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--  FontAwesome -->
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css"
</head>

<body>
<div class="container-fluid">
    <header class="row">

        <div class="col-xs-6">
            <a href="#">Enter Restore Mode</a>
        </div>

        <div class="col-xs-6 text-right">
            Total Time:
        </div>
    </header>

    <div class="row">

        <form id="form-new">
            <div class="col-xs-10">
                <input id="task" name="task" class="form-control" placeholder="Enter new task name...">
            </div>

            <div class="col-xs-2">
                <button type="submit" class="btn btn-block btn-success"><?php echo i('play'); ?> </button>
            </div>
        </form>
    </div>
    <hr>
    <table class="table table-bordered">
        <thead>

        <tr>
            <th>Task</th>
            <th>Start</th>
            <th>End</th>
            <th>Time</th>
            <th colspan="2">Controls</th>

        </tr>

        </thead>
        <tbody id="log"></tbody>
  </table>

<!-- JQuery -->
    <!-- Latest compiled and minified JavaScript -->
  <script type="text/javascript" src="jquery-3.1.0.min.js"></script>

        <script src="atom.tracker.js"></script>

</body>
</html>
