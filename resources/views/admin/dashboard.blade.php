<x-app-layout>
    <div class="db-info-wrap">
        <div class="row">
            <x-admin.dashboard.dashboard-count color='blue' icon='chart-bar' text='Today Views' count='4554'/>
            <x-admin.dashboard.dashboard-count color='green' icon='dollar-sign' text='Earnings' count='487'/>
            <x-admin.dashboard.dashboard-count color='purple' icon='users' text='Users' count='88'/>
            <x-admin.dashboard.dashboard-count color='red' icon='envelope-open' text='Enquiry' count='77'/>
        </div>
        <div class="row">
            <x-admin.dashboard.recent-booking/>
            
    
            <x-admin.dashboard.package-enquiry/>
        </div>
        <div class="row">
            <!-- Recent Activity -->
            <div class="col-lg-7 col-12">
                <div class="dashboard-box activities-box">
                    <h4>Recent Activities</h4>
                    <ul>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>5 mins ago</small>
                            <h5>Jane has sent a request for access</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>5 mins ago</small>
                            <h5>Williams has just joined Project X</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>5 mins ago</small>
                            <h5>Williams has just joined Project X</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>25 mins ago</small>
                            <h5>Kathy Brown left a review on Hotel</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>25 mins ago</small>
                            <h5>Kathy Brown left a review on Hotel</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                        <li>
                            <i class="far fa-calendar-alt"></i>
                            <small>5 mins ago</small>
                            <h5>Williams has just joined Project X</h5>
                            <a href="#" class="close-icon"><i class="fas fa-times"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="dashboard-box report-list">
                    <h4>Reports</h4>
                    <div class="report-list-content">
                        <div class="date">
                            <h5>Auguest 12</h5>
                        </div>
                        <div class="total-amt">
                            <strong>$1250000</strong>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2356</td>
                                    <td>dummy text </td>
                                    <td>6,200.00</td>
                                </tr>
                                <tr>
                                    <td>4589</td>
                                    <td>Lorem Ipsum</td>
                                    <td>6,500.00</td>
                                </tr>

                                <tr>
                                    <td>3269</td>
                                    <td>specimen book</td>
                                    <td>6,800.00</td>
                                </tr>
                                <tr>
                                    <td>5126</td>
                                    <td>Letraset sheets</td>
                                    <td>7,200.00</td>
                                </tr>
                                <tr>
                                    <td>7425</td>
                                    <td>PageMaker</td>
                                    <td>5,900.00</td>
                                </tr>
                                <tr>
                                    <td>7425</td>
                                    <td>PageMaker</td>
                                    <td>5,900.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- site traffic -->
            <div class="col-lg-4">
                <div class="dashboard-box chart-box">
                    <h4>Site Traffic</h4>
                    <div id="chartContainer" style="height: 250px; width: 100%;"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="dashboard-box chart-box">
                    <h4>Bar Chart</h4>
                    <div id="barchart" style="height: 250px; width: 100%;"></div>
                </div>
            </div>

            <div class="col-lg-4 chart-box">
                <div class="dashboard-box">
                    <h4>Search Engine</h4>
                    <div id="piechart" style="height: 250px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>