<!-- Articles Page Content -->
<div class="container">
    <h1 class="mt-4 mb-3">Articles</h1>

    <!-- mwilliams:  breadcrumb navigation -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active">Articles</li>            
    </ol>
    <!-- end breadcrumb -->
<?php
    //1. get the configuration file (holds the connection info)
      require './includes/config.php';

    //2.connect to the database
      require MYSQL;

    //3. Get the total number of records in categories table
      $sql = 'SELECT COUNT(*) FROM categories';
      $stmt = $dbc->query($sql); //execute the query
      
    //4. get first column from first row in resultset
      $cnt = $stmt->fetchColumn();//get one column result
        
    //5.  Display total number of categories
      echo "<h2>Total Categories: $cnt</h2>";
      
    //6. Execute the query
      $stmt = $dbc->query($q);
      
    //7. Fetch all the records from the statement above
      $article_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
      
    //8. Loop and display the article pages in html table
    //start table
                  echo "<table class='table table-striped table-bordered'>
                    <thead class='thead-dark'>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>";
                  
            foreach($article_list as $row){
                echo "<tr>
                      <td>{$row['id']}</td>
                      <td>{$row['title']}</td>
                      <td>{$row['description']}</td>
                  </tr>";
            }
                  
    //end the table
     echo "</tbody></table>"
      
?>
</div>


