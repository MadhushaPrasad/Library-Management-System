

function getAllBooks() {
    $('#tbl-body').serialize();
    var bookForm = $('.form-sample').serialize();
    $.ajax({
        url:"api/services/BookService.php?action=getAll"
    }).done()
}