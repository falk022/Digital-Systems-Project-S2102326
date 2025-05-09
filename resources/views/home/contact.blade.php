<div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>


                  @if(session()->has('message'))

                     <div class="alert alert-success">
                        <button type= "button" class= "close" data-bs-dissmiss = 'alert' >X</button>
                        {{session()->get('message')}}
                     </div>
                     
                  @endif

               </div>
            </div>
            <div class="row">
               <div class="col-md-6">

                  <form id="request" class="main_form" action = "{{url('contact')}}" method = "Post">
                     @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="text" name="name" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email" required> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="number" name="phone" required>                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="text" name ="message" required></textarea>
                        </div>
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>

               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe> -->
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248.7026113598774!2d73.50648900051829!3d4.172812152336274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2smv!4v1743013780040!5m2!1sen!2smv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>