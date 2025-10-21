@props(['value', 'subtitle'])

<div class="col-lg-4 col-md-6">
    <div class="card">
        <div class="card-body">
            <div class="text-center">
                <p class="h2 counter"><strong>{{ $value }}</strong></p>
                <p class="h6" style="visibility: visible;"><small>{{ $subtitle }}</small></p>
            </div>
        </div>
    </div>
</div>
