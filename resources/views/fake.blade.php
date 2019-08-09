@extends('layouts.app')

@section('content')
<!-- done process -->
    <div class="done-process segments-page" id="done" style="{{isset($message) ? 'display:block' : 'display:none'}}">
        <div class="container">
            <div class="content">
                <i class="fa fa-check"></i>
                <p>{{isset($message)}}</p>
            </div>
        </div>
    </div>
	<!-- end done process -->
<!-- slide -->
<div class="container bg-primary" id="question">
    <div class="slide">
        <div class="slide-show owl-carousel owl-theme">
          <div class="row">
            <div class="col-md-12">
              <div class="user-card-block card">
                <div class="card-block">
                  <div class="top-card text-center section-title">
                    <!-- <i class="fa fa-user-circle"></i> -->
                    <h5 class="p-b-10">Hello!</h5>
                    <h5 class="text-capitalize p-b-10">Gregory Johnes</h5>
                  </div>
                  <div class="card-contain text-center p-t-40">
                    <h5 class="text-capitalize p-b-10">Will you attend the {service} on below date?</h5>
                    <p class="text-muted">Sunday, October 21, 2018</p>
                  </div>

                  <div class="card-button p-t-50">
                      <div class="col-6 pull-right">
                        <button id="no" class="btn btn-danger btn-round"><i class="fa fa-thumbs-down"></i> No</button>
                      </div>
                      <div class="col-6 pull-left">
                        <button id="yes" class="btn btn-success btn-round"><i class="fa fa-thumbs-up"></i> Yes</button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<!-- end slide -->

<!-- category -->
<!-- <div class="category segments">
    <div class="container">
        <div class="section-title">
            <h3>Category
                <a href="category.html">See All <i class="fa fa-angle-right"></i></a>
            </h3>
        </div>
        <div class="category-show owl-carousel owl-theme">
            <a href="category-details.html">
                <div class="content c-first">
                    <div class="mask"></div>
                    <h4>Food</h4>
                </div>
            </a>
            <a href="category-details.html">
                <div class="content c-second">
                    <div class="mask"></div>
                    <h4>Drink</h4>
                </div>
            </a>
            <a href="category-details.html">
                <div class="content c-third">
                    <div class="mask"></div>
                    <h4>Snack</h4>
                </div>
            </a>
            <a href="category-details.html">
                <div class="content c-fourth">
                    <div class="mask"></div>
                    <h4>Dessert</h4>
                </div>
            </a>
        </div>
    </div>
</div> -->
<!-- end category -->

<!-- menu -->
<!-- <div class="menu segments bg-second">
    <div class="container">
        <div class="section-title">
            <h3>Menu</h3>
        </div>
        <div class="row no-mb">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#tabs1">Food</a></li>
                    <li class="tab col s3"><a href="#tabs2">Drink</a></li>
                    <li class="tab col s3"><a href="#tabs3">Snack</a></li>
                    <li class="tab col s3"><a href="#tabs4">Dessert</a></li>
                </ul>
            </div>
        </div>
        <div id="tabs1">
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/food1.jpg" alt="menu">
                            <div class="text">
                            <h6>Meat Mix Foliage</h6>
                                <p class="price">$32</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/food2.jpg" alt="menu">
                            <div class="text">
                                <h6>Delicious Fungus</h6>
                                <p class="price">$15</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/food3.jpg" alt="menu">
                            <div class="text">
                                <h6>Meat Sauce</h6>
                                <p class="price">$10</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/food4.jpg" alt="menu">
                            <div class="text">
                                <h6>Meat Salad</h6>
                                <p class="price">$22</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="tabs2">
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/drink1.jpg" alt="menu">
                            <div class="text">
                                <h6>Fresh Juice</h6>
                                <p class="price">$41</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/drink2.jpg" alt="menu">
                            <div class="text">
                                <h6>Fresh Juice</h6>
                                <p class="price">$19</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/drink3.jpg" alt="menu">
                            <div class="text">
                                <h6>Fresh Juice</h6>
                                <p class="price">$27</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/drink4.jpg" alt="menu">
                            <div class="text">
                                <h6>Fresh Juice</h6>
                                <p class="price">$34</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="tabs3">
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/snack1.jpg" alt="menu">
                            <div class="text">
                                <h6>Fried Pumpkin</h6>
                                <p class="price">$16</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/snack2.jpg" alt="menu">
                            <div class="text">
                                <h6>Fried Pumpkin</h6>
                                <p class="price">$22</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/snack3.jpg" alt="menu">
                            <div class="text">
                                <h6>Fried Pumpkin</h6>
                                <p class="price">$14</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/snack4.jpg" alt="menu">
                            <div class="text">
                                <h6>Fried Pumpkin</h6>
                                <p class="price">$12</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div id="tabs4">
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/dessert1.jpg" alt="menu">
                            <div class="text">
                                <h6>Pandan Bread</h6>
                                <p class="price">$15</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/dessert2.jpg" alt="menu">
                            <div class="text">
                                <h6>Pandan Bread</h6>
                                <p class="price">$21</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/dessert3.jpg" alt="menu">
                            <div class="text">
                                <h6>Pandan Bread</h6>
                                <p class="price">$14</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col s6">
                    <a href="menu-details.html">
                        <div class="content">
                            <img src="images/dessert4.jpg" alt="menu">
                            <div class="text">
                                <h6>Pandan Bread</h6>
                                <p class="price">$32</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- end menu -->

<!-- testimonial -->
<!-- <div class="testimonial segments">
    <div class="container">
        <div class="testimonial-show owl-carousel owl-theme">
            <div class="content">
                <img src="images/testimonial1.png" alt="testimonial">
                <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
                <h5>Samuel</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut non nisi sapiente vel hic esse! Dignissimos voluptate, dolorum nesciunt. Beatae.</p>
            </div>
            <div class="content">
                <img src="images/testimonial2.png" alt="testimonial">
                <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-half-o"></i></li>
                </ul>
                <h5>John Roe</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut non nisi sapiente vel hic esse! Dignissimos voluptate, dolorum nesciunt. Beatae.</p>
            </div>
            <div class="content">
                <img src="images/testimonial3.png" alt="testimonial">
                <ul>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star-o"></i></li>
                </ul>
                <h5>Bastian</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut non nisi sapiente vel hic esse! Dignissimos voluptate, dolorum nesciunt. Beatae.</p>
            </div>
        </div>
    </div>
</div> -->
@endsection

@section('script')
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
  $(document).ready(function(){
    //
    $('#close').click(function(){
      $('#done').hide();
    });
    //
    $('#question').effect('shake');
    //
    $('#yes, #no').click(function(){
      $('#question').hide();
      $('#done').show();
    });
  });
</script>
@endsection
