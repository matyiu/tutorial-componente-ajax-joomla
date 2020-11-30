let token = '';

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}

function init() {
    const loadTasksBtn = document.querySelector('#cargar-tareas');
    token = document.querySelector('#token').getAttribute('name');

    loadTasksBtn.addEventListener('click', loadTasks);
}

function loadTasks() {
    const taskList = document.querySelector('.task-list');

    postMethod('', {
        task: 'loadTasks'
    }).then((res) => {
        if (!res.success) {
            console.error(res.message);
            return;
        }

        const tasks = res.data;
        taskList.innerHTML = '';
        tasks.forEach(task => {
            const dom = createTask(task.name);

            taskList.appendChild(dom);
        });
    });
}

async function postMethod(url, data) {
    const res = await fetch(url, {
        method: 'post',
        body: createFormData(Object.assign({
            option: 'com_agregarajax',
            view: 'tareas',
            format: 'json'
        }, data))
    });

    const json = await res.json();

    return json;
}

function createFormData(obj) {
    const formData = new FormData();

    for (const prop in obj) {
        if (obj.hasOwnProperty(prop)) {
            formData.append(prop, obj[prop]);
        }
    }

    return formData;
}

function createTask(name) {
    const tmpl = `
        <li>
            <span>${name}</span>
        </li>
    `;

    const domParser = new DOMParser();
    const dom = domParser.parseFromString(tmpl, 'text/html');

    return dom.body.children[0];
}