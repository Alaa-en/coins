@extends('front.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
   <div class="container">
     <div class="row">
   
        <div class="col-12">
                        <div class="card">
                            <div class="row" style=" margin:20px;">
                                <div class="col-lg-12" style="text-align:center;" >
                                   <img src="{{asset('assets/images/users/1.jpg') }}" height="70px" width="70px" alt="image">

                                </div>
                            </div>
                            <div class="row" style=" margin:20px;">
                                <div class="col-lg-12" style="text-align:center;" >
                                    <h1 style="font-weight:bold;">Promote your coin</h1>
                                    <p style="font-weight:bold;"> Get the visibility you need.</p>

                                </div>
                            </div>
                            
                            <div style=" margin:20px; border:1px solid lightgray; padding:5px;" class="row">
                                <div class="col-lg-4" style="text-align:center;">
                                    <h3 style="font-weight:bold">Average daily users </h3>
                                    <p style="font-weight:bold"> 100 000</p>
                                </div>
                                <div class="col-lg-4" style="text-align:center;">
                                    <h3 style="font-weight:bold"> Twitter followers</h3>
                                    <p style="font-weight:bold"> 36 000</p>

                                </div>
                                <div class="col-lg-4" style="text-align:center;">
                                    <h3 style="font-weight:bold">Newsletter subscribers</h3>
                                    <p style="font-weight:bold"> 7 000</p>

                                </div>
                              
                            </div>
                            <div style=" margin:20px; border:1px solid lightgray; padding:5px;" class="row">
                                <div class="col-lg-12" style="text-align:center;">
                                    <h3 style="font-weight:bold">Official Alexa rank by Amazon</h3>
                                    <a target="plank" style="font-weight:bold" href="https://www.alexa.com/siteinfo/coinhunt.cc">coinhunt.cc Competitive Analysis, Marketing Mix and Traffic - Alexa</a>
                                </div> 
                            </div>
                            <div class="row">
                                <div class="col-lg-12" style="text-align:center;">
                                    <h3 style="font-weight:bold">To promote your coin</h3>
                                    <a style="font-weight:bold" href="">Mail to: contact@coinhunt.cc</a>
                                    <p style="font-weight:bold"> Do never pay anyone for a promotion on our platform, unless you have received a confirmation email from this address.</p>
                                </div> 
                            </div>
   
                </div>
            </div>
    </div>
            <div class="row"  style="text-align:center;">
                <div class="col-md-12"  >
                    <ul style="list-style-type: none;">
                        <li style="display: inline;margin-right:10px;font-weight:bold">Disclaimer</li>
                        <li style="display: inline;margin-right:10px;font-weight:bold">Privacy Policy</li>
                        <li style="display: inline;margin-right:10px;font-weight:bold">Terms & conditions</li>
                        <li style="display: inline;margin-right:10px;font-weight:bold">Coins Index</li>
                    </ul>
            
                </div>
            
            
               <div class="row" style="text-align:center;">
                   <div class="col-md-12"><i class="fa fa-twitter"></i> <i class="fa fa-telegram"></i></div>
            
               </div>
        


       
    </div>
   
    
   </div> 
   
</div>  

         
             
</body>
</html>
@endsection