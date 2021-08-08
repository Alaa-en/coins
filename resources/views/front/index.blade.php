@extends('front.layouts.app')
            @section('content')
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard 1</h3>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Apps</li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>
                    </div>
                </div>
              
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Table Hover</h4>
                            <h6 class="card-subtitle">Add class <code>.table-hover</code></h6>
                    <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Products</th>
                                                <th>Popularity</th>
                                                <th>Price</th>
                                                <th>action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Milk Powder</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,-3,-2,-4,-5,-4,-3,-2,-5,-1</span> </td>
                                                <td><span class="text-danger text-semibold"> 28.76%</span> </td>
                                                <td><button   type="button" class="btn waves-effect waves-light btn-outline-success" ><i class="fa fa-level-up" aria-hidden="true"></i>Success</button> </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Air Conditioner</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,-1,-1,-2,-3,-1,-2,-3,-1,-2</span> </td>
                                                <td><span class="text-warning text-semibold"> 8.55%</span> </td>
                                                <td><button type="button" class="btn waves-effect waves-light btn-outline-success"><i class="fa fa-level-up" aria-hidden="true"></i> Success</button> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>RC Cars</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,3,6,1,2,4,6,3,2,1</span> </td>
                                                <td><span class="text-success text-semibold"> 58.56%</span> </td>
                                                <td><button type="button" class="btn waves-effect waves-light btn-outline-success"> <i class="fa fa-level-up" aria-hidden="true"></i>Success</button> </td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Down Coat</td>
                                                <td><span class="peity-line" data-width="120" data-peity='{ "fill": ["#009efb"], "stroke":["#009efb"]}' data-height="40">0,3,6,4,5,4,7,3,4,2</span> </td>
                                                <td><span class="text-info text-semibold"> 35.76%</span> </td>
                                                <td><button type="button" class="btn waves-effect waves-light btn-outline-success"> <i class="fa fa-level-up" aria-hidden="true"></i>Success</button> </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                   


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Striped Table</h4>
                            <h6 class="card-subtitle">Add<code>.table-striped</code>for borders on all sides of the table and cells.</h6>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th>Deadline</th>
                                            <th class="text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Lunar probe project</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-danger" style="width: 35% ;height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>May 15, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dream successful plan</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-warning" style="width: 50%; height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>July 1, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Office automatization</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-success" style="width: 100%; height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>Apr 12, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>The sun climbing plan</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-primary" style="width: 70%; height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>Aug 9, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Open strategy</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-info" style="width: 85%; height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>Apr 2, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tantas earum numeris</td>
                                            <td>
                                                <div class="progress progress-xs margin-vertical-10 ">
                                                    <div class="progress-bar bg-inverse" style="width: 50%; height:6px;"></div>
                                                </div>
                                            </td>
                                            <td>July 11, 2015</td>
                                            <td class="text-nowrap">
                                                <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
                
               
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
    
            </div>
            @endsection
           