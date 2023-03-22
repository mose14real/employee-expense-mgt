<nav class="navbar navbar-expand-lg" style="background-color:#233348;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Expense Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-end" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white btn-sm" data-bs-toggle="modal" data-bs-target="#info"
                        style="cursor:pointer;">INFO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white btn-sm" href="{{ route('expense-manager/logout') }}">LOGOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="info" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Welcome to Expense Manager</h1>
            </div>
            <div class="modal-body">
                <p>This is a Laravel framework Web App.</p>
                <p>Try adding it to your home screen and using it offline.</p>
                <p>
                    This demo is built using
                    <a href="https://laravel.com/">Laravel</a>
                    and <a href="https://getbootstrap.com/">Bootstrap</a>.
                </p>
                <p>
                    You can find the source code and fork the project on
                    <a href="https://github.com/mose14real/employee-expense-mgt">GitHub</a>.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Got
                    it!</button>
            </div>
        </div>
    </div>
</div>
