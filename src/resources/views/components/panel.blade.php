<div class="pd-20 bg-white border-radius-4 box-shadow mb-30 col-{{ $column ?? 12 }} offset-{{ $offset ?? 0 }}">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue">{{ $title }}</h4>
            <p class="mb-30 font-14">{{ $description ?? "" }}</p>
        </div>
        <div class="pull-right">
            {{ $right ?? "" }}
        </div>
    </div>
    {{ $slot }}
</div>