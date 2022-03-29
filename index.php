<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
   <header>
        <nav class="navbar navbar-light bg-success fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Supermarket</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
   </header>
   <main>
       <section class="section mt-5">
           <div class="container">
                 <h1 class="h" id="h1">Cotalog Vagatables</h1>
               <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://projectgroovy.com/wp-content/uploads/2015/08/fruits-and-vegetables-45459.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Vagatables</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://tepliepol.ru/wp-content/uploads/2018/05/vegetables-variety.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Vagatables</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://hindimeaning.com/wp-content/uploads/2012/12/carrots-vegetables.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Carrot</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
             <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://bcfresh.ca/wp-content/uploads/2016/03/brusell-sprouts.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Cucumber</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://womenstalk.ru/wp-content/uploads/vitamin/2017/11/7-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Brocoly</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://www.bazaarfresh.in/wp-content/uploads/2017/01/tomato-450x450.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Pomidor</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
       </section>
       <section class="section mt-5">
           <div class="container">
                 <h1 class="h" id="h1">Cotalog Fruits</h1>
               <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row2 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://oir.mobi/uploads/posts/2019-12/1575750256_13-30.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Apples</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row2 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://f.vividscreen.info/soft/caf12138a7bd9c989c72ce42d880712a/Sweet-Bananas-2880x1920.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Bananas</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row2 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://diamant.su/uploads/posts/2014-08/1407765585_513243-3300x1700.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>pomegranate</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
             <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://fresher.ru/manager_content/6-2017/kak-vybirat-klubniku/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Strawberry</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://polza4u.ru/wp-content/uploads/2021/05/depositphotos_kivi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Kiwi</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://i.artfile.me/wallpaper/17-11-2013/3000x1890/eda-frukty-yagody-persik-slivki-chernika-766724.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>MultiFructs</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
       </section>
       <section class="section mt-5">
           <div class="container">             
             <h1 id="h1">Fast food</h1>
               <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://www.newhealthadvisor.org/images/1HT15013/fastfood.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Combo 3</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://komiinform.ru/content/news/images/164741/Fast_food_Vienna_sausage_439264.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Hot dod</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://img0.liveinternet.ru/images/attach/d/2/149/339/149339402_062019_0808_17.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Tacos</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
             <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://cdn.lifehacker.ru/wp-content/uploads/2015/02/shutterstock_180089771.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Lavash</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://i.ytimg.com/vi/OHbM934B7dE/maxresdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>KFC</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row3 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://businessesforsale.ru/fileupload/7801fast_food-l.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Free</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
       </section>
       <section class="section mt-5">
           <div class="container">             
             <h1 id="h1">A national dishes in Uzbekistan</h1>
               <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://i1.wp.com/xn----7sbbhn4brhhfdm.xn--p1ai/data/images/turizm/%D0%92%D0%BE%D1%81%D1%82%D0%BE%D0%BA/bluda47.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Plov</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://www.people-travels.com/images/shashlik.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Shashlik</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://i.ytimg.com/vi/yzsFCX9jElA/hqdefault.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Shurva</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
             <div class="row">
                 <?php
                 include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="https://smachno.ua/wp-content/uploads/2015/03/samsa_ready.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Samsa</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                     <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://static.ca-news.org/.storage/news/images/avariya1810/.thumbs/b32631529e79108668b87d4b5b0a1a8d_500_0_0.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Narin</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
                   <?php
                //  include 'baza.php';
                  foreach ($row1 as $key){
                    ?>
                      <div class="card mt-5" style="width: 18rem;"> 
                        <img src="http://29palms.ru/photo/blog/travel/uzbekistan/uzb-kuh-2/resized/005_Blog_Pavla_Aksenova_Uzbekskaya_kuhnya_Foto_raw_-_Depositphotos.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <ul>
                            <li>Manti</li>
                            <li><?=$key['about']?></li>
                            <li><?=$key['narx']?></li>
                          </ul>
                          <button class="btn btn-primary" type="submit">Buy</button>
                       <!-- <h5 class="card-title"></h5> -->
                       <!-- <p></p>
                       <a href=""></a> -->
                        </div>
                    </div>
                   <?php 
                  } 
                  ?>
             </div>
       </section>
   </main>
   <footer class="text-center text-white" style="background-color: #f1f1f1;">
  <div class="container pt-4">
    <section class="mb-4">
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="htts://insta.me/_diyorbek_05_"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>
    </section>
  </div>
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: 
    <a class="text-dark" href="https://t.me/XAN9979">Create by Muxammaddiyor</a>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>