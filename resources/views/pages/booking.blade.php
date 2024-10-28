<div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <h2 class="text-center">Add Users</h2>
                <form action={{ Route('save') }} method="POST">

                @csrf
                    <div class="mb-3">
                        <label for="status" class="form-label">status: </label>
                        <input type="text" class="form-control" id="name" placeholder="John Doe" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">ShowId: </label>
                        <input type="email" class="form-control" id="email" placeholder="abc@gmail.com"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">userId: </label>
                        <input type="number" class="form-control" id="phone_number" placeholder="021-23598989" name="mobile">
                    </div>
                    
                   
                        <input type="submit" value="Save" class="btn btn-outline-success">
                    </div>
                </form>

                </div>
        </div>
</div>
  