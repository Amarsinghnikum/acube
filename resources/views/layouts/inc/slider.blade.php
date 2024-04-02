<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @php 
      $sliders = App\Models\Slider::where('status', 1)->get();
    @endphp
    @foreach($sliders as $key => $val)
    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
      <img src="{{ asset('assets/uploads/slider/'.$val->image) }}" height="500px" class="d-block w-100" alt="{{$val->alt}}">
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
