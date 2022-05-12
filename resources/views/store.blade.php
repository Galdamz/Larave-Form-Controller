<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.14.3/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create a Product</title>
</head>

<body>
    <div class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
                <h1 class="text-5xl font-bold">Create a Product</h1>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100">
                <div class="card-body">
                    <form action="/products" method="POST">
                        @csrf
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Name</span>
                            </label>
                            <input type="text" placeholder="Name" class="input input-bordered" name="name" id="name" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Description</span>
                            </label>
                            <input type="text" placeholder="Description" class="input input-bordered" name="description"
                                id="description" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Price</span>
                            </label>
                            <input type="number" placeholder="24.99" class="input input-bordered" name="price" min="0"
                                id="price" />
                        </div>
                        <div class="form-control">
                            <label class="label">
                                <span class="label-text">Stock</span>
                            </label>
                            <input type="number" placeholder="1" class="input input-bordered" name="stock" id="stock" />
                        </div>
                        <div class="form-control mt-6">
                            <input class="btn btn-primary" type="submit" value="Create"></inp>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
