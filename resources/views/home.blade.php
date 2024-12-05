@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard">
    <div class="container">
        <!-- Welcome Section -->
        <div class="card border-0 bg-primary text-white shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="mb-1">Welcome back, {{ Auth::user()->name }}! 👋</h4>
                        <p class="mb-0">What's on your mind? Share your thoughts with the community.</p>
                    </div>
                    <div class="col-md-4 text-md-end mt-3 mt-md-0">
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#createPostModal">
                            <i class="bi bi-plus-circle me-2"></i>Create New Post
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Sidebar -->
            <div class="col-lg-3">
                <!-- Quick Stats -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Activity Overview</h6>
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <p class="text-muted mb-0">Posts</p>
                                <h5 class="mb-0">12</h5>
                            </div>
                            <div>
                                <p class="text-muted mb-0">Comments</p>
                                <h5 class="mb-0">48</h5>
                            </div>
                            <div>
                                <p class="text-muted mb-0">Upvotes</p>
                                <h5 class="mb-0">156</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="col-lg-6">
                <!-- Create Post Card -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <div class="d-flex gap-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=4a90e2&color=fff" 
                                 class="rounded-circle" 
                                 alt="Profile" 
                                 width="40" 
                                 height="40">
                            <div class="flex-grow-1">
                                <div class="form-control text-muted py-2 px-3" 
                                     style="cursor: pointer;"
                                     data-bs-toggle="modal" 
                                     data-bs-target="#createPostModal">
                                    What's on your mind?
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Posts Feed -->
                <div class="posts-feed">
                    <!-- Example Post -->
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex gap-3 mb-3">
                                <img src="https://ui-avatars.com/api/?name=John+Doe&background=4a90e2&color=fff" 
                                     class="rounded-circle" 
                                     alt="Profile" 
                                     width="40" 
                                     height="40">
                                <div>
                                    <h6 class="mb-0">John Doe</h6>
                                    <small class="text-muted">2 hours ago</small>
                                </div>
                            </div>
                            <h5 class="card-title">Improving Campus WiFi Infrastructure</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="d-flex gap-2 pt-3 border-top">
                                <button class="btn btn-light flex-grow-1">
                                    <i class="bi bi-hand-thumbs-up me-2"></i>45 Upvotes
                                </button>
                                <button class="btn btn-light flex-grow-1">
                                    <i class="bi bi-chat-dots me-2"></i>12 Comments
                                </button>
                                <button class="btn btn-light">
                                    <i class="bi bi-share"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar -->
            <div class="col-lg-3">
                <!-- Trending Topics -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Trending Topics</h6>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                #CampusWiFi
                                <span class="badge bg-primary rounded-pill">245</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                #StudentLife
                                <span class="badge bg-primary rounded-pill">189</span>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                #CampusEvents
                                <span class="badge bg-primary rounded-pill">156</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Suggested Connections -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h6 class="card-title mb-3">People You May Know</h6>
                        <div class="suggested-users">
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Jane+Smith&background=4a90e2&color=fff" 
                                     class="rounded-circle me-2" 
                                     alt="Profile" 
                                     width="32" 
                                     height="32">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fs-sm">Jane Smith</h6>
                                    <small class="text-muted">Computer Science</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">Connect</button>
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <img src="https://ui-avatars.com/api/?name=Mike+Johnson&background=4a90e2&color=fff" 
                                     class="rounded-circle me-2" 
                                     alt="Profile" 
                                     width="32" 
                                     height="32">
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fs-sm">Mike Johnson</h6>
                                    <small class="text-muted">Engineering</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary">Connect</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h6 class="card-title mb-3">Upcoming Events</h6>
                        <div class="upcoming-events">
                            <div class="event mb-3 pb-3 border-bottom">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-calendar-event text-primary me-2"></i>
                                    <h6 class="mb-0 fs-sm">Campus Tech Fair</h6>
                                </div>
                                <p class="text-muted small mb-0">Tomorrow, 2:00 PM</p>
                            </div>
                            <div class="event">
                                <div class="d-flex align-items-center mb-2">
                                    <i class="bi bi-calendar-event text-primary me-2"></i>
                                    <h6 class="mb-0 fs-sm">Student Council Meeting</h6>
                                </div>
                                <p class="text-muted small mb-0">Friday, 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Post Modal -->
<div class="modal fade" id="createPostModal" tabindex="-1" aria-labelledby="createPostModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPostModalLabel">Create New Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">Title</label>
                        <input type="text" class="form-control" id="postTitle" placeholder="Enter post title">
                    </div>
                    <div class="mb-3">
                        <label for="postContent" class="form-label">Content</label>
                        <textarea class="form-control" id="postContent" rows="4" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="postTags" class="form-label">Tags</label>
                        <input type="text" class="form-control" id="postTags" placeholder="Add tags (separated by commas)">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Post</button>
            </div>
        </div>
    </div>
</div>
@endsection