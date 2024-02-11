
@extends('layout.main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Leave Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Setting</a></li>
              <li class="breadcrumb-item"><a href="">Time & Attendance</a></li>
              <li class="breadcrumb-item active">Leave Setting</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="card card-data-table">
                        <div class="card-header row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="button" data-toggle="modal" data-target="#modal-lg" class="btn btn-default btn-sm mx-1"><i class="fa fa-plus"></i></button>
                                <a href="" class="btn btn-default btn-sm mx-1"><i class="fa fa-print"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6"></div>
                                    <div class="col-sm-12 col-md-6"></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending">No.</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Leave Code</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Leave Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Eligibility Formula</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Limit Date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Day Count</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Deducted Leave</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Entitlement Period</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data_cuti as $leave)
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">{{$loop->iteration}}</td>
                                                        <td><a href="">{{ $leave->leave_code }}</a></td>
                                                        <td>{{ $leave->leave_name }}</td>
                                                        <td>{{ $leave->eligibility_leave }}</td>
                                                        <td>{{ $leave->limit_date }}</td>
                                                        <td>{{ $leave->day_count }}</td>
                                                        <td>{{($leave->deducted_leave) ? "YES" : "NO";}}</td>
                                                        <td>{{ $leave->ent_periods_based_on }}</td>
                                                    </tr>
                                                @endforeach
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of {{count($data_cuti)}} entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="example2_previous">
                                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="example2_next">
                                                    <a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-lg" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form method="POST" action="{{route('admin.setting.time-and-attendance.add-leave-setting')}}">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Add Leave Setting</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">x</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="leaveCodeInput" class="col-sm-3 col-form-label">Leave Code</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="leaveCode" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="leaveNameInput" class="col-sm-3 col-form-label">Leave Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="leaveName" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="eligibilityLeave" class="col-sm-3 col-form-label">Eligibility Leave</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="eligibilityLeave" rows="3" placeholder="" spellcheck="false"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="limitDate" class="col-sm-3 col-form-label">Limit Date</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" name="limitDate" type="checkbox" value="1">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deductedLeave" class="col-sm-3 col-form-label">Deducted Leave</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" name="deductedLeave" type="checkbox" value="1">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="leaveElegibilityLeave" class="col-sm-3 col-form-label">Day Count</label>
                                <div class="col-sm-9">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="1" name="dayCount">
                                                <label class="form-check-label">Work Day</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="2" name="dayCount">
                                                <label class="form-check-label">Callendar Day</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="enableMinus" class="col-sm-3 col-form-label">Enable Minus</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" name="enableMinus" type="checkbox" value="1">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="entitlementPeriod" class="col-sm-3 col-form-label">Leave Entitlement Period nased on</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="entitlementPeriod">
                                        <option value="Join date">Join date</option>
                                        <option value="After one year">After one year</option>
                                        <option value="After six month">After six month</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="balanceCarryOver" class="col-sm-3 col-form-label">Balance Carry Over</label>
                                <div class="col-sm-9">
                                    <div class="form-check">
                                        <input class="form-check-input" name="balanceCarryOver" type="checkbox" value="1">
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
