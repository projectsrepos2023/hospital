<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>
<!-- Favicon-->


<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Add Staff
                <small class="text-muted">Welcome to afyasoft</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">               
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Hekima</a></li>
                    <li class="breadcrumb-item active">Add Staff</li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    <div class="header">
                        
                    <div class="center">
                  

    <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="search()">Search</button>
    </div>
    <div id="searchResults"></div>
   

                    </div>
                    <div class="body">
                        <!-- Nav tabs -->

                        
                        <!-- <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#All">All</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#USA">USA</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#India">India</a></li>
                        </ul> -->
                            
                        <!-- Tab panes -->
                        <div class="tab-content m-t-10">
                            <div class="tab-pane table-responsive active" id="All">
                                <table class="table m-b-0 table-hover">
                                    
                                    <tbody>
                                        
                                        
                                    
                                        </tbody>
                                       </table>           
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="script.js"></script>

        <?php include APPPATH . "views/includes/footer.php"?>