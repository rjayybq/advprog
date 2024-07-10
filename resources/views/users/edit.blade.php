<h1>User Edit</h1>
<p>This is Edit page {{ $id }}</p>

<div class="row">
    <div class="col-6">
        <form action="{{ url ('users') }}"  method = "POST">
            @csrf
            @method('PUT')
            <div>
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname" name ="fullname">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            </div>
        </form>   
    </div>
</div>


        <form action="{{ url ('users') }}"  method = "POST">
            @csrf
            @method('Delete')
            <div class="form-group">
                <button class="btn btn-primary">submit</button>
            </div>
        </form>   