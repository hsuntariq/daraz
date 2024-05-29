<div class="container-fluid px-5 pb-3 pt-1 text-white" style="background-color: #F85606;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="d-flex gap-3 list-unstyled">
                <li>Become a Seller</li>
                <li>Daraz Affiliate Program</li>
                <li>Help & Support</li>
                <li>Daraz Logistic Partner</li>
            </ul>
            <div class="d-flex align-items-center gap-1">
                <img width="30px" src="https://img.alicdn.com/imgextra/i1/O1CN01Ie2YnK1JmZ1mL3fY5_!!6000000001071-2-tps-60-60.png" alt="">
                <h6>Save more on App</h6>
            </div>
        </div>


    <div class="d-flex align-items-center gap-3">
        <img width="100px" src="https://icms-image.slatic.net/images/ims-web/e650d6ca-1841-4646-b0e9-4ddbf2beb731.png" alt="">
        <h5 class="p-0 m-0">Categories</h5>
        <div class="d-flex px-3 rounded-4 align-items-center bg-white" style="width:60%">
            <input style="box-shadow: 0 0 0 0 ;" placeholder="Search in Daraz" class="form-control bg-transparent border-0" " type="search" name="search" id="">
            <div style="color: #F85606;background:#FFE1D2;" class="bi bi-search px-3 rounded-2"></div>
        </div>
        @guest
            <button class="btn d-flex text-white">
            <div class="bi bi-person"></div>
            <a class="text-white text-decoration-none" href="/login">Login</a>
        </button>
        <h6>|</h6>
        <a href="/register" class="text-white text-decoration-none" style="width: max-content">Sign Up</a>
        @endguest

        @auth
            <button class="btn d-flex text-white" style="width:max-content">
            <div class="bi bi-person"></div>
            <h6>Salam {{auth()->user()->name}} </h6>
            </button>
        @endauth

        <div class="d-flex gap-1 ms-2">
            <div class="bi bi-globe"></div>
            <h6 class="p-0 m-0">EN</h6>
        </div>
        <div class="bi bi-cart fs-5"></div>
        @auth
            
        <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-danger ">
                <i class="bi bi-power"></i>
            </button>
        </form>
        @endauth
    </div>
        
    </div>
</div>