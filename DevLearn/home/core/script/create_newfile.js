function openModal1() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'block';
}

function closeModal1() {
    var overlay = document.getElementById('overlay');
    overlay.style.display = 'none';
}
function saveProject() {
    var projectNameInput = document.getElementById('projectNameInput');
    var projectName = projectNameInput.value.trim();

    if (projectName === '') {
        alert('Por favor, ingrese un nombre válido para el proyecto.');
        return;
    }
    var zip = new JSZip();
    var editors = document.querySelectorAll('.editor');
    editors.forEach(editor => {
        var editorId = editor.id;
        var fileExtension = editorId.split('-')[1];
        var fileName = editorId.replace('-editor', '');
        var fileContent = ace.edit(editorId).getValue();
        zip.file(fileName + '.' + fileExtension, fileContent);
    });
    zip.generateAsync({ type: "blob" })
        .then(function(content) {
            saveAs(content, projectName + ".zip");
        });
    closeModal();
}
