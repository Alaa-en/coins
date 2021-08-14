@extends('front.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ::placeholder{
            font-weight: bold;
        }
      
    </style>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h2 style="font-weight:bold">Coin listing request</h2>
        </div>
        <div class="col-lg-6" style="text-align:right;">
            <button style=" background-color:#458797" class="btn  btn-info">Create your coin</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body wizard-content">
                    <form  class="tab-wizard wizard-circle" method="POST" action="{{ route('coins.store') }}" enctype="multipart/form-data">
                     @csrf
                        <!-- Step 1 -->
                       
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 style="font-weight:bold">Coin informations</h3>
                                </div>
                                <div class="col-md-6">
                                    <h4 style="font-weight:bold">Coin contracts</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1"> Name </label> 
                                        <span style="font-size:10px; color:red; padding-left:7px;">Required</span>
                                        <input type="text" class="form-control" name="name" placeholder="EX : Bitcoin"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName1">Binance Smart Chain</label>
                                        <input name="binance_Smart_Chain" placeholder="Ex: 0x0000000000000000000" type="text" class="form-control" > </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Symbol</label>
                                        <span style="font-size:10px; color:red; padding-left:7px;">Required</span>
                                        <input name="symbol" placeholder="Ex:BTC " type="text" class="form-control" > </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Ethereum</label>
                                        <input name="ethereum" placeholder="Ex: 0x0000000000000000000" type="tel" class="form-control" > </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="shortDescription1">Description</label>
                                        <textarea placeholder="Ex: Bitcoin is a decentralized digital currency" name="description"  rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date1">Solana</label>
                                        <input placeholder="Ex:xxxxxxxxxxxx " type="text" class="form-control" name="solana"> </div>
                                    <div class="form-group">    
                                        <label for="lastName1">Polygon</label>
                                        <input placeholder="Ex:0x00000000000 " type="text" class="form-control" name="polygon"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1"> Logo </label> 
                                        <input type="file" class="form-control" name="logo" required> </div>
                                </div>
                                <div class="col-md-6">
                                    <h4 style="font-weight:bold">Coin links</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1">Price </label> 
                                        <input type="number" class="form-control" name="price"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1"> Website </label> 
                                        <span style="font-size:10px; color:red; padding-left:7px;">Required</span>
                                        <input type="text" class="form-control" name="website"> </div>
                                </div>
                               
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="firstName1"> Market cap </label> 
                                        <input type="text" class="form-control" name="market_cap"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="lastName1">Telegram</label>
                                        <input type="text" class="form-control" name="telegram"> </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="emailAddress1">Launch date</label>
                                        <span style="font-size:10px; color:red; padding-left:7px;">Required</span>
                                        <input type="date" class="form-control" name="launch_date"> </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phoneNumber1">Twitter</label>
                                        <input type="text" class="form-control" name="twitter"> </div>
                                </div>
                            </div><div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" name="presale"><label for="vehicle2">Presale</label>
                                    


                                </div>
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <h4 style="font-weight:bold">Additional informations</h3>
                                                <textarea placeholder="Other links, other blockchain contracts or anything else you would like to add to your coin request" name="additional_info" id="shortDescription1" rows="4" class="form-control"></textarea>
                                        </div>
                                </div>
                            </div>
                            <div style="text-align: center" class="row">
                                <div class="col-md-12" style="text-align:center;">
                                    <button type="submit" style=" background-color:#16c60c; border:none;" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </section>
                    </form>   
                            
                            <div style=" margin-top:20px; border:1px solid lightgray; padding:10px;" class="row">
                                <div class="col-lg-12" style="text-align: center;">
                                    <h3 style="font-weight:bold">Listing requirements</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="col-md-8" style="margin: auto">
                                        <ul style="list-style-type: none;">
                                             <li style="margin-bottom:5px; color:black;font-weight:bold"> <i style="background-color: #16c60c; color:#16c60c; border-radius:50%; padding:1px;border:1px solid black; margin-right:3px;" class="mdi mdi-checkbox-blank-circle-outline"></i>  Valid contract address</li>
                                            <li style="margin-bottom:5px"><i style="background-color: #16c60c; color:#16c60c; border-radius:50%; padding:1px;border:1px solid black; margin-right:3px;" class="mdi mdi-checkbox-blank-circle-outline"></i>  Working website where we can check the contract address</li>
                                            <li style="margin-bottom:5px"><i style="background-color: #16c60c; color:#16c60c; border-radius:50%; padding:1px;border:1px solid black; margin-right:3px;" class="mdi mdi-checkbox-blank-circle-outline"></i> Locked liquidity</li>
                                            <li style="margin-bottom:5px"><i style="background-color: #16c60c; color:#16c60c; border-radius:50%; padding:1px;border:1px solid black; margin-right:3px;" class="mdi mdi-checkbox-blank-circle-outline"></i> Reasonable holding of supply</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
   
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

         
             
</body>
</html>
@endsection