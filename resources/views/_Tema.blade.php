<!-- <div class="card-header inline-text">Tema</div>

<div class="card-body">
        <a href="#" class="text-decoration-none list-group-item list-group-item-action list-group-item-light">
        <img src="https://via.placeholder.com/150"
                  alt=""
                  class="rounded-circle m-2 absolute bottom-0"
                  style="float:left"
                  width="40"
            >
        </a></li>
        <a href="#" class="text-decoration-none list-group-item list-group-item-action list-group-item-light">Profile</a></li>
    </ul>
</div> 
 -->

<!-- Card -->
<a href="#" class="text-reset text-decoration-none">
<div class="card text-center text-grey shadow p-3" style="background:#a4a4a4">

  <!-- Card content -->
    <div class="card-body">

            <!-- Avatar -->
        <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mb-2" height="50px" width="50px" alt="avatar">

            <!-- Content -->
        <div>

            <!-- Title -->
        <h4 class="card-title font-weight-bold">{{ Auth::user()->name }}</h4>
            <!-- Subtitle -->
        <p class="card-text font-weight-bold">Lorem ipsum some bio or whatever</p>

        </div>

    </div>


</div>
</a>
<!-- Card -->