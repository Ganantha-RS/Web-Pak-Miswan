<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    

    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
     <nav class="Navbar">
        <div class="judul paytone-one-regular">
            <p>Cake Shop</p>
        </div>
        <div class="page poppins-semibold">
            <a href="#">Home</a>    
            <a href="#">About us</a>
            <a href="#">Contact us</a>
        </div>
        <div class="account poppins-semibold">
            <img src="gambar/ri_user-5-fill.png" alt="">
            <h1>My Account</h1>
        </div>
     </nav>

     <!-- Hero -->
      <div class="Hero">
        <div class="hero-section-1 poetsen-one-regular">
              <h1>The perfect touch of <span>sweetness</span> to complete <br> your story</h1>
              <p class="poppins-semibold">Setiap manisan istimewa kami diantar dengan cepat dan aman, <br> memastikan kelezatan sampai di meja makan Anda dalam kondisi sempurna.</p>
              <div class="button-group">
                <button class="btn btn-solid">Explore Now</button>
                <button class="btn btn-outline">Order Now</button>
              </div>
        </div>
        <div class="hero-section-2">
            <img src="gambar/Group 68.png" alt="">
            <img class="img2" src="gambar/Group 69.png" alt="">
        </div>
      </div>


      <!-- Special -->
      <div class="special">
        <div class="special-header">
            <h1 class="poetsen-one-regular">Our weekly <span>specials </span>✨</h1>
            <p class="poppins-semibold">Experience the perfect taste in a dish, happiness can be felt</p>
        </div>
        <div class="special-container">
            <div class="search-box">
                <input type="text" id="searchProducts" placeholder="Search for products..." class="poppins-semibold">
            </div>
            <div class="special-cards">
                <!-- Card 1 -->
                <div class="product-card" data-name="dark choco cake">
                    <img src="gambar/image 7 (1).png" alt="Dark Choco Cake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Dark Choco Cake</h3>
                        <p class="price poppins-semibold">$ 4.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="product-card" data-name="strawberry cheese cake">
                    <img src="gambar/image 8.png" alt="Strawberry Cheese Cake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Strawberry Cheese Cake</h3>
                        <p class="price poppins-semibold">$ 6.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="product-card" data-name="cupcake">
                    <img src="gambar/image 9 (1).png" alt="Cupcake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Cupcake</h3>
                        <p class="price poppins-semibold">$ 3.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="product-card" data-name="tart lemon">
                    <img src="gambar/pngtree-lemon-tart-a-delicious-with-zesty-flavor-in-white-background-png-image_20360137 4.png" alt="Tart Lemon">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Tart Lemon</h3>
                        <p class="price poppins-semibold">$ 9.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="product-card" data-name="bunny taro cake">
                    <img src="gambar/Group 4529.png" alt="Bunny Taro Cake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Bunny Taro Cake</h3>
                        <p class="price poppins-semibold">$ 4.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="product-card" data-name="berry cake">
                    <img src="gambar/STROBERI CAKE 1.png" alt="Berry Cake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Berry Cake</h3>
                        <p class="price poppins-semibold">$ 6.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 7 -->
                <div class="product-card" data-name="pink macaroon">
                    <img src="gambar/Desain tanpa judul 1.png" alt="Pink Macaroon">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Pink Macaroon</h3>
                        <p class="price poppins-semibold">$ 3.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>

                <!-- Card 8 -->
                <div class="product-card" data-name="matcha cupcake">
                    <img src="gambar/Desain tanpa judul 2.png" alt="Matcha Cupcake">
                    <div class="card-content">
                        <div class="rating">★★★★★</div>
                        <h3 class="poetsen-one-regular">Matcha Cupcake</h3>
                        <p class="price poppins-semibold">$ 9.00</p>
                        <div class="card-actions">
                            <button class="order-btn">Order now!</button>
                            <button class="like-btn">❤️</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchProducts');
            const products = document.querySelectorAll('.product-card');
            
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase().trim();
                
                products.forEach(product => {
                    const productName = product.getAttribute('data-name');
                    if (productName.includes(searchTerm)) {
                        product.style.visibility = 'visible';
                        product.style.opacity = '1';
                        product.style.position = 'relative';
                    } else {
                        product.style.visibility = 'hidden';
                        product.style.opacity = '0';
                        product.style.position = 'absolute';
                    }
                });
            });
        });
    </script>

    <!-- Categories -->
      <section class="section poppins-semibold">
    <!-- Gambar kiri -->
    <div class="head-sec">
        <img src="gambar/Group 4535 (1).png" alt="">
    </div>

    <!-- Konten kanan -->
    <div class="content">
      <h2 class="poppins-semibold">Our <span>Categories</span></h2>

      <div class="category-item">
        <div><img src="gambar/Group 4536.png" alt=""></div>
        <div>
          <h3>Grab Your Sweet Food</h3>
          <p>Indulge in sweet memories with our collection of traditional cakes and  timeless, authentic recipes.</p>
        </div>
      </div>

      <div class="category-item">
        <div><img src="gambar/Group 4537.png" alt=""></div>
        <div>
          <h3>Fast & Reliable Delivery</h3>
          <p>We ensure your sweet treats arrive quickly and safely, right to your doorstep.</p>
        </div>
      </div>

      <div class="category-item">
        <div><img src="gambar/Group 4538.png" alt=""></div>
        <div>
          <h3>Your satisfaction is our guarantee</h3>
          <p>We deliver happiness, sweet memories, and comfort right to your doorstep.</p>
        </div>
      </div>
    </div>
  </section>
    
    <!-- Get Started Section -->
    <div class="get-started">
      <div class="get-started-content">
          <div class="get-started-text">
              <h2 class="poetsen-one-regular">Get Started Now !</h2>
              <h3 class="poppins-semibold">From start to finish, your satisfaction is our top priority in every service, Lets Order Now !</h3>
              <p class="poppins-semibold">Every step, from the moment you place your order to your first bite, is designed to provide you with the best and most memorable experience.</p>
              
              <div class="action-buttons">
                  <img class="satu" src="gambar/Group 394.png" alt="">
                 <img class="dua" src="gambar/Group 393.png" alt="">
              </div>
          </div>
          <div class="get-started-image">
              <img src="gambar/Group 390.png" alt="Happy Customer" class="main-image">
          </div>
      </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials">
      <div class="testimonials-header">
          <h2 class="poetsen-one-regular">What Our Happy User Says</h2>
          <p class="poppins-semibold">"What Those Who Have Enjoyed Our Delicious Dishes Say"</p>
      </div>
  
      <div class="testimonials-container">
          <div class="testimonials-image">
              <img src="gambar/Group 388.png" alt="Happy Customers">
          </div>
          
          <div class="testimonials-cards">
              <div class="testimonial-card">
                  <p class="review-text poppins-semibold">"It tastes so authentic! The order arrived quickly and the food was still warm. It was just like eating at my favorite restaurant."</p>
                  <div class="reviewer-info">
                      <img src="gambar/Ellipse 7.png" alt="Reviewer" class="reviewer-img">
                      <div class="reviewer-details">
                          <h4 class="poppins-semibold">Renver. T</h4>
                          <p class="poppins-semibold">CEO</p>
                      </div>
                  </div>
              </div>
  
              <div class="testimonial-card">
                  <p class="review-text poppins-semibold">"All the food is delicious! I don't have to bother cooking and can enjoy quality meals at home. The menu options are also varied and addictive."</p>
                  <div class="reviewer-info">
                      <img src="gambar/Ellipse 71.png" alt="Reviewer" class="reviewer-img">
                      <div class="reviewer-details">
                          <h4 class="poppins-semibold">Chealsea</h4>
                          <p class="poppins-semibold">Sales Manager</p>
                      </div>
                  </div>
              </div>
  
              <div class="testimonial-card">
                  <p class="review-text poppins-semibold">"Fast service, the food is superb! Every time I order, I am never disappointed. The quality is always consistent. Highly recommended!"</p>
                  <div class="reviewer-info">
                      <img src="gambar/Ellipse 7 (1).png" alt="Reviewer" class="reviewer-img">
                      <div class="reviewer-details">
                          <h4 class="poppins-semibold">Kim</h4>
                          <p class="poppins-semibold">Programmer</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>

        <!-- Contact & Ordering -->
    <div class="container">
    <div class="left">      
      <h1 class="poppins-semibold">Contact & Ordering</h1>
      <p class="poppins-semibold">Is there anything we can help you with?<br>Send us your sweet message, and we will reply as soon as possible.</p>
      <div class="image-box">
        <img src="gambar/Group 387.png" alt="Mockup">
      </div>
    </div>

    <div class="form-box">
      <form>
        <div class="row">
          <div class="field">
            <label class="poppins-semibold">Nama<span>*</span></label>
            <input type="text" placeholder="Masukkan Nama Anda">
          </div>
          <div class="field">
            <label class="poppins-semibold">Telepon<span>*</span></label>
            <input type="text" placeholder="Masukkan Nomormu">
          </div>
        </div>

        <div class="row">
          <div class="field">
            <label class="poppins-semibold">Alamat Email<span>*</span></label>
            <input type="email" placeholder="Masukkan Email">
          </div>
          <div class="field">
            <label class="poppins-semibold">Tanggal<span>*</span></label>
            <input type="date">
          </div>
        </div>

        <div class="field">
          <label class="poppins-semibold">Pilih Pesanan<span>*</span></label>
          <select class="poppins-semibold "     >
            <option>Pilih Pesanmu</option>
            <option>Roti Coklat</option>
            <option>Roti Keju</option>
            <option>Roti Susu</option>
          </select>
        </div>

        <div class="field poppins-semibold">
          <label>Catatan<span>*</span></label>
          <textarea placeholder="Masukkan Catatan Anda..."></textarea>
        </div>

        <button class="poppins-semibold" type="submit">Pesan Sekarang</button>
      </form>
    </div>
  </div>

                    <!-- Anggota -->
                     <div class="swiper">
                      <div>
                          <h1 class="anggota poppins-semibold">MEET OUR TEAM</h1>
                      </div>
                  <div class="swiper-wrapper">
                    <!-- Card 1 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/40c6db17-8e05-4165-8728-41eabcb2588f.jpg" alt="Foto 1">
                        <div class="name">Ganantha R.S</div>
                      </div>
                    </div>
              
                    <!-- Card 2 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/Rectangle 18232.png" alt="Foto 2">
                        <div class="name">Aisyah P. Putri</div>
                      </div>
                    </div>
              
                    <!-- Card 3 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/Rectangle 18233.png" alt="Foto 3">
                        <div class="name">Melia Ardhanariswari</div>
                      </div>
                    </div>
              
                    <!-- Card 4 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/Rectangle 18234.png" alt="Foto 4">
                        <div class="name">Alexa Novita R.</div>
                      </div>
                    </div>
              
                    <!-- Card 5 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/Rectangle 18235.png" alt="Foto 5">
                        <div class="name">Syifa Eka N.</div>
                      </div>
                    </div>
              
                    <!-- Card 6 -->
                    <div class="swiper-slide">
                      <div class="card" data-tilt>
                        <img src="gambar/Rectangle 18236.png" alt="Foto 6">
                        <div class="name">Syabira Z. Hanum</div>
                      </div>
                    </div>
                  </div>
              
                  <!-- Pagination -->
                  <div class="swiper-pagination"></div>
                </div>
              
                  <!-- Swiper JS -->
                <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
              
                <!-- Vanilla Tilt -->
                <script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
              
                <!-- Script -->
                <script>
                  // Inisialisasi Swiper
                  const swiper = new Swiper(".swiper", {
                    slidesPerView: 3,
                    spaceBetween: 30,
                    loop: true,
                    grabCursor: true,
                    centeredSlides: true,
                    pagination: {
                      el: ".swiper-pagination",
                      clickable: true,
                    },
                    breakpoints: {
                      0: { slidesPerView: 1 },
                      768: { slidesPerView: 2 },
                      1024: { slidesPerView: 3 },
                    },
                  });
              
                  // Inisialisasi Vanilla Tilt
                  VanillaTilt.init(document.querySelectorAll(".card"), {
                    max: 15,
                    speed: 400,
                    glare: true,
                    "max-glare": 0.3,
                  });
                </script>

     <footer class="footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="footer-col">
                    <div class="footer-desc poppins-semibold">
                        Memahami dan Menjaga Kebahagiaan Anda Melalui Kue, Inovasi Rasa, dan Layanan Pemesanan Terpercaya.
                    </div>
                    <div class="footer-social">
                        <a href="#" title="Dribbble"><i class="fab fa-dribbble"></i></a>
                        <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                        <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h4 class="poppins-semibold">Nomor Telepon</h4>
                    <div>+62 8127886901</div>
                </div>
                <div class="footer-col">
                    <h4 class="poppins-semibold">Tentang Kami</h4>
                    <ul>
                        <li><a href="#">Our Service</a></li>
                        <li><a href="#">Our Cake Shop</a></li>
                        <li><a href="#">Chef</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="poppins-semibold">Lokasi</h4>
                    <ul>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Location</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4 class="poppins-semibold">Sosial Media</h4>
                    <ul>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </div>
            <hr class="footer-divider">
            <div class="footer-bottom">
                <div class="footer-apps">
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/6/67/App_Store_%28iOS%29.svg" alt="App Store" /></a>
                    <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play" /></a>
                </div>
                <div class="footer-info">
                    <strong class="poppins-semibold">Jam Operasional</strong><br>
                    Kami Buka<br>
                    06 AM - 18 PM
                </div>
                <div class="footer-location">
                    <strong class="poppins-semibold">Lokasi</strong><br>
                    Pisa Grande B no 7, Paramount<br>
                    Francis, Tangerang, Banten 15810
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>
</html>