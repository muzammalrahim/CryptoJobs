<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Our jobs</h1>
      @foreach ($job as $jobs)
        <div class="row">
            <div class="header">
              <img src="jobsimages/{{ $jobs->image }}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{ $jobs->name }}</p>
              <span class="text-sm text-grey">{{ $jobs->description }}</span>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>