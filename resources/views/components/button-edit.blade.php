@props([
    'routePrefix',
    'id',
    'status',
])

@if ($status === 'Pending')
    <form action="{{ route($routePrefix . '.edit', $id) }}" method="GET" class="d-inline">
        <button type="submit" class="btn btn-sm btn-success">
            <i class="las la-edit"></i> Edit
        </button>
    </form>
@endif
