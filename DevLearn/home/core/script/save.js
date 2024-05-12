
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
