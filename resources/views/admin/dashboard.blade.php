@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="mb-1">Dashboard</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div>
                <button class="btn btn-primary">
                    <i class="bi bi-download me-2"></i>Download Report
                </button>
            </div>
        </div>

        <!-- Stats Cards -->
        <div class="row g-3 mb-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="stat-card card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="rounded-circle bg-primary bg-opacity-10 p-3">
                                <i class="bi bi-people text-primary fs-4"></i>
                            </div>
                            <span class="badge bg-success">+12.5%</span>
                        </div>
                        <h3 class="mb-1">1,234</h3>
                        <p class="text-muted mb-0">Total Users</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="stat-card card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="rounded-circle bg-success bg-opacity-10 p-3">
                                <i class="bi bi-file-text text-success fs-4"></i>
                            </div>
                            <span class="badge bg-success">+8.2%</span>
                        </div>
                        <h3 class="mb-1">856</h3>
                        <p class="text-muted mb-0">Total Posts</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="stat-card card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3">
                                <i class="bi bi-chat-dots text-warning fs-4"></i>
                            </div>
                            <span class="badge bg-success">+5.8%</span>
                        </div>
                        <h3 class="mb-1">2,450</h3>
                        <p class="text-muted mb-0">Comments</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="stat-card card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="rounded-circle bg-info bg-opacity-10 p-3">
                                <i class="bi bi-emoji-smile text-info fs-4"></i>
                            </div>
                            <span class="badge bg-success">+15.3%</span>
                        </div>
                        <h3 class="mb-1">85.2%</h3>
                        <p class="text-muted mb-0">Positive Sentiment</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-3">
            <!-- Recent Posts -->
            {{-- <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Recent Posts</h5>
                            <a href="{{ route('admin.posts') }}" class="btn btn-sm btn-link">View All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Improving Campus WiFi</td>
                                        <td>John Doe</td>
                                        <td>2024-03-15</td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-light"><i class="bi bi-eye"></i></button>
                                                <button class="btn btn-light"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-light"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Sentiment Analysis -->
            <div class="col-12 col-lg-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-header bg-transparent border-0">
                        <h5 class="mb-0">Sentiment Analysis</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-center" style="height: 300px;">
                            <div class="text-center">
                                <div class="display-4 mb-2">85.2%</div>
                                <p class="text-muted">Overall Positive Sentiment</p>
                                <div class="progress" style="height: 10px;">
                                    <div class="progress-bar bg-success" style="width: 85%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <div class="d-flex justify-content-between mb-2">
                                <span>Positive</span>
                                <span class="text-success">85.2%</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Neutral</span>
                                <span class="text-warning">10.5%</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Negative</span>
                                <span class="text-danger">4.3%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .progress {
        background-color: #e9ecef;
        border-radius: 0.5rem;
    }
    .stat-card {
        border-radius: 1rem;
    }
    .stat-card .card-body {
        padding: 1.5rem;
    }
</style>
@endpush