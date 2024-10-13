<div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    
    <div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
        <a href="{{route('dashboard')}}">
            <img alt="Logo" src="/assets/media/logos/logo.jpg" class="h-50px rounded logo" />
        </a>
    </div>
    
    <div class="aside-menu flex-column-fluid ps-3 ps-lg-5 pe-1 mb-9" id="kt_aside_menu">
        <div class="w-100 hover-scroll-y pe-2 me-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_user, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="0">
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item {{request()->routeIs('dashboard') ? 'here' : ''}}">
                    <a href="{{route('dashboard')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-home fs-2"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Administration</span>
                    </div>
                </div>

                <div class="menu-item {{request()->is('zones*') ? 'here' : ''}}">
                    <a href="{{route('zones')}}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-geolocation fs-2"></i>
                        </span>
                        <span class="menu-title">Zones</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-map fs-2"></i>
                        </span>
                        <span class="menu-title">Local Governments</span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('admins')}}" class="menu-link {{request()->routeIs('admins') ? 'active' : ''}}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-profile-user fs-2"></i>
                        </span>
                        <span class="menu-title">Administration</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Academics</span>
                    </div>
                </div>
                
                <div class="menu-item {{request()->is('academic-years*') ? 'here' : ''}}">
                    <a href="{{route('academic-years')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-calendar-2 fs-2"></i>
                        </span>
                        <span class="menu-title">Academic Years</span>
                    </a>
                </div>
                
                <div class="menu-item {{request()->is('departments*') ? 'here' : ''}}">
                    <a href="{{route('departments')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-category fs-2"></i>
                        </span>
                        <span class="menu-title">Departments</span>
                    </a>
                </div>
                
                <div class="menu-item {{request()->is('subjects*') ? 'here' : ''}}">
                    <a href="{{route('subjects')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-book-open fs-2"></i>
                        </span>
                        <span class="menu-title">Subjects</span>
                    </a>
                </div>

                <div class="menu-item {{request()->is('classes*') ? 'here' : ''}}">
                    <a href="{{route('classes')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-people fs-2"></i>
                        </span>
                        <span class="menu-title">Classes</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Students</span>
                    </div>
                </div>

                <div class="menu-item {{request()->is('schools*') ? 'here' : ''}}">
                    <a href="{{route('schools')}}" class="menu-link ">
                        <span class="menu-icon">
                            <i class="ki-outline ki-teacher fs-2"></i>
                        </span>
                        <span class="menu-title">Schools</span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('students')}}" class="menu-link {{request()->is('students') ? 'active' : ''}}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-user fs-2"></i>
                        </span>
                        <span class="menu-title">Students</span>
                    </a>
                </div>

                <div class="menu-item ">
                    <a href="{{route('students.create')}}" class="menu-link {{request()->routeIs('students.create') ? 'active' : ''}}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-plus-square fs-2"></i>
                        </span>
                        <span class="menu-title">New Student</span>
                    </a>
                </div>

                
                <div class="menu-item ">
                    <a href="{{route('students')}}" class="menu-link {{request()->is('students') ? 'active' : ''}}">
                        <span class="menu-icon">
                            <i class="ki-outline ki-user-square fs-2"></i>
                        </span>
                        <span class="menu-title">Parents/Guardians</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Examinations</span>
                    </div>
                </div>


                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-add-notepad fs-2"></i>
                        </span>
                        <span class="menu-title">Exam Type</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-notepad-edit fs-2"></i>
                        </span>
                        <span class="menu-title">Exams</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-notification-status fs-2"></i>
                        </span>
                        <span class="menu-title">Results</span>
                    </a>
                </div>

                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Misc</span>
                    </div>
                </div>

                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-notification-bing fs-2"></i>
                        </span>
                        <span class="menu-title">Notice Board</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-outline ki-gear  fs-2"></i>
                        </span>
                        <span class="menu-title">Settings</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="aside-footer flex-column-auto px-6 px-lg-9" id="kt_aside_footer">
        <div class="d-flex flex-stack ms-7">
            <a href="{{route('logout')}}" class="btn btn-sm btn-icon btn-active-color-primary btn-icon-gray-600 btn-text-gray-600">
                <i class="ki-duotone ki-entrance-left fs-1 me-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <span class="d-flex flex-shrink-0 fw-bold">Log Out</span>
            </a>

            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-icon-gray-600 btn-active-color-primary position-relative me-n1" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                    <i class="ki-duotone ki-setting-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
            </div>
        </div>
    </div>
</div>