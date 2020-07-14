<!-- Card -->
<a href="{{ route('profile', auth()->user()->name) }}" class="text-decoration-none text-dark">
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