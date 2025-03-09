@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold text-center mb-6">Our Services</h1>

    <!-- Filter & Sorting Section -->
    <div class="bg-white p-4 rounded-lg shadow-md mb-6 flex flex-wrap justify-between">
        <!-- Search -->
        <input type="text" id="search" name="search" placeholder="Search services..."
            class="p-2 border rounded w-full md:w-1/3" 
            oninput="applyFilters()">

        <!-- Category Filter -->
        <select id="category" name="category" class="p-2 border rounded w-full md:w-1/4" onchange="applyFilters()">
            <option value="">All Categories</option>
            <option value="Plumbing">Plumbing</option>
            <option value="Electrical">Electrical</option>
            <option value="Carpentry">Carpentry</option>
            <option value="Cleaning">Cleaning</option>
            <option value="Painting">Painting</option>
            <option value="Gardening">Gardening</option>
        </select>

        <!-- Sorting -->
        <select id="sort_by" name="sort_by" class="p-2 border rounded w-full md:w-1/4" onchange="applyFilters()">
            <option value="name">Sort by Name</option>
            <option value="created_at">Sort by Date</option>
        </select>

        <select id="sort_order" name="sort_order" class="p-2 border rounded w-full md:w-1/4" onchange="applyFilters()">
            <option value="asc">Ascending</option>
            <option value="desc">Descending</option>
        </select>
    </div>

    <!-- Services List -->
    <div id="service-list" class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($services as $service)
               class="block bg-white p-6 rounded-lg shadow-lg text-center hover:shadow-xl transition">
                <img src="{{ $service->image_url }}" alt="{{ $service->name }}" 
                    class="mx-auto mb-4 w-24 h-24 rounded-full object-cover"/>
                <h3 class="text-xl font-bold mb-2">{{ $service->name }}</h3>
                <p>{{ $service->description }}</p>
        @endforeach
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        {{ $services->links() }}
    </div>
</div>

<script>
    function applyFilters() {
        let search = document.getElementById('search').value;
        let category = document.getElementById('category').value;
        let sortBy = document.getElementById('sort_by').value;
        let sortOrder = document.getElementById('sort_order').value;

        let queryParams = new URLSearchParams({
            search: search,
            category: category,
            sort_by: sortBy,
            sort_order: sortOrder
        });

        window.location.href = "{{ route('services.index') }}?" + queryParams.toString();
    }
</script>
@endsection
