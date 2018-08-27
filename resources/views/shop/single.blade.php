@extends('main')
@section('title','| Show product')
@section('content')

 <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">All Products</h1>
        </div>
      </section>

      <div class="row">
          <div class="product col-md-5 service-image-left">
                    
            <center>
              <img id="item-display" src="http://localhost:8000/uploads/1535372727.gif" alt=""></img>
            </center>
          </div>
     

        <div class="col-md-7">
          <div class="product-title">Corsair GS600 600 Watt PSU</div>
          <div class="product-desc">The Corsair Gaming Series GS600 is the ideal price/performance choice for mid-spec gaming PC</div>
          <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
          <hr>
          <div class="product-price">$ 1234.00</div>
          <div class="product-stock">In Stock</div>
          <hr>
          <div class="btn-group cart">
            <button type="button" class="btn btn-success">
              Add to cart 
            </button>
          </div>
          <div class="btn-group wishlist">
            <button type="button" class="btn btn-danger">
              Add to wishlist 
            </button>
          </div>
        </div>
      </div>

<style>
/*********************************************
          PRODUCTS
*********************************************/

.product{
  border: 1px solid #dddddd;
  height: 321px;
}

.product>img{
  max-width: 230px;
}

.product-rating{
  font-size: 20px;
  margin-bottom: 25px;
}

.product-title{
  font-size: 20px;
}

.product-desc{
  font-size: 14px;
}

.product-price{
  font-size: 22px;
}

.product-stock{
  color: #74DF00;
  font-size: 20px;
  margin-top: 10px;
}

.product-info{
    margin-top: 50px;
}

/*********************************************
          VIEW
*********************************************/

.content-wrapper {
  max-width: 1140px;
  background: #fff;
  margin: 0 auto;
  margin-top: 25px;
  margin-bottom: 10px;
  border: 0px;
  border-radius: 0px;
}

.container-fluid{
  max-width: 1140px;
  margin: 0 auto;
}

.view-wrapper {
  float: right;
  max-width: 70%;
  margin-top: 25px;
}

.container {
  padding-left: 0px;
  padding-right: 0px;
  max-width: 100%;
}

/*********************************************
        ITEM 
*********************************************/

.service1-items {
  padding: 0px 0 0px 0;
  float: left;
  position: relative;
  overflow: hidden;
  max-width: 100%;
  height: 321px;
  width: 130px;
}

.service1-item {
  height: 107px;
  width: 120px;
  display: block;
  float: left;
  position: relative;
  padding-right: 20px;
  border-right: 1px solid #DDD;
  border-top: 1px solid #DDD;
  border-bottom: 1px solid #DDD;
}

.service1-item > img {
  max-height: 110px;
  max-width: 110px;
  opacity: 0.6;
  transition: all .2s ease-in;
  -o-transition: all .2s ease-in;
  -moz-transition: all .2s ease-in;
  -webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
  cursor: pointer;
  opacity: 1;
}

.service-image-left {
  padding-right: 50px;
}

.service-image-right {
  padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
  max-height: 155px;
}
</style>

@endsection