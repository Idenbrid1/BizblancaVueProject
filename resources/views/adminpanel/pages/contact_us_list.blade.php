@extends('adminpanel.layout.master')
<!-- ================================== EXTEND TITLE AND META TAGS ============================= -->
@section('title-meta')
<title>Bizblanca | Dashboard</title>
<meta name="description" content="this is description">
@endsection
<!-- ====================================== EXTRA CSS LINKS ==================================== -->
@section('other-css')
@endsection
<!-- ======================================== BODY CONTENT ====================================== -->
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>List of Contact Us {{ $status }} Messages</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Contact Us Messages</a>
            </li>
            <li class="active">
                <strong> {{ $status }} List</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>All Contacts are listed here..</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $counter = 1;
                                @endphp

                                @foreach ($contactus_messages as $message)
                                    <tr class="gradeX d-none" id="row{{ $message->id }}">
                                        <td>{{ $counter }}</td>
                                        <td class="center">{{ $message->name }}</td>
                                        <td class="center">{{ $message->email }}</td>
                                        <td class="center">{{ $message->phone }}</td>
                                        <td class="center">{{ $message->subject }}</td>
                                        <td class="center">{{ $message->message }}</td>
                                        <td class="center">{{ $message->created_at }}</td>

                                        <td id="action_no_{{ $message->id }}">

                                            <a onclick="updatestatus({{ $message->id }})">
                                                <small id="" class="label label-primary">Done Review</small>
                                            </a>
                                        </td>

                                    </tr>

                                    @php
                                        $counter = $counter + 1;
                                    @endphp
                                @endforeach


                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>phone</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- ======================================== FOOTER PAGE SCRIPT ======================================= -->
@section('other-script')
<!-- Page-Level Scripts -->
<script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [


                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"
            ]);

        }
    </script>

    <script>
        function changeVendorRecommendedStatus(id) {
            console.log(id);
            $.ajax({
                method: 'GET',
                url: `{{ url('admin/change_vendor_recomendation') }}/` + id,

                success: function(data) {

                    if (data.recommended == '1') {
                        $('#action_no_' + id).html(`<a onclick="changeVendorRecommendedStatus(` + id + `)">
                                    <small id="" class="label label-warning">Change to No</small>
                                </a>`);
                    } else {
                        $('#action_no_' + id).html(`<a onclick="changeVendorRecommendedStatus(` + id + `)">
                                    <small id="" class="label label-primary">Change to Yes</small>
                                </a>`);
                    }

                }
            });
        }
    </script>
    <script>
        function updatestatus(id) {
            swal({
                title: "You want to Update Status",
                //text: id,
                type: "info",
                showCancelButton: true,
                confirmButtonColor: "#1bb394",
                confirmButtonText: "Done Review",
                closeOnConfirm: false
            }, function() {
                $.ajax({
                    method: 'GET',
                    url: "{{ url('admin/contact-us/contact_us_update_status') }}/" + id,

                    success: function(data) {
                        // console.log(data);
                        if (data.Status == "Success") {
                            swal("Successfuly Done", "", "success");
                            $("#row"+id).remove();
                            //alert("#row" + id);
                            //$("#row"+id).addClass("d-none");
                        } else {
                            swal("Not  Done", "", "danger");
                        }
                    }
                });

            });
        }
    </script>
@endsection
