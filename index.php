<?php
$page_title = 'Home | Your NGO Name';
include 'includes/header.php';
?>

<!-- HERO SLIDER -->
<section id="hero">
  <div class="owl-carousel owl-theme">
    <?php
    $slides = [
      ['img'=>'assets/images/slide5.png','caption'=>'Water Sanitization'],
      ['img'=>'assets/images/slide3.png','caption'=>'Education for All'],
      ['img'=>'assets/images/slide4.png','caption'=>'Healthcare Initiatives'],
    ];
    foreach($slides as $s): ?>
      <div class="item position-relative">
        <img src="<?= $s['img'] ?>" class="img-fluid w-100" alt="">
        <div class="carousel-caption d-none d-md-block">
          <h1><?= htmlspecialchars($s['caption']) ?></h1>
          <a href="#story" class="btn btn-light mt-3">About Us</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- OUR STORY -->
<section id="story" class="py-5">
  <div class="container" data-aos="fade-up" data-aos-once="false">
    <h2 class="section-title">Our Story</h2>
    <div class="row">
      <div class="col-md-6">
  <div class="story-box p-4 rounded shadow-sm" data-aos="fade-up">
    <h3 class="mb-3 text-primary">Our Story</h3>
    <p class="story-text">
      <strong>Kultikari Mother Teresa Social Welfare Society</strong> is a registered socio-cultural non-governmental organization. Established in <strong>1998</strong> under the <em>Societies Registration Act XXI of 1860</em> (Reg. No: <strong>So 090528-1998-99</strong>), our head office is located in Kultikari, Shyampur CD Block, Howrah District, West Bengal.
    </p>
    <p class="story-text">
      Since its inception, the organization has been actively engaged in numerous social development activities through its own resources, community cooperation, and support from government agencies.
    </p>
  </div>
</div>

      <div class="col-md-6">
        <img src="assets/images/hmbanr.jpg" class="img-fluid rounded" alt="Our Story">
      </div>
    </div>
  </div>
</section>

<!-- OUR OBJECTIVE -->
<section id="objective" class="py-5 bg-light">
  <div class="container">
    <div 
      class="objective-box p-4 rounded shadow-sm mx-auto" 
      style="max-width: 800px;" 
      data-aos="fade-up" 
      data-aos-once="false"
    >
      <h3 class="mb-4 text-success">Our Objectives</h3>
      <ul class="objective-list list-unstyled mb-0">
        <li>• Driving social change, providing humanitarian aid, developing communities & advocating for rights and welfare.</li>
        <li>• Promoting and encouraging advancement of cultural, educational and physical condition of the people.</li>
        <li>• Imparting vocational training along with general and social education on human development & self-support.</li>
        <li>• Providing equal facilities to both men and women.</li>
        <li>• Organising awareness programmes aimed at upliftment of life.</li>
        <li>• Uplifting underprivileged people.</li>
        <li>• Enhancing the quality of life of as many people as possible.</li>
        <li>• Supporting backward people and their children.</li>
      </ul>
    </div>
  </div>
</section>

<!-- STATISTICS GRID -->
<section id="impact" class="py-5 bg-light">
  <div class="container" data-aos="fade-up" data-aos-once="false">
    <h2 class="section-title text-center mb-5">Our Impact</h2>
    <div class="row g-4">
      <?php
      $stats = [
        ['icon'=>'bi-droplet','title'=>'Blood Donation Camps','number'=>20000,'desc'=>'patients benefitted','color'=>'#E57373'],
        ['icon'=>'bi-people','title'=>'TB & Leprosy Camps','number'=>1500,'desc'=>'camps arranged','color'=>'#64B5F6'],
        ['icon'=>'bi-eye','title'=>'Eye Patients','number'=>7000,'desc'=>'benefitted','color'=>'#FFD54F'],
        ['icon'=>'bi-nutrition','title'=>'Maternal & Child Nutrition','number'=>14000,'desc'=>'benefitted','color'=>'#81C784'],
        ['icon'=>'bi-hospital','title'=>'Hepatitis B Vaccines','number'=>12000,'desc'=>'vaccinated','color'=>'#BA68C8'],
        ['icon'=>'bi-pencil','title'=>'Free Coaching','number'=>1000,'desc'=>'students benefited','color'=>'#4DB6AC'],
        ['icon'=>'bi-tree','title'=>'Tree Plantation','number'=>1500,'desc'=>'trees planted','color'=>'#AED581'],
        ['icon'=>'bi-shield','title'=>'Disaster Relief','number'=>50000,'desc'=>'people supported','color'=>'#4FC3F7'],
      ];
      foreach($stats as $s): ?>
        <div class="col-sm-6 col-lg-3" data-aos="fade-up">
          <div class="stat-card h-100 p-4 shadow-sm rounded">
            <div class="stat-icon mb-3" style="background-color: <?= $s['color'] ?>20;">
              <i class="bi <?= $s['icon'] ?> fs-2" style="color: <?= $s['color'] ?>;"></i>
            </div>
            <h5 class="stat-number" data-target="<?= $s['number'] ?>">0</h5>
            <p class="stat-title mb-1"><?= htmlspecialchars($s['title']) ?></p>
            <p class="text-muted small"><?= htmlspecialchars($s['desc']) ?></p>
            <div class="accent-bar" style="background: linear-gradient(45deg, <?= $s['color'] ?>, <?= $s['color'] ?>80);"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- OUR EXPERTISE -->
