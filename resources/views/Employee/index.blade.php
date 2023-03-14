<x-app-layout title="Expense Manager">
    <x-header />
    <div class="row">
        <h1 class="text-center mt-5 mb-5">Expense Manager</h1>
        <div class="col-md-4 mx-auto">
            <form class="g-12" action="{{ route('auth-login') }}" method="POST">
                <div>
                    <x-flash-message />
                </div>
                @csrf
                <div class="col-md-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="card-number" name="username" value="demo">
                </div>
                <div class="col-md-12">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="password">
                </div>
                <div class="col-12 mt-2 d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
    <x-footer />
</x-app-layout>
