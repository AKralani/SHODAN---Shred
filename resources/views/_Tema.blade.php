<!-- Card -->
<a href="{{ route('profile', auth()->user()->name) }}" class="text-decoration-none text-dark">
    <div class="shadow text-center">
    
        <div class="userprofile"> 
        
            <!-- Card content -->
            <div class="userpx" style="background:#218838; padding-top:40px">
            <!-- Avatar -->
            <img src="{{ Auth::user()->avatar }}" class="rounded-circle" height="100px" width="100px" alt="avatar" style="margin-bottom:-50px; border: 5px solid #fff">
            </div>
            <!-- Content -->
    
        </div>
        
        <div class="card-body" style="padding-top:60px">
        
            <!-- Title -->
            <h4 class="card-title font-weight-bold">{{ Auth::user()->name }}</h4>
            <!-- Subtitle -->
            <p class="lead">{{Auth::user()->about}}</p>
        </div>


        <div class="card-body">
            <p class="lead">Following</p>
            <p class="lead">34</p>
            <p class="lead">Followers</p>
            <p class="lead">34</p>
        </div>
    </div>
</a>
<!-- Card -->