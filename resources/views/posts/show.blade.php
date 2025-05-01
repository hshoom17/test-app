<x-layout>
 <div class="container">
     <div class="card mt-4">
         <div class="card-header">
             Post Info
         </div>
         <div class="card-body">
             <h5 class="card-title">Title: {{$post->title}}</h5>
             <p class="card-text">Description: {{$post->description}}</p>
         </div>
     </div>
 
     <div class="card mt-4">
         <div class="card-header">
             Post Creator Info
         </div>
         <div class="card-body">
             <h5 class="card-title">Name: Ahmed</h5>
             <p class="card-text">Email: ahmed@gmail.com</p>
             <p class="card-text">Created At: Thursday 25th of December 1975 02:15:16 PM</p>
         </div>
     </div>
 
 </div>
 
 <script src="https://unpkg.com/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

</x-layout>
 
