<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . ' - ' : '' }}Starset Media CMS</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Prevent Flash of Unstyled Content (FOUC) by applying dark mode immediately -->
    <script>
        // Apply dark mode immediately to prevent flashing
        (function() {
            const savedTheme = localStorage.getItem('admin-theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            const shouldUseDark = savedTheme === 'dark' || (savedTheme === null && prefersDark);
            
            if (shouldUseDark) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Dark Mode Variables with Improved Contrast */
        :root {
            --admin-bg-light: #f8fafc;
            --admin-bg-dark: #0f172a;
            --admin-card-light: #ffffff;
            --admin-card-dark: #1e293b;
            --admin-border-light: #e2e8f0;
            --admin-border-dark: #475569;
            --admin-text-primary-light: #1e293b;
            --admin-text-primary-dark: #f8fafc;
            --admin-text-secondary-light: #64748b;
            --admin-text-secondary-dark: #cbd5e1;
            --admin-text-muted-light: #94a3b8;
            --admin-text-muted-dark: #e2e8f0;
            --admin-accent: #FFB300;
            --admin-accent-hover: #E6A000;
            --admin-sidebar-light: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            --admin-sidebar-dark: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }

        /* Base dark mode styling */
        .dark {
            color-scheme: dark;
        }

        /* Force all backgrounds to be dark in dark mode with improved contrast */
        .dark * {
            border-color: var(--admin-border-dark) !important;
        }

        .dark .bg-white,
        .dark .card,
        .dark .admin-card,
        .dark .modal-content,
        .dark .dropdown-menu,
        .dark .alert,
        .dark .list-group-item {
            background-color: var(--admin-card-dark) !important;
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .bg-gray-50,
        .dark .bg-light,
        .dark .table-light {
            background-color: #374151 !important;
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .border-top,
        .dark .border-bottom,
        .dark .border,
        .dark .card-header,
        .dark .card-footer {
            border-color: var(--admin-border-dark) !important;
        }

        /* Sidebar Styling */
        .admin-sidebar {
            background: var(--admin-sidebar-light);
            box-shadow: 4px 0 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .dark .admin-sidebar {
            background: var(--admin-sidebar-dark);
            box-shadow: 4px 0 15px rgba(0,0,0,0.3);
        }

        /* Utility Classes */
        .starset-amber {
            background-color: var(--admin-accent);
        }
        .starset-amber-hover:hover {
            background-color: var(--admin-accent-hover);
        }

        /* Navigation Links with Better Contrast */
        .admin-nav-link {
            display: flex;
            align-items: center;
            padding: 10px 12px;
            color: #e2e8f0;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 3px;
            transition: all 0.2s ease;
            font-weight: 500;
            border: 1px solid transparent;
            font-size: 14px;
        }
        .admin-nav-link:hover {
            color: #ffffff;
            background-color: rgba(248, 250, 252, 0.1);
            border-color: rgba(245, 158, 11, 0.3);
            transform: translateX(4px);
        }
        .admin-nav-link.active {
            color: #ffffff;
            background: linear-gradient(135deg, var(--admin-accent) 0%, var(--admin-accent-hover) 100%);
            border-color: var(--admin-accent);
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        .admin-nav-link i {
            width: 18px;
            font-size: 14px;
            margin-right: 10px;
        }

        /* Section Titles with Better Contrast */
        .nav-section-title {
            color: #cbd5e1;
            font-size: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 6px;
            padding-left: 12px;
        }

        /* Brand */
        .sidebar-brand {
            background: linear-gradient(135deg, var(--admin-accent) 0%, var(--admin-accent-hover) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-section {
            margin-bottom: 20px;
        }

        /* Enhanced Dark Mode for Content Area */
        .admin-content {
            background-color: var(--admin-bg-light);
            color: var(--admin-text-primary-light);
            transition: all 0.3s ease;
        }

        .dark .admin-content {
            background-color: var(--admin-bg-dark) !important;
            color: var(--admin-text-primary-dark) !important;
        }

        /* Card Styling - Force dark in dark mode */
        .admin-card {
            background-color: var(--admin-card-light);
            border: 1px solid var(--admin-border-light);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .dark .admin-card,
        .dark .card {
            background-color: var(--admin-card-dark) !important;
            border-color: var(--admin-border-dark) !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3) !important;
        }

        /* Text Colors - Improved Contrast */
        .text-primary-admin {
            color: var(--admin-text-primary-light);
        }

        .dark .text-primary-admin,
        .dark .text-dark,
        .dark h1, .dark h2, .dark h3, .dark h4, .dark h5, .dark h6 {
            color: var(--admin-text-primary-dark) !important;
        }

        .text-secondary-admin {
            color: #4b5563 !important; /* Darker gray for better contrast in light mode */
        }

        .dark .text-secondary-admin {
            color: #d1d5db !important; /* Lighter gray for better contrast in dark mode */
        }

        /* Card headers with colored backgrounds - ensure text is always readable */
        .bg-warning .text-dark {
            color: #1f2937 !important; /* Very dark text on warning background */
        }

        .dark .bg-warning .text-dark {
            color: #1f2937 !important; /* Keep dark text on warning background in dark mode */
        }

        /* Ensure text-dark is always readable */
        .text-dark {
            color: #1f2937 !important; /* Very dark gray for light mode */
        }

        .dark .text-dark {
            color: var(--admin-text-primary-dark) !important; /* Light text for dark mode */
        }

        /* Improved text contrast for better readability */
        .dark .text-gray-900 {
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .text-gray-800 {
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .text-gray-700 {
            color: var(--admin-text-secondary-dark) !important;
        }

        .dark .text-gray-600 {
            color: var(--admin-text-secondary-dark) !important;
        }

        .dark .text-gray-500 {
            color: var(--admin-text-muted-dark) !important;
        }

        .dark .text-gray-400 {
            color: var(--admin-text-muted-dark) !important;
        }

        .dark .text-gray-300 {
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .text-gray-100 {
            color: var(--admin-text-primary-dark) !important;
        }

        /* Form text and muted text - Better contrast */
        .form-text {
            color: #6b7280 !important; /* Darker gray for light mode */
        }

        .dark .form-text {
            color: #d1d5db !important; /* Lighter gray for dark mode */
        }

        .text-muted {
            color: #6b7280 !important; /* Darker gray for light mode */
        }

        .dark .text-muted {
            color: #d1d5db !important; /* Lighter gray for dark mode */
        }

        /* Warning text - Better contrast */
        .text-warning {
            color: #d97706 !important; /* Darker orange for light mode */
        }

        .dark .text-warning {
            color: #fbbf24 !important; /* Brighter yellow for dark mode */
        }

        /* Success text - Better contrast */
        .text-success {
            color: #059669 !important; /* Darker green for light mode */
        }

        .dark .text-success {
            color: #10b981 !important; /* Brighter green for dark mode */
        }

        /* Info text - Better contrast */
        .text-info {
            color: #0369a1 !important; /* Darker blue for light mode */
        }

        .dark .text-info {
            color: #3b82f6 !important; /* Brighter blue for dark mode */
        }

        /* Primary text - Better contrast */
        .text-primary {
            color: #1d4ed8 !important; /* Darker blue for light mode */
        }

        .dark .text-primary {
            color: #60a5fa !important; /* Brighter blue for dark mode */
        }

        /* Form Labels - Better visibility */
        .form-label {
            color: #374151 !important;
            font-weight: 600;
        }

        .dark .form-label {
            color: #f3f4f6 !important;
        }

        /* Input Groups */
        .input-group-text {
            background-color: #f3f4f6;
            border-color: #d1d5db;
            color: #374151;
        }

        .dark .input-group-text {
            background-color: #4b5563 !important;
            border-color: #6b7280 !important;
            color: #f3f4f6 !important;
        }

        /* Form Controls - Better visibility in both modes */
        .form-control,
        .form-select,
        .form-control-dark {
            background-color: #ffffff;
            border-color: #d1d5db;
            color: #1f2937 !important;
        }

        .form-control::placeholder,
        .form-select::placeholder {
            color: #9ca3af !important;
        }

        .dark .form-control,
        .dark .form-select,
        .dark .form-control-dark,
        .dark textarea.form-control,
        .dark input[type="text"].form-control,
        .dark input[type="email"].form-control,
        .dark input[type="url"].form-control,
        .dark input[type="number"].form-control,
        .dark input[type="file"].form-control {
            background-color: #374151 !important;
            border-color: #4b5563 !important;
            color: #f9fafb !important;
        }

        .dark .form-control::placeholder,
        .dark .form-select::placeholder,
        .dark textarea.form-control::placeholder,
        .dark input[type="text"].form-control::placeholder,
        .dark input[type="email"].form-control::placeholder,
        .dark input[type="url"].form-control::placeholder,
        .dark input[type="number"].form-control::placeholder {
            color: #9ca3af !important;
        }

        .form-control:focus,
        .form-select:focus {
            background-color: #ffffff !important;
            border-color: var(--admin-accent) !important;
            color: #1f2937 !important;
            box-shadow: 0 0 0 0.2rem rgba(245, 158, 11, 0.25) !important;
        }

        .dark .form-control:focus,
        .dark .form-select:focus,
        .dark textarea.form-control:focus,
        .dark input[type="text"].form-control:focus,
        .dark input[type="email"].form-control:focus,
        .dark input[type="url"].form-control:focus,
        .dark input[type="number"].form-control:focus {
            background-color: #374151 !important;
            border-color: var(--admin-accent) !important;
            color: #f9fafb !important;
            box-shadow: 0 0 0 0.2rem rgba(245, 158, 11, 0.25) !important;
        }

        /* Buttons */
        .btn-primary-admin {
            background-color: var(--admin-accent);
            border-color: var(--admin-accent);
            color: white;
        }

        .btn-primary-admin:hover {
            background-color: var(--admin-accent-hover);
            border-color: var(--admin-accent-hover);
        }

        /* Tables - Completely dark in dark mode with better contrast */
        .table-dark-admin {
            --bs-table-bg: transparent;
            --bs-table-color: var(--admin-text-primary-light);
        }

        .dark .table,
        .dark .table-dark-admin {
            --bs-table-bg: var(--admin-card-dark) !important;
            --bs-table-color: var(--admin-text-primary-dark) !important;
            --bs-table-border-color: var(--admin-border-dark) !important;
            --bs-table-striped-bg: rgba(248, 250, 252, 0.05) !important;
            --bs-table-hover-bg: rgba(248, 250, 252, 0.08) !important;
            background-color: var(--admin-card-dark) !important;
        }

        .dark .table thead th {
            background-color: #374151 !important;
            color: var(--admin-text-primary-dark) !important;
            border-color: var(--admin-border-dark) !important;
        }

        .dark .table tbody td {
            background-color: var(--admin-card-dark) !important;
            color: var(--admin-text-primary-dark) !important;
            border-color: var(--admin-border-dark) !important;
        }

        /* Badges - Improved contrast in dark mode */
        .badge-light-admin {
            background-color: #e2e8f0;
            color: #475569;
        }

        .dark .badge-light,
        .dark .badge-light-admin {
            background-color: #475569 !important;
            color: #f8fafc !important;
        }

        /* Status badges with proper contrast */
        .dark .bg-yellow-100 {
            background-color: #451a03 !important;
        }
        
        .dark .text-yellow-800 {
            color: #fbbf24 !important;
        }

        .dark .bg-green-100 {
            background-color: #14532d !important;
        }
        
        .dark .text-green-800 {
            color: #86efac !important;
        }

        .dark .bg-gray-100 {
            background-color: #374151 !important;
        }
        
        .dark .text-gray-800 {
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .bg-yellow-900 {
            background-color: #451a03 !important;
        }
        
        .dark .text-yellow-200 {
            color: #fbbf24 !important;
        }

        .dark .bg-green-900 {
            background-color: #14532d !important;
        }
        
        .dark .text-green-200 {
            color: #86efac !important;
        }

        .dark .bg-gray-600 {
            background-color: #4b5563 !important;
        }
        
        .dark .text-gray-200 {
            color: var(--admin-text-primary-dark) !important;
        }

        /* Alerts - Dark backgrounds in dark mode with better contrast */
        .alert-success-admin {
            background-color: #dcfce7;
            border-color: #bbf7d0;
            color: #166534;
        }

        .dark .alert-success,
        .dark .alert-success-admin {
            background-color: #14532d !important;
            border-color: #166534 !important;
            color: #86efac !important;
        }

        .alert-danger-admin {
            background-color: #fef2f2;
            border-color: #fecaca;
            color: #dc2626;
        }

        .dark .alert-danger,
        .dark .alert-danger-admin {
            background-color: #7f1d1d !important;
            border-color: #dc2626 !important;
            color: #fca5a5 !important;
        }

        /* Custom Scrollbar for Dark Mode */
        .dark ::-webkit-scrollbar {
            width: 8px;
        }

        .dark ::-webkit-scrollbar-track {
            background: var(--admin-card-dark);
        }

        .dark ::-webkit-scrollbar-thumb {
            background: var(--admin-border-dark);
            border-radius: 4px;
        }

        .dark ::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        /* Prevent horizontal overflow */
        body {
            overflow-x: hidden;
        }

        /* Ensure proper flexbox behavior */
        .admin-sidebar {
            min-height: 0;
        }

        /* Fix content area scrolling */
        .admin-content {
            overflow-x: hidden;
        }

        /* Theme Toggle Button */
        #theme-toggle {
            transition: all 0.3s ease;
        }

        #theme-toggle:hover {
            transform: scale(1.05);
        }

                /* User Menu Dropdown Styling */
        #userMenuToggle {
            transition: all 0.2s ease;
        }
        
        #userMenuToggle:hover {
            background-color: rgba(0, 0, 0, 0.05) !important;
        }
        
        .dark #userMenuToggle:hover {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }
        
        #userMenuChevron {
            transition: transform 0.2s ease;
        }
        
        #userDropdownMenu {
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
        }
        
        .dark #userDropdownMenu {
            background-color: #1e293b !important;
            border-color: #475569 !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3), 0 4px 6px -2px rgba(0, 0, 0, 0.2) !important;
        }
        
        .hover-bg-light:hover {
            background-color: #f8fafc !important;
        }
        
        .dark .hover-bg-light:hover {
            background-color: #334155 !important;
        }
        
        .dark #userDropdownMenu .text-dark {
            color: #f8fafc !important;
        }
        
        .dark #userDropdownMenu .text-muted {
            color: #cbd5e1 !important;
        }
        
        /* Logout button hover effect */
        .text-danger.hover-bg-light:hover {
            background-color: #fef2f2 !important;
        }
        
        .dark .text-danger.hover-bg-light:hover {
            background-color: #450a0a !important;
            color: #fca5a5 !important;
        }

        /* Modal Support - Completely dark */
        .dark .modal-content {
            background-color: var(--admin-card-dark) !important;
            border-color: var(--admin-border-dark) !important;
        }

        .dark .modal-header {
            border-bottom-color: var(--admin-border-dark) !important;
            background-color: var(--admin-card-dark) !important;
        }

        .dark .modal-footer {
            border-top-color: var(--admin-border-dark) !important;
            background-color: var(--admin-card-dark) !important;
        }

        .dark .modal-body {
            background-color: var(--admin-card-dark) !important;
        }

        /* List Groups - Dark backgrounds */
        .dark .list-group-item {
            background-color: var(--admin-card-dark) !important;
            border-color: var(--admin-border-dark) !important;
            color: var(--admin-text-primary-dark) !important;
        }

        /* Pagination - Dark styling */
        .dark .page-link {
            background-color: var(--admin-card-dark) !important;
            border-color: var(--admin-border-dark) !important;
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .page-link:hover {
            background-color: rgba(248, 250, 252, 0.1) !important;
        }

        .dark .page-item.active .page-link {
            background-color: var(--admin-accent) !important;
            border-color: var(--admin-accent) !important;
        }

        /* Force card headers and footers to be dark */
        .dark .card-header,
        .dark .card-footer {
            background-color: #374151 !important;
            color: var(--admin-text-primary-dark) !important;
        }

        /* Make sure no Bootstrap utility classes override our dark mode */
        .dark .bg-light,
        .dark .bg-white {
            background-color: var(--admin-card-dark) !important;
        }

        .dark .text-dark {
            color: var(--admin-text-primary-dark) !important;
        }

        .dark .border-light {
            border-color: var(--admin-border-dark) !important;
        }

        /* Ensure all table elements are dark */
        .dark .table-light {
            background-color: #374151 !important;
        }

        .dark .table-light th,
        .dark .table-light td {
            background-color: #374151 !important;
            color: var(--admin-text-primary-dark) !important;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 font-sans antialiased h-full">
    <div class="flex h-screen w-full">
        <!-- Enhanced Sidebar -->
        <div class="admin-sidebar w-56 text-white flex-shrink-0 overflow-hidden">
            <!-- Brand Section -->
            <div class="p-4 border-b border-gray-700 dark:border-gray-600">
                <h1 class="sidebar-brand text-xl font-bold">
                    <i class="fas fa-star me-2"></i>Starset CMS
                </h1>
                <p class="text-gray-400 dark:text-gray-300 text-xs mt-1">Content Management System</p>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 px-3 py-4 min-h-0">
                <!-- Overview Section -->
                <div class="nav-section">
                    <div class="nav-section-title">
                        <i class="fas fa-tachometer-alt me-1"></i> Overview
                    </div>
                    <a href="{{ route('admin.dashboard') }}" class="admin-nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        Dashboard
                        @if(request()->routeIs('admin.dashboard'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                </div>
                
                <!-- Content Management Section -->
                <div class="nav-section">
                    <div class="nav-section-title">
                        <i class="fas fa-edit me-1"></i> Content Management
                    </div>
                    
                    <!-- Projects -->
                    <a href="{{ route('admin.projects.index') }}" class="admin-nav-link {{ request()->routeIs('admin.projects.*') ? 'active' : '' }}">
                        <i class="fas fa-film"></i>
                        Projects
                        @if(request()->routeIs('admin.projects.*'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                    
                    <!-- Team Members -->
                    <a href="{{ route('admin.crew.index') }}" class="admin-nav-link {{ request()->routeIs('admin.crew.*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i>
                        Team Members
                        @if(request()->routeIs('admin.crew.*'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                    
                    <!-- Services -->
                    <a href="{{ route('admin.services.index') }}" class="admin-nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}">
                        <i class="fas fa-concierge-bell"></i>
                        Services
                        @if(request()->routeIs('admin.services.*'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                    

                    
                    <!-- Home Page -->
                    <a href="{{ route('admin.homepage.index') }}" class="admin-nav-link {{ request()->routeIs('admin.homepage.*') ? 'active' : '' }}">
                        <i class="fas fa-home"></i>
                        Home Page
                        @if(request()->routeIs('admin.homepage.*'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                </div>
                
                <!-- Website & Tools Section -->
                <div class="nav-section">
                    <div class="nav-section-title">
                        <i class="fas fa-tools me-1"></i> Website & Tools
                    </div>
                    
                    <!-- API Documentation -->
                    <a href="{{ route('admin.api-docs') }}" class="admin-nav-link {{ request()->routeIs('admin.api-docs') ? 'active' : '' }}">
                        <i class="fas fa-code"></i>
                        API Documentation
                        @if(request()->routeIs('admin.api-docs'))
                            <span class="ms-auto">
                                <i class="fas fa-circle" style="font-size: 6px;"></i>
                            </span>
                        @endif
                    </a>
                    
                    <!-- View Website -->
                    <a href="{{ route('home') }}" target="_blank" class="admin-nav-link">
                        <i class="fas fa-external-link-alt"></i>
                        View Website
                        <span class="ms-auto">
                            <i class="fas fa-arrow-up-right-from-square" style="font-size: 10px; opacity: 0.7;"></i>
                        </span>
                    </a>
                </div>
                
                <!-- Quick Stats Section -->
                <div class="nav-section mt-auto pt-3 border-t border-gray-700 dark:border-gray-600">
                    <div class="nav-section-title">
                        <i class="fas fa-chart-bar me-1"></i> Quick Stats
                    </div>
                    <div class="px-3 space-y-1.5">
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-400 dark:text-gray-300">Projects</span>
                            <span class="text-white font-medium">{{ \App\Models\Project::count() }}</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-400 dark:text-gray-300">Services</span>
                            <span class="text-white font-medium">{{ \App\Models\Service::count() }}</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-400 dark:text-gray-300">Service Sections</span>
                            <span class="text-white font-medium">{{ \App\Models\ServiceSection::count() }}</span>
                        </div>
                        <div class="flex justify-between text-xs">
                            <span class="text-gray-400 dark:text-gray-300">Team</span>
                            <span class="text-white font-medium">{{ \App\Models\CrewMember::count() }}</span>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden min-w-0">
            <!-- Header -->
            <header class="bg-white dark:bg-gray-800 shadow-sm border-b border-gray-200 dark:border-gray-700 transition-all duration-300 flex-shrink-0">
                <div class="flex items-center justify-between px-6 py-4">
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-white">
                            @yield('page-title', 'Dashboard')
                        </h2>
                        @if(isset($breadcrumb))
                            <div class="text-sm text-gray-500 dark:text-gray-400 mt-1">{{ $breadcrumb }}</div>
                        @endif
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <!-- Theme Toggle -->
                        <button id="theme-toggle" class="p-2 rounded-lg bg-gray-100 hover:bg-gray-200 dark:bg-gray-700 dark:hover:bg-gray-600 transition-all duration-300">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5 text-gray-600 dark:text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.017 8.017 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="w-5 h-5 text-gray-600 dark:text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        
                        <!-- User Menu Dropdown -->
                        @if(auth()->check())
                        <div class="position-relative" id="userMenuContainer">
                            <button class="btn btn-link d-flex align-items-center text-decoration-none border-0 bg-transparent p-2" 
                                    type="button" 
                                    id="userMenuToggle" 
                                    onclick="toggleUserMenu()"
                                    style="color: inherit;">
                                <div class="rounded-circle d-flex align-items-center justify-content-center me-2" 
                                     style="width: 32px; height: 32px; background: linear-gradient(135deg, #f59e0b, #d97706);">
                                    <span class="text-white fw-bold" style="font-size: 14px;">
                                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                    </span>
                                </div>
                                <div class="text-start">
                                    <div style="font-size: 14px; font-weight: 500; line-height: 1.2;">{{ auth()->user()->name }}</div>
                                    <div style="font-size: 11px; opacity: 0.7; line-height: 1;">Administrator</div>
                                </div>
                                <i class="fas fa-chevron-down ms-2" style="font-size: 10px;" id="userMenuChevron"></i>
                            </button>
                            
                            <div class="position-absolute end-0 mt-1 bg-white shadow-lg border rounded" 
                                 id="userDropdownMenu" 
                                 style="min-width: 220px; z-index: 1050; display: none; top: 100%;">
                                <!-- User Profile Header -->
                                <div class="p-3 border-bottom">
                                    <div class="d-flex align-items-center">
                                        <div class="rounded-circle d-flex align-items-center justify-content-center me-3" 
                                             style="width: 40px; height: 40px; background: linear-gradient(135deg, #f59e0b, #d97706);">
                                            <span class="text-white fw-bold">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                                        </div>
                                        <div>
                                            <div class="fw-semibold" style="font-size: 14px;">{{ auth()->user()->name }}</div>
                                            <div class="text-muted" style="font-size: 12px;">{{ auth()->user()->email }}</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Navigation Items -->
                                <div class="py-1">
                                    <a class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark hover-bg-light" 
                                       href="{{ route('admin.dashboard') }}">
                                        <i class="fas fa-tachometer-alt me-3 text-muted" style="width: 16px;"></i>
                                        Dashboard
                                    </a>
                                    <a class="d-flex align-items-center px-3 py-2 text-decoration-none text-dark hover-bg-light" 
                                       href="{{ route('home') }}" target="_blank">
                                        <i class="fas fa-external-link-alt me-3 text-muted" style="width: 16px;"></i>
                                        View Website
                                    </a>
                                </div>
                                
                                <hr class="my-1">
                                
                                <!-- Logout -->
                                <div class="py-1">
                                    <form action="{{ route('admin.logout') }}" method="POST" class="m-0">
                                        @csrf
                                        <button type="submit" class="d-flex align-items-center px-3 py-2 text-danger w-100 border-0 bg-transparent text-start hover-bg-light">
                                            <i class="fas fa-sign-out-alt me-3" style="width: 16px;"></i>
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </header>
            
            <!-- Main Content Area -->
            <main class="flex-1 admin-content p-6 min-h-0">
                @if(session('success'))
                    <div class="alert alert-success-admin alert-dismissible fade show mb-6" role="alert">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if(session('error'))
                    <div class="alert alert-danger-admin alert-dismissible fade show mb-6" role="alert">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Theme toggle functionality - Enhanced to work with initial dark mode detection
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');
        
        function updateThemeIcons() {
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                themeToggleLightIcon.classList.add('hidden');
                themeToggleDarkIcon.classList.remove('hidden');
            } else {
                themeToggleLightIcon.classList.remove('hidden');
                themeToggleDarkIcon.classList.add('hidden');
            }
        }
        
        function setTheme(theme) {
            if (theme === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('admin-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('admin-theme', 'light');
            }
            updateThemeIcons();
        }
        
        // Initialize theme icons based on current state (already set by inline script)
        document.addEventListener('DOMContentLoaded', function() {
            updateThemeIcons();
            applyDarkModeToBootstrap();
            initializeDropdowns();
        });
        
        // User Menu Dropdown Functionality
        function toggleUserMenu() {
            const menu = document.getElementById('userDropdownMenu');
            const chevron = document.getElementById('userMenuChevron');
            
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
                chevron.style.transform = 'rotate(180deg)';
            } else {
                menu.style.display = 'none';
                chevron.style.transform = 'rotate(0deg)';
            }
        }
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            const container = document.getElementById('userMenuContainer');
            const menu = document.getElementById('userDropdownMenu');
            const chevron = document.getElementById('userMenuChevron');
            
            if (container && !container.contains(event.target)) {
                menu.style.display = 'none';
                chevron.style.transform = 'rotate(0deg)';
            }
        });
        
        // Initialize Bootstrap dropdowns (for other components)
        function initializeDropdowns() {
            // This is for other Bootstrap dropdowns, not our custom user menu
            var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle:not(#userMenuToggle)'));
            var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
        }
        
        // Theme toggle button click handler
        themeToggleBtn.addEventListener('click', function() {
            const isDark = document.documentElement.classList.contains('dark');
            setTheme(isDark ? 'light' : 'dark');
        });

        // Apply dark mode classes to dynamically created Bootstrap components
        function applyDarkModeToBootstrap() {
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                // Add dark classes to any bootstrap components that need them
                document.querySelectorAll('.table').forEach(table => {
                    table.classList.add('table-dark-admin');
                });
                
                document.querySelectorAll('.form-control, .form-select').forEach(input => {
                    input.classList.add('form-control-dark');
                });
                
                document.querySelectorAll('.btn-primary').forEach(btn => {
                    btn.classList.add('btn-primary-admin');
                });
            }
        }

        // Observe for new elements and apply dark mode
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'childList') {
                    applyDarkModeToBootstrap();
                }
            });
        });

        observer.observe(document.body, {
            childList: true,
            subtree: true
        });
    </script>
</body>
</html> 