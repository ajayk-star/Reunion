@extends('layouts.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image color picker</title>
</head>
<body>
    <section style="margin-left:30%">
<button class="open-picker">Open Color Picker</button>
<input type="file" id="img-select">
<!-- Picker color code will be shown here -->
<p class="res"></p>
<!-- Selected image will be shown here -->
<img style="max-width: 90vw;" src="" alt="" class="preview">
    </section>
<script src="main.js"></script>
<script>
    const imgInput = document.querySelector('#img-select')
const imgPreview = document.querySelector('.preview')
if(!window.EyeDropper){
alert("Your browser does not support this feature")
}
const eyeDropper = new EyeDropper()
const pickerBtn = document.querySelector('.open-picker')
const result = document.querySelector('.res')
imgInput.addEventListener('change', function() {
const file = this.files[0]
if(!file) return
const reader = new FileReader()
reader.addEventListener('load', function() {
imgPreview.src = this.result
})
reader.readAsDataURL(file)
})
pickerBtn.addEventListener('click', function() {
eyeDropper.open()
.then(res => {
result.innerHTML = `Picked Color: <b>${res.sRGBHex}</b>`
})
.catch(err => {
console.log("User canceled the selection.");
})
})
</script>
</body>
</html>

@endsection
@push('scripts')
<script>
    const imgInput = document.querySelector('#img-select')
const imgPreview = document.querySelector('.preview')
if(!window.EyeDropper){
alert("Your browser does not support this feature")
}
const eyeDropper = new EyeDropper()
const pickerBtn = document.querySelector('.open-picker')
const result = document.querySelector('.res')
imgInput.addEventListener('change', function() {
const file = this.files[0]
if(!file) return
const reader = new FileReader()
reader.addEventListener('load', function() {
imgPreview.src = this.result
})
reader.readAsDataURL(file)
})
pickerBtn.addEventListener('click', function() {
eyeDropper.open()
.then(res => {
result.innerHTML = `Picked Color: <b>${res.sRGBHex}</b>`
})
.catch(err => {
console.log("User canceled the selection.");
})
})
</script>
@endpush
{{-- @section('script')
        @include('backend::layouts._datatable')
        <script>
            $(document).ready(function() {
                $('#eventstream').DataTable();
            });
        </script>
    @endsection --}}
