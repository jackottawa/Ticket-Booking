<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- jQuery UI CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="http://jqueryui.com/resources/demos/style.css">
    
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Kaushan+Script" rel="stylesheet">
    <link rel="stylesheet" href="./css/ticket.css">

    <title>Ticket Booking</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">
          <img src="./images/ctrip.png" width="130" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Flights <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Hotels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Trains</a>
            </li>
            <li id="new-position" class="nav-item">
              <div class="badge">
                <div class="square">New</div>
                <div class="triangle"></div>
              </div>
              <a class="nav-link" href="#">Mobile</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Help
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                CAD
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li class="nav-item dropdown">
              <a id="icon-EN" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="icon-EN"></i> EN
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> 
            <li id="icon-Account" class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-Account mx-1"></i> <span class="Account mx-1">Account</span> 
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="icon-App"></i> <span id="icon-App">App</span> 
              </a>
            </li>
            
          </ul>
        </div>
      </nav>  
    </header>
    
    <main role="main">
      <div class="background-image">
        <div class="main-search p-3">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label id="icon-Flights" class="btn btn-primary active btn-outline-primary">
              <i class="icon-Flights"></i>
              <input type="radio" name="options" id="option1" autocomplete="off" checked> Flights
            </label>
            <label class="btn btn-secondary btn-outline-primary">
              <i class="icon-Hotels"></i>
              <input type="radio" name="options" id="option2" autocomplete="off"> Hotels
            </label>
            <label class="btn btn-secondary btn-outline-primary">
              <i class="icon-Trains"></i>
              <input type="radio" name="options" id="option3" autocomplete="off"> Trains
            </label>
          </div>  
          <br><br>

          <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary btn-outline-light">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> One way
            </label>
            <label class="btn btn-primary btn-outline-light active">
              <input type="radio" name="options" id="option2" autocomplete="off"> Round trip
            </label>
            <label class="btn btn-secondary btn-outline-light">
              <input type="radio" name="options" id="option3" autocomplete="off"> Multi-City
            </label>
          </div>

          <form id="J_Search" target="_blank">
            <div class="row">
              <div class="col ui-widget">
                <label for="tags">From</label>
                <input type="text" class="form-control" id="tags" placeholder="City of airport">
              </div>

              <a href="#">
                <i class="icon-switch"></i>
              </a>
              
              <div class="col ui-widget">
                <label for="to">To</label>
                <input type="text" class="form-control" id="to" placeholder="City or airport">
              </div>
                
            </div>
            <br>
            
            <div class="row">
              <div class="col-4">
                <label class="" for="J_DepDate">Depart</label>
                <input id="J_DepDate" type="text" class="form-control" value="" />
              </div>

              <div class="col-4">
                <label class="" for="J_EndDate">Return</label>
                <input id="J_EndDate" type="text" class="form-control" value="" />
              </div>
             
            </div>
            
            <div class="row">
              <div class="col">
                <label class="" for="adult">Adult(12+ yrs)</label>
                <input id="adult" type="number" name="" min="0" max="10">
              </div>

              <div class="col">
                <label class="" for="child">Child(2-12 yrs)</label>
                <input id="child" type="number" name="" min="0" max="10">
              </div>

              <div class="col">
                <label class="" for="select_class">Class</label>
                <select id="select_class" class="custom-select">
                  <option value="Economy" selected>Economy</option>
                  <option value="Business">Business</option>
                  <option value="First Class">First Class</option>
                </select>
              </div>

              <div class="col">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck">
                  <label class="custom-control-label" for="customCheck">Nonstop only</label>
                </div>
              </div>
            </div>
            
            <input style="cursor:pointer" id="J_search_btn" type="submit" class="search_btn" value="Search flights" />
            
          </form>
          
        </div>

        <div class="table-ticket">
          <?php 
            require_once('./PHP/database.php');

            $db = new Database();
            $all_tickets = $db->getAllTickets();

          ?>
          
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">Flight</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Depart</th>
                <th scope="col">Return</th>
                <th scope="col">Adult</th>
                <th scope="col">Child</th>
                <th scope="col">Class</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach($all_tickets as $key => $ticket) {
                  echo '<tr id="' . $ticket['id'] .'">';
                  echo '<th scope="row">AC' . $ticket['id'] .'</th>';
                  echo  '<td>' . $ticket['Origin'] . '</td>';
                  echo  '<td>' . $ticket['Destination'] . '</td>';
                  echo  '<td>' . $ticket['DepartDate'] . '</td>';
                  echo  '<td>' . $ticket['ReturnDate'] . '</td>';
                  echo  '<td>' . $ticket['Adult'] . '</td>';
                  echo  '<td>' . $ticket['Child'] . '</td>';
                  echo  '<td>' . $ticket['Class'] . '</td>';
                  echo  '<td>' . '<button class="btn btn-success" onclick="deleteTicket(\'' . $ticket['id'] . '\')">Delete</button>' . '</td>';
                  echo '</tr>';
                }             

              ?>
            </tbody>
          </table>
          
        </div>
        <div class="info"></div>
      </div> 

      <div class="banner my-2">
        <img class="img-fluid" src="./images/banner.png" alt="banner">
      </div>  
      
      <div class="container">
        <h3 class="top-deal my-4">
          Today's Top Deals
        </h3>
      
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                      <img class="card-img-top images" src="./images/pink.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Cherry Blossom in Japan</h5>
                      <p class="card-text">
                        Each spring, the whole country seems to relax in the presence of ephemeral beauty. 
                      </p>
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top images" src="./images/sakura.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Save in this sakura season!</h5>
                        <p class="card-text">
                          Enjoy the cherry blossoms at the right time this year for less. 
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/hotel.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Exclusive Japan Hotel Deals</h5>
                      <p class="card-text">
                        Ever wondered what lies beyond the crowded city of Tokyo? 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/taiwan.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">The Island of Taiwan</h5>
                      <p class="card-text">
                        Escape the concrete jungle, and spend a few days in the China of your dreams.
                      </p>
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top images" src="./images/suzhou.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Escape to Suzhou</h5>
                        <p class="card-text">
                          Beautiful gardens, ancient pagodas and quaint - the Western view of China.
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/jiangsu.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Plan your trip to Jiangsu</h5>
                      <p class="card-text">
                        Suzhou is famous for beautiful scenery and is known as “Venice of the East”. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/greatwall.png" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Great Wall of China</h5>
                      <p class="card-text">
                        Protect the Chinese empires against the invasions of the Eurasian Steppe.
                      </p>
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top images" src="./images/shanghai.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Global Financial Centre</h5>
                        <p class="card-text">
                           Grew in importance in the 19th century due to trade and economic potential.
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/delhi.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">National Territory of Delhi</h5>
                      <p class="card-text">
                        Through history, Delhi has served as a capital of various kingdoms and empires. 
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/casablanca.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Morocco's chief port</h5>
                      <p class="card-text">
                        Casablanca is considered the economic and business center of Morocco.
                      </p>
                    </div>
                  </div>
                </div>
                
                 <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top images" src="./images/melbourne.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Melbourne Victoria</h5>
                        <p class="card-text">
                          Melbourne is the most populous city of the Australian state of Victoria.
                        </p>
                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top images" src="./images/montego.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Montego Bay</h5>
                      <p class="card-text">
                        With numerous beach resorts and golf courses outside its commercial core.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon carousel-icon" aria-hidden="true"></span>
            <span class="sr-only previous">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon carousel-icon" aria-hidden="true"></span>
            <span class="sr-only next">Next</span>
          </a>
        </div>
      </div>

      <div class="container-fluid">
        <div class="subscribe ml-4">
          <div class="row email-box">
            <div class="col-3">
              Get great deals delivered to your inbox！ 
            </div>

            <div class="col-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Email Address" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </div>
            </div>
            
            <div class="col-2">
              Save up to <b>50%</b> with mobile-exclusive deals!
            </div>

            <div class="col">
              <img src="./images/appStore.png" alt="AppStore">
              <img src="./images/googlePlay.png" alt="GooglePlay">
            </div>

          </div>
        </div>
      </div>
      
      <div class="container">
        <h3 class="top-deal my-4">
          Recommended Hotels
        </h3>
        
        <div class="hotel my-4">
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> Paris
            </label>
            <label class="btn btn-success btn-outline-success active">
              <input type="radio" name="options" id="option2" autocomplete="off"> New York
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option3" autocomplete="off"> Los Angeles
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option4" autocomplete="off"> London
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option5" autocomplete="off"> Shanghai
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option6" autocomplete="off"> Hong Kong
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option7" autocomplete="off"> Bangkok
            </label>
            <label class="btn btn-secondary btn-outline-success">
              <input type="radio" name="options" id="option8" autocomplete="off"> Seoul
            </label>
          </div>
        </div>
          

     <!--    <div class="hotel">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-primary ">Paris</button>
            <button type="button" class="btn btn-light ">New York</button>
            <button type="button" class="btn btn-light ">Los Angeles</button>
            <button type="button" class="btn btn-light">London</button>
            <button type="button" class="btn btn-light">Shanghai</button>
            <button type="button" class="btn btn-light">Hong Kong</button>
            <button type="button" class="btn btn-light">Bangkok</button>
            <button type="button" class="btn btn-light">Seoul</button>
          </div>
        </div> -->

        <!-- <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/1.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/2.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/3.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/4.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/5.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top images" src="./images/6.png" alt="Card image cap">
              <div class="card-body">
              </div>
            </div>
          </div>

        </div> -->
        
        <div class="row hotels">
          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 46 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                    <img src="./images/crown.png" alt="">
                  <span class="rank-num">1</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Huatian Chinagora Paris</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.5</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(12 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">1,713</span>
                  </div>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 34 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                  <img src="./images/crown.png" alt="">
                  <span class="rank-num">2</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Champs Elysees Friedland</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.2</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(56 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">1,252</span>
                  </div>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 26 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                  <img src="./images/crown.png" alt="">
                  <span class="rank-num">3</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/3.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">The Bailey's Hotel London</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.4</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(337 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">851</span>
                  </div>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 70 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                  <img src="./images/crown.png" alt="">
                  <span class="rank-num">4</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/4.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Lit BANGKOK Hotel</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.3</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(18 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">1,493</span>
                  </div>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 18 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                  <img src="./images/crown.png" alt="">
                  <span class="rank-num">5</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/5.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hotel Belleclaire</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.6</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(20 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">1,577</span>
                  </div>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <div class="overlay-label">
                <span>
                  Latest booking 6 hrs ago
                </span>
                <span class="hotel-rank">
                  <i class="crown"></i>
                  <img src="./images/crown.png" alt="">
                  <span class="rank-num">6</span>
                </span>
              </div>
              <img class="card-img-top images" src="./images/6.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Hôtel California Elysées</h5>
                <div>
                  <i class="icon-star"></i>
                </div>
                <p class="card-text">
                  <div class="hotel-review">
                    <span class="hotel-score">4.1</span>
                    <span class="full-score">/5</span>
                    <span class="review-num">(17 reviews)</span>
                  </div>

                   <div class="hotel-price">
                    <span class="price-currency">CAD</span>
                    <span class="price-num">1,472</span>
                  </div>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="app-download my-5">
        <div class="app-inner">
          <div class="app-phone"></div>
          <div class="app-content">
            <div class="txt">
              <p class="desc">
                Save up to 50% With the Free Trip.com App！
              </p>
            </div>
            <div class="qr-image">
              <span class="qr-code"></span>
            </div>
            <div class="download-btns">
              <a href="#" class="btn-appstore"></a>
              <a href="#" class="btn-googleplay"></a>
              <a href="#" class="btn-android"></a>
            </div>
          </div>
        </div>
      </div>
      
      <div class="ft-channel">
        <div class="ft-app">
          <a href="#" class="ft-appstore">
            <i></i>
          </a>
          <a href="#" class="ft-googleplay">
            <i></i>
          </a>
        </div>
        <div class="ft-media">
          <a href="#" class="icon-facebook"></a>
          <a href="#" class="icon-twitter"></a>
          <a href="#" class="icon-youtube"></a>
          <a href="#" class="icon-google"></a>
        </div>
      </div>

      <!-- <div class="row footer-logo my-5">
        <div class="col-2">
          <a href="#" class="logo-pic">
            <i class="iPhone"></i>
          </a>
        </div>

        <div class="col-2">
          <a href="#" class="logo-pic">
            <i class="android"></i>
          </a>
        </div>

        <div class="col-2">
          <a href="#" class="facebook"></a>
        </div>

        <div class="col-2">
          <a href="#" class="twitter"></a>
        </div>

        <div class="col-2">
          <a href="#" class="youtube"></a>
        </div>

        <div class="col-2">
          <a href="#" class="google"></a>
        </div>

      </div> -->
      
      <br><br><br><br><br><br>

    </main>
       

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- jQuery UI JS     -->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script src="./js/yui-min.js"></script>

    <script>
      YUI({
          modules: {
              'trip-calendar': {
                  fullpath: './js/trip-calendar.js',
                  type    : 'js',
                  requires: ['trip-calendar-css']
              },
              'trip-calendar-css': {
                  fullpath: './css/trip-calendar.css',
                  type    : 'css'
              }
          }
      }).use('trip-calendar', function(Y) {
          
          var oCal = new Y.TripCalendar({
              minDate         : new Date,     //最小时间限制
              triggerNode     : '#J_DepDate', //第一个触节点
              finalTriggerNode: '#J_EndDate'  //最后一个触发节点
          });
          
          //校验
          Y.one('#J_Search').on('submit', function(e) {
              e.halt();
              var rDate    = /^((19|2[01])\d{2})-(0?[1-9]|1[012])-(0?[1-9]|[12]\d|3[01])$/;
                  oDepDate = Y.one('#J_DepDate'),
                  oEndDate = Y.one('#J_EndDate'),
                  sDepDate = oDepDate.get('value'),
                  sEndDate = oEndDate.get('value'), 
                  aMessage = ['请选择出发日期', '请选择返程日期', '返程时间不能早于出发时间，请重新选择', '日期格式错误'],
                  iError   = -1;   
                  switch(!0) {
                      case !sDepDate:
                          oDepDate.focus();
                          iError = 0;
                          break;
                      case !rDate.test(sDepDate):
                          oDepDate.focus();
                          iError = 3;
                          break;
                      case !sEndDate:
                          oEndDate.focus();
                          iError = 1;
                          break;
                      case !rDate.test(sEndDate):
                          oEndDate.focus();
                          iError = 3;
                          break;
                      case sDepDate.replace(/-/g, '') > sEndDate.replace(/-/g, ''):
                          oEndDate.focus();
                          iError = 2;
                          break;
                  };
                  if(iError > -1) {
                      this.set('message', aMessage[iError]).showMessage();                
                  }
                  else {
                      // alert('开始时间：' + sDepDate + '\n返程时间：' + sEndDate);
                  }
          }, oCal);
      });
    </script>

    <script>
      
      $(document).ready(function(){
        $('#J_search_btn').click(function(){
          var from = $('#tags').val();
          var to = $('#to').val();
          var departDate = $('#J_DepDate').val();
          var returnDate = $('#J_EndDate').val();
          var adult = $('#adult').val();
          var child = $('#child').val();
          var flightClass = $('#select_class').val();

          $.post(
            "http://192.168.33.10/Ticket Booking/PHP/insert.php",
            {
              "insert_from": from,
              "insert_to": to,
              "insert_departDate": departDate,
              "insert_returnDate": returnDate,
              "insert_adult": adult,
              "insert_child": child,
              "insert_flightClass": flightClass
            },
            function(data) {
              if(data.message == 'A new ticket has been added successfully!') {

                var id = $('tbody').children("tr:last-child").attr('id');
                id++;
                var insert = '<tr id="' + id + '">'+
                      '<th scope="row">AC' + id + '</th>' +
                      '<td>' + from + '</td>' +
                      '<td>' + to + '</td>' +
                      '<td>' + departDate + '</td>' +
                      '<td>' + returnDate + '</td>' +
                      '<td>' + adult + '</td>' +
                      '<td>' + child + '</td>' +
                      '<td>' + flightClass + '</td>' +
                      '<td>' + '<button class="btn btn-success" onclick="deleteTicket(\'' + id + '\')">Delete</button>' + '</td>' +
                      '</tr>';
                $('tbody').append(insert);
                
                $('.info').html(data.message);
              } else {
                $('.info').html(data.message);
              }
            },
            "json"
          ); 
        });


        $('.hotels .card').on({
          mouseenter: function(){
            $(this).addClass("border-primary");
          },
          mouseleave: function(){
            $(this).removeClass("border-primary");
          }
        });

      });


      function deleteTicket(id) {
        //ajax to connect backend
        $.post(
          "http://192.168.33.10/Ticket Booking/PHP/delete.php",
          {
            "delete_id": id
          },
          function(data) {
            // console.log(data.message);
            $('.info').html(data.message);
            $('#' + id).hide();
          },
          "json"
        );
      }
    </script>

    <script>
      $(function() {
        var availableTags = [
          "Amsterdam(AMS) Netherlands",
          "Auckland(AKL) New Zealand",
          "Berlin(BER) Germany",
          "Beijing(BJS) China",
          "Bangkok(BKK) Thailand",
          "Barcelona(BCN) Spain",
          "Chengdu(CTU) China",
          "Cebu(CEB) Philippines",
          "Dubai(DXB) United Arab Emirates",
          "Delhi(DEL) India",
          "Edinburgh(EDI) United Kingdom",
          "Entebbe(EBB) Uganda",
          "Fukuoka(FUK) Japan",
          "Frankfurt(FRA) Germany",
          "Guam(GUM) United States",
          "Geneva(GVA) Switzerland",
          "Hong Kong(HKG) China",
          "Hanoi(HAN) Vietnam",
          "Istanbul(IST) Turkey",
          "Islamabad(ISB) Pakistan",
          "Jakarta(JKT) Insonesia",
          "Jinan(TNA) China",
          "Kingston(YGK) Canada",
          "Kuala Lumpur(KUL) Malaysia",
          "Kunming(KMG) China",
          "Los Angeles(LAX) United States",
          "London(LON) United Kingdom",
          "Manila(MNL) Philippines",
          "Macau(MFM) China",
          "Montreal(YMQ) Canada",
          "New York(NYC) United States",
          "Ningbo(NGB) China",
          "Ottawa(YOW) Canada",
          "Orlando(ORL) United States",
          "Paris Charles De Gaulle Airport(CDG) Paris",
          "Phuket(HKT) Thailand",
          "Queenstown(ZQN) New Zealand",
          "Qingdao(TAO) China",
          "Rome(ROM) Italy",
          "Reykjavik(REK) Iceland",
          "Singapore(SIN) Singapore",
          "Sydney(SYD) Australia",
          "Tokyo Haneda Airport(HND) Japan",
          "Toronto Pearson International Airport(YYZ) Canada",
          "Ulaanbaatar(ULN) Mongolia",
          "Ulan Hot(HLH) China",
          "Vancouver(YVR) Canada",
          "Vientiane(VTE) Laos",
          "Vienna(VIE) Austria",
          "Wuhan(WUH) China",
          "Wuxi(WUX) China",
          "Xiamen(XMN) China",
          "Xi'an(SIA) China",
          "Yangon(RGN) Myanmar",
          "Yiwu(YIW) China",
          "Zurich(ZRH) Switzerland",
          "Zhuhai(ZUH) China"
          
        ];
        $( "#tags" ).autocomplete({
          source: availableTags
        });
      });
    </script>
  </body>
</html>