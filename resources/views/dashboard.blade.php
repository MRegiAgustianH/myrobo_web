@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
<div class="bg-white rounded-lg shadow p-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Dashboard</h1>
    
    <!-- Card Statistik -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-blue-50 p-4 rounded-lg">
            <h3 class="font-medium text-blue-800">Total Sekolah</h3>
            <p class="text-2xl font-bold">{{ $totalSekolah }}</p>
        </div>
        <div class="bg-green-50 p-4 rounded-lg">
            <h3 class="font-medium text-green-800">Aktivitas Hari Ini</h3>
            <p class="text-2xl font-bold">{{ $todayActivities }}</p>
        </div>
        <div class="bg-purple-50 p-4 rounded-lg">
            <h3 class="font-medium text-purple-800">Total Admin</h3>
            <p class="text-2xl font-bold">{{ $totalAdmin }}</p>
        </div>
    </div>

    <!-- Log Aktivitas -->
    <div class="mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Log Aktivitas Terakhir</h2>
        
        <div class="bg-gray-50 rounded-lg p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <!-- Header table -->
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($activities as $activity)
                        <tr>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $activity->user->name }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">
                                <span class="px-2 py-1 text-xs rounded-full 
                                    @if($activity->action === 'created') bg-green-100 text-green-800
                                    @elseif($activity->action === 'updated') bg-blue-100 text-blue-800
                                    @else bg-red-100 text-red-800 @endif">
                                    {{ ucfirst($activity->action) }}
                                </span>
                            </td>
                            <td class="px-4 py-2">{{ $activity->description }}</td>
                            <td class="px-4 py-2 whitespace-nowrap">{{ $activity->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $activities->links() }}
        </div>
    </div>
</div>
@endsection