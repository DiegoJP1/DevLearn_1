function openFilePicker() {
    var fileInput = document.createElement('input');
    fileInput.type = 'file';
    fileInput.accept = '.zip';
    fileInput.addEventListener('change', function(event) {
        var file = event.target.files[0];
        if (file) {
            loadProjectFromZip(file);
        }
    });
    fileInput.click();
}
function loadProjectFromZip(file) {
    var zip = new JSZip();
    zip.loadAsync(file)
        .then(function(contents) {
            contents.forEach(function(relativePath, zipEntry) {
                var fileName = zipEntry.name;
                var fileContent = zipEntry.async('text').then(function(data) {
                    return data;
                });
                var extension = fileName.split('.').pop().toLowerCase();
                var editorId = extension + '-editor';
                var editor = ace.edit(editorId);
                editor.setValue(fileContent);
                changeTab(extension);
            });
        })
        .catch(function(error) {
            console.error('Error al cargar el proyecto desde el archivo ZIP:', error);
            alert('Hubo un error al cargar el proyecto desde el archivo ZIP.');
        });
}