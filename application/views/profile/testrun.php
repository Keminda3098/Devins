<!DOCTYPE HTML>
<html>
  <head>
              <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>profile_css/dist/css/AdminLTE.min.css">
      
    <meta charset="utf-8">
    <title>AJAX filter demo</title>
    <style>
      body {
        padding: 10px;
      }
      h1 {
          margin: 0 0 0.5em 0;
          color: #343434;
          font-weight: normal;
          font-family: 'Ultra', sans-serif;   
          font-size: 36px;
          line-height: 42px;
          text-transform: uppercase;
          text-shadow: 0 2px white, 0 3px #777;
      }
 
      h2 {
          margin: 1em 0 0.3em 0;
          color: #343434;
          font-weight: normal;
          font-size: 30px;
          line-height: 40px;
          font-family: 'Orienta', sans-serif;
      }
      #employees {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 12px;
        background: #fff;
        margin: 15px 25px 0 0;
        border-collapse: collapse;
        text-align: center;
        float: left;
        width: 700px;
      }
      #employees th {
        font-size: 14px;
        font-weight: normal;
        color: #039;
        padding: 10px 8px;
        border-bottom: 2px solid #6678b1;
      }
      #employees td {
        border-bottom: 1px solid #ccc;
        color: #669;
        padding: 8px 10px;
      }
      #employees tbody tr:hover td {
        color: #009;
      }
      #filter {
        float:left;
      }
    </style>
  </head>
  <body> 
    <h1>Temporary worker database</h1>

    <table aria-describedby="example2_info" role="grid" id="employees">
                                                                                                            <thead>
                                                                                                                <tr role="row">
                                                                                                                    <th aria-sort="ascending"  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting_asc">IP Address</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Date</th>
                                                                                                                 
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Username</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Login Time</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Logout Time</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">User Agent</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Status</th>
                                                                                                                    <th  colspan="1" rowspan="1" aria-controls="example2" tabindex="0" class="sorting">Actions</th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <tbody>
                                                                                                            </tbody>
    </table>
    <div id="filter">
      <h2>Filter options</h2>
      <div>
        <input type="checkbox" id="car" name="sessionend">
        <label for="car">Online</label>
      </div>
      <div>
        <input type="checkbox" id="language" name="nameofus">
        <label for="language">Name Admin</label>
      </div>
      <div>
        <input type="checkbox" id="nights" name="canWorkNights">
        <label for="nights">Can work nights</label>
      </div>
      <div>
        <input type="checkbox" id="student" name="isStudent">
        <label for="student">Is a student</label>
      </div>
    </div>

    <script src="http://code.jquery.com/jquery-latest.js"></script> 
    <script>
      function makeTable(data){
       var tbl_body = "";
          $.each(data, function() {
            var tbl_row = "";
            $.each(this, function(k , v) {
              tbl_row += "<td>"+v+"</td>";
            })
            tbl_body += "<tr>"+tbl_row+"</tr>";                 
          })
        return tbl_body;
      }
      function getEmployeeFilterOptions(){
        var opts = [];
        $checkboxes.each(function(){
          if(this.checked){
            opts.push(this.name);
          }
        });
        return opts;
      }
      function updateEmployees(opts){
        $.ajax({
          type: "POST",
          url: "submit.php",
          dataType : 'json',
          cache: false,
          data: {filterOpts: opts},
          success: function(records){
            $('#employees tbody').html(makeTable(records));
          }
        });
      }
      var $checkboxes = $("input:checkbox");
      $checkboxes.on("change", function(){
        var opts = getEmployeeFilterOptions();
        updateEmployees(opts);
      });
      updateEmployees();
    </script> 
    
    <?php 
  $pdo = new PDO('mysql:host=localhost;dbname=devins', 'root', '');
  $select = 'SELECT *';
  $from = ' FROM ci_sessions';
  $where = ' WHERE TRUE';
  $opts = isset($_POST['filterOpts'])? $_POST['filterOpts'] : array('');

  if (in_array("sessionend", $opts)){
    $where .= " AND session_end = 0";
  }

  if (in_array("nameofus", $opts)){
    $where .= " AND username = admin";
  }

  if (in_array("canWorkNights", $opts)){
    $where .= " AND canWorkNights = 1";
  }

  if (in_array("isStudent", $opts)){
    $where .= " AND isStudent = 1";
  }

  $sql = $select . $from . $where;
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);
  $json = json_encode($results);
 
?>
  </body> 
</html>