<section id="expertise" class="py-5 bg-white">
  <div class="container" data-aos="fade-up" data-aos-once="false">
    <h2 class="section-title text-center mb-5">Our Expertise</h2>
    <div class="row g-4">

      <!-- Health, Nutrition & Education -->
      <div class="col-md-6" data-aos="zoom-in">
        <div class="expertise-box p-4 rounded shadow-sm h-100">
          <i class="bi bi-heart-pulse fs-2 mb-3 text-primary"></i>
          <h5 class="mb-3">Health, Nutrition & Education</h5>
          <ul class="expertise-list">
            <li>Blood donation camps since 1998—20,000+ patients benefitted.</li>
            <li>Identified 2,000+ TB & Leprosy patients, referred to govt. care & distributed nutrition packs.</li>
            <li>Eye camps—7,000+ patients treated, 2,000+ cataract surgeries & 4,000+ glasses distributed.</li>
            <li>Benefitted 14,000+ mothers & children with food & medicines.</li>
            <li>Hepatitis B vaccination camps—12,000+ people immunized.</li>
            <li>Free coaching for 1,000+ students (SC-ST & child labour communities).</li>
          </ul>
        </div>
      </div>

      <!-- Water, Sanitation & Hygiene -->
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="expertise-box p-4 rounded shadow-sm h-100">
          <i class="bi bi-droplet fs-2 mb-3 text-primary"></i>
          <h5 class="mb-3">Water, Sanitation & Hygiene</h5>
          <ul class="expertise-list">
            <li>Constructed 5,000+ hand-pumps (11–111L) with govt. support.</li>
            <li>DM project implementation in Purulia & Howrah districts.</li>
            <li>FSTP (SBM-G) implementation agency in Howrah & Bardhaman (West Bengal’s pilot).</li>
            <li>SBM-G inspector participation across six districts.</li>
          </ul>
        </div>
      </div>

      <!-- Environment & Empowerment -->
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="expertise-box p-4 rounded shadow-sm h-100">
          <i class="bi bi-tree fs-2 mb-3 text-primary"></i>
          <h5 class="mb-3">Environment & Empowerment</h5>
          <ul class="expertise-list">
            <li>Planted 15,000 trees & restored 2,500 saplings.</li>
            <li>Collected 50 kg roadside plastics on World Environment Day 2025.</li>
            <li>Awareness programmes—25 lakh+ people reached for tree conservation.</li>
            <li>Women’s livelihood skill-development: tailoring, beautician courses, etc.</li>
          </ul>
        </div>
      </div>

      <!-- Disaster & Pandemic Relief -->
      <div class="col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="expertise-box p-4 rounded shadow-sm h-100">
          <i class="bi bi-shield-lock fs-2 mb-3 text-primary"></i>
          <h5 class="mb-3">Disaster & Pandemic Relief</h5>
          <ul class="expertise-list">
            <li>Supported 50,000+ people during Amphan, Aila, Yaas & floods with food, medicine & shelter.</li>
            <li>Distributed 50,000 masks, 15,000 PPE kits & 12,000 sanitisers during COVID-19.</li>
            <li>Arranged 500+ oxygen cylinders for COVID patients.</li>
            <li>Continued food & essentials supply to backward communities throughout the pandemic.</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FROM THE PRESIDENT -->
<section id="president" class="py-5 bg-light">
  <div class="container" data-aos="fade-up" data-aos-once="false">
    <h2 class="section-title text-center">From the President</h2>
    <div class="row justify-content-center mt-4">
      <div class="col-md-8">
        <div class="president-box p-4 rounded shadow-sm">
          <div class="text-center mb-4">
            <img src="assets/images/president.jpg" class="rounded-circle mb-3" width="150" alt="President">
            
            <p class="fst-italic mb-0">“Our mission is to uplift every life we touch…”</p>
          </div>
          <p class="president-text mt-4">
            Welcome to <strong>Kultikari Mother Teresa Social Welfare Society</strong>. So much cliché the term “NGO”—we’d rather feel proud to describe Kultikari as a true social welfare organization. For years we have labored to fight age-old superstitions and to foster education and training for attaining economic empowerment and self-respect.
          </p>
          <p class="president-text mt-4">
           I feel delighted to convey my heartfelt thanks to them who amidst all adversities and oddities continue to reach out their humane hands to the unprivileged, the destitute. They are oaring, no matter, whether they are in association with our Kultikari Mother Teresa Social Welfare Society.

           I would take the opportunity to salute them all. I do hope our friends are such. They may be near or far but they will grow in number.</p>
         
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
