<!doctype html>
<html lang="en">
@include('Admin.partials.head')
<body>
@include('Admin.partials.sidebar')
@yield('content')
{{--<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>--}}
{{--<script>--}}
{{--    document.addEventListener('DOMContentLoaded', function () {--}}
{{--        CKEDITOR.replace('blogContent');--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    document.getElementById('add').addEventListener('click', function () {--}}
{{--        var lang = document.querySelector('.select-lang');--}}
{{--        var icon = this.querySelector('i');--}}
{{--        var text = this.querySelector('p');--}}
{{--        var div = document.getElementById('add-new');--}}
{{--        lang.style.display = (lang.style.display === 'none' || lang.style.display === '') ? 'block' : 'none';--}}
{{--        icon.className = (icon.className === 'fa-solid fa-plus' || icon.className === '') ? 'fa-solid fa-xmark' : 'fa-solid fa-plus';--}}
{{--        text.textContent = (text.textContent === 'Add new' || text.textContent === '') ? 'Close' : 'Add new';--}}
{{--        this.style.background = (this.style.background === 'green' || this.style.background === '') ? 'red' : 'green';--}}
{{--    });--}}

{{--    function toggleLanguageInputs() {--}}
{{--    // document.getElementById('language').addEventListener('click', function () {--}}
{{--        var languageSelect = document.getElementById('language');--}}
{{--        var div = document.getElementById('add-new');--}}
{{--        if (languageSelect.value === 'en') {--}}
{{--            div.classList.remove('hidden');--}}
{{--        } else {--}}
{{--            div.classList.add('hidden');--}}
{{--        }--}}
{{--    }--}}
{{--    document.getElementById('language').addEventListener('change', toggleLanguageInputs);--}}


{{--    @foreach($categories as $category)--}}
{{--    document.getElementById('edit-icon-{{$category->translations->first()->id}}').addEventListener('click', function () {--}}
{{--        var edit = document.querySelector('#edit-part-{{$category->translations->first()->id}}');--}}
{{--        edit.style.display = (edit.style.display === 'none' || edit.style.display === '') ? 'table-row' : 'none';--}}
{{--    });--}}

{{--    document.getElementById('delete-icon-{{$category->translations->first()->id}}').addEventListener('click', function () {--}}
{{--        var confirmDelete = confirm("Are you sure you want to delete it?");--}}
{{--        if (confirmDelete) {--}}
{{--            alert("Has been successfully deleted!"); // Replace this line with your actual delete logic--}}
{{--        }--}}
{{--    });--}}
{{--    @endforeach--}}
{{--</script>--}}
</body>
</html>
