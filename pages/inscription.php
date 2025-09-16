
    
    <div class="container my-5">

  <!-- Onglets -->
  <ul class="nav nav-tabs justify-content-center" id="eventTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="avenir-tab" data-bs-toggle="tab" data-bs-target="#avenir" type="button" role="tab">
        À venir
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="passes-tab" data-bs-toggle="tab" data-bs-target="#encours" type="button" role="tab">
        En cours
      </button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="passes-tab" data-bs-toggle="tab" data-bs-target="#passes" type="button" role="tab">
        Passés
      </button>
    </li>
  </ul>
  <div class="tab-content mt-4" id="eventTabsContent">
    <!-- Évènements à venir -->
    <div class="tab-pane fade show active" id="avenir" role="tabpanel">
      <div id="carouselAvenir" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- Exemple 1 -->
          <div class="carousel-item active">
          <div class="d-flex justify-content-center align-items-center">
            <img src="<?php echo BASE_URL; ?>assets/img/event/event1.jpg" class="d-block img-auto rounded" alt="Évènement 1">
            
          </div>
          </div>
          <!-- Exemple 2 -->
          <div class="carousel-item">
          <div class="d-flex justify-content-center align-items-center">
            <img src="<?php echo BASE_URL; ?>assets/img/event/event2.jpg" class="d-block img-auto rounded" alt="Évènement 2">
            
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselAvenir" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselAvenir" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
    <!-- Évènements passés -->
    <div class="tab-pane fade" id="passes" role="tabpanel">
      <div class="row g-4">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <img src="<?php echo BASE_URL; ?>assets/img/event/event3.jpg" class="card-img-top" alt="Évènement passé 1">
            <div class="card-body">
              <h5 class="card-title">Veillée de prière</h5>
              <p class="card-text">Passée le 10 août 2025</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card shadow-sm">
            <img src="<?php echo BASE_URL; ?>assets/img/event/event4.jpg" class="card-img-top" alt="Évènement passé 2">
            <div class="card-body">
              <h5 class="card-title">Conférence biblique</h5>
              <p class="card-text">Passée le 5 août 2025</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  