@extends('main')
@section('title',' | Homepage')
@section('content')  

     <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"  style="margin-top:-2250px; margin-left: 0px;margin-right: 0px;"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" style="margin-top:-2250px; margin-left: 0px;margin-right: 0px;"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" style=" margin-top:-2250px; margin-left: 0px;margin-right: 0px;"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3" style="margin-top:-2250px; margin-left: 0px;margin-right: 0px;"></li>
  </ol>
  <div class="carousel-fixed-item center cat" ><br><br><br><br><br><br><br><br><h1 style="text-align: center; color: #F6F6F6;"><img  src="{{url('images/logonew.png')}}" width="150px" height="150px"> <p>MT.KENYA COFFEE & TEA PACKERS LIMITED</p></h1>
 <br>
<h4 style="text-align: center; color: #F6F6F6;font-family: Bradley Hand"><p>Rarest tea experience on the slope</p></h4>
 <br><br><br><br><br><br><br>
</div>
  <div class="carousel-inner position">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="{{url('images/tea2.jpg')}}" alt="First slide" height="740px" >
    </div>
    <div class="carousel-item" >
      <img class="d-block w-100" src="{{url('images/mountkenya2.jpg')}}" alt="Second slide" height="740px">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{url('images/slider2.jpg')}}" alt="Third slide" height="740px" >
    </div>
    <div class="carousel-item"> 
      <img class="d-block w-100" src="{{url('images/coffee.jpg')}}" alt="Fourth slide" height="740px">
    </div>
  </div> 
  <br><br><br><br><br><br><br><br><br><br>
  <div style="background-color: #042721; margin-top:-177px; width:1322px;margin-left: -110px ;height:410px;"><br>
<h2 style="text-align: center; color:#FFFFFF ">What we offer</h2><br><br>
<div class="row">
    <div class="col-md-3">&emsp;&emsp;
     <img src="{{ url('images/g2.png')}}" height="130" width="170"/>
     </div>
     <div class="col-md-3">&emsp;&emsp;&emsp;
     <img src="{{ url('images/h3.jpg')}}" height="130" width="170"/>
     </div>
     <div class="col-md-3">&emsp;&emsp;&emsp;
     <img src="{{ url('images/o3.jpg')}}" height="130" width="170"/>
     </div>
     <div class="col-md-3">&emsp;&emsp;&emsp;
     <img src="{{ url('images/w3.jpg')}}" height="130" width="170"/>
     </div>
</div><br>
<div class="row">
    <div class="col-md-3">
    <h4 style="color:#FFFFFF">&emsp;<b>GREEN GOLD TEA</b></h4>
    </div>
    <div class="col-md-3">
    <h4 style="color:#FFFFFF"><b>HAVEMORE PURPLE TEA</b></h4>
    </div>
    <div class="col-md-3">
    <h4 style="color:#FFFFFF"><b>MYCHOICE OOLONG TEA</b></h4>
    </div>
    <div class="col-md-3">
        <h4 style="color:#FFFFFF">&emsp;&emsp;<b>WEGA BLACK TEA</b></h4>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <p>  </p>
    </div>
    <div class="col-md-3">
        <p></p>
    </div>
    <div class="col-md-3">
        <p> </p>
    </div>
    <div class="col-md-3">
        <p></p>
    </div>
</div>
</div>
<div>
<br>
<h2 style="text-align: center; color: white ">Mt.Kenya Tea Benefits</h2>
<p style="text-align: center; color: white">At Mt.Kenya Coffee and Tea packers limited we offer a wide variety of healthy tea products,which will keep your health in check! </p>
<div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-7">
                    <h6><b>Green Gold Tea</b></h6>
                    <p>1.Helps in weight loss</p><p>2.Contains healthy bioactive compounds</p><p>3.May improve brain function</p><p>4.Fights obesity</p><p>5.Lowers risk of some cancers and viral diseases</p>
                    </div>
                    <div class="col-md-5">
                         <img src="{{ url('images/gg2.jpg')}}" height="200" width="160"/>
                    </div>
                    </div>
                </div>
            </div>  
             <div class="col-md-6">
                <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-7">
                    <h6><b>Havemore Purple Tea</b></h6>
                   <p>1.Powers your body health</p><p>2.It helps soothe inflamation</p><P>3.Helps reduce body fat</P><p>4.Helps to fight diseases like heart disease and diabetes</p><p>5.Improves body composition and lean body mass</p>
                    </div>
                    <div class="col-md-5">
                         <img src="{{ url('images/hp.jpg')}}" height="200" width="160"/>
                    </div>
                    </div>
                </div>
            </div>      
</div>      
<div class="row">
            <div class="col-md-6">
                <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-7">
                    <h6><b>Mychoice Oolong Tea</b></h6>
                    <p>1.Improves blood circulation</p><p>2.Helps in detoxification and disease preventation</p><p>3.Reduces inflammation disorders</p><p>4.Promotes superior bone structure and robust skin</p>
                    </div>
                    <div class="col-md-5">
                         <img src="{{ url('images/mo.jpg')}}" height="200" width="160"/>
                    </div>
                    </div>
                </div>
            </div>  
             <div class="col-md-6">
                <div class="jumbotron">
                    <div class="row">
                    <div class="col-md-7">
                    <h6><b>Wega black Tea</b></h6>
                    <p>1.Helps in weight loss by increasing metabolism</p><p>2.Contains healthy bioactive compounds</p><p>3.May improve brain function</p><p>4.May reduce bad breath</p>
                    </div>
                    <div class="col-md-5">
                         <img src="{{ url('images/wb.jpg')}}" height="200" width="160"/>
                    </div>
                    </div>
                </div>
            </div>      
</div>      
</div>
   
<br>
<div style="background-color: #FFF8DB;">
<br>
<h2 style="text-align: center; ">Need More Information?</h2>
<div style="text-align: center; ">
    Talk to us. Call <b>+254 722 877 613</b> or email <b>info@Mtkenyakofitea.com</b><br><br>
    <a class="btn btn-success btn-lg" href="/contact" role="button"><b><i class="fa fa-phone"></i> Contact Us</b></a><br><br>
</div>
</div>
<br>

<div class="row" ><br>
    <div class="container" style="float: center;">
     
     <img src="{{ url('images/tea3.jpg')}}" height="400" width="600" style="float:left;z-index: 1" />
   
     <div class="jumbotron" style="float: left;z-index: 2;margin-left: -200px;width:500px; height: 290px ; margin-top: 50px"><p> Mount Kenya Coffee and Tea packers limited is a premium Tea brand that excels in blending the best and finest tastes in Kenya. Each cup is full of flavor, richness in aroma and of the highest standard and quality.</p> </div>
        
     </div>
</div>
   
<br><br>
<div style="color: white">
   <h5 style="text-align: left;">Important links</h5> 
   <a href="/about" style="color: white; font-size: 13px;">about company</a><br>
   <a href="/contact" style="color: white; font-size: 13px;">contact us</a><br>
   <a href="https://twitter.com/kwanzatukule"> <img  src="{{url('images/twitter logo.png')}}" width="30px" height="30px" style="float: right; margin-right: 49px"></a>
   <a href="https://www.instagram.com/mt.kenyateapackerslimited/"><img  src="{{url('images/instagram logo.png')}}" width="30px" height="30px" style="float: right; margin-right: 49px"></a>
   <img  src="{{url('images/logonew.png')}}" width="50px" height="50px" style="float: right; margin-right: 50px">
</div>
@endsection 