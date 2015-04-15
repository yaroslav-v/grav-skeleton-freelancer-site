---
title: Contact
menu: contact
simple_form:
    token: "your token goes here"
    messages:
        success: "Your message has been sent."
        error: "Sorry, it seems that mail server is not responding. Please try again later or send me message to email "
    fields:
        name:
            position: 1
            type: "text"
            title: "Name"
            default: ""
            placeholder: "Name"
            class: ""
            required: true
            required_message: "Please enter your name"
        email:
            position: 2
            type: "email"
            title: "Email Address"
            default: ""
            placeholder: "Email Address"
            class: ""
            required: true
            required_message: "Please enter your email address"
        phone:
            position: 3
            type: "tel"
            title: "Phone Number"
            default: ""
            placeholder: "Phone Number"
            class: ""
            required: true
            required_message: "Please enter your phone number"
        message:
            position: 4
            type: "textarea"
            title: "Message"
            default: ""
            placeholder: "Message"
            class: ""
            required: true
            required_message: "Please enter a message"
        submit:
            position: 5
            type: "submit"
            title: "Send"
            default: ""
            class: ""
---

## CONTACT ME
