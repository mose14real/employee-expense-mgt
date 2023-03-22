<x-app-layout title="Expense Manager">

    @include('layouts.navbar')

    <x-flash-message />

    {{-- 3-Rows-Layouts --}}
    <div class="row mx-auto d-flex" style="height:100vh !important">

        {{-- 1st-Column-Layout --}}
        <div class="col-md-3 border border-1">

            {{-- Filter --}}
            <div class="col-md-12 mx-auto">
                <span>Filter Expenses</span>
                <a href="#"><span class="float-end">Clear Filter</span></a>
                <hr>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">From</label>
                <input type="date" class="form-control" name="from">
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">To</label>
                <input type="date" class="form-control" name="to">
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Min</label>
                    <div class="col-md-6 input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" name="min">
                    </div>
                </div>
                <div class="col">
                    <label class="form-label">Max</label>
                    <div class="col-md-6 input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control" name="max">
                    </div>
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Merchant</label>
                <select class="form-select form-select-sm" aria-label="form-select-sm example">
                    <option selected=""></option>
                    <option value="Fast food">Fast food</option>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Taxi">Taxi</option>
                    <option value="Airline">Airline</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Electronics">Electronics</option>
                    <option value="Parking">Parking</option>
                    <option value="Ride sharing">Ride sharing</option>
                    <option value="Shuttle">Shuttle</option>
                    <option value="Rental car">Rental car</option>
                    <option value="Restaurant">Restaurant</option>
                    <option value="Office supplies">Office supplies</option>
                </select>
            </div>

            <div class="col-md-12 mb-3">
                <label class="form-label">Status</label><br>
                <div class="form-check form-check-inline">
                    <input type="checkbox" value="new" checked>
                    <label class="form-check-label">New</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" value="inprogress" checked>
                    <label class="form-check-label">In Progress</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="checkbox" value="reimbursed" checked>
                    <label class="form-check-label">Reimbursed</label>
                </div>
            </div>
        </div>

        {{-- 2nd-Column-Layout --}}
        <div class="col-md-6 border border-1 mx-auto"
            style="height:100vh; overflow-y:scroll !important;position:relative">

            {{-- Table --}}
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Merchant</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>
                        <th scope="col">Comment</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenses as $key => $expense)
                        <tr>
                            <td>{{ $expense->date }}</td>
                            <td>{{ $expense->merchant }}</td>
                            <td>${{ $expense->total }}</td>
                            <td>{{ $expense->status }}</td>
                            <td>{{ $expense->comment }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Modal-Button --}}
            <button data-bs-toggle="modal" data-bs-target="#add-expense"
                style="position:fixed;
                        background:#ff4238;
                        border-radius:100%;
                        border:none;
                        padding:9px 15px;
                        box-shadow:2px 1px 15px grey;
                        cursor:pointer;
                        bottom:6%;
                        right:30%">
                <i class="bi bi-plus-lg fs-3 text-white"></i>
            </button>

        </div>

        {{-- 3rd-Column-Layout --}}
        <div class="col-md-3 border border-1 mx-auto">
            {{-- Total-Reimbursed --}}
            <span>To be reimbursed</span>
            <hr>
            <h1 class="mx-auto text-center mt-5">${{ $reimburse }}</h1>
        </div>

    </div>



</x-app-layout>

{{-- Modal --}}
<div class="modal fade" id="add-expense" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row mx-auto">

                    {{-- form --}}
                    <div class="col-md-6">
                        <div class="modal-header">
                            <h1 class="modal-title fs-6" id="exampleModalLabel">Add Expense</h1>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Merchant</label>
                            <select class="form-select form-select-sm" aria-label="form-select-sm example">
                                <option selected=""></option>
                                <option value="Fast food">Fast food</option>
                                <option value="Breakfast">Breakfast</option>
                                <option value="Taxi">Taxi</option>
                                <option value="Airline">Airline</option>
                                <option value="Hotel">Hotel</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Parking">Parking</option>
                                <option value="Ride sharing">Ride sharing</option>
                                <option value="Shuttle">Shuttle</option>
                                <option value="Rental car">Rental car</option>
                                <option value="Restaurant">Restaurant</option>
                                <option value="Office supplies">Office supplies</option>
                            </select>
                        </div>

                        <label class="form-label">Total</label>
                        <div class="col-md-12 input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" name="total">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" class="form-control" name="date">
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Comment</label>
                            <textarea class="form-control mb-3" name="comment"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <button class="btn btn-primary" type="button">Save</button>
                            <button class="btn btn-primary" type="button">Cancel</button>
                        </div>
                    </div>

                    {{-- Receipt --}}
                    <div class="col-md-6 border border-1">
                        <div class="input-group mb-3 mt-3">
                            <input type="file" class="form-control">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
