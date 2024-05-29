<x-layout>
    <x-nav/>
    <div class="container p-5 col-lg-5">
            <div class="d-flex justify-content-between">
                <h4>Create your daraz account</h4>
                <p>Already a member ? <a href="/login">Login</a> here</p>
            </div>
            <div class="card  mx-auto p-5 rounded-0">
                <form action="/reg" method="POST">
                    @csrf
                    <label for="">Name</label>
                    <input   type="text" name="name" placeholder="Please enter a Name" class="form-control">
                    <label for="">Phone number*</label>
                    <input type="text" name="phone_number" placeholder="Please enter a phone number" class="form-control">
                    <label for="">Email*</label>
                    <input name="email" type="email" placeholder="Please enter an email" class="form-control">
                    <label for="">Password*</label>
                    <input name="password" type="password" placeholder="Please enter a password" class="form-control">
                    <x-button>
                        Sign Up
                    </x-button>
                </form>
            </div>
    </div>
</x-layout>