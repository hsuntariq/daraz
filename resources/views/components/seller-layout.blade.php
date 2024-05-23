<style>
    .list:hover{
        background-color: #F27021;
        cursor: pointer;
    }

    .active{
        background-color: #F27021;
    }
</style>
<x-layout>
    
    <div style="background: linear-gradient(135deg,#F27021,#E0901E);height:100vh;width:100vw" class="container-fluid d-flex justify-content-center align-items-center">
    <div style="height: 90vh;" class="col-lg-10 rounded-4 bg-white">
        <div class="row rounded-4" style="height: 100%;">
            <div  class="col-lg-2 py-4  bg-dark text-white" style="height: 100%;border-radius:20px 0 0 20px">
                <div class="d-flex align-items-center justify-content-center flex-column" style="height: 100%;">
                    <a href="/" class="text-white text-decoration-none">
                        <img width="100px" class="mx-auto d-block" src="https://icms-image.slatic.net/images/ims-web/e650d6ca-1841-4646-b0e9-4ddbf2beb731.png" alt="">
                    </a>
                    <ul style="height: 100%;" class="d-flex p-2  flex-column fs-5 gap-3 list-unstyled">
                    <a href="/seller-dashboard" class="text-white text-decoration-none">

                        <li class="p-2 px-5 list rounded-4 active"><i class="bi bi-moon-stars-fill"></i> Dashboard</li>
                    </a>
                    <a href="/seller-add-category" class="text-white text-decoration-none">
                        
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> Add Category</li>
                    </a>
                       
                    <a href="/seller-add-product" class="text-white text-decoration-none">
                        
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> Add Product</li>
                    </a>
                       
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> View Product</li>
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> View Category</li>
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> Analytics</li>
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> Settings</li>
                        <li style="width:max-content" class="p-2 px-5 list rounded-4"><i class="bi bi-moon-stars-fill"></i> Logout</li>
                        
                    </ul>
                    <div class="card p-5">
                        <img width="50px" class="mx-auto d-block" src="https://icms-image.slatic.net/images/ims-web/e650d6ca-1841-4646-b0e9-4ddbf2beb731.png" alt="">
                        <h5>Daraz Shopping</h5>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <button class="btn btn-warning">
                            Daraz
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                {{$slot}}
            </div>
        </div>
    </div>
    </div>
</x-layout>