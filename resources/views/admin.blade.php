@extends('layouts.header')

@section('content')

<style>

/* Style for the table */
.student-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.student-table th, .student-table td {
    padding: 12px;
    text-align: left;
    border: 1px solid #ddd;
}

.student-table th {
    background-color: #f4f4f4;
    font-weight: bold;
    color: #333;
}

.student-table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.student-table tr:hover {
    background-color: #f1f1f1;
}

.student-table td {
    font-size: 14px;
    color: #555;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
}

.close {
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
}

.widget-container {
    display: flex;
    margin-bottom: 20px;
}

.widget-box {
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 5px;
    text-align: center;
    width: 200px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.widget-box:hover {
    background-color: #ddd;
}

.widget-box h3 {
    font-size: 16px;
    color: #333;
}

.widget-box p {
    font-size: 20px;
    color: #333;
    font-weight: bold;
}


</style>

<div class="container">
    <h1 class="mlg-name">Welcome to MLG College of Learning</h1>

    <!-- Widget Container -->
    <div class="widget-container">
        <!-- Student ID Count Widget -->
        <div class="widget-box" id="student-id-box" onclick="openModal('student')">
            <h3>Created Student IDs</h3>
            <p id="student-id-count">{{ $usercount }}</p>
        </div>

        <!-- Employee ID Count Widget -->
        <div class="widget-box" id="employee-id-box" onclick="openModal('employee')">
            <h3>Created Employee IDs</h3>
            <p id="employee-id-count">{{ $usercount }}</p>
        </div>
    </div>

    <!-- Modal for Student Profiles -->
    <div id="student-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('student')">
                <i class="fas fa-times"></i>
            </span>
            <h2>Student IDs</h2>

            <!-- Data Table for Students -->
            <table class="student-table">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Student ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->lastname }}</td>
                            <td>{{ $admin->firstname }}</td>
                            <td>{{ $admin->studentid }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div id="employee-modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('employee')">
                <i class="fas fa-times"></i>
            </span>
            <h2>Employee IDs</h2>
            <table class="student-table">
                <thead>
                    <tr>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Student ID</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->lastname }}</td>
                            <td>{{ $admin->firstname }}</td>
                            <td>{{ $admin->studentid }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ asset('js/navbar.js') }}"></script>

@endsection
