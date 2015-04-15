---
title: Контакты
menu: contact
simple_form:
    token: "your token goes here"
    messages:
        success: "Ваше сообщение было отправлено."
        error: "Извините, похоже почтовый сервер не отвечает. Пожалуйста попробуйте позже или отправьте мне сообщение на email "
    fields:
        name:
            position: 1
            type: "text"
            title: "Имя"
            default: ""
            placeholder: "Имя"
            class: ""
            required: true
            required_message: "Пожалуйста, введите ваше имя"
        email:
            position: 2
            type: "email"
            title: "Адрес Email"
            default: ""
            placeholder: "Адрес Email"
            class: ""
            required: true
            required_message: "Пожалуйста, введите ваш адрес email"
        phone:
            position: 3
            type: "tel"
            title: "Номер Телефона"
            default: ""
            placeholder: "Номер Телефона"
            class: ""
            required: true
            required_message: "Пожалуйста, введите ваш номер телефона"
        message:
            position: 4
            type: "textarea"
            title: "Сообщение"
            default: ""
            placeholder: "Сообщение"
            class: ""
            required: true
            required_message: "Пожалуйста, введите ваше сообщение"
        submit:
            position: 5
            type: "submit"
            title: "Отправить"
            default: ""
            class: ""
---

## Для связи
