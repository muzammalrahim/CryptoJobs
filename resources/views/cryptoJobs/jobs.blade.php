<div class="page-section">
  <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Our jobs</h1>
      @foreach ($job as $jobs)
        <div class="row mb-4">
            <div class="col-2">
              <img class="w-75" src="jobsimages/{{ $jobs->image }}" alt="">
            </div>
            <div class="col-10">
              <h3 class="text-xl mb-0">{{ $jobs->name }}</h3>
              <p class="text-sm text-grey">{{ $jobs->description }}</p>
            </div>
        </div>
      @endforeach
    </div>
  </div>
</div>