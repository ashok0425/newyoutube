<div>
  <span  style="font-size:1.2rem;padding:.4rem;">
   <a href="#" class="text-white">Dashboard</a>



   @if (request()->segment(2))
   <a href="#" class="text-white">
    / {{Str::ucfirst(request()->segment(2))}}
   </a>
   </a>
   @endif
  


   @if (request()->segment(3))
   
   <a href="#" class="text-white">
    / {{Str::ucfirst(request()->segment(3))}}
   </a>
 
   @endif


  </span>
  


</div>