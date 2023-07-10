<!DOCTYPE html>
<html>
<head>
    <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
        <!-- MDB -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet"/>

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
        
        <style>
			/* Hide scrollbar for Chrome, Safari and Opera */
            body::-webkit-scrollbar {
                display: none;
            }

            /* Hide scrollbar for IE, Edge and Firefox */
            body {
                -ms-overflow-style: none;
                /* IE and Edge */
                scrollbar-width: none;
                /* Firefox */
            }
        </style>
    <title>Proposals Features</title>
</head>
<body style="background-color: #eee;">
    <section style="background-color: #eee; padding-top: 20px;">    
  <div class="container py-5">
      
    <!--nav bar-->
    <br>
      <div class="row">
          <div class="col-lg-1"></div>    
    <div class="col-lg-10">
        <nav class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li>Home</li>
            
            <li>&nbsp;&nbsp; > &nbsp;&nbsp;</li>
            <li>Proposals</li>
            
          </ol>
        </nav>
      </div>
          <div class="col-lg-1"></div>
    </div>
    
    
    <!--user Information-->
        <div class="row">
            
        
                
            <div class="col-lg-1"></div>    
    <div class="col-lg-10">
        
        <!--main information-->
        <div class="card mb-8">
          <div class="card-body">
            <div class="row">
            
              <div class="col-sm-4"><p class="text-muted mb-0"><?php echo "Name :" ?></p></div>
              <div class="col-sm-4"><p class="text-muted mb-0"><?php echo "Submit Date :" ?></p></div>
              <div class="col-sm-2"><p class="text-muted mb-0"><?php echo "Status :" ?></p></div>
              <div class="col-sm-2"><p class="text-muted mb-0"><?php echo "" ?></p><a href="proposal.php" class="btn btn-primary">Review</a></div>
              
          </div>
        </div>

        
    </div>
            <div class="col-lg-1"></div>    

        
    
  </div>
  </div>
  </div>
</section>
</body>
</html>
