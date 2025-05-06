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
            <h5 class="card-title">Name: {{$post->user ? $post->user->name : 'not found'}}</h5>
             <p class="card-text">Email: {{$post->user ? $post->user->email: 'not found'}}</p>
             <p class="card-text">Created At: {{$post->user ? $post->user->created_at: 'not found'}}</p>
         </div>
     </div>
 
 </div>
 
 <script src="https://unpkg.com/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

</x-layout>
 
