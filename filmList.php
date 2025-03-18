 <div class="container">

     <div class="row row-cols-1 row-cols-md-3 g-4">
         <?php
            foreach ($films as $film) {
            ?>
             <div class="col movie-card">
                 <div class="card h-100">

                     <div class="card-body d-flex flex-column">
                         <h5 class="card-title"><?php echo $film->getName(); ?></h5>
                         <p class="card-text"><?php echo $film->description; ?></p>
                         <ul>
                             <?php foreach ($film->genres as $genre) { ?>
                                 <li><?php echo $genre; ?></li>
                             <?php } ?>
                         </ul>
                         <p class="card-text mt-auto">Regista: <?php echo $film->getDirector(); ?></p>
                     </div>
                 </div>
             </div>
         <?php
            }
            ?>
     </div>
 </div>