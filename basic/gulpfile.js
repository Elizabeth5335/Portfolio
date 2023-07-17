// gulpfile.js
const { src, dest, series } = require('gulp');
const { cacheBust } = require('gulp-cache-bust');
// const {rev} = import('gulp-rev');
const rev = require('gulp-rev');

const revDel = require('gulp-rev-delete-original');

// Таск для додавання унікального параметра до URL файлів у HTML
function cacheBustTask() {
    return src('views/layouts/main.php') // Шлях до вашого HTML-файлу
        .pipe(cacheBust({
            type: 'timestamp' // Використовуйте 'timestamp', щоб додавати унікальний часовий штамп
        }))
        .pipe(dest('views/layouts')); // Виводимо оновлений HTML-файл у папку dist
}

function addHash() {
    return src('public_html/css/site.css') // Виберіть файли, для яких хочете змінити назви (CSS, JS, тощо)
        .pipe(rev()) // Додаємо хеш до назв файлів
        .pipe(revDel()) // Видаляємо оригінальні файли зі старими назвами
        .pipe(dest('public_html/css')); // Виводимо файли з хешами у вказану папку
}

function addHash2() {
    return src('public_html/js/main.js') // Виберіть файли, для яких хочете змінити назви (CSS, JS, тощо)
        .pipe(rev()) // Додаємо хеш до назв файлів
        .pipe(revDel()) // Видаляємо оригінальні файли зі старими назвами
        .pipe(dest('public_html/js')); // Виводимо файли з хешами у вказану папку
}

exports.default = series(addHash, addHash2, cacheBustTask);