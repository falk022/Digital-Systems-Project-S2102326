<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')

   <style type = "text/css">
    .table_deg{

        border: 2px solid white;
        margin: auto;
        width: 80%;
        text-align: center;
        margin-top: 40px;
    }

    .th_deg{

        background-color: skyblue;
        padding: 15px;
    }

    tr{
        border: 3px solid white;
    }

    td{
        padding: 10px;
    }

</style>

  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">


            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Search..." class="form-control" required>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>



            <table class="table_deg">

                    <tr>
                        <th class="th_deg">Room_id</th>
                        <th class="th_deg">Customer Name</th>
                        <th class="th_deg">Email</th>
                        <th class="th_deg">Phone</th>
                        <th class="th_deg">Arrival Date</th>
                        <th class="th_deg">Leaving Date</th>
                        <th class="th_deg">Status</th>
                        <th class="th_deg">Room Title</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Delete</th>
                        <th class="th_deg">Status Update</th>
                    </tr>

                    <h2>Search Results for "{{ $query }}"</h2>

                    @foreach($results as $result)
                    <tr>
                        <td>{{$result->room_id}}</td>
                        <td>{{$result->name}}</td>
                        <td>{{$result->email}}</td>
                        <td>{{$result->phone}}</td>
                        <td>{{$result->start_date}}</td>
                        <td>{{$result->end_date}}</td>

                        <td>
                            @if($result->status == 'Approved')
                            <span style = "color: skyblue;">Approved</span>
                            @endif

                            @if($result->status == 'Rejected')
                            <span style = "color: red;">Rejected</span>
                            @endif

                            @if($result->status == 'waiting')
                            <span style = "color: yellow;">Waiting</span>
                            @endif

                        </td>

                        <!-- this comes from room table -->
                        <td>{{$result->room->room_title}}</td>
                        <td>{{$result->room->price}}</td>
                        <td>
                            <img width = "100" src="/room/{{$result->room->image}}" alt="">
                        </td>
                        <td><a onClick="return confirm('Are you sure you want to delete this?');" class ="btn btn-danger" href="{{url('delete_booking', $result->id)}}">Delete</a></td>

                        <td>
                            <span style="padding-bottom:10px;">
                                <a class = "btn btn-success" href="{{url('approve_book', $result->id)}}">Approve</a>
                            </span>
                            <a class = "btn btn-warning" href="{{url('reject_book', $result->id)}}">Rejected</a>
                        </td>
                    </tr>
                    @endforeach

            </table>





            </div>
        </div>
    </div>
      
        @include('admin.footer')
  </body>
</html>