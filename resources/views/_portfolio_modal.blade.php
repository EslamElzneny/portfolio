<!-- Project details-->
<h2 class="text-uppercase">{{ $portfolio['project_name'] }}</h2>
<p class="item-intro text-muted">{{ $portfolio['sub_title'] }}</p>
<img class="img-fluid d-block mx-auto" src="{{ asset($portfolio['image']) }}" alt="..." />
<p>{{ $portfolio['description'] }}</p>
<ul class="list-inline">
    <li>
        <strong>Vist Site:</strong>
        <a href="{{ $portfolio['_link'] }}" target="_blank">Here</a>
    </li>
    <li>
        <strong>Technology:</strong>
        {{ $portfolio['technology'] }}
    </li>
</ul>
<button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
    <i class="fas fa-xmark me-1"></i>
    Close Project
</button>
