<div class="dashboard-navigation">
    <!-- Responsive Navigation Trigger -->
    <div id="dashboard-Navigation" class="slick-nav"></div>
    <div id="navigation" class="navigation-container">
        <ul>
            <li class="active-menu"><a href="dashboard.html"><i class="far fa-chart-bar"></i> Dashboard</a>
            </li>
            <li><a><i class="fas fa-user"></i>Users</a>
                <ul>
                    <li>
                        <a href="user.html">User</a>
                    </li>
                    <li>
                        <a href="user-edit.html">User edit</a>
                    </li>
                    <li>
                        <a href="new-user.html">New user</a>
                    </li>
                </ul>
            </li>
            <li><a href="{{route('packages.create')}}"><i class="fas fa-umbrella-beach"></i>Add Package</a></li>
            <li>
                <a><i class="fas fa-hotel"></i></i>packages</a>
                <ul>
                    <li><a href="db-package-active.html">Active</a></li>
                    <li><a href="db-package-pending.html">Pending</a></li>
                    <li><a href="db-package-expired.html">Expired</a></li>
                </ul>
            </li>
            <li><a href="db-booking.html"><i class="fas fa-ticket-alt"></i> Booking & Enquiry</a></li>
            <li><a href="db-wishlist.html"><i class="far fa-heart"></i>Wishlist</a></li>
            <li><a href="db-comment.html"><i class="fas fa-comments"></i>Comments</a></li>
            <li><a href="login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>
</div>