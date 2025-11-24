<?php
$data['clinic'] = $clinic;
$data['page_title'] = "Admin Dashboard";
$data['active'] = "dashboard";

$this->load->view('include/navbar', $data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Dashboard • Sunshine Clinic</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Chart.js (for Follow-up Overview graph) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    
    <aside class="sidebar">
        <?php $this->load->view('include/sidebar', $data); ?>
    </aside>

    <div class="layout">

        <!-- ===================== Main Content ===================== -->
        <main class="main">

            <!-- ===================== Score Board ===================== -->
            <section class="scoreboard">

                <div class="card">
                    <h4>Total Patients</h4>
                    <h2>40</h2>
                    <p><span class="green-dot"></span> Completed: 20 <span class="red-dot"></span> Stop: 20</p>
                </div>

                <div class="card">
                    <h4>Today's Appointments</h4>
                    <h2>70</h2>
                    <p>⬇ 12% decrease from last month</p>
                </div>

                <div class="card">
                    <h4>Follow-ups Overview</h4>
                    <h2>20</h2>
                    <p>
                        <span class="green-dot"></span> Completed: 20
                        <span class="yellow-dot"></span> Ongoing: 20
                        <span class="red-dot"></span> Stop: 20
                    </p>
                </div>

            </section>

            <!-- ===================== Activity + Chart ===================== -->
            <section class="row">

                <!-- Team Activity -->
                <div class="activity card-lg">
                    <div class="section-head">
                        <h3>Team Activity Feed</h3>
                        <a href="#">View All</a>
                    </div>

                    <ul class="activity-list">
                        <li><img src="https://i.pravatar.cc/40?img=1"> <span>Dr. Emily Rogers</span> <b>5m ago</b></li>
                        <li><img src="https://i.pravatar.cc/40?img=2"> <span>Sarah Johnson</span> <b>1h ago</b></li>
                        <li><img src="https://i.pravatar.cc/40?img=3"> <span>Dr. Michael Lee</span> <b>2h ago</b></li>
                        <li><img src="https://i.pravatar.cc/40?img=4"> <span>Anna Smith</span> <b>1h ago</b></li>
                    </ul>
                </div>

                <!-- Chart -->
                <div class="chart card-lg">
                    <div class="section-head">
                        <h3>Follow-ups Overview</h3>
                    </div>

                    <canvas id="followChart"></canvas>
                </div>

            </section>

            <!-- ===================== Today's Appointments ===================== -->
            <section class="appointments card-lg">
                <div class="section-head">
                    <h3>Today's Appointments</h3>
                    <button class="view-all-btn">View All</button>
                </div>

                <table>
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Patient Name</th>
                            <th>Phone No.</th>
                            <th>Address</th>
                            <th>Type</th>
                            <th>Date & Time</th>
                            <th>Note</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Agastya Tiwari</td>
                            <td>7427096789</td>
                            <td>Gangapur Road, Nashik</td>
                            <td>Psychological Therapies</td>
                            <td>Jan 25 – 1:00 PM</td>
                            <td>Lorem Ipsum</td>
                            <td>⋮</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Agastya Tiwari</td>
                            <td>7427096789</td>
                            <td>Gangapur Road, Nashik</td>
                            <td>Psychological Therapies</td>
                            <td>Jan 25 – 1:00 PM</td>
                            <td>Lorem Ipsum</td>
                            <td>⋮</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Agastya Tiwari</td>
                            <td>7427096789</td>
                            <td>Gangapur Road, Nashik</td>
                            <td>Psychological Therapies</td>
                            <td>Jan 25 – 1:00 PM</td>
                            <td>Lorem Ipsum</td>
                            <td>⋮</td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </main>

    </div>

    <script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>

</body>
</html>
