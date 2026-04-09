<div align="center">
  <a id="english"></a>
  <h1>Project-Euler-Website</h1>

  <p>Это мой сайт, на котором я применяю все чему научился, а также личный блог
    в котором я делаю небольшие заметки также об изученном.</p>

  [![EN](https://img.shields.io/badge/English-🇬🇧-blue)](#english)
  [![RU](https://img.shields.io/badge/Русский-🇷🇺-red)](#russian)
  ![Version 0.7.14](https://img.shields.io/badge/Version-0.7.14-orange.svg)
  ![Stars](https://img.shields.io/github/stars/AlexandrAnatoliev/project-euler-website.svg?style=flat)
  ![Forks](https://img.shields.io/github/forks/AlexandrAnatoliev/project-euler-website.svg?style=flat)
  [![PRs Welcome](https://img.shields.io/badge/PR:s-welcome-brightgreen.svg)](https://github.com/AlexandrAnatoliev/project-euler-website/pulls)
  [![First Contributors](https://img.shields.io/badge/first-contributors-brightgreen.svg)](https://github.com/AlexandrAnatoliev/project-euler-website/pulls)
  ![GitHub repo size](https://img.shields.io/github/repo-size/AlexandrAnatoliev/project-euler-website)

  <p>Данный проект имеет подмодуль с CSS-настройки для моего сайта
    <a href="https://github.com/AlexandrAnatoliev/project-euler-css">Project-Euler-CSS</a>.
    Выделение CSS-настроек в отдельный репозиторий, позволяет
    использовать их повторно в разных проектах и избавляет от необходимости
    вносить одни и те же изменения в каждый проект.
  </p>
</div>

  > **Author:** Alexandr Anatoliev

  > **GitHub:** [AlexandrAnatoliev](https://github.com/AlexandrAnatoliev)

---

<div align="center">
  <h2>Навигация</h2>
</div>

* [Подключение Git-подмодуля репозитория](#connecting-git-submodule-ru)
* [Клонирование репозитория с Git-подмодулем](#clone-repo-ru)
* [Обновление подмодуля до последней версии](#update-submodule-ru)

---

<div align="center">
  <h1>Выделение CSS настроек в отдельный репозиторий</h1>
</div>

<div align="center">
  <a id="connecting-git-submodule-ru"></a>
  <h2>Подключение Git-подмодуля репозитория</h2>
</div>
      
Чтобы подключить репозиторий **project-euler-css**, как Git-подмодуль 
репозитория **project-euler-website**, нужно зайти в проект:
```bash
  project-euler-website/
  └── index.html
```

И ввести команду:
```bash
git submodule add https://github.com/AlexandrAnatoliev/project-euler-css.git src/styles
```

Структура после добавления связанного репозитория:
```bash
  project-euler-website/
  ├── src/
  │   └── styles/          # Это связанный репозиторий
  │       └── main.css
  ├── index.html
  └── .gitmodules
```

В HTML-файл проекта (**index.html**) необходимо добавить ссылку 
на файл внутри подмодуля (**main.css**):
```html
<link rel="stylesheet" href="src/styles/main.css">;
```

---

<div align="center">
  <a id="clone-repo-ru"></a>
  <h2>Клонирование репозитория с Git-подмодулем</h2>
</div>

При клонировании репозитория необходимо использовать флаг **--recursive**:
```bash
git clone --recursive https://github.com/AlexandrAnatoliev/project-euler-website.git
```

Иначе, при обычном клонировании - папка src/styles будет пустой:
```bash
git clone https://github.com/AlexandrAnatoliev/project-euler-website.git
cd project-euler-website
ls src/styles/  # пусто или не существует
```

В этом случае нужно инициализировать и обновить подмодули:
```bash
git submodule init    
git submodule update 
```

---

<div align="center">
  <a id="update-submodule-ru"></a>
  <h2>Обновление подмодуля до последней версии</h2>
</div>

Перейти в папку подмодуля:
```bash
cd src/styles
```

Обновиться до последнего коммита в ветке main:
```bash
git checkout main
git pull
```

Вернуться в основной репозиторий:
```bash
cd ../..
```

Зафиксировать изменение (новую ссылку на коммит):
```bash
git add src/styles
git commit -m "Update css to latest version"
```
