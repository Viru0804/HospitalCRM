<?php
$sidebar_logo = ($clinic == 'manoday') ? 'manoday.png' : 'sunshine.png';
?>

<aside class="sidebar">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/sidebar.css'); ?>">
    
    <ul class="menu">

        <!-- Dashboard -->
        <li class="<?= ($active == 'dashboard') ? 'active' : '' ?>">
            <a href="<?= base_url('dashboard'); ?>">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/dashboard.svg'); ?>" alt="">
                </span>
                Dashboard
            </a>
        </li>

        <!-- Patients -->
        <li class="<?= ($active == 'patients') ? 'active' : '' ?>">
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/patients.svg'); ?>" alt="">
                </span>
                PATIENTS
            </a>
        </li>

        <!-- Appointments -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/appointments.svg'); ?>" alt="">
                </span>
                Appointments
            </a>
        </li>

        <!-- Prescriptions -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/prescriptions.svg'); ?>" alt="">
                </span>
                Prescriptions
            </a>
        </li>

        <!-- Team Management -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/team.svg'); ?>" alt="">
                </span>
                Team Management
            </a>
        </li>

        <!-- Follow-ups -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/followup.svg'); ?>" alt="">
                </span>
                Follow-ups
            </a>
        </li>

        <!-- Communication -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/chat.svg'); ?>" alt="">
                </span>
                Communication
            </a>
        </li>

        <!-- Reports -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/reports.svg'); ?>" alt="">
                </span>
                Reports
            </a>
        </li>

        <!-- Settings -->
        <li>
            <a href="#">
                <span class="icon">
                    <img src="<?= base_url('assets/icons/settings.svg'); ?>" alt="">
                </span>
                Settings
            </a>
        </li>

    </ul>

</aside>
