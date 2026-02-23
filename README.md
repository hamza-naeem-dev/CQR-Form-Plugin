# CQR-Form-Plugin
Custom Quote Request (CQR) Plugin
Overview

Custom Quote Request (CQR) is a self-developed WordPress plugin built using object-oriented PHP principles. It allows users to submit quote requests through a secure frontend form while storing submissions in the WordPress admin panel using Custom Post Types.

This project was developed to strengthen backend WordPress development skills including plugin architecture, secure form handling, and WordPress Hooks API.

Features

Shortcode-based frontend form

Secure form handling using WordPress nonces (CSRF protection)

Input sanitization and validation

Custom Post Type registration for storing submissions

Email notification using wp_mail()

Proper redirect handling to prevent duplicate submissions

Activation and deactivation hooks implemented

Technologies Used

PHP (OOP principles)

WordPress Plugin API

WordPress Hooks (Actions & Filters)

Custom Post Types

HTML5

Bootstrap (if added)

JavaScript (form enhancements)

Git

Installation

Clone or download the repository.

Place the plugin folder inside wp-content/plugins/.

Activate the plugin from WordPress admin panel.

Use shortcode: [cqr_quote_form]

Learning Objectives

This plugin was built to practice:

WordPress plugin structure and architecture

Secure form handling

Nonce verification

Input sanitization

Custom Post Type integration

Debugging and redirect flow control
