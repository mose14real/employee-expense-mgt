<x-app-layout title="Expense Manager">
    @include('layouts.navbar')
    <div>
        <x-flash-message />
    </div>
    <div>
        <div class="row" style="min-height: 100vh;">
            <div class="col-md-3 border border-1">
                <span>Filter Expenses</span>
                <a href="#"><span>Clear Filter</span></a>
                <hr>
            </div>
            <div class="col-md-6 border border-1" style="overflow-y:scroll">
                Table
            </div>
            <div class="col-md-3 border border-1">
                <span>To be reimbursed</span>
                <hr>
            </div>
        </div>
    </div>
</x-app-layout>
