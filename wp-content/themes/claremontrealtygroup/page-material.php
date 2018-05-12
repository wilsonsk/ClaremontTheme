<?php
/*
  Template Name: Material Page
 */

// CUSTOM FIELDS


get_header();
?>
   <h1>Choose your element</h1>
   <div class="cards">
     <div class="mdc-card element-card earth">
       <div class="mdc-card__media">
         <div class="mdc-card__media-content">
           <h1 class="mdc-typography--headline4">Earth</h1>
           <h2 class="mdc-typography--headline6">A solid decision.</h2>
         </div>
       </div>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       </p>
     </div>
     <div class="mdc-card element-card wind">
       <div class="mdc-card__media">
         <h1 class="mdc-typography--headline4">Wind</h1>
         <h2 class="mdc-typography--headline6">Stormy weather ahead.</h2>
       </div>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       </p>
     </div>
     <div class="mdc-card element-card fire">
       <div class="mdc-card__media">
         <h1 class="mdc-typography--headline4">Fire</h1>
         <h2 class="mdc-typography--headline6">Hot-headed much?</h2>
       </div>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       </p>
     </div>
     <div class="mdc-card element-card water">
       <div class="mdc-card__media">
         <h1 class="mdc-typography--headline4">Water</h1>
         <h2 class="mdc-typography--headline6">Go with the flow.</h2>
       </div>
       <p>
         Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
       </p>
     </div>
   </div>
   <button class="mdc-fab material-icons" id="demo-absolute-fab" aria-label="Favorite">
     <span class="mdc-fab__icon">
       favorite
     </span>
   </button>

 <?php
 get_footer();
