<div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Rooms</h2>
                     <p>This is where Rooms added from admin dashboard will be displayed </p>
                  </div>
               </div>
            </div>

            
            <div class="row">
            @foreach ($room as $rooms) 

               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img style="height:300px; width:350px;" src="room/{{$rooms->image}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>{{$rooms->room_title}}</h3>
                        <p style= "padding: 10px;">{{$rooms->description}}</p>
                        <p style= "padding: 10px;">{{$rooms->room_type}}</p>
                        <a class = "btn btn-primary" href="{{url('room_details', $rooms->id)}}">Room Details</a>
                     </div>
                  </div>
               </div>

            @endforeach  
            </div>
         </div>
      </div>