<?php $jasa = $jasa ?? []; ?>

<!-- NAVBAR -->
<nav class="navbar">

 <div class="logo">🐾 Happy Paws</div>

 <ul class="nav-links">
  <li><a href="#">Home</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#jasa">Services</a></li>
  <li><a href="#booking">Appointment</a></li>
 </ul>

</nav>

<!-- HERO -->
<section class="hero">

 <div class="overlay"></div>

 <div class="hero-content">

  <h1>Happy Paws</h1>

  <p>
   Perawatan terbaik untuk hewan kesayanganmu
  </p>

  <div class="hero-btn">

   <a href="#booking" class="btn-secondary">
    Book Appointment
   </a>

  </div>

 </div>

</section>

<!-- ABOUT -->
<section class="about" id="about">

 <h2>About Us</h2>

 <p>
  Happy Paws hadir untuk memberikan layanan grooming
  dan perawatan terbaik bagi hewan peliharaanmu
  dengan suasana nyaman dan penuh kasih sayang.
 </p>

</section>

<!-- SERVICES -->
<section class="jasa" id="jasa">

 <h2>Our Services</h2>

 <div class="grid">

  <?php foreach($jasa as $m): ?>

   <!-- CARD -->
   <div class="card" onclick="location.href='#booking'">

    <div class="card-img">
     <img src="assets/image/<?= $m['gambar']; ?>">
    </div>

    <div class="card-body">
     <h3><?= $m['nama']; ?></h3>
     <p><?= $m['harga']; ?></p>
    </div>

   </div>

  <?php endforeach; ?>

 </div>

</section>

<!-- BOOKING -->
<section class="booking" id="booking">

 <div class="booking-container">

  <div class="booking-text">

   <h2>Make an Appointment</h2>

   <p>
    Yuk jadwalkan treatment terbaik
    untuk hewan kesayanganmu ✨
   </p>

  </div>

  <form class="booking-form">

   <input type="text" placeholder="Owner Name" required>

   <input type="text" placeholder="Pet Name" required>

   <select required>
    <option value="">Choose Pet Type</option>
    <option>Cat</option>
    <option>Dog</option>
    <option>Rabbit</option>
    <option>Hamster</option>
   </select>

   <select required>
    <option value="">Choose Service</option>
    <option>Pet Grooming</option>
    <option>Pet Spa</option>
    <option>Health Checkup</option>
   </select>

   <input type="date" required>

   <button type="submit">
    Book Appointment
   </button>

  </form>

 </div>

</section>