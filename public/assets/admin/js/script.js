    document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('blogContent');
});

    document.getElementById('add').addEventListener('click', function() {
    var add_new = document.querySelector('.add-new');
    var icon = this.querySelector('i');
    var text = this.querySelector('p');
    add_new.style.display = (add_new.style.display === 'none' || add_new.style.display === '') ? 'block' : 'none';
    icon.className = (icon.className === 'fa-solid fa-plus' || icon.className === '') ? 'fa-solid fa-xmark' : 'fa-solid fa-plus';
    text.textContent = (text.textContent === 'Add new' || text.textContent === '') ? 'Close' : 'Add new';
    this.style.background = (this.style.background === 'green' || this.style.background === '') ? 'red' : 'green';
});


    document.getElementById('edit-icon-{{$category->translations->first()->id}}').addEventListener('click', function() {
    var edit = document.querySelector('#edit-part-{{$category->translations->first()->id}}');
    edit.style.display = (edit.style.display === 'none' || edit.style.display === '') ? 'table-row' : 'none';
});

    document.getElementById('delete-icon-{{$category->translations->first()->id}}').addEventListener('click', function() {
    var confirmDelete = confirm("Are you sure you want to delete it?");
    if (confirmDelete) {
    alert("Has been successfully deleted!"); // Replace this line with your actual delete logic
}
});
    @endforeach
