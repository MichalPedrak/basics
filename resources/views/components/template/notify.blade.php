<a {{ $attributes->merge(['class' => 'dropdown-item d-flex'])}}  href="/notify-list">
    @if($status == 'email')
    <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
        <i class="fe fe-mail"></i>
    </div>
    @elseif($status == 'project-completed')
        <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
            <i class="fe fe-check-circle"></i>
        </div>
    @elseif($status == 'product-delivered')
        <div class="me-3 notifyimg  bg-success brround box-shadow-success">
            <i class="fe fe-shopping-cart"></i>
        </div>
    @elseif($status == 'friend-request')
        <div class="me-3 notifyimg bg-pink brround box-shadow-pink">
            <i class="fe fe-user-plus"></i>
        </div>
    @elseif($status == 'success')
        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
            <i class="fe fe-mail"></i>
        </div>
    @endif
    <div class="mt-1 wd-80p">
        <h5 class="notification-label mb-1">{{ $slot }}
        </h5>
        <span class="notification-subtext">{{ $time }}</span>
    </div>
</a>
