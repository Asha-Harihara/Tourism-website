<?php

function component($placeName, $state, $placeimg)
{
   $element='
   <div class="col-lg-3 col-md-6">
   <div class="card" style="width: 18rem;">
   <img src="'.$placeimg.'" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title">'. $placeName . '</h5> <p class="card-text">'.$state. '</p>
      </div> 
      </div> </div>';
      echo $element;
}
?>