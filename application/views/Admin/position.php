<?php include APPPATH . "views/includes/header.php"?>
<?php include APPPATH . "views/includes/sidebar.php"?>

<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-5 col-sm-12">
                <h2>Add Positions
                <small class="text-muted">Welcome to Afya system</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-7 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Afyasoft</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">settings</a></li>
                    <li class="breadcrumb-item active">Register Positions</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card patients-list">
                    
                    <div class="body">
                        <!-- Nav tabs -->
                        
                    <div class="body">
                    <button type="button" class="btn btn-primary btn-round btn-success waves-effect" data-toggle="modal" data-target="#addevent"">Add Position</button>
                        <button class="btn btn-simple btn-sm btn-primary btn-round d-xl-none m-t-0 float-right" data-toggle="collapse" data-target="#open-events" aria-expanded="false" aria-controls="collapseExample"><i class="zmdi zmdi-chevron-down"></i></button>                        
    
                </div>
                <div class="header">
                        <h2><strong>Positions</strong> List</h2>
                        
                    </div>
                        <!-- Tab panes -->
                        <div class="tab-content m-t-10">
                            <div class="tab-pane table-responsive active" id="All">
                                <table class="table m-b-0 table-hover">
                                    <thead>
                                        <tr>                                       
                                            
                                            <th>S/no</th>
                                            <th>Position Name</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        <tr>
                                            
                                            <td><span class="list-name">01</span></td>
                                            <td>Doctor</td>
                                            <td>
                                            <a href="#" class="delete-link">Delete</a>
                                            <a href="#" class="view-link"><i class="zmdi zmdi-eye"></i></a>

                                            </td>
                                            
                                           
                                        
                                        </tr>
                                        
                                    </tbody>
                                </table>                            
                            </div>
                            
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
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Position</h4>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control" placeholder="Enter Position name">
                    </div>
                </div>
                      
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-round waves-effect">Add</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>

<?php include APPPATH . "views/includes/footer.php"?>