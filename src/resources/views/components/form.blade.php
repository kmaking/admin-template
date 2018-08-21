<form action="{{ $route }}" method="post" id="{{ $id ?? "form-data" }}" enctype="multipart/form-data">
@csrf
@isset($method) @method($method) @endisset
{{ $slot }}
</form>