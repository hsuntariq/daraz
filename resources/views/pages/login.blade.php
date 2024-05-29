<x-layout>
    <x-flash/>
    <x-nav/>
    <div class="container p-5 col-lg-5">
            <div class="d-flex justify-content-between">
                <h4>Log In</h4>
                <p> New to the app ? <a href="/register">Sign Up</a> here</p>
            </div>
            <div class="card  mx-auto p-5 rounded-0">
                <form action="/login" method="POST">
                    @csrf
                    
                    <label for="">Email*</label>
                    <input name="email" type="email" placeholder="Please enter an email" class="form-control">
                    <label for="">Password*</label>
                    <input name="password" type="password" placeholder="Please enter a password" class="form-control">
                    <x-button>
                        Login
                    </x-button>
                </form>
            </div>
    </div>
</x-layout>