<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/svg" href="{{ asset('img/logo/logo-color.svg') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style/admin/admin-dashboard-add-car.css') }}>
</head>

<body>
    <x-header />
    <x-header-admin />
    <form action="{{ route('admin-store-cars') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="sell">
            <div class="img">
                <input type="file" name="image" id="image" class="image" aria-label="Upload image">
                <label for="image">Upload an image</label>
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
            <div class="column">
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" id="name" name="name" aria-label="Insert name">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <label for="torque">Torque</label><br>
                    <input type="text" id="torque" name="torque" aria-label="Insert torque">
                    <x-input-error :messages="$errors->get('torque')" class="mt-2" />
                </div>
                <div>
                    <label for="top-speed">Top Speed</label><br>
                    <input type="text" id="top-speed" name="topSpeed" aria-label="Insert top speed">
                    <x-input-error :messages="$errors->get('topSpeed')" class="mt-2" />
                </div>
                <div>
                    <label for="motor">Motor</label><br>
                    <input type="text" id="motor" name="engine" aria-label="Insert engine">
                    <x-input-error :messages="$errors->get('engine')" class="mt-2" />
                </div>
                <div>
                    <label for="tires">Tires</label><br>
                    <input type="text" id="tires" name="tires" aria-label="Insert tires">
                    <x-input-error :messages="$errors->get('tires')" class="mt-2" />
                </div>
                <div>
                    <label for="gearbox">GearBox</label><br>
                    <input type="text" id="gearbox" name="gearbox" aria-label="Insert gearbox">
                    <x-input-error :messages="$errors->get('gearbox')" class="mt-2" />
                </div>
                <div>
                    <label for="kilometers">Kilometers</label><br>
                    <input type="text" id="kilometers" name="kilometers" aria-label="Insert kilometers">
                    <x-input-error :messages="$errors->get('kilometers')" class="mt-2" />
                </div>
                <div>
                    <label for="price">Price</label><br>
                    <input type="text" id="price" name="price" aria-label="Insert price">
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>
                <div>
                    <label for="brand">Brand</label><br>
                    <select id="brand" name="carbrand_id">
                        @foreach ($brands as $brand)
                            <option value={{ $brand->id }}>{{ $brand->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('carbrand_id')" class="mt-2" />
                </div>
                <div>
                    <label for="horsepower">Horse Power</label><br>
                    <input type="text" name="horsepower" id="horsepower" aria-label="Insert horsepower">
                    <x-input-error :messages="$errors->get('horsepower')" class="mt-2" />
                </div>
                <div>
                    <label for="consumption">Consumption</label><br>
                    <input type="text" id="consumption" name="consumption" aria-label="Insert consumption">
                    <x-input-error :messages="$errors->get('consumption')" class="mt-2" />
                </div>
                <div>
                    <label for="acceleration">Acceleration</label><br>
                    <input type="text" id="acceleration" name="acceleration" aria-label="Insert acceleration">
                    <x-input-error :messages="$errors->get('acceleration')" class="mt-2" />
                </div>
                <div>
                    <label for="wheels">Wheels</label><br>
                    <input type="text" id="wheels" name="wheels" aria-label="Insert wheels">
                    <x-input-error :messages="$errors->get('wheels')" class="mt-2" />
                </div>
                <div>
                    <label for="drivetrain">DriveTrain</label><br>
                    <input type="text" id="drivetrain" name="driveTrain" aria-label="Insert driveTrain">
                    <x-input-error :messages="$errors->get('driveTrain')" class="mt-2" />
                </div>
                <div>
                    <label for="exterior">Exterior</label><br>
                    <input type="text" id="exterior" name="exterior" aria-label="Insert exterior">
                    <x-input-error :messages="$errors->get('exterior')" class="mt-2" />
                </div>
                <div>
                    <label for="interior">Interior</label><br>
                    <input type="text" id="interior" name="interior" aria-label="Insert interior">
                    <x-input-error :messages="$errors->get('interior')" class="mt-2" />
                </div>
                <div>
                    <label for="year">Year</label><br>
                    <input type="text" id="year" name="year" aria-label="Insert year">
                    <x-input-error :messages="$errors->get('year')" class="mt-2" />
                </div>
                <div>
                    <label for="model">Model</label><br>
                    <select id="model" name="carmodel_id">
                        @foreach ($models as $model)
                            <option value={{ $model->id }}>{{ $model->name }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('carmodel_id')" class="mt-2" />
                </div>
            </div>
        </div>
        <button class="boton" aria-label="Add car">Add Car</button>
    </form>
    <x-footer />
</body>

</html>
