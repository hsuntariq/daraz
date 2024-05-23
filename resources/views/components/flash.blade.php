<style>
    .underlay{
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0,0.7);
        position: fixed;
        top: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s;
        z-index: 2222
    }

</style>
@if (session()->has('message'))
    <div class="underlay">
        <div class="overlay card p-5 border-0 text-center">
            <h5>
                {{session('message')}}
            </h5>
            <button class="btn ok w-100 my-2 text-white fw-bold" style="background-color: #F27021;">
            ok
        </button>
        </div>
    </div>
@endif


<script>
    let btn = document.querySelector('.ok')
    let underlay = document.querySelector('.underlay')
    btn.addEventListener('click',()=>{
        underlay.style.scale = '0'
        underlay.style.transform = 'translateY(-100%)'

    })
</script>