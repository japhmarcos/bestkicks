@extends('adminmaster')

@section('content')

<!-- Knobs -->
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="panel panel-knob">
              <div class="panel-heading">
                <h3 class="panel-title">Total Posts
                </h3>
              </div>
              <div class="panel-body">
                <input class="knob" data-width="150" data-fgColor="#222222" data-thickness=.3 value="{{$post_count}}">
              </div>
              <div class="panel-footer">
                Posts of all registered users
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-4">
            <div class="panel panel-knob">
              <div class="panel-heading">
                <h3 class="panel-title">Total Users
                </h3>
              </div>
              <div class="panel-body">
                <input class="knob" data-width="500" data-fgColor="#222222" data-thickness=.3 value="{{$user_count}}">
              </div>
              <div class="panel-footer">
                Total count of registered users
              </div>
            </div>
          </div>
<!-- Graph --><br>
        
          <div class="col-md-4">
            <div class="web-stats info">
              <div class="text-center">
                <h5>2,34,402 </h5>
                <i class="icon-eye-open"></i>
                <span class="description">Page Views</span>
              </div>
            </div>
           </div> 
            <div class="col-md-4">
            <div class="web-stats success">
              <div class="text-center">
                <h5>2,34,402 </h5>
                <i class="icon-hand-up"></i>
                <span class="description">Ad Clicks</span>
              </div>
            </div>
          </div>
<!--End of Graph -->
       
        </div>  <!-- / knobs -->



       <br><br><br>
  <div class="container">

      <div class="row">
        <center><div class="col-md-4 border">
          <a href="/post/all?brand=9"><img class="brand-opacity" src="/images/nikelogo.jpg" alt="nike" style="width:77%;height:100%"></a>
        </div>
        <div class="col-md-4 border">
          <a href="/post/all?brand=5"><img class="brand-opacity" src="/images/jordanlogo.png" alt="jordan" style="width:77%;height:100%"></a>
       </div>
        <div class="col-md-4 border">
         <a href="/post/all?brand=1"><img class="brand-opacity" src="/images/adidaslogo.png" alt="adidas" style="width:77%;height:100%"></a>
        </div></center>
      </div>


      <div class="row">
        <center><div class="col-md-4 border">
          <a href="/post/all?brand=13"><img class="brand-opacity" src="/images/reeboklogo.png" alt="reebok" style="width:77%;height:100%"></a>
        </div>
        <div class="col-md-4 border">
          <a href="/post/all?brand=11"><img class="brand-opacity" src="/images/peaklogo.jpg" alt="peak" style="width:77%;height:100%"></a>
       </div>
        <div class="col-md-4 border">
         <a href="/post/all?brand=16"><img class="brand-opacity" src="/images/underarmourlogo.jpg" alt="underarmour" style="width:77%;height:100%"></a>
        </div></center>
      </div>


      <div class="row">
        <center><div class="col-md-4 border">
          <a href="/post/all?brand=7"><img class="brand-opacity" src="/images/newbalancelogo.jpg" alt="newbalance" style="width:77%;height:100%"></a>
        </div>
        <div class="col-md-4 border">
          <a href="/post/all?brand=10"><img class="brand-opacity" src="/images/onitsukatigerlogo.jpg" alt="onitsukatiger" style="width:77%;height:100%"></a>
       </div>
        <div class="col-md-4 border">
         <a href="/post/all"><img class="brand-opacity" src="/images/more.png" alt="more" style="width:77%;height:100%"></a>
        </div></center>
      </div>

    </div>


@endsection