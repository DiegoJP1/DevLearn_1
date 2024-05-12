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