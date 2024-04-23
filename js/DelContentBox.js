

    var recordToDelete;

    function showConfirmationBox(ID) {
    recordToDelete = ID;
    var confirmationBox = document.getElementById("confirmation-box");
    confirmationBox.style.display = "block";
}

    function deleteRecord() {
    if (recordToDelete) {
    window.location.href = "delete.php?delid=" + recordToDelete;
}
}

    function cancelDelete() {
    var confirmationBox = document.getElementById("confirmation-box");
    confirmationBox.style.display = "none";
}
