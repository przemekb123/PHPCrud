
var recordToEdit;

function editRecord(ID) {
        recordToEdit = ID;
        window.location.href = "editPage.php?edit_id=" + recordToEdit;

}