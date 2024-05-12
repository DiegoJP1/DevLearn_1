<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1714661861/pliw7bitncliod7vbpb5.png" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.6.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.min.js"></script>
    <title>IDE | DevLearn</title>
</head>
<body>
    <header class="main">
        <div class="info"></div>
        <div class="toolbar">
            <button class="button action" id="run-btn">
                <span class="button-content">Ejecutar</span>
            </button>
            &nbsp;
            &nbsp;
            &nbsp;
            <button class="button action" id="save-btn" onclick="openModal1()">
                <span class="button-content">Guardar</span>
            </button>
            &nbsp;
            &nbsp;
            &nbsp;
            <a href="http://localhost/DevLearn/home/auth/"> <button class="button action" id="exit-btn">
                <span class="button-content">Salir</span>
            </button></a>
           
            &nbsp;
            &nbsp;
            &nbsp;
            <button class="button action" id="load-btn" onclick="openFilePicker()">
    <span class="button-content">Cargar Proyecto</span>
</button>
            &nbsp;
            &nbsp;
            &nbsp;
            <button class="add" id="add-btn" onclick="showModal()">
                <span class="material-symbols-outlined">add_circle</span>
            </button>
        </div>
    </header>

    <div class="main-layout">
        <div class="result" id="result-container"></div>

        <div class="editors" data-tabs="yes">
            <div class="tabs" id="tabs-container">
                <div data-tab="html" class="tab tab-active" onclick="changeTab('html')">HTML</div>
                <div data-tab="css" class="tab" onclick="changeTab('css')">CSS</div>
                <div data-tab="js" class="tab" onclick="changeTab('js')">JS</div>
              
            </div>
            <div class="pages" id="pages-container">
                <div data-page="html" class="page page-active">
                    <div id="html-editor" class="editor"></div>
                </div>
                <div data-page="css" class="page">
                    <div id="css-editor" class="editor"></div>
                </div>
                <div data-page="js" class="page">
                    <div id="js-editor" class="editor"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="file-input-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Crear Nuevo Archivo</h2>
        <input type="text" id="fileNameInput" placeholder="Nombre del archivo">
        <select id="fileExtensionInput">
            <option value="html">HTML</option>
            <option value="css">CSS</option>
            <option value="js">JS</option>
        </select>
        <button class="button action" onclick="createNewFile()">
        <span class="button-content">Crear</span>
    </button>
    </div>
</div>
<div class="overlay" id="overlay">
    <div class="modal1">
        <h2>Guardar Proyecto</h2>
        <input type="text" id="projectNameInput" placeholder="Nombre del Proyecto">
        <button class="button action" onclick="saveProject()">
        <span class="button-content">Guardar</span>
    </button>
        &nbsp;
        &nbsp;
        <button class="button action" onclick="closeModal1()">
        <span class="button-content">Cancelar</span>
    </button>
    </div>
</div>
    <footer class="status"></footer>

    <script>
        var tabCount = 3;

        function changeTab(tabName) {
            var pages = document.querySelectorAll('.pages .page');
            var tabs = document.querySelectorAll('.tabs .tab');
            pages.forEach(page => {
                page.classList.remove('page-active');
            });
            tabs.forEach(tab => {
                tab.classList.remove('tab-active');
            });
            var selectedPage = document.querySelector(`.pages [data-page="${tabName}"]`);
            var selectedTab = document.querySelector(`.tabs [data-tab="${tabName}"]`);

            selectedPage.classList.add('page-active');
            selectedTab.classList.add('tab-active');
        }

        function runCode() {
            var htmlCode = ace.edit('html-editor').getValue();
            var cssCode = ace.edit('css-editor').getValue();
            var jsCode = ace.edit('js-editor').getValue();

            var resultContainer = document.getElementById('result-container');
            resultContainer.innerHTML = ''; 
            var styleElement = document.createElement('style');
            styleElement.textContent = cssCode;

            var scriptElement = document.createElement('script');
            scriptElement.textContent = jsCode;

            var htmlElement = document.createElement('div');
            htmlElement.innerHTML = htmlCode;
            resultContainer.appendChild(styleElement);
            resultContainer.appendChild(htmlElement);
            resultContainer.appendChild(scriptElement);
        }

        document.getElementById('run-btn').addEventListener('click', runCode);

        var htmlEditor = ace.edit('html-editor');
        htmlEditor.getSession().setMode('ace/mode/html');

        var cssEditor = ace.edit('css-editor');
        cssEditor.getSession().setMode('ace/mode/css');

        var jsEditor = ace.edit('js-editor');
        jsEditor.getSession().setMode('ace/mode/javascript');
    </script>
    <script>
function showModal() {
    var modal = document.getElementById('file-input-modal');
    modal.style.display = 'block';
}
function closeModal() {
    var modal = document.getElementById('file-input-modal');
    modal.style.display = 'none';
}
function createNewFile() {
    var fileName = document.getElementById('fileNameInput').value;
    var fileExtension = document.getElementById('fileExtensionInput').value;
    if (fileName.trim() === '') {
        alert('Por favor ingresa un nombre válido para el archivo.');
        return;
    }
    var newFileName = fileName + '.' + fileExtension;
    var newEditorId = newFileName + '-editor';
    var tabsContainer = document.querySelector('.tabs');
    var newTab = document.createElement('div');
    newTab.setAttribute('data-tab', newFileName);
    newTab.className = 'tab';
    newTab.textContent = newFileName.toUpperCase();
    newTab.onclick = function() {
        changeTab(newFileName);
    };
    tabsContainer.appendChild(newTab);
    var pagesContainer = document.querySelector('.pages');
    var newPage = document.createElement('div');
    newPage.setAttribute('data-page', newFileName);
    newPage.className = 'page';
    var newEditor = document.createElement('div');
    newEditor.id = newEditorId;
    newEditor.className = 'editor';
    newPage.appendChild(newEditor);
    pagesContainer.appendChild(newPage);
    var editor = ace.edit(newEditorId);
    editor.getSession().setMode('ace/mode/' + fileExtension);
    changeTab(newFileName);
    closeModal();
}

document.getElementById('add-btn').addEventListener('click', showModal);
function changeTab(tabName) {
    var pages = document.querySelectorAll('.pages .page');
    var tabs = document.querySelectorAll('.tabs .tab');
    pages.forEach(page => {
        page.classList.remove('page-active');
    });
    tabs.forEach(tab => {
        tab.classList.remove('tab-active');
    });
    var selectedPage = document.querySelector(`.pages [data-page="${tabName}"]`);
    var selectedTab = document.querySelector(`.tabs [data-tab="${tabName}"]`);

    selectedPage.classList.add('page-active');
    selectedTab.classList.add('tab-active');

    var editorId = tabName + '-editor';
    var editor = ace.edit(editorId);
    editor.focus();
}

document.getElementById('add-btn').addEventListener('click', showModal);

    </script>
    <script>
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

    </script>
    <script>
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

    </script>
</body>
<style>
    .add {
        background-color: transparent;
        border: 0;
        cursor: pointer;
        color: white;
    }
    .modal {
    display: none;
    position: fixed;
    z-index: 999999999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

.modal1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    text-align: center;
}

.modal1 h2 {
    margin-bottom: 15px;
}

.modal1 input {
    width: 80%;
    padding: 10px;
    margin-bottom: 15px;
}
#fileNameInput{
      width: 80%;
    padding: 10px;
    margin-bottom: 15px;
}
a{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
</style>
</html>