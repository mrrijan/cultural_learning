<aside id="main-sidebar" class="main-sidebar main-sidebar-custom sidebar-light-olive elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/dashboard/mentor')}}" class="brand-link">
        <img src="{{url('/theme/dist/img/AdminLTELogo.png')}}" alt="AMS Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HeriTeck</span>
    </a>
    @php
        $user = \Illuminate\Support\Facades\Auth::user();
    @endphp
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{url('/theme/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">--{{__("Customers")}}--</li>
                @php
                    $mentor = \App\Models\Mentor::where("user_id", $user->id)->first();
                @endphp
                @if(!$mentor)
                    <li class="nav-item">
                        <a  href="{{url("/dashboard/mentor/add")}}" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                {{__("Add Info")}}
                            </p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a  href="{{url("/dashboard/mentor/edit/$mentor->id")}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {{__("Edit Info")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="{{url("/dashboard/ongoing-courses/$mentor->id")}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {{__("Course Requests")}}
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a  href="{{url("/dashboard/accepted-courses/$mentor->id")}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {{__("Accepted courses")}}
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Retrieve company_id from local storage
        var company_id = localStorage.getItem("company_id");

        var sidebar = document.getElementById("main-sidebar");
        if (company_id) {
            //for checking ad has schedule
            checkAdSchedule(company_id);

            sidebar.classList.remove("d-none");
            checkCompanyTitle(company_id);
        }

        function checkAdSchedule(company_id) {
            fetch(`/api/company/${company_id}/has-ad-schedule`)
                .then(response => response.json())
                .then(data => {
                    var finalizedAdLink = document.querySelector('[data-company-link="advertisements/finalized"]');

                    if (data.ad_has_schedule === 0) {
                        // Show the Finalized Advertisement link
                        finalizedAdLink.classList.remove('d-none');
                    } else {
                        // Hide the Finalized Advertisement link
                        finalizedAdLink.classList.add('d-none');
                    }
                })
                .catch(error => {
                    console.error("Error checking ad schedule:", error);
                });
        }

        // Function to set the active class
        function setActiveLink() {
            var activeLink = localStorage.getItem("active_link");
            if (activeLink) {
                // Select the link by href and apply the active class
                var link = document.querySelector(`a[href="${activeLink}"]`);
                if (link) {
                    link.classList.add("active");
                }
            }
        }

        // Function to handle link click event
        function handleLinkClick(event) {
            // Remove active class from all links
            var allLinks = document.querySelectorAll('.nav-link');
            allLinks.forEach(function (link) {
                link.classList.remove('active');
            });

            // Add active class to the clicked link
            this.classList.add("active");

            // Store the clicked link's href in local storage
            localStorage.setItem("active_link", this.href);
        }

        // Attach event listeners to all sidebar links
        var allLinks = document.querySelectorAll('.nav-link');
        allLinks.forEach(function (link) {
            // Update href for links with data-company-link attribute
            if (company_id && link.hasAttribute('data-company-link')) {
                var type = link.getAttribute('data-company-link');
                var newHref = `{{url("/")}}/${company_id}/${type}`;
                link.href = newHref;
            }
            // Attach click event listener to handle active class
            link.addEventListener('click', handleLinkClick);
        });

        // Set the active link on page load
        setActiveLink();

        function checkCompanyTitle(company_id) {
            var time_schedule = document.getElementById("time_schedule");
            fetch(`/company/${company_id}/check-ad-schedule`)
                .then(response => response.json())
                .then(data => {
                    if (data.ad_has_schedule === 1) {
                        time_schedule.classList.remove("d-none");
                    } else {
                        time_schedule.classList.add("d-none");
                    }
                })
                .catch(error => {
                    console.error("Error checking company title:", error);
                });
        }
    });
</script>
